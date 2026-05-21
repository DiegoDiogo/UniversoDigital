@include('Dashboard.Parceiros.Buscar.header')

@include('Dashboard.Principal.sidebar')
<div class="container-fluid" style="padding-left: 2.5rem !important;padding-right: 2.5rem !important;">
    <a href="{{ route('parceirosCadastro') }}" class="btn btn-primary">Cadastrar</a>
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
    <table id="parceirosBuscar" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Ações</th>
            </tr>
        </thead>
    </table>
</div>

@include('Dashboard.Parceiros.Buscar.footer')