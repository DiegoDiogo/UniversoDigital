<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmpresasEditRequest;
use App\Http\Requests\StoreEmpresasRequest;
use App\Models\EmpresasModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmpresasController extends Controller
{
    protected $empresasModel;

    public function __construct(EmpresasModel $empresasModel)
    {
        $this->empresasModel = $empresasModel;
    }


    public function empresasCadastro($id = null)
    {

        $empresa = $this->empresasModel::find($id);
        $dados = [];
        //print_r($empresa);die;
        if ($empresa) {
            $dados['empresa'] = $empresa;
        }
        return view('Dashboard.Empresas.Formulario.index', $dados);
    }

    public function empresasBuscar()
    {
        return view('Dashboard.Empresas.Buscar.index');
    }


    public function empresasStore(StoreEmpresasRequest $request)
    {
        try {

            $data = $request->validated();

            $data = [
                'nome' => $request->nome,
            ];

            if ($request->hasFile('imagem')) {
                $image = $request->file('imagem');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $imagePath = $image->storeAs('imagens/empresas', $imageName);
                $data['imagem'] = $imageName;
            }


            $empresas = $this->empresasModel->create($data);

            return redirect()->route('empresasBuscar')->with('success', 'Empresa criada com sucesso!');
        } catch (\Exception $e) {

            return redirect()->route('empresasBuscar')->with('error', 'Ocorreu um erro ao atualizar o Turno. Tente novamente mais tarde.')
                ->with('exception', $e->getMessage());
        }
    }

    public function empresasUpdateStore(StoreEmpresasEditRequest $request, $id = null)
    {
        try {
            $data = $request->validated();

            $data = [
                'nome' => $request->nome,
            ];

            $empresas = $this->empresasModel->find($id);

            if ($request->hasFile('imagem')) {
                if ($empresas->imagem) {
                    Storage::delete('imagens/empresas/' . $empresas->imagem);
                }

                $image = $request->file('imagem');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->storeAs('imagens/empresas', $imageName);

                $data['imagem'] = $imageName;
            }

            if ($empresas) {
                $empresas->fill($data);
                $empresas->save();

                return redirect()->route('empresasBuscar')->with('success', 'Empresa atualizada com sucesso!');
            }
        } catch (\Exception $e) {

            return redirect()->route('empresasBuscar')->with('error', 'Ocorreu um erro ao atualizar o Turno. Tente novamente mais tarde.')
                ->with('exception', $e->getMessage());
        }
    }


    public function data()
    {
        $data = $this->empresasModel->getEmpresas();

        foreach ($data as $empresas) {
            $empresas->empresasEdit = route('empresasCadastroEdit', ['id' => $empresas->id]);
            $empresas->empresasExclud = route('empresasDelete', ['id' => $empresas->id]);
        }

        return response()->json([
            'data' => $data
        ]);
    }

    public function empresasDelete($id)
    {
        try {

            $empresas = $this->empresasModel::findOrFail($id);
            if ($empresas->imagem) {
                if ($empresas->imagem) {
                    Storage::delete('imagens/empresas/' . $empresas->imagem);
                }
            }
            $empresas->delete();

            return response()->json([
                'status' => 'success',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
            ], 500);
        }
    }
}
