{{-- <link href="{{ asset('css/styles.css') }}" rel="stylesheet"> --}}

<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-custom fixed-top">
    <a class="navbar-logo" href="/">
        <img src="\images\logo_shop.png" alt="AM Football Shop Logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            {{-- <li class="nav-item active">
                <a class="nav-link text-warning" href="/"><b>Domov</b></a>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link" href="{{ route('category.showSpecial', ['specialCategory' => 'all']) }}"><b>Všetko</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('category.showSpecial', ['specialCategory' => 'muz']) }}"><b>Muži</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('category.showSpecial', ['specialCategory' => 'zena']) }}"><b>Ženy</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('category.showSpecial', ['specialCategory' => 'dieta']) }}"><b>Deti</b></a>
            </li>
        </ul>


    </div>
   <!-- Navbar Right Side -->
<div class="navbar-nav">
    @if (Auth::guest())
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">Register</a>
        </li>
    @else
        <!-- Odkaz pre admina -->
        @if (Auth::user()->email === 'admin@admin.com')
            <li class="nav-item">
                <a class="nav-link" href="/admin">Admin Panel</a>
            </li>
        @endif

        <!-- Dropdown for authenticated user -->
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    @endif
</div>
</div>
</nav>
