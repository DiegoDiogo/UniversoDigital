<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreParceirosEditRequest;
use App\Http\Requests\StoreParceirosRequest;
use App\Models\parceirosModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class parceirosController extends Controller
{
    protected $parceirosModel;

    public function __construct(parceirosModel $parceirosModel)
    {
        $this->parceirosModel = $parceirosModel;
    }


    public function parceirosCadastro($id = null)
    {

        $parceiro = $this->parceirosModel::find($id);
        $dados = [];
        //print_r($parceiro);die;
        if ($parceiro) {
            $dados['parceiro'] = $parceiro;
        }
        return view('Dashboard.Parceiros.Formulario.index', $dados);
    }

    public function parceirosBuscar()
    {
        return view('Dashboard.Parceiros.Buscar.index');
    }


    public function parceirosStore(StoreParceirosRequest $request)
    {
        try {
            $data = $request->validated();

            $data = [
                'nome' => $request->nome,
            ];

            if ($request->hasFile('imagem')) {
                $image = $request->file('imagem');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->storeAs('imagens/parceiros', $imageName, 'public');
                $data['imagem'] = $imageName;
            }

            $this->parceirosModel->create($data);

            return redirect()->route('parceirosBuscar')->with('success', 'Parceiro cadastrado com sucesso!');
        } catch (\Exception $e) {
            return redirect()->route('parceirosBuscar')
                ->with('error', 'Ocorreu um erro ao cadastrar o parceiro. Tente novamente mais tarde.')
                ->with('exception', $e->getMessage());
        }
    }

    public function parceirosUpdateStore(StoreParceirosEditRequest $request, $id)
    {
        try {
            $data = $request->validated();

            $parceiro = $this->parceirosModel->find($id);

            if (!$parceiro) {
                return redirect()->route('parceirosBuscar')->with('error', 'Parceiro não encontrado.');
            }

            $data = [
                'nome' => $request->nome,
            ];

            if ($request->hasFile('imagem')) {
                if ($parceiro->imagem && Storage::disk('public')->exists('imagens/parceiros/' . $parceiro->imagem)) {
                    Storage::disk('public')->delete('imagens/parceiros/' . $parceiro->imagem);
                }

                $image = $request->file('imagem');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->storeAs('imagens/parceiros', $imageName, 'public');

                $data['imagem'] = $imageName;
            }

            $parceiro->update($data);

            return redirect()->route('parceirosBuscar')->with('success', 'Parceiro atualizado com sucesso!');
        } catch (\Exception $e) {
            return redirect()->route('parceirosBuscar')
                ->with('error', 'Ocorreu um erro ao atualizar o parceiro. Tente novamente mais tarde.')
                ->with('exception', $e->getMessage());
        }
    }


    public function data()
    {
        $data = $this->parceirosModel->getParceiros();

        foreach ($data as $parceiros) {
            $parceiros->parceirosEdit = route('parceirosCadastroEdit', ['id' => $parceiros->id]);
            $parceiros->parceirosExclud = route('parceirosDelete', ['id' => $parceiros->id]);
        }

        return response()->json([
            'data' => $data
        ]);
    }

    public function parceirosDelete($id)
    {
        try {

            $parceiros = $this->parceirosModel::findOrFail($id);
            if ($parceiros->imagem) {
                if ($parceiros->imagem) {
                    Storage::delete('imagens/parceiros/' . $parceiros->imagem);
                }
            }
            $parceiros->delete();

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
