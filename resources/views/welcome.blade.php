@extends('layouts.app')

@section('title', 'AM footbal e-shop')

@section('content')

    <h2> tu by ešte mohol byť carousel s pár produktami/náhľadovkami/ponukami/niečo </h2>
    {{-- keď bude databáza tak upraviť, asi tam nechcam mať 1000x to isté :) --}}

    <div class="box-container">

        <div class="box">
            <a href="lopty" class="box-link">
                <img src="\images\lobda.jpg" alt="Kopačky" class="box-image">
                <div class="box-text">
                    <h2>Lopty</h2>
            </a>
        </div>
    </div>
    <div class="box">
        <a href="kopacky" class="box-link">
            <img src="\images\1050116-1109297282.jpg" alt="Kopačky" class="box-image">
            <div class="box-text">
                <h2>Kopačky</h2>
        </a>
    </div>
    </div>

    <div class="box">
        <a href="chranice" class="box-link">
            <img src="\images\chraniče.jpg" alt="Chrániče" class="box-image">
            <div class="box-text">
                <h2>Chrániče</h2>
        </a>
    </div>
    </div>

    <div class="box">
        <a href="treningove-doplnky" class="box-link">
            <img src="\images\Training-kit-cely-novy-3-scaled.jpg" alt="Doplnky" class="box-image">
            <div class="box-text">
                <h2>Tréningové Doplnky</h2>
        </a>
    </div>
    </div>
    <div class="box">
        <a href="brankarske-vybavenie" class="box-link">
            <img src="\images\Oddychajace-pogrubione-rekawice-bramkarskie.jpg" alt="Bránkarske vybavenie" class="box-image">
            <div class="box-text">
                <h2>Bránkarske vybavenie</h2>
        </a>
    </div>
    </div>
    <div class="box">
        <a href="oficialne-dresy" class="box-link">
            <img src="\images\RMCFMZ0126_01_bcd7feb2-068b-4e9f-8cb7-be9b8fbcdc5b_500x480.webp" alt="Oficiálne dresy"
                class="box-image">
            <div class="box-text">
                <h2>Oficiálne dresy</h2>
        </a>
    </div>
    </div>
    <div class="box">
        <a href="rozhodca" class="box-link">
            <img src="\images\rozhodcovske-oblecenie-doplnky-potreby-vybavenie-vystroj.jpg" alt="Kopačky"
                class="box-image">
            <div class="box-text">
                <h2>Rozhodca</h2>
        </a>
    </div>
    </div>
    <div class="box">
        <a href="oblecenie" class="box-link">
            <img src="\images\336420032_max.jpg" alt="Kopačky" class="box-image">
            <div class="box-text">
                <h2>Oblečenie</h2>
        </a>
    </div>
    </div>

    <div class="box">
        <a href="zdravotne-doplnky" class="box-link">
            <img src="\images\orteza-na-koleno-kneeflex-titulka.webp" alt="Kopačky" class="box-image">
            <div class="box-text">
                <h2>Zdravotné doplnky</h2>
        </a>
    </div>
    </div>
    </div>
@endsection
