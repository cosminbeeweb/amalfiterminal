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

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3027.8273720594325!2d14.59968311558446!3d40.63368885033937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x133b95ade9acab71%3A0xf16169030bb951c7!2sAmalfi+Terminal+Italian+Food+%26+Lounge+Bar!5e0!3m2!1sit!2sit!4v1506086582907" width="100%" height="550" frameborder="0" style="border:0" allowfullscreen=""></iframe>


@endsection

@section('scripts')
<script src="{{ URL::asset('js/gallery.js') }}"></script>
@endsection