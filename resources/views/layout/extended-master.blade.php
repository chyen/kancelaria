<!DOCTYPE html>
<html>
    @include('layout.head')
    {!!Html::style('css/menu.css')!!}
    <body>
        <div class="container main-container" style='width: 100%'>
            <div class='row'>
                @include('menu.user-menu')
            </div>
            <div class='row'>
                <div class='col-sm-2' style='height:100%'>
                    @include('menu.main-menu')
                </div>
                <div class='col-sm-10'>
                    @yield('content')
                </div>
            </div>
        </div>
    </body>
</html>
