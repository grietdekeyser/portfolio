@extends('layouts.app')

@section('title', 'Griet De Keyser - Laravel')

@section('css')
<link href="{{ asset('css/detail.css') }}" rel="stylesheet">
@endsection

@section('content')
<section class="text">
    <h1>PHP Framework: Laravel</h1>
    <p>Nadat je PHP onder de knie had, volgde een module PHP framework. De opzet van deze module was om op eigen houtje met een PHP framework naar keuze te leren werken. Er bestond namelijk geen cursus, de enige leidraad was een lijst met een aantal doelstellingen, waaronder routes configureren, validatie en applicaties beveiligen.
    <br>
    Dit was voor mij een ideale moment om met <a href="https://www.docker.com/" target="_blank">Docker</a> (en meer specifiek Laradock) te leren werken.
    </p>
    <div class="flex right">
        <div>
            <h2>Waarom Laravel?</h2>
            <p>Om een keuze te kunnen maken tussen de verschillende frameworks, ging ik op zoek naar informatie over de verschillende frameworks. Ik vergeleek hun voor- en nadelen, hun learning curve en hoe vaak elk framework gebruikt wordt. Op basis hiervan besliste ik dat Laravel momenteel de beste keuze was voor mij.</p>
        </div>
        <div class="img-modal">
            <img id="prlog" src="/img/googletrends_php.png" alt="Googlte trends: PHP frameworks">
        </div>
    </div>
    <div class="flex left">
        <div>
            <h2>Laracasts</h2>
            <p>In deze module moest je zelf aan de slag met wat je online kon terugvinden over het gekozen framework. Naast de documentatie van Laravel, kwam ik al snel bij <a href="https://laracasts.com/" target="_blank">Laracasts</a> uit. De screencasts van Laracasts bezorgden me niet alleen urenlang kijkplezier maar ook heel veel nieuwe kennis. Ik leerde o.a. werken met routes, Blade templates, migrations, mailables en flash messages. Het behandelen en valideren van formulieren en autoriseren van gebruikers kwam eveneens aan bod. Verder werden concepten zoals service containers en providers, middlecare en collections toegelicht.
            <br>
            Daarnaast gaf Laracasts me ook extra duwtje in de rug om terug Sublime Text te gebruiken, in plaats Netbeans. Niet alleen vond ik dat het een aangenamere look & feel had, de videos van Laracasts toonden me ook heel wat interessante plugins die werken met Sublime Text veel efficiënter maakten.
            </p>
        </div>
        <div class="img-modal">
            <img id="prlog" src="/img/laravel_laracasts.png" alt="Laracasts: Laravel 5.7 From Scratch">
        </div> 
    </div>
</section>

<section class="buttons">
    <p>
        <a href="/opleiding/algemeneopleiding" class="button"><i class="fas fa-angle-double-left"></i> Algemene opleiding</a>
        <a href="/opleiding/php" class="button"><i class="fas fa-angle-left"></i> PHP</a>
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
