@extends('layouts.main')

@section('stylesheets')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/page-1.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/slider.css') }}"/>
@endsection

@section('content')

<div class="subheader pizzeria">
    <img src="{{ URL::asset('images/pizzeria.svg')}}" alt="Icon Pizzeria"/>
    <p>PIZZERIA</p>
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

@include('layouts.map')

@endsection

@section('scripts')
<script src="{{ URL::asset('js/slider.js') }}"></script>
@endsection