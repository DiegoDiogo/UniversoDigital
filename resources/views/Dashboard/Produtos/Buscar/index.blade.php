@include('Dashboard.Produtos.Buscar.header')

@include('Dashboard.Principal.sidebar')
<div class="container-fluid" style="padding-left: 2.5rem !important;padding-right: 2.5rem !important;">
    <a href="{{ route('produtosCadastro') }}" class="btn btn-primary">Cadastrar</a>
    @if(session('success'))
    <div class="alert alert-success mt-2">
        {{ session('success') }}
    </div>
    @endif

    @if(session('info'))
    <div class="alert alert-info mt-2">
        {{ session('info') }}
    </div>
    @endif
    <table id="pessoasBuscar" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Nome</th>
                <th>descrição</th>
                <th>Empresa</th>
                <th>Criado_em</th>
                <th>Ações</th>
            </tr>
        </thead>
    </table>
</div>

@include('Dashboard.Produtos.Buscar.footer')