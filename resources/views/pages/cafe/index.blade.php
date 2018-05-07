@extends('layouts.main')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/page-2.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/gallery.css') }}"/>
@section('stylesheets')

@endsection

@section('content')

<div class="subheader cafe"></div>

<div class="content-wrapper">
    <h2 class="normal big-header">CAFÈ</h2>
    <p class="normal">Lorem Ipsum è un testo segnaposto utilizzato nel settore della tipografia e della stampa. Lorem Ipsum è considerato il testo segnaposto standard sin dal sedicesimo secolo, quando un anonimo tipografo prese una cassetta di caratteri e li assemblò per preparare un testo campione. È sopravvissuto non solo a più di cinque secoli, ma anche al passaggio alla videoimpaginazione, pervenendoci sostanzialmente inalterato. Fu reso popolare, negli anni ’60, con la diffusione dei fogli di caratteri trasferibili “Letraset”, che contenevano passaggi del Lorem Ipsum, e più recentemente da software di impaginazione come Aldus PageMaker, che includeva versioni del Lorem Ipsum.</p>

    <div class="pages cafe">
        <div>
            <img src="{{ URL::asset('images/ico_cafe.svg') }}"/>
            <a href="/cafe/bar">
                <p>Bar</p>
            </a>
        </div>

        <div>
            <img src="{{ URL::asset('images/gelateria.svg') }}"/>
            <a href="/cafe/gelateria">
                <p>Gelateria</p>
            </a>
        </div>
    </div>

    <div class="gallery">
        <div class="image one" image="1"></div>
        <div class="image two" image="2"></div>
        <div class="image three" image="3"></div>
        <div class="image four" image="4"></div>
        <div class="thumbnail">GALLERY</div>
    </div>
</div>

<div class="fullscreen-gallery">
    <img class="full" src="" alt=""/>
    <img class="close" onClick="closeGallery()" src="{{ URL::asset('images/close.svg') }}"/>
</div>

@include('layouts.map')

@endsection

@section('scripts')
<script src="{{ URL::asset('js/gallery.js') }}"></script>
@endsection