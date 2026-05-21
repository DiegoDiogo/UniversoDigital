@include('Dashboard.Pessoas.SenhaFormulario.header')

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

    <h2>Editar Senha</h2>
    <form method="POST" action="{{ route('pessoaEditSenhaEdit', ['id' => $pessoa->id]) }}">
        @method('PATCH')
        @csrf
        <div class="mb-3">
            <label for="senha" class="form-label">Senha</label>
            <div class="input-group">
                <input type="password" class="form-control" id="senha" name="senha" value="{{ old('senha') }}" placeholder="Digite sua nova senha">
                <!-- Botão para alternar a visibilidade da senha -->
                <button type="button" class="btn btn-secondary" id="toggleSenha" style="border: none;">
                    <i class="fas fa-eye" id="senhaIcon"></i> <!-- Ícone de olho do Font Awesome -->
                </button>
            </div>
        </div>

        <div class="mb-3">
            <label for="senha_confirmation" class="form-label">Confirmar senha</label>
            <div class="input-group">
                <input type="password" class="form-control" id="senha_confirmation" name="senha_confirmation" value="{{ old('senha_confirmation') }}" placeholder="Confirme sua senha">
                <!-- Botão para alternar a visibilidade da senha -->
                <button type="button" class="btn btn-secondary" id="toggleConfSenha" style="border: none;">
                    <i class="fas fa-eye" id="confSenhaIcon"></i> <!-- Ícone de olho do Font Awesome -->
                </button>
            </div>
        </div>

        <!-- Botão de Submit -->
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</div>

@include('Dashboard.Pessoas.SenhaFormulario.footer')



