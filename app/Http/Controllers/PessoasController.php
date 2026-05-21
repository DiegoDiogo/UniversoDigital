<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePessoaEditRequest;
use App\Http\Requests\StorePessoaRequest;
use App\Http\Requests\StorePessoaSenhaEditRequest;
use App\Models\configuracaoModel;
use App\Models\PerfisModel;
use App\Models\PessoasModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class PessoasController extends Controller
{
    protected $pessoaModel;

    public function __construct(PessoasModel $pessoaModel)
    {
        $this->pessoaModel = $pessoaModel;
    }


    public function pessoasCadastro($id = null)
    {

        $pessoa = $this->pessoaModel::find($id);
        $dados = [];
        //print_r($pessoa);die;
        if ($pessoa) {
            $dados['pessoa'] = $pessoa;
        }

        return view('Dashboard.Pessoas.Formulario.index', $dados);
    }

    public function pessoaSenhaEdit($id = null)
    {

        $pessoa = $this->pessoaModel::find($id);
        //print_r($pessoa);die;
        if ($pessoa) {
            $dados['pessoa'] = $pessoa;
        }

        return view('Dashboard.Pessoas.SenhaFormulario.index', $dados);
    }

    public function pessoasBuscar()
    {
        return view('Dashboard.Pessoas.Buscar.index');
    }

    public function pessoasStore(StorePessoaRequest $request)
    {
        try {

            $data = $request->validated();

            $data = [
                'name' => $request->nome,
                'email' => $request->email,
                'password' => bcrypt($request->senha),
            ];

            $pessoa = $this->pessoaModel->create($data);


            return redirect()->route('pessoaBuscar')->with('success', 'Pessoa criada com sucesso!');
        } catch (\Exception $e) {

            return redirect()->route('pessoaBuscar')->with('error', 'Ocorreu um erro ao atualizar o Turno. Tente novamente mais tarde.')
                ->with('exception', $e->getMessage());
        }
    }

    public function pessoasUpdateStore(StorePessoaEditRequest $request, $id = null)
    {
        try {
            $data = $request->validated();

            $data = [
                'name' => $request->nome,
                'email' => $request->email,
            ];

            $pessoa = $this->pessoaModel->find($id);

            if ($pessoa) {
                $pessoa->fill($data);
                $pessoa->save();

                return redirect()->route('pessoaBuscar')->with('success', 'Pessoa atualizada com sucesso!');
            }
        } catch (\Exception $e) {

            return redirect()->route('pessoaBuscar')->with('error', 'Ocorreu um erro ao atualizar o Turno. Tente novamente mais tarde.')
                ->with('exception', $e->getMessage());
        }
    }

    public function pessoasUpdateSenhaStore(StorePessoaSenhaEditRequest $request, $id = null)
    {
        try {
            $data = $request->validated();

            $data = [
                'password' => bcrypt($request->senha),
            ];
            
            $pessoa = $this->pessoaModel->find($id);

            if ($pessoa) {
                //print_r($data);die;
                $pessoa->fill($data);
                $pessoa->save();

                return redirect()->route('pessoaBuscar')->with('success', 'Pessoa atualizada com sucesso!');
            }
        } catch (\Exception $e) {

            return redirect()->route('pessoaBuscar')->with('error', 'Ocorreu um erro ao atualizar o Turno. Tente novamente mais tarde.')
                ->with('exception', $e->getMessage());
        }
    }

    public function data()
    {
        $data = $this->pessoaModel->getPessoas();

        foreach ($data as $pessoa) {
            $pessoa->pessoaEdit = route('pessoaCadastroEdit', ['id' => $pessoa->id]);
            $pessoa->pessoaExclud = route('pessoaDelete', ['id' => $pessoa->id]);
        }

        return response()->json([
            'data' => $data
        ]);
    }

    public function pessoasDelete($id)
    {
        try {

            $pessoa = $this->pessoaModel::findOrFail($id);
            $pessoa->delete();

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
