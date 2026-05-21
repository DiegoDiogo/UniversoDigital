@include('Dashboard.Produtos.Formulario.header')

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
    <h2>Editar Produto</h2>
    <form method="POST" action="{{ route('produtosStoreEdit', ['id' => $produtos->id]) }}" enctype="multipart/form-data">
        <input type="hidden" id="situacao" value="edit">
        @method('PATCH')
        @else
        {{-- Código para cadastrar uma nova pessoa --}}
        <h2>Cadastrar Novo Produto</h2>
        <form method="POST" action="{{ route('produtosStore') }}" enctype="multipart/form-data">
            <input type="hidden" id="situacao" value="cadastro">
            @endif

            <!-- Campo CPF -->
            @csrf

            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome', isset($produtos) ? $produtos->nome : '') }}" placeholder="Digite seu nome completo" required>
            </div>

            @if(isset($produtos) && $produtos->imagem)
            <!-- Se a pessoa tem uma imagem, exibe a imagem atual -->
            <div class="d-flex justify-content-center">
                <img src="{{ asset('storage/imagens/produtos/' . $produtos->imagem) }}" alt="Foto de Perfil" class="img-thumbnail" style="max-width: 350px;">
            </div>
            <br>
            @endif

            <div class="mb-3">
                <label for="imagem" class="form-label">Imagem</label>
                <input type="file" class="form-control" id="imagem" name="imagem" accept="image/*">
            </div>
            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição</label>
                <textarea class="form-control" id="descricao" name="descricao" rows="3" placeholder="Digite uma descrição" style="resize:none;">{{ old('descricao', isset($produtos) ? $produtos->descricao : '') }}</textarea>
            </div>
            <div class="mb-3">
                <label for="id_empresa" class="form-label">Empresa</label>
                <select class="form-control" id="id_empresa" name="id_empresa" required>
                    <option value="">Selecione uma empresa</option>
                    @foreach($empresas as $value)
                    <option value="{{ $value->id }}" {{ (old('id_empresa') == $value->id || (isset($produtos) && $produtos->id_empresa == $value->id)) ? 'selected' : '' }}>
                        {{ $value->nome }}
                    </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
        <br>


</div>

@include('Dashboard.Produtos.Formulario.footer')