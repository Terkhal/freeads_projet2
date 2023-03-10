<html>
<style>
    .navbar {
        display: flex;
        margin: 10px;
    }

    a {
        margin: 10px;
    }
</style>

<head>
    <title>Freeads - @yield('title')</title>
</head>

<body style="margin: auto;">

    <nav style="background-color: #607d8b;z-index: 999; height: 100px; display: flex; justify-content: flex-end; line-height: 64px; position: fixed; top: 0;">
        <div style="display: flex; align-items: center;" class="nav-wrapper">
            <ul class="right hide-on-med-and-down">
                <li><a href="home" class="waves-effect waves-light btn">Home</a></li>
                <li><a href="login" class="waves-effect waves-light btn">Login</a></li>
                @if( session('user')->id == true)
                <li><a href="../profile" class="waves-effect waves-light btn">Profile</a></li>
                @endif

                <li><a href="../admin" class="waves-effect waves-light btn">Admin</a></li>
            </ul>
        </div>
    </nav>

</body>
<div>
    @yield('content')
</div>

</html>