@extends('header')
@section('title','SALLI WANG PRODUCTION')
@section('head')

@endsection

@section('content')

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light" id="nav">
    <div class="container-fluid" id="navbar">
        <a class="navbar-brand logo" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon a"></span>
        </button>
    
        <div class="collapse navbar-collapse" style="justify-content:flex-end" id="navbarNavAltMarkup">
            <div class="navbar-nav my-2 my-lg-0 ml-auto">
                    <a class="white nav-item nav-link" href="#Home" style="color:white">Home</a>
                    <a class="white nav-item nav-link" href="#Portofolio" style="color:white">Portofolio</a>
                    <a class="black nav-item nav-link" href="#About" style="color:black">About</a>
                    <a class="black nav-item nav-link" href="#Contact" style="color:black">Contact</a>
            </div>
        </div>
    </div>
</nav>
<!-- Navbar -->
<!-- Page 1 -->
<div id="Home">
    <div class="jumbotron">
        <div class="tengah">
            <h1>CREATIVE PRODUCTION AGENCY</h1>
            <p><button type="button" class="btn btn-outline-dark btn-lg"><b>READ MORE</b></button></p>  
        </div>
    </div>
</div>
<!-- Page 1 -->

<!-- Page 2 -->
<div id="About">
    <div class="container atas">
        <div class="row">
            <div class="col-lg-4">
                <img class="img-circle" src="img/fast.png">
                <h4>Fast Turnaround</h4>
                <p class="text-center">We make it easy for you to plan your promotions. 
                We offer you fast turnaround, sending you intial design within 24 hours.</p>
            </div>
            <div class="col-lg-4">
                <img class="img-circle" src="img/quality.png">
                <h4>Quality Design</h4>
                <p class="text-center">We strive for quality design and keep improving it from time to time. 
                Our team also provide great services. Your satisfaction is our priority.</p>
            </div>
            <div class="col-lg-4">
                <img class="img-circle" src="img/professional.png">
                <h4>Professional Team</h4>
                <p class="text-center">Cooperation is the key to success.
                We always work in team to get the best result. Every of us will have our own job description.</p>
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

<div id="Client">
    <div class="container">
        <div class="jumbotron">
            <h3>OUR CLIENT FROM ARROUND THE WORLD</h3>
        </div>
        <div id="slidepartner" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row partner">
                        <div class="col-xs-2 col-lg-3 atas"><a href="#"><img class="img-responsive" src="img/partner/iNewsTv.png"></div></a>
                        <div class="col-lg-3 atas"><a href="#"><img class="img-responsive" src="img/partner/VIK.png"></div></a>
                        <div class="col-lg-3 atas"><a href="#"><img class="img-responsive" src="img/partner/JNE.png"></div></a>
                        <div class="col-lg-3 atas"><a href="#"><img class="img-responsive" src="img/partner/Sequislife.png"></div></a>
                        <div class="col-lg-3 bawah"><a href="#"><img class="img-responsive" src="img/partner/Allianz.png"></div></a>
                        <div class="col-lg-3 bawah"><a href="#"><img class="img-responsive" src="img/partner/Tereos FKS.png"></div></a>
                        <div class="col-lg-3 bawah"><a href="#"><img class="img-responsive" src="img/partner/IITC Solution.png"></div></a>
                        <div class="col-lg-3 bawah"><a href="#"><img class="img-responsive" src="img/partner/Ca2con.png"></div></a>
                    </div>
                </div>
                
                <div class="carousel-item">
                    <div class="row partner">
                        <div class="col-lg-3 atas"><a href="#"><img class="img-responsive" src="img/partner/J&T.png"></div></a>
                        <div class="col-lg-3 atas"><a href="#"><img class="img-responsive" src="img/partner/Tokio Marine.png"></div></a>
                        <div class="col-lg-3 atas"><a href="#"><img class="img-responsive" src="img/partner/Hora.png"></div></a>
                        <div class="col-lg-3 atas"><a href="#"><img class="img-responsive" src="img/partner/Squeeze.png"></div></a>
                        <div class="col-lg-3 bawah"><a href="#"><img class="img-responsive" src="img/partner/BSP.png"></div></a>
                        <div class="col-lg-3 bawah"><a href="#"><img class="img-responsive" src="img/partner/Nutify.png"></div></a>
                        <div class="col-lg-3 bawah"><a href="#"><img class="img-responsive" src="img/partner/Logo Jeunesse.png"></div></a>
                        <div class="col-lg-3 bawah"><a href="#"><img class="img-responsive" src="img/partner/You.png"></div></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <div id="konten">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4 atas"><img class="img-responsive" src="img/P1.png"></div>
                <div class="col-sm-4 atas"><img class="img-responsive" src="img/P2.png"></div>
                <div class="col-sm-4 atas"><img class="img-responsive" src="img/P3.png"></div>
            </div>
        </div>
    </div>
</div>

<!-- Page 3 -->

<!-- Page 4 -->

<div id="Portofolio">
    <div class="container-fluid atas">
        <div class="row">
            <div class="col-sm-4"><img src="img/Portofolio/A.jpg"></div>
            <div class="col-sm-4"><img src="img/Portofolio/B.jpg"></div>
            <div class="col-sm-4"><img src="img/Portofolio/C.jpg"></div>
            <div class="col-sm-4"><img src="img/Portofolio/D.jpg"></div>
            <div class="col-sm-4"><img src="img/Portofolio/E.jpg"></div>
            <div class="col-sm-4"><img src="img/Portofolio/F.jpg"></div>
            <div class="col-sm-4"><img src="img/Portofolio/G.jpg"></div>
            <div class="col-sm-4"><img src="img/Portofolio/H.jpg"></div>
            <div class="col-sm-4"><img src="img/Portofolio/I.jpg"></div>
        </div>
    </div>
    <div class="container-fluid bawah">
        <h3>OUR WORK ON PROGRESS</h3>
        <div class="row">
            <div class="col-lg-4"><h1>50</h1><p>client</p></div>
            <div class="col-lg-4"><h1>130</h1><p>project completed</p></div>
            <div class="col-lg-4"><h1>170</h1><p>design completed</p></div>
        </div>
    </div>
</div>

<!-- Page 4 -->

<!-- Page 5 -->

<div id="Contact">
    <b><h4>REQUEST A QOUTE</h4></b>
    <div class="container">
        <form>
        <label for="name">Name</label>
            <div class="form-row">
                <div class="col-sm-6">
                    <input type="text" class="form-control" placeholder="First">
                </div>
                <div class="col-sm-6">
                    <input type="text" class="form-control"placeholder="Last">
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
            <p><button type="button" class="btn btn-dark">REQUEST NOW</button></p>
        </form>
    </div>
</div>

<!-- Page 5 -->
@endsection

@section('foot')
<div id="foot">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3">
                <h4>SWPRODUCTIONID</h4>
                <nav class="nav flex-column">
                    <a class="nav-link" href="#Home">Home</a>
                    <a class="nav-link" href="#Portofolio">Portofolio</a>
                    <a class="nav-link" href="#About">About</a>
                    <a class="nav-link" href="#Contact">Contact</a>
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
                    <label for="email"><h5>Get SW Production new content, updates, survey & offers</h5></label>
                    <input type="email" class="form-control" id="inputEmail4" style="height:auto; border-radius:0; padding:0 0;" placeholder="Email Address">
                </div>
                <button type="button" class="btn btn-dark" >SUBSCRIBE</button>
            </div>
        </div>
        <p>Designed by <b>SWPRODUCTIONID</b> | Copyright © 2019 <b>SWPRODUCTIONID</b></p>
    </div>
</div>
@endsection