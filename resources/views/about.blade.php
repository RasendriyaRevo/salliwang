@extends('header')
@section('title','SALLI WANG PRODUCTION - About')

@section('content')
<!-- About -->
<div id="page">
    <div class="container-fluid">
        <h1>ABOUT</h1>
    </div>
</div>

<div id="pageform">
    <div id="text" style="margin:75px 200px">
        <p>Founded on 2013, SWPROUCTIONID works in the digital marketing segment. 
We wanted to create a company that blurred the line between friends, co-workers and the clients. In these 6 years, we have worked hard, grown and evolved by working with various brands/people all over the world. Like what our vision is, we aim to be the biggest digital creative agency in the world and help solving all your business problems. </p>
    </div>
    <div class="container" id="about">
        <div class="accordion" id="accordionAbout">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <a data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        <div class="row">    
                            <div class="col-sm-8"><p>Our process</p></div>
                            <div class="col-sm-4"><img class="img-responsive" src="img/plus.png"></div>
                        </div>
                    </a>
                </div>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionAbout">
                    <div class="card-body">
                        loremipsum
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingTwo">
                    <a data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <div class="row">    
                            <div class="col-sm-8"><p>Privacy Policy</p></div>
                            <div class="col-sm-4"><img class="img-responsive" src="img/plus.png"></div>
                        </div>
                    </a>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionAbout">
                    <div class="card-body">
                        This privacy policy discloses the privacy practices for www.swproductionid.com. 
                        This privacy policy applies solely to information collected by this web site. 
                        It will notify you of the following:
                        • What personally identifiable information is collected from you through the web site, how it is used and with whom it may be shared.
                        • What choices are available to you regarding the use of your data.
                        • The security procedures in place to protect the misuse of your information.
                        • How you can correct any inaccuracies in the information.
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingThree">
                    <a data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <div class="row">    
                            <div class="col-sm-8"><p>Terms & Conditions</p></div>
                            <div class="col-sm-4"><img class="img-responsive" src="img/plus.png"></div>
                        </div>
                    </a>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionAbout">
                    <div class="card-body">
                    The Terms and Conditions contain our intellectual property policies, our content 
                    policies and general use policies. We reserve the right to refuse to work on any 
                    project, without the need for providing justification. We will not provide services 
                    for any project or potential client for content which is offensive, illegal, or which 
                    contains illicit or infringing material. Accordingly, the use of hateful, offensive, 
                    profane, racist, sexist, vulgar, or otherwise inappropriate conduct or language on the 
                    site is not permitted. Please note that SWPRODUCTIONID is not responsible for any third 
                    party claims of copyright infringement for the materials (such as designs, fonts, stock 
                    photography, etc.) used in the design which are provided by the client. Accordingly, the 
                    client shall indemnify SWPRODUCTIONID, its affiliates, subsidiaries and related companies 
                    harmless from any losses, claims, obligations or other liabilities related to or arising 
                    out of the foregoing. © 2019 SWPRODUCTIONID are trademarks of SWPRODUCTIONID
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
