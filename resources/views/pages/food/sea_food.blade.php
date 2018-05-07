@extends('layouts.main')

@section('stylesheets')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/page-1.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/slider.css') }}"/>
@endsection

@section('content')

<div class="subheader sea-food">
    <img src="{{ URL::asset('images/sea.svg')}}" alt="Icon Sea Food"/>
    <p>SEA FOOD</p>
</div>

<div class="content-wrapper">
    <h2 class="cafe-header">Le specialità della nostra Caffetteria</h2>

    <p class="cafe-description">
        Lorem Ipsum è un testo segnaposto utilizzato nel settore della tipografia e della stampa. Lorem Ipsum è considerato il testo segnaposto standard sin dal sedicesimo secolo, quando un anonimo tipografo prese una cassetta di caratteri e li assemblò per preparare un testo campione. È sopravvissuto non solo a più di cinque secoli, ma anche al passaggio alla videoimpaginazione, pervenendoci sostanzialmente inalterato. Fu reso popolare, negli anni ’60, con la diffusione dei fogli di caratteri trasferibili “Letraset”, che contenevano passaggi del Lorem Ipsum, e più recentemente da software di impaginazione come Aldus PageMaker, che includeva versioni del Lorem Ipsum.
    </p>

    <div class="cafe-menu">
        <h2 class="menu-header">Il nostro menù</h2>

        <div class="menu">
            <div class="item">
                <div class="item-content">
                    <img src="{{ URL::asset('images/struttura-262.png') }}" alt="cafe"/>

                    <div class="title">
                        <p class="title-text">Caffè</p>
                        <p class="description">Macinato con diverse miscele</p>
                    </div>

                    <div class="tag">
                        <p>SPECIALITÀ</p>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="item-content">
                    <img src="{{ URL::asset('images/struttura-262.png') }}" alt="cafe"/>

                    <div class="title">
                        <p class="title-text">Tisana</p>
                        <p class="description">Lorem Ipsum è un testo segnaposto utilizzato </p>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="item-content">
                    <img src="{{ URL::asset('images/struttura-272.png') }}" alt="cafe"/>

                    <div class="title">
                        <p class="title-text">Caffè Americano</p>
                        <p class="description">Lorem Ipsum è un testo segnaposto utilizzato </p>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="item-content">
                    <img src="{{ URL::asset('images/struttura-28.png') }}" alt="cafe"/>

                    <div class="title">
                        <p class="title-text">Succhi</p>
                        <p class="description">Lorem Ipsum è un testo segnaposto utilizzato </p>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="item-content">
                    <img src="{{ URL::asset('images/struttura-262.png') }}" alt="cafe"/>

                    <div class="title">
                        <p class="title-text">Caffè shakerato</p>
                        <p class="description">Lorem Ipsum è un testo segnaposto utilizzato </p>
                    </div>

                    <div class="tag">
                        <p>NOVITÀ</p>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="item-content">
                    <img src="{{ URL::asset('images/struttura-262.png') }}" alt="cafe"/>

                    <div class="title">
                        <p class="title-text">Thè</p>
                        <p class="description">Lorem Ipsum è un testo segnaposto utilizzato </p>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="item-content">
                    <img src="{{ URL::asset('images/struttura-28.png') }}" alt="cafe"/>

                    <div class="title">
                        <p class="title-text">Cappuccino</p>
                        <p class="description">Lorem Ipsum è un testo segnaposto utilizzato </p>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="item-content">
                    <img src="{{ URL::asset('images/struttura-272.png') }}" alt="cafe"/>

                    <div class="title">
                        <p class="title-text">Orzo</p>
                        <p class="description">Lorem Ipsum è un testo segnaposto utilizzato </p>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="item-content">
                    <img src="{{ URL::asset('images/struttura-272.png') }}" alt="cafe"/>

                    <div class="title">
                        <p class="title-text">Caffè Brasiliano</p>
                        <p class="description">Macinato con diverse miscele</p>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="item-content">
                    <img src="{{ URL::asset('images/struttura-262.png') }}" alt="cafe"/>

                    <div class="title">
                        <p class="title-text">Ginseng</p>
                        <p class="description">Macinato con diverse miscele</p>
                    </div>

                    <div class="tag">
                        <p>NOVITÀ</p>
                    </div>
                </div>
            </div>
        </div>

        <button type="button">vedi tutto il menu</button>
    </div>

    <div class="slider-container">
        <div class="slider wide" id="slider">
            <div class="slide slide1"></div>

            <div class="slide slide2"></div>

            <div class="slide slide3"></div>

            <div class="slide slide4"></div>

            <div class="slide slide5"></div>
        </div>

        <div class="slider-navigation">
            <i class="fas fa-angle-left left" slide="5"></i>
            <i class="fas fa-angle-right right" slide="2"></i>
        </div>
        <div class="pagination"></div>
    </div>
</div>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3027.8273720594325!2d14.59968311558446!3d40.63368885033937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x133b95ade9acab71%3A0xf16169030bb951c7!2sAmalfi+Terminal+Italian+Food+%26+Lounge+Bar!5e0!3m2!1sit!2sit!4v1506086582907" width="100%" height="550" frameborder="0" style="border:0" allowfullscreen=""></iframe>
@endsection

@section('scripts')
<script src="{{ URL::asset('js/slider.js') }}"></script>
@endsection