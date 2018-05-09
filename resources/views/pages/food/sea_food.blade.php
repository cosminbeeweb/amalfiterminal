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
    <h2 class="cafe-header">I nostri piatti di pesce</h2>

    <p class="cafe-description">
        Lorem Ipsum è un testo segnaposto utilizzato nel settore della tipografia e della stampa. Lorem Ipsum è considerato il testo segnaposto standard sin dal sedicesimo secolo, quando un anonimo tipografo prese una cassetta di caratteri e li assemblò per preparare un testo campione. È sopravvissuto non solo a più di cinque secoli, ma anche al passaggio alla videoimpaginazione, pervenendoci sostanzialmente inalterato. Fu reso popolare, negli anni ’60, con la diffusione dei fogli di caratteri trasferibili “Letraset”, che contenevano passaggi del Lorem Ipsum, e più recentemente da software di impaginazione come Aldus PageMaker, che includeva versioni del Lorem Ipsum.
    </p>

    <div class="cafe-menu">
        <h2 class="menu-header">Antipasti di mare - Seafood appetizers</h2>

        <div class="menu">
            <div class="item">
                <div class="item-content">
                    <div class="title">
                        <p class="title-text">Bruschetta Nettuno </p>
                        <p class="description">
                            pane casereccio, pomodorini, alici marinate
                        </p>
                        <p class="description">
                            Toasted bread with marinated anchovies and cherry tomatoes
                        </p>
                    </div>

                    <div class="tag">
                        <p>€ 8,00</p>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="item-content">
                    <div class="title">
                        <p class="title-text">Trilogia di cozze</p>
                        <p class="description">cozze cotte in tre modi diversi su vellutata di fagioli</p>
                        <p class="description">Mussels cooked in three different ways on bean velvety</p>
                    </div>

                    <div class="tag">
                        <p>€ 10,00</p>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="item-content">
                    <div class="title">
                        <p class="title-text">Soutè del Pescatore</p>
                        <p class="description">Calamari, gamberi, frutti di mare al salto su crostone di pane*</p>
                        <p class="description">Toasted bread with marinated anchovies and cherry tomatoes</p>
                    </div>

                    <div class="tag">
                        <p>€ 14,00</p>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="item-content">
                    <div class="title">
                        <p class="title-text">Gamberi Kataifi</p>
                        <p class="description">su maionese spicy con sorbetto al limone</p>
                        <p class="description">Shrimp in kataifi pasta on spicy mayonnaise and lemon sorbet</p>
                    </div>

                    <div class="tag">
                        <p>€ 14,00</p>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="item-content">
                    <div class="title">
                        <p class="title-text">Insalata di Mare</p>
                        <p class="description">gamberi, calamari, polpo, cozze, vongole e patate lesse con olive e pomodorini*</p>
                        <p class="description">Shrimp, squid, octopus, mussels, clams and boiled potatoes with olives and tomatoes
                        </p>
                    </div>

                    <div class="tag">
                        <p>€ 15,00</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <p class="info-menu">*  In Mancanza Di Materie Prime Fresche Potrebbero Essere Usati Prodotti Surgelati</p>

    <div class="cafe-menu">
        <h2 class="menu-header">Primi piatti di mare - First courses of the sea</h2>

        <div class="menu">
            <div class="item">
                <div class="item-content">
                    <div class="title">
                        <p class="title-text">Scialatielli allo scoglio</p>
                        <p class="description">
                            vongole, cozze, calamari, gamberi, pomodori*
                        </p>
                        <p class="description">
                            Homemade pasta with clams, mussels, calamari, shrimp and cherry tomatoes
                        </p>
                    </div>

                    <div class="tag">
                        <p>€ 15,00</p>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="item-content">
                    <div class="title">
                        <p class="title-text">Pacchero gratinato</p>
                        <p class="description">
                            su vellutata di zucca al profumo di menta e gamberi
                        </p>
                        <p class="description">
                            Local pasta gratin on pumpkin cream with mint and prawn scent
                        </p>
                    </div>

                    <div class="tag">
                        <p>€ 14,00</p>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="item-content">
                    <div class="title">
                        <p class="title-text">Spaghetti chitarra</p>
                        <p class="description">
                            con colatura di alici di Cetara e nocciole di Giffoni
                        </p>
                        <p class="description">
                            Spaghetti with anchovies local sauce and hazelnuts
                        </p>
                    </div>

                    <div class="tag">
                        <p>€ 14,00</p>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="item-content">
                    <div class="title">
                        <p class="title-text">Tubettone rigato al ragù di mare</p>
                        <p class="description">
                            Small pasta with seafood sauce
                        </p>
                    </div>

                    <div class="tag">
                        <p>€ 15,00</p>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="item-content">
                    <div class="title">
                        <p class="title-text">Spaghetti con vongole veraci</p>
                        <p class="description">
                            Spaghetti with clams
                        </p>
                    </div>

                    <div class="tag">
                        <p>€ 15,00</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="cafe-menu">
        <h2 class="menu-header">Secondi piatti di mare - Second courses of the sea</h2>

        <div class="menu">
            <div class="item">
                <div class="item-content">
                    <div class="title">
                        <p class="title-text">Merluzzo</p>
                        <p class="description">
                            al cartoccio ai profumi della Divina
                        </p>
                        <p class="description">
                            Baked in foil Codfish in the scents of the coast
                        </p>
                    </div>

                    <div class="tag">
                        <p>€ 20,00</p>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="item-content">
                    <div class="title">
                        <p class="title-text">Scottata di tonno</p>
                        <p class="description">
                            al sesamo, erbe del campo e riduzione di Tramonti rosso
                        </p>
                        <p class="description">
                            Seared tuna with sesame, fresh herbs and reduction of local red wine
                        </p>
                    </div>

                    <div class="tag">
                        <p>€ 18,00</p>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="item-content">
                    <div class="title">
                        <p class="title-text">Millefoglie di alici</p>
                        <p class="description">
                            alici, zucchine e provola
                        </p>
                        <p class="description">
                            Millefeuille of anchovies, courgettes and smoked mozzarella
                        </p>
                    </div>

                    <div class="tag">
                        <p>€ 15,00</p>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="item-content">
                    <div class="title">
                        <p class="title-text">Misto di pesce alla griglia </p>
                        <p class="description">
                            trancio di tonno, filetto di orata, calamaro, scampo e gambero
                        </p>
                        <p class="description">
                            Mixed grilled fish: tuna steak, fillet of sea bream, squid, scampi and shrimp
                        </p>
                    </div>

                    <div class="tag">
                        <p>€ 28,00</p>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="item-content">
                    <div class="title">
                        <p class="title-text">Filetto di orata</p>
                        <p class="description">
                            in cassuola con verdure dell’orto
                        </p>
                        <p class="description">
                            Fillet of sea bream with mixed vegetables
                        </p>
                    </div>

                    <div class="tag">
                        <p>€ 18,00</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.map')
@endsection

@section('scripts')
<script src="{{ URL::asset('js/slider.js') }}"></script>
@endsection