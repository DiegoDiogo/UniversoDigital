@include('Dashboard.Parceiros.Formulario.header')

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
    {{-- Edição de Parceiro --}}
    <h2>Editar Parceiro</h2>
    <form method="POST" action="{{ route('parceirosCadastroEdit', ['id' => $parceiro->id]) }}" enctype="multipart/form-data">
        <input type="hidden" id="situacao" value="edit">
        @method('PATCH')
    @else
    {{-- Cadastro de Novo Parceiro --}}
    <h2>Cadastrar Novo Parceiro</h2>
    <form method="POST" action="{{ route('parceirosStore') }}" enctype="multipart/form-data">
        <input type="hidden" id="situacao" value="cadastro">
    @endif

        @csrf

        <!-- Nome -->
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome', isset($parceiro) ? $parceiro->nome : '') }}" placeholder="Nome do parceiro">
        </div>

        <!-- Imagem -->
        <div class="mb-3">
            <label for="imagem" class="form-label">Imagem</label>
            <input type="file" class="form-control" id="imagem" name="imagem">
            @if(isset($parceiro) && $parceiro->imagem)
            <div class="d-flex justify-content-center mt-3">
                <img src="{{ asset('storage/imagens/parceiros/' . $parceiro->imagem) }}" alt="Foto de Perfil" class="img-thumbnail" style="max-width: 350px;">
            </div>
            <br>
            @endif
        </div>

        <!-- Botão -->
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
    <br>
</div>

@include('Dashboard.Parceiros.Formulario.footer')