@extends('layouts.app')

@section('title', 'Griet De Keyser - Contact')

@section('css')
<link href="{{ asset('css/cards.css') }}" rel="stylesheet">
@endsection

@section('eyecatcher')
<div class="hero contact">
</div>
@endsection

@section('content')
<h1 class="hide">Contact</h1>
<section class="cards">
    <div class="card contact">
        <p class="icon"><i class="far fa-address-card"></i></p>
        <h2>Contactgegevens</h2>
        <p>Aarzel niet om contact op te nemen.</p>
        <p>Griet De Keyser
        <br>
        <a href="mailto:dekeysergriet@gmail.com">dekeysergriet@gmail.com</a>
        <br>
        9050 Gent</p>
    </div>
    <div class="card contact">
        <p class="icon"><i class="far fa-file-alt"></i></p>
        <h2>Curriculum vitae</h2>
        <p>Ben je benieuwd naar mijn cv?</p>
        <p><a href="files/cv_griet_de_keyser.pdf" target="_blank">Bekijk mijn cv.</a></p>
        <p><i>Exclusief adres- en telefoongegevens.</i></p>
    </div>
</section>
@endsection
