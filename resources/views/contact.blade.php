@extends('header')
@section('title','SALLI WANG PRODUCTION - Contact')

@section('content')
<!-- Contact -->
<div id="page">
    <div class="container-fluid">
        <h1>CONTACT</h1>
    </div>
</div>

<div id="pageform">
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
