@extends('layouts.main')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/arsenale.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/gallery.css') }}"/>
@section('stylesheets')

@endsection

@section('content')

    <div class="header-image"></div>

    <div class="content-wrapper">
        <h2 class="normal">L'Arsenale</h2>
        <p class="normal">Lorem Ipsum è un testo segnaposto utilizzato nel settore della tipografia e della stampa. Lorem Ipsum è considerato il testo segnaposto standard sin dal sedicesimo secolo, quando un anonimo tipografo prese una cassetta di caratteri e li assemblò per preparare un testo campione. È sopravvissuto non solo a più di cinque secoli, ma anche al passaggio alla videoimpaginazione, pervenendoci sostanzialmente inalterato. Fu reso popolare, negli anni ’60, con la diffusione dei fogli di caratteri trasferibili “Letraset”, che contenevano passaggi del Lorem Ipsum, e più recentemente da software di impaginazione come Aldus PageMaker, che includeva versioni del Lorem Ipsum.</p>

        <div class="gallery">
            <div class="image one" image="1"></div>
            <div class="image two" image="2"></div>
            <div class="image three" image="3"></div>
            <div class="image four" image="4"></div>
            <div class="thumbnail">GALLERY</div>
        </div>

        <h2 class="normal">Contattaci per la tua festa o il tuo evento</h2>
        <p class="normal">Lorem Ipsum è un testo segnaposto utilizzato nel settore della tipografia e della stampa. Lorem Ipsum è considerato il testo segnaposto standard sin dal sedicesimo secolo, quando un anonimo tipografo prese una cassetta di </p>

        <div class="contatti-details">
            <div class="telephone">
                <div class="thumbnail">
                    <i class="fas fa-phone"></i>
                </div>

                <p>tel. +39 089 871009</p>
            </div>

            <div class="address">
                <div class="thumbnail">
                    <i class="fas fa-map-marker-alt"></i>
                </div>

                <p>Piazza Flavio Gioia / Amalfi</p>
            </div>

            <div class="email">
                <div class="thumbnail">
                    <i class="fas fa-envelope"></i>
                </div>

                <p>info@amalfireminal.it</p>
            </div>
        </div>
    </div>

    <div class="fullscreen-gallery">
        <img class="full" src="" alt=""/>
        <img class="close" onClick="closeGallery()" src="{{ URL::asset('images/close.svg') }}"/>
    </div>

@endsection

@section('scripts')
<script src="{{ URL::asset('js/gallery.js') }}"></script>
@endsection