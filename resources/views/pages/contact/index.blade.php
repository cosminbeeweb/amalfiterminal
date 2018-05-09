@extends('layouts.main')

@section('stylesheets')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/contatti.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/notifications.css') }}"/>
@endsection

@section('content')
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3027.8273720594325!2d14.59968311558446!3d40.63368885033937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x133b95ade9acab71%3A0xf16169030bb951c7!2sAmalfi+Terminal+Italian+Food+%26+Lounge+Bar!5e0!3m2!1sit!2sit!4v1506086582907" width="100%" height="550" frameborder="0" style="border:0" allowfullscreen=""></iframe>

@if (isset($notification))
    <div class="{{ 'notification ' . $notification->status }}">
        {{ $notification->message }} <i onClick="closeMe(this)" class="far fa-window-close"></i>
    </div>
@endif

<div class="content-wrapper">
    <div class="contatti-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi eaque eos fuga harum id laboriosam libero maiores modi molestiae nesciunt nisi non nulla numquam quam quos rem saepe sint, tempora. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet assumenda autem nemo, non perspiciatis saepe. A amet beatae deleniti dolore earum, eligendi ipsum obcaecati porro qui quos reprehenderit sit vel.</div>

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

    <div class="contatti-form">
        <h2>Contattaci</h2>
        <p>Compila il form per inviarci la tua richiesta</p>

        <form action="{{ route('send_message') }}" method="POST">
            {{ csrf_field() }}
            <input required type="text" name="nome" placeholder="NOME"/>
            <input required type="text" name="cognome" placeholder="COGNOME"/>

            <input required type="text" name="telefono" placeholder="TELEFONO"/>
            <input required type="email" name="email" placeholder="EMAIL"/>

            <textarea required name="note" placeholder="NOTE"></textarea>

            <button type="submit">INVIA</button>
        </form>
    </div>
</div>

@endsection

@section('scripts')
<script src="{{ URL::asset('js/notifications.js') }}"></script>
@endsection