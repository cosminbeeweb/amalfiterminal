@extends('layouts.main')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/page-2.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/gallery.css') }}"/>
@section('stylesheets')

@endsection

@section('content')

<div class="subheader food"></div>

<div class="content-wrapper">
    <h2 class="normal big-header">FOOD</h2>
    <p class="normal">Lorem Ipsum è un testo segnaposto utilizzato nel settore della tipografia e della stampa. Lorem Ipsum è considerato il testo segnaposto standard sin dal sedicesimo secolo, quando un anonimo tipografo prese una cassetta di caratteri e li assemblò per preparare un testo campione. È sopravvissuto non solo a più di cinque secoli, ma anche al passaggio alla videoimpaginazione, pervenendoci sostanzialmente inalterato. Fu reso popolare, negli anni ’60, con la diffusione dei fogli di caratteri trasferibili “Letraset”, che contenevano passaggi del Lorem Ipsum, e più recentemente da software di impaginazione come Aldus PageMaker, che includeva versioni del Lorem Ipsum.</p>

    <div class="pages food">
        <div>
            <img src="{{ URL::asset('images/sea.svg') }}"/>
            <a href="/food/sea-food">
                <p>Sea food</p>
            </a>
        </div>

        <div>
            <img src="{{ URL::asset('images/meat.svg') }}"/>
            <a href="/food/meat-dishes">
                <p>Meat dishes</p>
            </a>
        </div>

        <div>
            <img src="{{ URL::asset('images/pizzeria.svg') }}"/>
            <a href="/food/pizzeria">
                <p>Pizzeria</p>
            </a>
        </div>

        <div>
            <img src="{{ URL::asset('images/ico_food.svg') }}"/>
            <a href="/food/street-food">
                <p>Street food</p>
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