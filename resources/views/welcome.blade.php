@extends('header')
@section('title','SALLI WANG PRODUCTION')
@section('head')
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light" id="nav">
    <div class="container-fluid" id="navbar">
        <a class="navbar-brand logo" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" style="justify-content:flex-end" id="navbarNavAltMarkup">
            <div class="navbar-nav my-2 my-lg-0">
                    <a class="white nav-item nav-link" href="#background1" style="color:white">Home</a>
                    <a class="white nav-item nav-link" href="#page4" style="color:white">Portofolio</a>
                    <a class="black nav-item nav-link" href="#page2" style="color:black">About</a>
                    <a class="black nav-item nav-link" href="#page5" style="color:black">Contact</a>
            </div>
        </div>
    </div>
</nav>
<!-- Navbar -->
@endsection

@section('content')


<!-- Page 1 -->
<div id="background1">
    <div class="container-fluid page1">
        <div class="tengah">
            <h1>CREATIVE PRODUCTION AGENCY</h1>
            <p><button type="button" class="btn btn-outline-dark btn-lg"><b>READ MORE</b></button></p>  
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
            <h3>OUR CLIENT FROM ARROUND THE WORLD</h3>
        </div>
        <div id="slidepartner" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
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
                </div>
                <div class="carousel-item">
                    <div class="row partner">
                        <div class="col-sm-3 atas"><img class="img-responsive" src="/img/2.png"></div>
                        <div class="col-sm-3 atas"><img class="img-responsive" src="/img/2.png"></div>
                        <div class="col-sm-3 atas"><img class="img-responsive" src="/img/2.png"></div>
                        <div class="col-sm-3 atas"><img class="img-responsive" src="/img/2.png"></div>
                        <div class="col-sm-3 bawah"><img class="img-responsive" src="/img/2.png"></div>
                        <div class="col-sm-3 bawah"><img class="img-responsive" src="/img/2.png"></div>
                        <div class="col-sm-3 bawah"><img class="img-responsive" src="/img/2.png"></div>
                        <div class="col-sm-3 bawah"><img class="img-responsive" src="/img/2.png"></div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row partner">
                        <div class="col-sm-3 atas"><img class="img-responsive" src="/img/3.png"></div>
                        <div class="col-sm-3 atas"><img class="img-responsive" src="/img/3.png"></div>
                        <div class="col-sm-3 atas"><img class="img-responsive" src="/img/3.png"></div>
                        <div class="col-sm-3 atas"><img class="img-responsive" src="/img/3.png"></div>
                        <div class="col-sm-3 bawah"><img class="img-responsive" src="/img/3.png"></div>
                        <div class="col-sm-3 bawah"><img class="img-responsive" src="/img/3.png"></div>
                        <div class="col-sm-3 bawah"><img class="img-responsive" src="/img/3.png"></div>
                        <div class="col-sm-3 bawah"><img class="img-responsive" src="/img/3.png"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="konten">
        <div class="item1"><img style="width:100%;height:100%" src="img/p1.png"></div>
        <div class="item2"><img style="width:100%;height:100%" src="img/p2.png"></div>
        <div class="item3"><img style="width:100%;height:100%" src="img/p3.png"></div>
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
            <div class="col-lg-4"><h1 style="color:white">50</h1><p>client</p></div>
            <div class="col-lg-4"><h1 style="color:white">130</h1><p>project completed</p></div>
            <div class="col-lg-4"><h1 style="color:white">170</h1><p>design completed</p></div>
        </div>
    </div>
</div>

<!-- Page 4 -->

<!-- Page 5 -->

<div id="page5">
    <b><h4>REQUEST A QOUTE</h4></b>
    <div class="container">
        <form>
        <label for="name">Name</label>
            <div class="form-row">
                <div class="col-sm-6">
                    <input type="text" class="form-control" style="border-radius:0.2rem;border-color:black;border-width:1.5pt" placeholder="First">
                </div>
                <div class="col-sm-6">
                    <input type="text" class="form-control" style="border-radius:0.2rem;border-color:black;border-width:1.5pt" placeholder="Last">
                </div>
            </div>
            <div class="form-group col-sm-8" style="padding-left:0px; margin-top:12px;">
                <label for="email">Email</label>
                <input type="email" class="form-control" style="border-radius:0.2rem;border-color:black;border-width:1.5pt" id="inputEmail4">
            </div>
            <div class="form-group col-sm-12" style="padding-left:0px; padding-right:0px;">
                <label for="help">What can we help you with?</label>
                <textarea class="form-control" style="border-radius:0.2rem;border-color:black;border-width:1.5pt" id="help" rows="6"></textarea>
            </div>
            <p><button type="button" class="btn btn-dark" style="border-radius:0rem;background-color:black;border-color:black;border-width:2pt;font-size:15;
            padding:0.375rem 1.5rem">REQUEST NOW</button></p>
        </form>
    </div>
</div>

<!-- Page 5 -->
@endsection

@section('foot')
<div id="foot">
    <div class="container">
        <div class="row" style="margin-left:-100px;">
            <div class="col-sm-3">
                <h4>SW Production</h4>
                <nav class="nav flex-column">
                    <a class="nav-link" style="padding: .5rem 0px;" href="#">Home</a>
                    <a class="nav-link" style="padding: .5rem 0px;" href="#">Portofolio</a>
                    <a class="nav-link" style="padding: .5rem 0px;" href="#">About</a>
                    <a class="nav-link" style="padding: .5rem 0px;" href="#">Contact</a>
                </nav>
            </div>
            <div class="col-sm-3" style="padding-left:70px;">
                <h4>About</h4>
                <nav class="nav flex-column">
                    <a class="nav-link" style="padding: .5rem 0px;" href="#">Our Process</a>
                    <a class="nav-link" style="padding: .5rem 0px;" href="#">FAQ</a>
                    <a class="nav-link" style="padding: .5rem 0px;" href="#">Privacy Policy</a>
                    <a class="nav-link" style="padding: .5rem 0px;" href="#">Terms & Conditions</a>
                </nav>
            </div>
            <div class="col-sm-3">
                <h4>Email Newsletter</h4>
                <div class="form-group">
                    <label for="email"><h5>Get SW Production new content, updates, survey & offers</h5></label>
                    <input type="email" class="form-control" id="inputEmail4" style="height:auto; border-radius:0; padding:0 0;" placeholder="Email Address">
                </div>
                <button type="button" class="btn btn-dark" style="border-radius:0rem;background-color:black;border-color:white;border-width:2pt; padding: 0.3rem 1.5rem">SUBSCRIBE</button>
            </div>
        </div>
        <p style="margin-left:-100px; padding-left:15;">Designed by <b>SW Production</b> | Copyright © 2017 <b>SWPRODUCTIONID</b></p>
    </div>
</div>
@endsection