@include('layout.master')

@section('content')

{!!Html::style('css/global.css')!!}
{!!Html::style('css/auth.css')!!}

<div class='container'>
    <div class='col-sm-3'></div>
        <div class='panel register-panel'>
            <p>Resetowanie hasła</p>
            <p>Na podany adres zostanie wygenerowane i wysłane nowe hasło, zalecana jest jego zmiana po zalogowaniu</p>
            {!! Form::open(['url' => 'reset-hasla', 'method' => 'POST']) !!}
                {!! Form::email('email', 'jkowalski@gmail.com') !!}
                {!! Form::submit('Resetuj hasło') !!}
            {!! Form::close() !!}
        </div>
    <div class='col-sm-3'></div>
</div>