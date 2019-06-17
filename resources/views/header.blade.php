<html>
    <head>
        <title>@yield('title')</title>
        @yield('head')
        <link href="css/bootstrap.min.css" rel="stylesheet" >
        <link href="css/styles.css" rel="stylesheet" >
    <head>
    <body>
        @yield('content')
    </body>
    <footer>
        @yield('foot')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/navshrink.js"></script>
    </footer>
<html>