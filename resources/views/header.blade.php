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
        <script src="js/jquery-3.2.1.slim.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/navshrink.js"></script>
    </footer>
<html>