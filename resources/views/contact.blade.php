@extends('header')
@section('title','SALLI WANG PRODUCTION - Contact Us')
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
                    <a class="black nav-item nav-link" href="#Home" style="color:black">Home</a>
                    <a class="black nav-item nav-link" href="#Portofolio" style="color:black">Portofolio</a>
                    <a class="black nav-item nav-link" href="#About" style="color:black">About</a>
                    <a class="black nav-item nav-link" href="#Contact" style="color:black">Contact</a>
            </div>
        </div>
    </div>
</nav>
<!-- Navbar -->

<!-- Contact -->
<div id="contactus">
    <div class="container-fluid">
        <h1>CONTACT US</h1>
    </div>
</div>

<div id="contactform">
    <div id="text">
        <h4 style="margin-bottom:60px"><b>Any question?</b></h4>
        <p>Feel free to contact us by filling the form below</p>
    </div>
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
            <div class="form-group col-sm-8 set">
                <label for="email">Email</label>
                <input type="email" class="form-control"id="inputEmail">
            </div>
            <div class="form-group col-sm-12 set">
                <label for="help">Message</label>
                <textarea class="form-control" id="help" rows="6"></textarea>
            </div>
            <button type="button" class="btn btn-dark"><b>SEND MESSAGE</b></button>
        </form>
        <div id="contactperson">
            <p><b>Office</b>  : Jl. Dharmawangsa No. 107 Nusa Dua, Bali</p>
            <p><b>Phone</b> : +62 (0) 81 9 7304 7876 </p>
            <p><b>Skype</b>  :  swproductionid</p>
            <p><b>Mail</b>     :  info@swproductionid.com</p>
        </div>
    </div>
</div>
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