@include('Dashboard.Empresas.Formulario.header')

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
    {{-- Código para editar a empresa existente --}}
    <h2>Editar Empresa</h2>
    <form method="POST" action="{{ route('empresasStoreEdit', ['id' => $empresa->id]) }}" enctype="multipart/form-data">
        <input type="hidden" id="situacao" value="edit">
        @method('PATCH')
        @else
        {{-- Código para cadastrar uma nova empresa --}}
        <h2>Cadastrar Nova Empresa</h2>
        <form method="POST" action="{{ route('empresasStore') }}" enctype="multipart/form-data">
            <input type="hidden" id="situacao" value="cadastro">
            @endif

            <!-- Campo CPF -->
            @csrf

            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome', isset($empresa) ? $empresa->nome : '') }}" placeholder="Digite seu nome completo" required>
            </div>

            @if(isset($empresa) && $empresa->imagem)
            <!-- Se a pessoa tem uma imagem, exibe a imagem atual -->
            <div class="d-flex justify-content-center">
                <img src="{{ asset('storage/imagens/empresas/' . $empresa->imagem) }}" alt="Foto de Perfil" class="img-thumbnail" style="max-width: 350px;">
            </div>
            <br>
            @endif

            <div class="mb-3">
                <label for="imagem" class="form-label">Imagem</label>
                <input type="file" class="form-control" id="imagem" name="imagem" accept="image/*">
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
        <br>
</div>

@include('Dashboard.Empresas.Formulario.footer')