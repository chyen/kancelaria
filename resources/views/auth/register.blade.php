@include('layout.master')

@section('content')

{!!Html::style('css/global.css')!!}
{!!Html::style('css/auth.css')!!}

<div class='container'>
    <div class='col-sm-3'></div>
        <div class='col-sm-6'>
            <div class='panel register-panel'>
                <p>Rejestracja</p>
                <p>Na podany adres zostanie wysłany link aktywacyjny, klikając w niego konto zostanie aktywowane</p>
                {!! Form::open(['url' => 'rejestracja', 'method' => 'POST']) !!}
                    {!! Form::email('email', 'jkowalski@gmail.com') !!}
                    {!! Form::password('password') !!}
                    {!! Form::password('password_confirmation') !!}
                    {!! Form::submit('Rejestruj') !!}
                {!! Form::close() !!}
            </div>
        </div>
        <div class='col-sm-3'></div>
</div>