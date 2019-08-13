@extends('layouts.app')

@section('title', 'Griet De Keyser - Opleiding')

@section('css')
<link href="{{ asset('css/cards.css') }}" rel="stylesheet">
@endsection

@section('eyecatcher')
<div class="hero education">
</div>
@endsection

@section('content')
<h1 class="hide">Opleiding</h1>
<section class="cards">
    <a href="opleiding/algemeneopleiding" class="card">
        <p class="icon"><i class="fas fa-laptop-code"></i></p>
        <h2>Algemene opleiding</h2>
        <p>Nadat ik mezelf wat basics had geleerd via online tutorials, ging ik van start met mijn opleiding tot ontwikkelaar bij de VDAB.
        <br>
        Het eerste deel van de opleiding bestond uit een aantal inleidende modules, zoals programmatielogica, object georiënteerd programmeren en gegevensanalyse. Daarna volgden meer specifieke modules waaronder HTML, CSS en JavaScript.</p>
        <p class="read-more">Lees verder</p>
    </a>
    <a href="opleiding/php" class="card">
        <p class="icon"><i class="fab fa-php"></i></p>
        <h2>PHP</h2>
        <p>Na het 'algemene' luik van de opleiding, stond iedereen voor de keuze: in welke (aangeboden) taal wil je je verdiepen? Ik had deze keuze al voor het begin van de opleiding gemaakt: PHP sprak me het meest aan en de basisopleiding veranderde hier niets aan.
        <br>
        In de modules kwamen heel wat verschillende onderwerpen aan bod, gaande van algemene aspecten zoals functies en lussen, tot databanken, namespaces en security.</p>
        <p class="read-more">Lees verder</p>
    </a>
    <a href="opleiding/laravel" class="card">
        <p class="icon"><i class="fab fa-laravel"></i></p>
        <h2>Laravel</h2>
        <p>Een deel van de PHP-opleiding bestond het aanleren van een PHP framework. Om een keuze te kunnen maken tussen de verschillende frameworks, ging ik op zoek naar hun voor- en nadelen. Op basis hiervan besliste ik dat Laravel momenteel de beste keuze was voor mij.
        <br>
        Voor deze module bestond geen cursus, je moest zelf aan de slag met de documentatie en eventuele online tutorials. Ik maakte gebruik van de screencasts van Laracasts, in combinatie met de documentatie van Laravel zelf.</p>
        <p class="read-more">Lees verder</p>
    </a>
</section>
@endsection
