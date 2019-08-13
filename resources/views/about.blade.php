@extends('layouts.app')

@section('title', 'Griet De Keyser - Over mij')

@section('css')
<link href="{{ asset('css/about.css') }}" rel="stylesheet">
@endsection

@section('content')
<section class="time_hero">
    <div class="timeline" data-visible-items="3">
        <div class="timeline__wrap">
            <div class="timeline__items">
                <div class="timeline__item">
                    <div class="timeline__content">
                        <h2>Juni 1992</h2>
                        <p>Ik zet mijn eerste 'stapjes' in de wereld.</p>
                    </div>
                </div>
                <div class="timeline__item">
                    <div class="timeline__content">
                        <h2>September 2010</h2>
                        <p>Na een middelbare schooltijd vol wetenschappen en wiskunde, is het tijd voor een bredere kijk op de wereld. De <strong>bachelor Politieke Wetenschappen</strong> lacht me toe.</p>
                    </div>
                </div>
                <div class="timeline__item">
                    <div class="timeline__content">
                        <h2>September 2013</h2>
                        <p>Tijdens de <strong>master Politieke Wetenschappen</strong> verdiep ik me verder in de internationale politiek.</p>
                    </div>
                </div>
                <div class="timeline__item">
                    <div class="timeline__content">
                        <h2>Januari 2014</h2>
                        <p>Een stap in het duister...
                        <br>
                        Ik steek de noordpoolcirkel over en ga op <strong>Erasmus</strong> naar Tromsø, Noorwegen om er te studeren aan het meest noordelijke universiteit ter wereld.
                        </p>
                    </div>
                </div>
                <div class="timeline__item">
                    <div class="timeline__content">
                        <h2>September 2014</h2>
                        <p>Ik wil mijn kennis verder verruimen en kies voor het <strong>voorbereidingsprogramma Bedrijfseconomie</strong>.</p>
                    </div>
                </div>
                <div class="timeline__item">
                    <div class="timeline__content">
                        <h2>2016</h2>
                        <p>Na lang wikken en wegen beslis ik mijn thesis aan de kant te schuiven en mijn <strong>master Politieke Wetenschappen stop te zetten</strong>.</p>
                    </div>
                </div>
                <div class="timeline__item">
                    <div class="timeline__content">
                        <h2>2017</h2>
                        <p>Ik blijf plakken in Gent.</p>
                    </div>
                </div>
                <div class="timeline__item">
                    <div class="timeline__content">
                        <h2>Maart 2017</h2>
                        <p>Ik ga aan de slag als <strong>digitaal en juridisch medewerker</strong> bij Remarkable Europe in Gent.</p>
                    </div>
                </div>
                <div class="timeline__item">
                    <div class="timeline__content">
                        <h2>Januari 2019</h2>
                        <p>Tijd voor een carrièreswitch!
                        <br>
                        Ik start aan de <strong>opleiding PHP-ontwikkelaar</strong>.</p>
                    </div>
                </div>
                <div class="timeline__item">
                    <div class="timeline__content">
                        <h2>Zomer 2019</h2>
                        <p>Mijn opleiding loopt op zijn einde...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="text">
    <h1>Over mij</h1>
    <p>Een jaar geleden hakte ik de knoop door, het was tijd voor een nieuw hoofdstuk in mijn professionele leven. Ik sloeg een andere weg in, richting IT, en ging op zoek naar een gepaste opleiding tot PHP developer.</p>
    <h2>Hoe het allemaal begon...</h2>
    <p>In het zesde middelbaar moest een dikke knoop doorgehakt worden: wat zou ik gaan studeren? Anders dan mijn meeste klasgenoten koos ik niet voor een richting die een logisch vervolg was op onze studierichting, wetenschappen-wiskunde. Ik voelde dat ik nog veel wilde bijleren over de wereld, naast de exacte wetenschappen. Zo kwam ik al snel uit bij Politieke wetenschappen, een opleiding waar een heel breed spectrum van vakgebieden aan bod kwamen, gaande van economie en recht tot filosofie en psychologie.
    <br>
    Tijdens mijn opleiding was ik steeds geboeid door alle onderwerpen die de revue passeerden. Achteraf stelde ik vast dat mijn algemene kennis enorm was uitgebreid, maar ik weinig echt 'praktische' kennis of ervaring had opgebouwd. Ik wist van alles wat, maar was op geen enkel gebied een expert in de praktijk. Tijdens mijn eerste werkervaring voelde ik al snel dat ik niet op mijn plaats zat. In plaats van een manusje-van-alles, wilde ik liever een expert worden in een bepaald vakgebied. 
    </p>
    <h2>Waarom IT?</h2>
    <p>Computers en programmeren trokken al lange tijd mijn aandacht. Het idee om te leren programmeren zat in mijn achterhoofd, maar lange tijd bleef het vooral bij een idee.
    <br>
    In de loop van 2018 hakte ik de knoop door en besliste dat ik me zou omscholen tot PHP developer. Ik ging op zoek naar een gepaste opleiding en kwam uit bij de opleiding van de VDAB. In afwachting van de start van deze opleiding, leerde ik mezelf al wat basics van HTML, CSS, JavaScript en PHP aan de hand van online tutorials (o.a. <a href="https://www.codecademy.com/Grietdk" target="_blank">Codecademy</a>). In 2019 was het eindelijk zo ver, ik startte met mijn <a href="/opleiding">opleiding</a> bij de VDAB.</p>
</section>
@endsection

@section('script')
<script src="{{ asset('js/timeline.js') }}"></script>
@endsection
