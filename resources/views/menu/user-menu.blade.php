@section('user-menu')

{!!Html::style('css/global.css')!!}

<div class='navbar navbar-static-top navbar-user-menu'>
    <button class='btn btn-default btn-profile dropdown-toggle' id="userDropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">User</button>
    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
        <li><a href="#">Messeges</a></li>
        <li><a href="#">Settings</a></li>
        <li role="separator" class="divider"></li>
        <li><a href="#">Logout</a></li>
    </ul>
</div>