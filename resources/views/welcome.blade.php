@extends('header')
@section('title','SALLI WANG PRODUCTION')
@section('head')
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light" style="background-color:transparent">
    <div class="container" id="navbar">
        <a class="navbar-brand" href="#"><img style="max-width:25%;max-height:25%" src="img/logo.gif"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>

    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav my-2 my-lg-0">
            <a class="nav-item nav-link" href="#" style="color:white">Home</a>
            <a class="nav-item nav-link" href="#" style="color:white">Portofolio</a>
            <a class="nav-item nav-link" href="#">About</a>
            <a class="nav-item nav-link" href="#">Contact</a>
        </div>
    </div>
</nav>
<!-- Navbar -->
@endsection

@section('content')


<!-- Page 1 -->
<div id="background1">
    <div class="container-fluid page1">
        <div class="jumbotron">
                <div class="tengah">
                    <h1>CREATIVE PRODUCTION AGENCY</h1>
                    <p><button type="button" class="btn btn-outline-dark btn-lg">READ MORE</button></p>  
                </div>
        </div>
    </div>
</div>
<!-- Page 1 -->

<!-- Page 2 -->
<div id="page2">
    <div class="isi">
        <div class="container atas">
            <div class="row">
                <div class="col-lg-4">
                    <img class="img-circle" src="/img/fast.png">
                    <h4>Fast Turnaround</h4>
                    <p class="text-center">We make it easy for you to plan your promotions. 
                    We offer you fast turnaround, sending you intial design within 24 hours.</p>
                </div>
                <div class="col-lg-4">
                    <img class="img-circle" src="/img/quality.png">
                    <h4>Quality Design</h4>
                    <p class="text-center">We strive for quality design and keep improving it from time to time. 
                    Our team also provide great services. Your satisfaction is our priority.</p>
                </div>
                <div class="col-lg-4">
                    <img class="img-circle" src="/img/professional.png">
                    <h4>Professional Team</h4>
                    <p class="text-center">Cooperation is the key to success.
                    We always work in team to get the best result. Every of us will have our own job description.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="background2">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h2>BRANDING</h2>
                <p>Logo, website, business card, envelope, letterhead,
                    stationery, and all design needs for your company.
                    Let us do it for you.</p>
            </div>
            <div class="col">
                <h2>ADVERTISING</h2>
                <p>Banner ads, brochure, flyer, billboard, standing
                    banner and anything related to promoting your brand
                    and business. Trust it to us.</p>
            </div>
        </div>
    </div>
</div>

<!-- Page 2 -->

<!-- Page 3 -->

<div id="page3">
    <div class="container">
        <div class="jumbotron">
            <center>
                <h3>OUR CLIENT FROM ARROUND THE WORLD</h3>
            </center>
        </div>
        <div class="row partner">
            <div class="col-sm-3 atas"><img class="img-responsive" src="/img/1.png"></div>
            <div class="col-sm-3 atas"><img class="img-responsive" src="/img/2.png"></div>
            <div class="col-sm-3 atas"><img class="img-responsive" src="/img/3.png"></div>
            <div class="col-sm-3 atas"><img class="img-responsive" src="/img/4.png"></div>
            <div class="col-sm-3 bawah"><img class="img-responsive" src="/img/5.png"></div>
            <div class="col-sm-3 bawah"><img class="img-responsive" src="/img/6.png"></div>
            <div class="col-sm-3 bawah"><img class="img-responsive" src="/img/7.png"></div>
            <div class="col-sm-3 bawah"><img class="img-responsive" src="/img/8.png"></div>
        </div>
        <div class="row partner2">
            <div class="col-lg-4"><img class="img-responsive" src="img/p1.png" ></div>
            <div class="col-lg-4"><img class="img-responsive" src="img/p2.png"></div>
            <div class="col-lg-4"><img class="img-responsive" src="img/p3.png"></div>
        </div>
    </div>
</div>

<!-- Page 3 -->

<!-- Page 4 -->

<div id="page4">
    <div class="container-fluid atas">
        
    </div>
    <div class="container-fluid bawah">
        <h3>OUR WORK ON PROGRESS</h3>
        <div class="row">
            <div class="col-lg-4"><p>client</p></div>
            <div class="col-lg-4"><p>project completed</p></div>
            <div class="col-lg-4"><p>design completed</p></div>
        </div>
    </div>
</div>

<!-- Page 4 -->

<!-- Page 5 -->

<div id="page5">
    <h4>REQUEST A QOUTE</h4>
    <div class="container">
        <form>
        <label for="name">Name</label>
            <div class="form-row">
                <div class="col-sm-3">
                    <input type="text" class="form-control" placeholder="First name">
                </div>
                <div class="col-sm-3">
                    <input type="text" class="form-control" placeholder="Last name">
                </div>
            </div>
            <div class="form-group col-sm-4">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
            </div>
            <div class="form-group col-sm-6">
                <label for="help">What can we help you with?</label>
                <textarea class="form-control" id="help" rows="8"></textarea>
            </div>
            <button type="button" class="btn btn-dark">REQUEST NOW</button>
        </form>
    </div>
</div>

<!-- Page 5 -->
@endsection

@section('foot')
<div id="foot">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <h4>SW Production</h4>
                <nav class="nav flex-column">
                    <a class="nav-link" href="#">Home</a>
                    <a class="nav-link" href="#">Portofolio</a>
                    <a class="nav-link" href="#">About</a>
                    <a class="nav-link" href="#">Contact</a>
                </nav>
            </div>
            <div class="col-sm-3">
                <h4>About</h4>
                <nav class="nav flex-column">
                    <a class="nav-link" href="#">Our Process</a>
                    <a class="nav-link" href="#">FAQ</a>
                    <a class="nav-link" href="#">Privacy Policy</a>
                    <a class="nav-link" href="#">Terms & Conditions</a>
                </nav>
            </div>
            <div class="col-sm-3">
                <h4>Email Newsletter</h4>
                <div class="form-group">
                    <label for="email"><p>Get SW Production new content, updates, survey & offers</p></label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                </div>
                <button type="button" class="btn btn-dark">Subscribe</button>
            </div>
        </div>
        <p>Designed by SW Production | Copyright © 2017 SWPRODUCTIONID</p>
    </div>
</div>
@endsection