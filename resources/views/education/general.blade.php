@extends('layouts.app')

@section('title', 'Griet De Keyser - Algemene opleiding')

@section('css')
<link href="{{ asset('css/detail.css') }}" rel="stylesheet">
@endsection

@section('content')
<section class="text">
    <h1>Algemene opleiding</h1>
    <p>Nadat ik mezelf wat basics had geleerd via online tutorials (o.a. <a href="https://www.codecademy.com/Grietdk" target="_blank">Codecademy</a>), ging ik begin 2019 van start met de opleiding PHP ontwikkelaar bij de VDAB. De opleiding is opgebouwd uit twee grote delen, een basisopleiding ICT-ontwikkeling en specifiek deel, in mijn geval PHP ontwikkelaar. Beide delen zijn telkens opgedeeld in een aantal modules die op zelfstandige basis doorgenomen worden. Aan het eind van een module volgt een test of eindoefening om na te gaan of je de inhoud beheerst.
    <br>
    Het PHP-specifieke deel omvatte ook een aantal 'algemene' modules (HTML, CSS en JavaScript), die verder bouwden op modules uit de basisopleiding. Hier maak ik een andere opdeling tussen de verschillende modules, namelijk tussen 'algemene' - lees: niet-PHP - modules en specifieke modules (<a href="/opleiding/php">PHP</a> en <a href="/opleiding/laravel">Laravel</a>).
    </p>
    <div class="flex right" id="programmatielogica">
        <div>
            <h2>Programmatielogica</h2>
            <p>De opleiding ging van start met Programmatielogica. In deze module leerde je de basisprincipes van programmeren in Pascal, met behulp van programmastructuur-diagrammen. De topics variabelen, gegevenstypes, operatoren en basisstructuren - sequentie, selectie en iteratie - kwamen als eerste aan bod. Daarna volgden procedures, functies, arrays en strings. Ook het maken, lezen en aanpassen van bestanden kwam aan bod. Als extraatje werden verschillende <a href="https://youtu.be/ywWBy6J5gz8">sorteermethodes</a> uit de doeken gedaan.</p>
        </div>
        <div class="img-modal">
            <img src="/img/programmatielogica_oef.png" alt="Programmatielogica: oefening Lengte berekenen">
        </div>
    </div>
    <div>
        <h2>OOP</h2>
        <p>Na gestructureerd programmeren, volgde een introductie tot objectgeoriënteerd programmeren, aan de hand van Unified Modeling Language. Structuren en routines werden vervangen door klassen met attributen en methods. Concepten als encapsulation, inheritance, polymorfisme, abstracte klasse en interface kwamen aan bod, net als verschillende soorten associaties tussen klassen.</p>
    </div>
    <div class="flex left">
        <div>
            <h2>Gegevensanalyse</h2>
            <p>Hoe haal je informatie uit gegevens? Hoe kan je gegevens omzetten in een (relationele) database? Deze vragen zijn de focus van gegevensanalyse. Begrippen zoals entiteit, tabel, instantie, attribuut en sleutel toegelicht en je leerde hoe je gegevens kan normaliseren, met behulp van de regels van Codd - the key, the whole key and nothing but the key. Het resultaat hiervan, een relationeel datamodel, zetten we met MySQL Workbench om naar een conceptueel model en een relationele database.</p>
        </div>
        <div class="img-modal">
            <img src="/img/gegevensanalyse_model.png" alt="Gegevensanalyse: conceptueel model in MySQL" class="fix">
        </div>
    </div>
    <div class="flex right">
        <div>    
            <h2>SQL</h2>
            <p>Vervolgens gaan we aan de slag met relationele databases. Hoe kan je, met behulp van SQL en MySQL Workbench, gegevens kan ophalen en bewerken uit een database? De module toonde hoe je records kan selecteren, sorteren, groeperen, toevoegen, bewerken en verwijderen, hoe je tables kan maken, bewerken, combineren en verwijderen en hoe je views kan maken en verwijderen. Daarnaast kwamen ook aggregate functions en berekeningen in query’s en het combineren van query’s aan bod, net als sleutels en indexen.</p>
        </div>
        <div class="img-modal">
            <img src="/img/sql_query.png" alt="SQL: voorbeeld oefening">
        </div>
    </div>
    <div>
        <div>    
            <h2>HTML</h2>
            <p>De opbouw van de modules omtrent HTML, CSS en JavaScript verschilde van de voorgaande modules, de theorie wordt namelijk aangeleerd aan de hand van projecten. Voor meer achtergrondinformatie moet je zelf op zoek gaan in de theoriecursus of online.
            <br>
            Bij de aanvang van de modules worden enkele tools aangereikt (zoals validators en developer tools) en de webstandaarden, ondersteuning door browsers en enkele 'good practices' (o.a. scheiding tussen inhoud; opmaak en scripting) aangehaald. Vervolgens stond je voor de keuze met welke text editor je aan de slag zou gaan. Na wat opzoekwerk besliste ik te werken met Sublime Text, een keuze die me onmiddellijk goed beviel.
            <br>
            Als introductie voor HTML werd de structuur van een HTML-document en de DOM tree uit te doeken gedaan. Vervolgens kwamen heel wat HTML-tags uitgebreid aan bod, zoals lijsten, tabellen en formulieren.
            </p>
        </div>
    </div>
    <div class="flex left">
        <div>    
            <h2>CSS</h2>
            <p>De eerste kennismaking met CSS spitste zich toe op de basis van CSS, gaande van mogelijke sectoren, enkele belangrijke properties en eenheden tot het box model en floats. Daarnaast werden begrippen zoals cascade, inheritance, pseudo-klassen en -elementen toegelicht. In een latere fase werd dieper ingegaan op deze en andere topics, o.a. responsive design en media queries. Als afsluiter leerde je met Bootstrap werken. Hoewel ik me bewust ben de voordelen van een framework als Bootstrap, ben ik er persoonlijk minder fan van omdat je keuzevrijheid enigszins beperkt is.
            <br>
            Tijdens de projecten en taken ging ik ook online op zoek naar onderwerpen die amper of niet aan bod kwamen in de cursus. Zo kwam ik bijvoorbeeld flexbox tegen, een ontdekking die het mij veel eenvoudiger maakte. Ook gedurende de rest van de opleiding bleef ik mijn kennis van CSS bijschaven. Tijdens de module Laravel leerde ik, aan de hand van enkele online tutorials, bijvoorbeeld werken met SCSS.</p>
        </div>
        <div class="img-modal">
            <img src="/img/css_oef.png" alt="CSS: voorbeeld oefening">
        </div>
    </div>
    <div class="flex right">
        <div>    
            <h2>JavaScript</h2>
            <p>Bij JavaScript werd opnieuw ingepikt bij de DOM tree en hoe je dit kan manipuleren - met bijhorende methods en properties. De reeds opgedane kennis uit <a href="#programmatielogica">Programmatielogica</a> (bv. variabelen, functies en arrays) werd omgezet naar JavaScript en vormde de bouwstenen voor de rest van de module. Daarna kwamen topics zoals validatie, cookies en web storage, objecten, regular expressions en JSON aan bod.</p>
        </div>
        <div class="img-modal">
            <img src="/img/js_tagcloud.png" alt="JavaScript: oefening Tagcloud">
        </div>
    </div>
    <div class="flex left">
        <div>    
            <h2>Scrum & GIT</h2>
            <p>Als eindpunt van de basisopleiding was er een 'scrumweek', waarin scrum en GIT in de praktijk werden omgezet. De hele week werkte ik samen met enkele medestudenten een opdracht uit - een <a href="https://vdab-flexidating.github.io/" target="_blank">datingsite</a> in JavaScript. Het was een ideaal moment om tips & tricks uit te wisselen met medestudenten, maar ook om de voor- en nadelen van samenwerken aan één project ervaren.</p>
        </div>
        <div class="img-modal">
            <img src="/img/scrum_flexidating.jpg" alt="Scrumproject: screenshot datingsite">
        </div>
    </div>
</section>

<section class="buttons">
    <p>
        <a href="/opleiding/php" class="button">PHP <i class="fas fa-angle-right"></i></a>
        <a href="/opleiding/laravel" class="button">Laravel <i class="fas fa-angle-double-right"></i></a>
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
