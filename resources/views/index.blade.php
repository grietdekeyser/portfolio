@extends('layouts.app')

@section('css')
<link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endsection

@section('eyecatcher')
<div class="video">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/5oATg2IdXcM?start=11&autoplay=1&controls=0&mute=1&loop=1&playlist=5oATg2IdXcM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <div class="text">
        <h1>Griet De Keyser</h1>
        <h2>Beginnende developer die staat te springen voor een nieuwe uitdaging</h2>
    </div>
</div>

@endsection

@section('content')
<div class="home-full">
    <section class="cards">
        <a href="/overmij" class="card">
            <p class="icon"><i class="far fa-user"></i></p>
            <h2>Over mij</h2>
            <p>Een jaar geleden hakte ik de knoop door, het was tijd voor een nieuw hoofdstuk in mijn professionele leven. Ik sloeg een andere weg in, richting IT, en ging op zoek naar een gepaste opleiding tot PHP-developer.
            <br>
            Ben je benieuwd waarom ik deze carrièreswitch maakte en wat vooraf ging?</p>
            <p class="read-more">Lees verder</p>
        </a>

        <a href="/opleiding" class="card">
            <p class="icon"><i class="fa fa-glasses"></i></p>
            <h2>Opleiding</h2>
            <p>In januari 2019 begon ik aan de opleiding 'PHP-ontwikkelaar' bij de VDAB, die startte met een <strong>basisopleiding</strong> waarin onderwerpen gaande van programmatielogica over SQL tot CSS aan bod kwamen. Daarna volgde een specifieke opleiding, waarbij ik koos voor <strong>PHP</strong> en <strong>Laravel</strong>.
            <br>
            Ondertussen is mijn opleiding bijna afgerond en ben ik klaar om mijn nieuwe vergaarde kennis toe te passen in de ‘echte wereld’ en verder bij te leren.</p>
            <p class="read-more">Lees verder</p>
        </a>
        <a href="/contact" class="card">
            <p class="icon"><i class="far fa-address-card"></i></p>
            <h2>Contact</h2>
            <p>Wil je contact opnemen? Heb je nog vragen? Aarzel dan niet om contact op te nemen.</p>
            <p class="read-more">Lees verder</p>
        </a>
    </div>
</div>
@endsection

