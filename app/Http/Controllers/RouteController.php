<?php

namespace App\Http\Controllers;

use App\Mail\contatoMail;
use App\Models\EmpresasModel;
use App\Models\parceirosModel;
use App\Models\ProdutosModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;

class RouteController extends Controller
{
    protected $data;
    protected $produtosModel;
    protected $empresasModel;
    protected $parceirosModel;

    public function __construct(ProdutosModel $produtosModel, EmpresasModel $empresasModel, parceirosModel $parceirosModel)
    {
        $this->produtosModel = $produtosModel;
        $this->empresasModel = $empresasModel;
        $this->parceirosModel = $parceirosModel;
    }

    public function Index()
    {
        $this->data = [
            'active' => 1,
            'produtos' => $this->produtosModel->getProdutosIndex(),
            'parceiros' => $this->parceirosModel->getParceiros(),
            'empresas' => $this->empresasModel->getEmpresas(),
        ];

        return view('Site.Index.index', $this->data);
    }

    public function sobrenos()
    {
        $this->data = [
            'active' => 2
        ];

        return view('Site.Sobrenos.index', $this->data);
    }

    public function servicos()
    {
        $this->data = [
            'active' => 3
        ];

        return view('Site.Servicos.index', $this->data);

    }

    public function equipamentos()
    {
        $empresas = EmpresasModel::with('produtos')->get();

        $this->data = [
            'active' => 4,
            'sessao' => $empresas
        ];

        //print_r($this->data);die;

        return view('Site.NossosEquipamentos.index', $this->data);
    }

    public function cartazes()
    {
        $this->data = [
            'active' => 5
        ];
        
        return view('Site.CartazFacil.index', $this->data);
    }

    public function paineis()
    {
        $this->data = [
            'active' => 6
        ];

        return view('Site.UDLed.index', $this->data);
    }

    public function contato()
    {
        $this->data = [
            'active' => 7
        ];

        return view('Site.Contatos.index', $this->data);
    }

    public function login()
    {
        return view('Site.Login.index');
    }

    public function loginPost(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->senha,
        ];

        // Verifica as credenciais de autenticação
        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboardIndex');
        }

        // Retorna com uma mensagem de erro se as credenciais estiverem incorretas
        return back()->with('error', 'Login e senha inválido!');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('index');
    }

    public function dashboardPrincipal()
    {
        //print_r([$this->data]);die;
        return view('Dashboard.Principal.index');
    }

    public function sendMail(Request $request)
    {
        $data = $request->only(['fullname', 'email', 'company_site', 'subject', 'message']);

        Mail::send([], [], function ($message) use ($data) {
            $message->to('comercial@portaluniversodigital.com.br')
                ->from($data['email'], $data['fullname'])
                ->subject($data['subject'])
                ->html("
    <p><strong>Nome:</strong> {$data['fullname']}</p>
    <p><strong>Email:</strong> {$data['email']}</p>
    <p><strong>Site da empresa:</strong> {$data['company_site']}</p>
    <p><strong>Assunto:</strong> {$data['subject']}</p>
    <p><strong>Mensagem:</strong><br>{$data['message']}</p>
");
        });

        return back()->with('success', 'Email enviado com sucesso!');
    }
    public function copiarArquivosStorage()
    {
        try {
        // Caminhos (ajuste conforme sua estrutura real)
        $target = __DIR__.'/../../storage/app/public';  // Origem dos arquivos
        $link = __DIR__.'/../../storage';               // Link na raiz do site

        // Verifica se já existe
        if (file_exists($link)) {
            // Se for um link simbólico, remove
            if (is_link($link)) {
                unlink($link);
            } else {
                return 'Erro: Já existe um diretório/arquivo chamado "storage"!';
            }
        }

        // Cria o link simbólico
        if (symlink($target, $link)) {
            return 'Link criado: '.$link.' -> '.$target;
        } else {
            return 'Falha ao criar link simbólico';
        }
        
    } catch (\Exception $e) {
        return 'Erro: '.$e->getMessage();
    }
    }
}
