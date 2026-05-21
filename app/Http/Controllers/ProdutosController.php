<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePessoaEditRequest;
use App\Http\Requests\StoreProdutosEditRequest;
use App\Http\Requests\StoreProdutosRequest;
use App\Models\EmpresasModel;
use App\Models\ProdutosModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdutosController extends Controller
{
    protected $empresasModel;
    protected $produtosModel;

    public function __construct(EmpresasModel $empresasModel, ProdutosModel $produtosModel)
    {
        $this->empresasModel = $empresasModel;
        $this->produtosModel = $produtosModel;
    }


    public function produtosCadastro($id = null)
    {
        $produtos = $this->produtosModel::find($id);
        $dados = [
            'empresas' => $this->empresasModel->getEmpresas()
        ];
        
        if ($produtos) {
            $dados['produtos'] = $produtos;
        }

        //print_r($dados);die;
        return view('Dashboard.Produtos.Formulario.index', $dados);
    }

    public function produtosBuscar()
    {
        return view('Dashboard.Produtos.Buscar.index');
    }


    public function produtosStore(StoreProdutosRequest $request)
    {
        try {

            $data = $request->validated();

            $data = [
                'nome' => $request->nome,
                'imagem' => $request->imagem,
                'descricao' => $request->descricao,
                'id_empresa' => $request->id_empresa
            ];

            if ($request->hasFile('imagem')) {
                $image = $request->file('imagem');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $imagePath = $image->storeAs('imagens/produtos', $imageName);
                $data['imagem'] = $imageName;
            }

            $produtos = $this->produtosModel->create($data);


            return redirect()->route('produtosBuscar')->with('success', 'Produto criado com sucesso!');
        } catch (\Exception $e) {

            return redirect()->route('produtosBuscar')->with('error', 'Ocorreu um erro ao atualizar o produto. Tente novamente mais tarde.')
                ->with('exception', $e->getMessage());
        }
    }

    public function produtosUpdateStore(StoreProdutosEditRequest $request, $id = null)
    {
        try {
            $data = $request->validated();

            $data = [
                'nome' => $request->nome,
                'imagem' => $request->imagem,
                'descricao' => $request->descricao,
                'id_empresa' => $request->id_empresa
            ];

            $produtos = $this->produtosModel->find($id);

            if ($request->hasFile('imagem')) {
                if ($produtos->imagem) {
                    Storage::delete('imagens/produtos/' . $produtos->imagem);
                }

                $image = $request->file('imagem');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->storeAs('imagens/produtos', $imageName);

                $data['imagem'] = $imageName;
            }

            if ($produtos) {
                $produtos->fill($data);
                $produtos->save();

                return redirect()->route('produtosBuscar')->with('success', 'Produto atualizado com sucesso!');
            }
        } catch (\Exception $e) {

            return redirect()->route('produtosBuscar')->with('error', 'Ocorreu um erro ao atualizar o Produto. Tente novamente mais tarde.')
                ->with('exception', $e->getMessage());
        }
    }


    public function data()
    {
        $data = $this->produtosModel->getProdutos();

        foreach ($data as $produtos) {
            $produtos->produtosEdit = route('produtosCadastroEdit', ['id' => $produtos->id]);
            $produtos->produtosExclud = route('produtosDelete', ['id' => $produtos->id]);
        }

        return response()->json([
            'data' => $data
        ]);
    }

    public function produtosDelete($id)
    {
        try {

            $produtos = $this->produtosModel::findOrFail($id);

            if ($produtos->imagem) {
                if ($produtos->imagem) {
                    Storage::delete('imagens/produtos/' . $produtos->imagem);
                }
            }

            $produtos->delete();
            

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
