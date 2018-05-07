<header id="header">
    <nav>
        <div class="toggle-navigation">
            <img src="{{ URL::asset('images/menu.svg')}}" alt="Toggle Navigation"/>
        </div>

        <div class="header-logo">
            <a href="/">
                <img src="{{ URL::asset('images/logo.svg')}}" alt="Logo Amalfi Terminal"/>
            </a>

        </div>

        <div class="header-icons">
            <div class="icon">
                <a href="/food/sea-food">
                    <img src="{{ URL::asset('images/sea.svg')}}" alt="Icon Sea Food"/>
                </a>
                <p>Sea food</p>
            </div>

            <div class="icon">
                <a href="/food/meat-dishes">
                    <img src="{{ URL::asset('images/meat.svg')}}" alt="Icon Meat Dishes"/>
                </a>
                <p>Meat dishes</p>
            </div>

            <div class="icon">
                <a href="/food/pizzeria">
                    <img src="{{ URL::asset('images/pizzeria.svg')}}" alt="Icon Pizzeria"/>
                </a>
                <p>Pizzeria</p>
            </div>

            <div class="icon">
                <a href="/food/street-food">
                    <img src="{{ URL::asset('images/ico_food.svg')}}" alt="Icon Street Food"/>
                </a>
                <p>Street food</p>
            </div>

            <div class="icon">
                <a href="/lounge/arsenale">
                    <img src="{{ URL::asset('images/ico_lounge.svg')}}" alt="Icon Eventi And Lounge"/>
                </a>
                <p>Eventi & Lounge</p>
            </div>

            <div class="icon">
                <a href="/cafe/gelateria">
                    <img src="{{ URL::asset('images/gelateria.svg')}}" alt="Icon Gelateria"/>
                </a>
                <p>Gelateria</p>
            </div>

            <div class="icon">
                <a href="/cafe/bar">
                    <img src="{{ URL::asset('images/ico_cafe.svg')}}" alt="Icon Cafe"/>
                </a>
                <p>Coffee bar</p>
            </div>
        </div>
    </nav>

    <div class="sidebar-navigation">
        <img class="bg_at" src="{{ URL::asset('images/bg_at.png') }}" alt="bg_at">
        <img class="close" src="{{ URL::asset('images/close.svg') }}" alt="close sidebar navigation"/>

        <div class="sidebar-menu">
            <div class="items">
                <h3>LA FERMATA DEL GUSTO</h3>

                <div class="nav">
                    <div class="head">
                        <span>
                            <img src="{{ URL::asset('images/ico_cafe.svg') }}">
                        </span>
                        <a href="#">CAFE</a>
                    </div>

                    <div>
                        <a href="/cafe/bar">BAR</a>
                    </div>

                    <div>
                        <a href="/cafe/gelateria">GELATERIA</a>
                    </div>

                    <div class="head">
                        <span>
                            <img src="{{ URL::asset('images/ico_food.svg') }}">
                        </span>
                        <a href="#">FOOD</a>
                    </div>

                    <div>
                        <a href="/food/meat-dishes">MEAT DISHES</a>
                    </div>

                    <div>
                        <a href="/food/sea-food">SEA FOOD</a>
                    </div>

                    <div>
                        <a href="/food/pizzeria">PIZZERIA</a>
                    </div>

                    <div>
                        <a href="/food/street-food">STREET FOOD</a>
                    </div>

                    <div class="head">
                        <span>
                            <img src="{{ URL::asset('images/ico_lounge.svg') }}">
                        </span>
                        <a href="#">LOUNGE</a>
                    </div>

                    <div>
                        <a href="/lounge/arsenale">EVENTI & LOUNGE</a>
                    </div>

                    <div class="head simple">
                        <a href="/eventi">EVENTI</a>
                    </div>

                    <div class="head simple">
                        <a href="/contatti">CONTATTI</a>
                    </div>
                </div>
            </div>

            <div class="sidebar-image"></div>
        </div>
    </div>
</header>