<!DOCTYPE html>
<html lang="en">
    <head>
        <meta property="og:image" content="https://swproductionid.com/public/img/thumbnails.png" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="SALLI WANG PRODUCTION - Creative Design Agency" />
        <meta property="og:description" content="swproductionid - Creative Design Agency" />
        <meta property="og:url" content="https://swproductionid.com/" />
        <meta property="og:site_name" content="SALLI WANG PRODUCTION" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:description" content="swproductionid - Creative Design Agency" />
        <meta name="twitter:title" content="SALLI WANG PRODUCTION - Creative Design Agency" />
        <meta name="twitter:site" content="https://swproductionid.com/" />
        <meta name="description" content="swproductionid - Creative Design Agency"/>
        <title>@yield('title')</title>
    </head>
    <body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light" id="nav">
            <div class="container-fluid" id="navbar" style="margin-top: 5px;">
                <a class="navbar-brand logo" href="/"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon a"></span>
                </button>
            
                <div class="collapse navbar-collapse" style="justify-content:flex-end" id="navbarNavAltMarkup">
                    <div class="navbar-nav my-2 my-lg-0 ml-auto">
                            <a class="white nav-item nav-link" href="/" style="color:white">Home</a>
                            <a class="white nav-item nav-link" href="#" style="color:white">Portfolio</a>
                            <a class="black nav-item nav-link" href="about" style="color:black">About</a>
                            <a class="black nav-item nav-link" href="contact" style="color:black">Contact</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

        @yield('content')
        
    <footer>
        <div id="foot">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-3">
                        <h4>SWPRODUCTIONID</h4>
                        <nav class="nav flex-column">
                            <a class="nav-link" href="/">Home</a>
                            <a class="nav-link" href="#">Portfolio</a>
                            <a class="nav-link" href="about">About</a>
                            <a class="nav-link" href="contact">Contact</a>
                        </nav>
                    </div>
                    <div class="col-sm-3">
                        <h4>About</h4>
                        <nav class="nav flex-column">
                            <a class="nav-link" href="about">Our Process</a>
                            <a class="nav-link" href="about">Privacy Policy</a>
                            <a class="nav-link" href="about">Terms & Conditions</a>
                        </nav>
                    </div>
                    <div class="col-sm-3">
                        <h4>Email Newsletter</h4>
                        <div class="form-group">
                            <label for="email"><h5>Get SW Production new content, updates, survey & offers</h5></label>
                            <input type="email" class="form-control" id="inputEmail4" style="height:auto; border-radius:0; padding:0 0;" placeholder="Email Address">
                        </div>
                        <button type="button" class="btn btn-dark" >SUBSCRIBE</button>
                    </div>
                </div>
                <p>Designed by <b>SWPRODUCTIONID</b> | Copyright © 2019 <b>SWPRODUCTIONID</b></p>
            </div>
        </div>
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/navshrink.js"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" >
        <link href="css/styles.css" rel="stylesheet" >
    </footer>
    </body>
</html>
