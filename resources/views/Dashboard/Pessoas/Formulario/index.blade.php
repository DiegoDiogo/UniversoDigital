@include('Dashboard.Pessoas.Formulario.header')

@include('Dashboard.Principal.sidebar')
<div class="container mt-5">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    @if(request()->route('id'))
    {{-- Código para editar a pessoa existente --}}
    <h2>Editar Pessoa</h2>
    <form method="POST" action="{{ route('pessoaStoreEdit', ['id' => $pessoa->id]) }}" enctype="multipart/form-data">
        <input type="hidden" id="situacao" value="edit">
        @method('PATCH')
        @else
        {{-- Código para cadastrar uma nova pessoa --}}
        <h2>Cadastrar Nova Pessoa</h2>
        <form method="POST" action="{{ route('pessoaStore') }}" enctype="multipart/form-data">
            <input type="hidden" id="situacao" value="cadastro">
            @endif

            <!-- Campo CPF -->
            @csrf

            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value="{{ old('name', isset($pessoa) ? $pessoa->name : '') }}" placeholder="Digite seu nome completo">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" value="{{ old('email', isset($pessoa) ? $pessoa->email : '') }}" placeholder="Digite seu e-mail">
            </div>

            @if(!isset($pessoa))
            <div class="mb-3" id="senhaField">
                <label for="senha" class="form-label">Senha</label>
                <div class="input-group">
                    <input type="password" class="form-control" id="senha" name="senha" value="{{ old('senha') }}" placeholder="Digite sua senha">
                    <button type="button" class="btn btn-secondary" id="toggleSenha" style="border: none;">
                        <i class="fas fa-eye" id="senhaIcon"></i> <!-- Ícone de olho do Font Awesome -->
                    </button>
                </div>
            </div>
            @endif

            @if(isset($pessoa))
            <div class="mb-3" id="senhaEditField">
                <label for="senha" class="form-label">Senha</label>
                <br>
                <a href="{{ route('pessoaCadastroSenhaEdit', ['id' => $pessoa->id]) }}" class="btn btn-primary">Trocar senha</a>
            </div>
            @endif

            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
        <br>


</div>
@include('Dashboard.Pessoas.Formulario.footer')