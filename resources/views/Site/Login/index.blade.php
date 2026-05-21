@include('Site.Login.header')

<div class="login-container">
    <!-- Left image side -->
    <div class="login-image">
        <img src="{{asset('assets/img/logo-padrao.png')}}" style="width: 100%;" alt="login illustration">
    </div>

    <!-- Right form side -->
    <div class="login-form">
        <h2>LOGIN</h2>
        <form action="" method="POST">
            @csrf
            @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
            </div>
            @endif
            @if(Session::has('error'))
            <div class="alert alert-danger" role="alert">
                {{ Session::get('error') }}
            </div>
            @endif
            <div class="mb-3">
                <label for="inputEmail" class="form-label">Email</label>
                <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha" required>
            </div>
            <button type="submit" class="btn btn-lg btn-primary mb-3 button-color-custon">Entrar</button>
        </form>
    </div>
</div>

@include('Site.Login.footer')