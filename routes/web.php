<?php

use App\Http\Controllers\EmpresasController;
use App\Http\Controllers\parceirosController;
use App\Http\Controllers\PessoasController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\RouteController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/storage/imagens/produtos/{filename}', function ($filename) {
    $path = storage_path('app/public/imagens/produtos/' . $filename);
    if (!file_exists($path)) {
        abort(404);
    }
    return response()->file($path);
});

Route::get('/storage/imagens/empresas/{filename}', function ($filename) {
    $path = storage_path('app/public/imagens/empresas/' . $filename);
    if (!file_exists($path)) {
        abort(404);
    }
    return response()->file($path);
});

Route::get('/storage/imagens/parceiros/{filename}', function ($filename) {
    $path = storage_path('app/public/imagens/parceiros/' . $filename);
    if (!file_exists($path)) {
        abort(404);
    }
    return response()->file($path);
});

Route::prefix('')->middleware(['guest'])->group(function () {
    Route::get('/', [RouteController::class, 'index'])->name('index');
    Route::get('/servicos', [RouteController::class, 'servicos'])->name('servicos');
    Route::get('/sobrenos', [RouteController::class, 'sobrenos'])->name('sobrenos');
    Route::get('/contato', [RouteController::class, 'contato'])->name('contato');
    Route::get('/equipamentos', [RouteController::class, 'equipamentos'])->name('equipamentos');
    Route::get('/cartazes', [RouteController::class, 'cartazes'])->name('cartazes');
    Route::get('/paineis', [RouteController::class, 'paineis'])->name('paineis');
    Route::get('/login', [RouteController::class, 'login'])->name('login');
    Route::post('/login', [routeController::class, 'loginPost'])->name('loginPost');
    Route::get('/logout', [routeController::class, 'logout'])->name('logout');
    Route::post('sendMail', [RouteController::class, 'sendMail'])->name('sendMail');
    Route::get('/link', [RouteController::class, 'copiarArquivosStorage']);
    // Route::post('/', [PessoasController::class, 'loginPost'])->name('login');
});

Route::prefix('dashboard')->middleware(['auth'])->group(function () {
    Route::get('/', [RouteController::class, 'dashboardPrincipal'])->name('dashboardIndex');
    Route::get('logout', [RouteController::class, 'logout'])->name('logout');
    Route::get('datadashboard', [RouteController::class, 'dataDashboard'])->middleware('checkAcessData')->name('dataDashboard');
    Route::post('datadashboard', [RouteController::class, 'dataDashboard'])->middleware('checkAcessData')->name('dataDashboard');

    Route::prefix('pessoas')->group(function () {
        Route::get('cadastro', [PessoasController::class, 'pessoasCadastro'])->name('pessoaCadastro');
        Route::post('cadastro', [PessoasController::class, 'pessoasStore'])->name('pessoaStore');
        Route::get('buscar', [PessoasController::class, 'pessoasBuscar'])->name('pessoaBuscar');
        Route::get('data', [PessoasController::class, 'data'])->name('pessoaData');
        Route::get('editar/{id}', [PessoasController::class, 'pessoasCadastro'])->name('pessoaCadastroEdit');
        Route::get('editarsenha/{id}', [PessoasController::class, 'pessoaSenhaEdit'])->name('pessoaCadastroSenhaEdit');
        Route::patch('editarsenha/{id}', [PessoasController::class, 'pessoasUpdateSenhaStore'])->name('pessoaEditSenhaEdit');
        Route::patch('editar/{id}', [PessoasController::class, 'pessoasUpdateStore'])->name('pessoaStoreEdit');
        Route::delete('deletar/{id}', [PessoasController::class, 'pessoasDelete'])->name('pessoaDelete');
    });

    Route::prefix('empresas')->group(function () {
        Route::get('cadastro', [EmpresasController::class, 'empresasCadastro'])->name('empresasCadastro');
        Route::post('cadastro', [EmpresasController::class, 'empresasStore'])->name('empresasStore');
        Route::get('buscar', [EmpresasController::class, 'empresasBuscar'])->name('empresasBuscar');
        Route::get('data', [EmpresasController::class, 'data'])->name('empresasData');
        Route::get('editar/{id}', [EmpresasController::class, 'empresasCadastro'])->name('empresasCadastroEdit');
        Route::patch('editar/{id}', [EmpresasController::class, 'empresasUpdateStore'])->name('empresasStoreEdit');
        Route::delete('deletar/{id}', [EmpresasController::class, 'empresasDelete'])->name('empresasDelete');
    });

    Route::prefix('produtos')->group(function () {
        Route::get('cadastro', [ProdutosController::class, 'produtosCadastro'])->name('produtosCadastro');
        Route::post('cadastro', [ProdutosController::class, 'produtosStore'])->name('produtosStore');
        Route::get('buscar', [ProdutosController::class, 'produtosBuscar'])->name('produtosBuscar');
        Route::get('data', [ProdutosController::class, 'data'])->name('produtosData');
        Route::get('editar/{id}', [ProdutosController::class, 'produtosCadastro'])->name('produtosCadastroEdit');
        Route::patch('editar/{id}', [ProdutosController::class, 'produtosUpdateStore'])->name('produtosStoreEdit');
        Route::delete('deletar/{id}', [ProdutosController::class, 'produtosDelete'])->name('produtosDelete');
    });

    Route::prefix('parceiros')->group(function () {
        Route::get('cadastro', [parceirosController::class, 'parceirosCadastro'])->name('parceirosCadastro');
        Route::post('cadastro', [parceirosController::class, 'parceirosStore'])->name('parceirosStore');
        Route::get('buscar', [parceirosController::class, 'parceirosBuscar'])->name('parceirosBuscar');
        Route::get('data', [parceirosController::class, 'data'])->name('parceirosData');
        Route::get('editar/{id}', [parceirosController::class, 'parceirosCadastro'])->name('parceirosCadastroEdit');
        Route::patch('editar/{id}', [parceirosController::class, 'parceirosUpdateStore'])->name('parceirosStoreEdit');
        Route::delete('deletar/{id}', [parceirosController::class, 'parceirosDelete'])->name('parceirosDelete');
    });
});
