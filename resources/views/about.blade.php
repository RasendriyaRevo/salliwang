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
                    <h4>Privacy Policy</h4>
                    <p>This privacy policy discloses the privacy practices for www.swproductionid.com. This privacy policy applies solely to 
                    information collected by this web site. It will notify you of the following:</p>
                    <li>What personally identifiable information is collected from you through the web site, how it is used and with whom it may be shared.</li>
                    <li>What choices are available to you regarding the use of your data.</li>
                    <li>The security procedures in place to protect the misuse of your information.</li>
                    <li>How you can correct any inaccuracies in the information.</li><br>

                    <h4>Security</h4>
                    <p>We take precautions to protect your information. When you submit sensitive information via the website, your information is 
                    protected both online and offline. Wherever we collect sensitive information (such as credit card data), that information is 
                    encrypted and transmitted to us in a secure way. You can verify this by looking for a closed lock icon at the bottom of your 
                    web browser, or looking for “https” at the beginning of the address of the web page. While we use encryption to protect 
                    sensitive information transmitted online, we also protect your information offline. Only employees who need the information 
                    to perform a specific job (for example, billing or customer service) are granted access to personally identifiable information.
                    The computers/servers in which we store personally identifiable information are kept in a secure environment.</p><br>

                    <h4>Cookies</h4>
                    <p>We use “cookies” on this site. A cookie is a piece of data stored on a site visitor’s hard drive to help us improve your access 
                    to our site and identify repeat visitors to our site. For instance, when we use a cookie to identify you, you would not have to 
                    log in a password more than once, thereby saving time while on our site. Cookies can also enable us to track and target the 
                    interests of our users to enhance the experience on our site. Usage of a cookie is in no way linked to any personally identifiable 
                    information on our site. Some of our business partners may use cookies on our site (for example, advertising platform). However, 
                    we have no access to or control over these cookies.</p><br>
                    
                    <h4>Links</h4>
                    <p>This web site contains links to other sites. Please be aware that we are not responsible for the content or privacy practices of 
                    such other sites. We encourage our users to be aware when they leave our site and to read the privacy statements of any other site 
                    that collects personally identifiable information.</p><br>
                    
                    <h4>Updates</h4>
                    <p>Our Privacy Policy may change from time to time and all updates will be posted on this page.</p>
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
                    <h4>Terms & Conditions</h4>
                    <p>The Terms and Conditions contain our intellectual property policies, our content 
                    policies and general use policies. We reserve the right to refuse to work on any 
                    project, without the need for providing justification. We will not provide services 
                    for any project or potential client for content which is offensive, illegal, or which 
                    contains illicit or infringing material. Accordingly, the use of hateful, offensive, 
                    profane, racist, sexist, vulgar, or otherwise inappropriate conduct or language on the 
                    site is not permitted. <br><br>Please note that SWPRODUCTIONID is not responsible for any third 
                    party claims of copyright infringement for the materials (such as designs, fonts, stock 
                    photography, etc.) used in the design which are provided by the client. Accordingly, the 
                    client shall indemnify SWPRODUCTIONID, its affiliates, subsidiaries and related companies 
                    harmless from any losses, claims, obligations or other liabilities related to or arising 
                    out of the foregoing. <br><br>© 2019 SWPRODUCTIONID are trademarks of SWPRODUCTIONID</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
