@include('layout.master')

@section('content')

{!!Html::style('css/global.css')!!}
{!!Html::style('css/auth.css')!!}

<div class='container'>
    <div class='col-sm-12'>
        <div class='col-sm-3'></div>
        <div class='col-sm-6'>
            <div class='panel login-panel'>
                <p>Logowanie</p>
                {!! Form::open(['url' => 'logowanie', 'method' => 'POST']) !!}
                    {!! Form::email('email', 'jkowalski@gmail.com', ['class' => 'cokolwiek']) !!}
                    {!! Form::password('password', ['class' => 'cokolwiek']) !!}
                    {!! Form::submit('Zaloguj', ['class' => 'submit-button']) !!}
                {!! Form::close() !!}
            </div>
        </div>
        <div class='col-sm-3'></div>
    </div>
</div>