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

<body>
    <div>
        <div class="navbar">
            <a href="/">
                <div>home</div>
            </a>
            <a href="../login">

                <div>login</div>
            </a>
            <a href="../admin">
                <div>admin</div>
            </a>
            <a href="../profile">
                <div>profile</div>
            </a>

        </div>

        <div class="container">
            @yield('content')
        </div>

</body>

</html>