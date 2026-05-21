<div class="toolbar fixed-top p-2">
    <div class="social-icons me-2">
        <a href="https://www.facebook.com/udonline" target="_blank" class="btn btn-outline-info button-color-white" aria-label="Facebook">
            <i class="fab fa-facebook-f"></i>
        </a>
        <a href="https://www.instagram.com/universodigitaloficial/" target="_blank" class="btn btn-outline-info button-color-white" aria-label="Instagram">
            <i class="fab fa-instagram"></i>
        </a>
    </div>
    <div>
        <a href="https://psfx.com.br/pws/index.php/pws" target="_blank">
            <button type="button" class="btn btn-outline-info button-color-white">Área do cliente</button>
        </a>
    </div>
</div>

<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark" aria-label="Ninth navbar example">
    <div class="container-xl d-flex justify-content-between">
        <a class="navbar-brand" href="{{route('index')}}"><img src="{{ asset('assets/img/logo-horizontal-branca.png') }}" alt="" class="logo-navbar"></a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07XL" aria-controls="navbarsExample07XL" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarsExample07XL">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link @if($active == 1) active @endif" aria-current="page" href="{{route('index')}}"><i class="fa-solid fa-house"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if($active == 2) active @endif" href="{{route('sobrenos')}}"><i class="fa-solid fa-building-user"></i> Sobre nós</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if($active == 3) active @endif" href="{{route('servicos')}}"><i class="fa-solid fa-briefcase"></i> Serviços</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if($active == 4) active @endif" href="{{route('equipamentos')}}"><i class="fa-solid fa-print"></i> Nossos Equipamentos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if($active == 5) active @endif" href="{{route('cartazes')}}"><i class="fa-solid fa-house"></i> Cartaz Fácil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if($active == 6) active @endif" href="{{route('paineis')}}"><i class="fa-solid fa-house"></i> UD LED</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if($active == 7) active @endif" href="{{route('contato')}}"><i class="fa-solid fa-phone"></i> Contato</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
