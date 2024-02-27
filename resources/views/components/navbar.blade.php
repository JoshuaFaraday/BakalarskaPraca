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
                <a class="nav-link text-warning" href="{{ route('category.showSpecial', ['specialCategory' => 'all']) }}"><b>Všetko</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-warning" href="{{ route('category.showSpecial', ['specialCategory' => 'muz']) }}"><b>Muži</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-warning" href="{{ route('category.showSpecial', ['specialCategory' => 'zena']) }}"><b>Ženy</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-warning" href="{{ route('category.showSpecial', ['specialCategory' => 'Dieťa']) }}"><b>Deti</b></a>
            </li>
        </ul>
    </div>
</nav>
