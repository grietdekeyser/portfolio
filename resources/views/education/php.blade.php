@extends('layouts.app')

@section('title', 'Griet De Keyser - PHP')

@section('css')
<link href="{{ asset('css/detail.css') }}" rel="stylesheet">
@endsection

@section('content')
<section class="text">
    <h1>PHP</h1>
    <p>Na de basisopleiding, stond iedereen voor de keuze: in welke taal wil je je verdiepen: PHP, Java of .NET? Ik had deze keuze al voor het begin van de opleiding gemaakt: PHP sprak me het meest aan en de basisopleiding veranderde hier niets aan.
    <br>
    Na enkele <a href="/opleiding/algemeneopleiding">algemene modules</a>, kon ik eindelijk aan de PHP modules beginnen. De modules kunnen opgedeeld worden in twee delen, PHP en een PHP framework (in mijn geval: <a href="/opleiding/laravel">Laravel</a>). De PHP was voor mij het gepaste moment om over te schakelen van Sublime Text naar Netbeans en een debugger te leren gebruiken. Daarnaast maakte ik gebruik van XAMPP.</p>
    <div class="flex right">
        <div>
            <h2>Programming fundamentals</h2>
            <p>Het puur PHP-deel was opgesplitst in twee modules, PHP programming fundamentals en PHP advanced. De eerste module startte met een aantal algemene aspecten, waaronder controlestructuren, lussen, functies, gebruikersinvoer via GET en POST, sessies en cookies. Vervolgens lag de focus op objectoriëntatie, gaande van klassen met properties, getters, setters en een constructor tot statische en abstracte functies en interfaces. Als laatste werd verbindingen gemaakt met databanken, om gegevens op de halen, toe te voegen, aan te passen en te verwijderen.</p>
        </div>
        <div class="img-modal">
            <img id="prlog" src="/img/php_boek.png" alt="PHP programming fundamentals: oefening Boeken">
        </div>
    </div>
    <div class="flex left">
        <div>
            <h2>Advanced</h2>
            <p>De tweede module ging van start met het Model-View-Controller model en hoe je je code kan opsplitsen in verschillende lagen. Je leerde werken met exceptions, namespaces, autoloading en een templating engine (meer bepaald Twig). Als laatste was er een onderdeel over security, waar onderwerpen zoals SQL-injection, cross-site scripting en password hashing aan bod kwamen.</p>
        </div>
        <div class="img-modal">
            <img id="prlog" src="/img/php_broodjes.png" alt="PHP advanced: oefening Broodjes, controller inloggen">
        </div> 
    </div>
    <div class="flex right">
        <div>
            <h2>Eindoefening</h2>
            <p>Aan het einde van de twee modules, volgde een eindoefening om je kennis te testen. Je kreeg één week tijd om in PHP een pizza-webshop uit te werken, waar klanten zich kunnen registreren en bestellen. Daarnaast bepaalde je zelf de structuur van de databank die je gebruikte.</p>
        </div>
        <div class="img-modal">
            <img id="prlog" src="/img/php_pizza.jpg" alt="PHP: eindopdracht Pizza-webshop">
        </div>
    </div>
</section>

<section class="buttons">
    <p>
        <a href="/opleiding/algemeneopleiding" class="button"><i class="fas fa-angle-left"></i> Algemene opleiding</a>
        <a href="/opleiding/laravel" class="button">Laravel <i class="fas fa-angle-right"></i></a>
    </p>
</section>
<div class="modal closed">
    <span class="close">&times;</span>
    <img class="modal-content">
    <div class="caption"></div>
</div>
@endsection

@section('script')
<script src="{{ asset('js/modal.js') }}"></script>
@endsection

