@include('layout.master')

@section('content')

{!!Html::style('css/global.css')!!}
<!--<link rel="stylesheet" href="{{ asset('asset/css/global.css') }}" type="text/css">-->

<div class='container'>
    <div class='col-sm-12'>
        <div class="panel panel-default panel-main">
            <div class="exp"></div>
            <div class="main-panel-title">
                <div>Kancelaria Adwokacka Pawelczyk</div>
                <div class="extended-title">In criminalibus probationes debent esse luce clariones</div>
            </div>
        </div>

    </div>
    <div class="col-sm-12">
        <div class="col-sm-9">
            <div class="panel panel-default panel-content">
                <p><b>Kancelaria Adwokacka Pawelczyk</b> Adwokata Janusza Pawelczyk świadczy pomoc prawną,
                    obejmującą swym zakresem większość dziedzin obwiązującego prawa dla podmiotów gospodarczych
                    oraz osób prywatnych ceniących sobie bezpieczeństwo, komfort, jak również dyskrecję w realizacji powierzonych zadań.
                </p>
                <p>Specjalizujemy się w prawie karnym, ze szczególnym uwzględnieniem szerokorozumianej dziedziny prawa gospodarczego.</p>
                <p>Atutem kancelarii jest połączenie wiedzy z wieloletnim doświadczeniem praktycznym oraz współpracą z renomowanymi kancelariami prawnymi w Polsce.</p>
                <p>Udzielamy pomocy prawnej na każdym etapie postępowania, zarówno przed Sądami i innymi organami państwowymi oraz samorządowymi.</p>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="panel panel-default panel-contact">
                <div class="contact-text">
                    <p><b>Dane kontakowe: </b></p>
                    <p>Kancelaria Adwokacka Pawelczyk</p>
                    <p>Adwokat Janusz Pawelczyk</p>
                    <p class="address">tel. +48 500-448-001</p>
                    <p class="address">e-mail biuro@kancelariapawelczyk.pl</p>
                    <p class="address">ul. Jana Kilińskiego 5</p>
                    <p class="address">07-410 Ostrołęka</p>
                </div>
            </div>
        </div>
    </div>
</div>

@show