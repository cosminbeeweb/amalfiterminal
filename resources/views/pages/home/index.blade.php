@extends('layouts.main')

@section('stylesheets')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/homepage.css') }}"/>
@endsection

@section('content')
    <div class="images-grid">
        <div class="left-section">
            <div class="one">
                <div class="first hero-grid-topic">
                    <p class="text-overlay">Pizzeria</p>
                    <a href="/food/pizzeria">
                        <div class="image-overlay"></div>
                    </a>
                </div>

                <div class="second">
                    <div class="top hero-grid-topic">
                        <p class="text-overlay">Eventi & Lounge</p>
                        <a href="/lounge/arsenale">
                            <div class="image-overlay"></div>
                        </a>
                    </div>
                    <div class="bottom hero-grid-topic">
                        <p class="text-overlay">Coffee bar</p>
                        <a href="/cafe/bar">
                            <div class="image-overlay"></div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="two hero-grid-topic">
                <p class="text-overlay">Street food</p>
                <a href="/food/street-food">
                    <div class="image-overlay"></div>
                </a>
            </div>
        </div>

        <div class="right-section hero-grid-topic">
            <p class="text-overlay">Sea food</p>
            <a href="/food/sea-food">
                <div class="image-overlay"></div>
            </a>
        </div>

        <div class="mouse-icon">
            <img src="{{ URL::asset('images/mouse_ico.svg') }}"/>
        </div>
    </div>

    <div class="splash-section cafe">
        <div class="vertical-text">
            <div class="vertical-heading">CAFÈ</div>
        </div>

        <div class="info">
            <img class="mini-icon" src="{{ URL::asset('images/ico_cafe.svg') }}" alt="cafe icon"/>

            <h3>CAFÈ</h3>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusamus accusantium amet atque dolore doloribus eaque earum est, eum exercitationem explicabo labore magnam omnis, quibusdam ratione reiciendis tempora veritatis voluptate!</p>

            <button type="button">scopri di più <i class="fas fa-angle-right"></i> </button>

            <img class="medium-img" src="{{ URL::asset('images/struttura-17.png') }}" alt="cafe image"/>
        </div>

        <div class="side-image">
            <img src="{{ URL::asset('images/struttura-4.png') }}" alt="cafe side image"/>
        </div>
    </div>

    <div class="splash-section food">
        <div class="vertical-text">
            <div class="vertical-heading">FOOD</div>
        </div>

        <div class="info">
            <img class="mini-icon" src="{{ URL::asset('images/ico_food.svg') }}" alt="cafe icon"/>

            <h3>FOOD</h3>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusamus accusantium amet atque dolore doloribus eaque earum est, eum exercitationem explicabo labore magnam omnis, quibusdam ratione reiciendis tempora veritatis voluptate!</p>

            <button type="button">scopri di più <i class="fas fa-angle-right"></i> </button>

            <img class="medium-img" src="{{ URL::asset('images/struttura-23.png') }}" alt="cafe image"/>
        </div>

        <div class="side-image">
            <img src="{{ URL::asset('images/struttura-18.png') }}" alt="cafe side image"/>
        </div>
    </div>

    <div class="splash-section lounge">
        <div class="vertical-text">
            <div class="vertical-heading">LOUNGE</div>
        </div>

        <div class="info">
            <img class="mini-icon" src="{{ URL::asset('images/ico_lounge.svg') }}" alt="lounge icon"/>

            <h3>EVENTI & LOUNGE</h3>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusamus accusantium amet atque dolore doloribus eaque earum est, eum exercitationem explicabo labore magnam omnis, quibusdam ratione reiciendis tempora veritatis voluptate!</p>

            <button type="button">scopri di più <i class="fas fa-angle-right"></i> </button>

            <img class="medium-img" src="{{ URL::asset('images/struttura-19.png') }}" alt="cafe image"/>
        </div>

        <div class="side-image">
            <img src="{{ URL::asset('images/struttura-24.png') }}" alt="cafe side image"/>
        </div>
    </div>

    <div class="slideshow">
        <div slide="1"></div>
        <div slide="2"></div>
        <div slide="3"></div>
        <div slide="4"></div>
        <div slide="5"></div>
        <div slide="6"></div>
        <div slide="7"></div>
        <div slide="8"></div>
    </div>

    @include('layouts.map')

@endsection

@section('scripts')
@endsection