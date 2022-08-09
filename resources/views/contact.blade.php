<!DOCTYPE html>
 <html lang="en">
    <head>
      @include('css')
        
    </head>

    <body>
    
        <div>  
            <div class="container main">
                <div class="row">
                    <div class="col-md-6 left" id="contact_left">
                        <img class="img-responsive img-rabbit" src="assets/images/contact.jpg">
                    </div>

                    <div class="col-md-6 right" id="contact_right">
                        <a href="{{url('/')}}" class="btn btn-rabbit back"> <i class="fa fa-angle-left" aria-hidden="true"></i> Back to Home </a>
                        <div id="watermark" style="margin-top: 50px;">
                            <h2 class="page-title" text-center>Contact</h2>
                            <div class="marker">c</div>
                        </div>
                        <p class='subtitle'>I'm based in Apapa in Lagos, not far from Surulere, and Island. You can always reach me on one of this channels, tip (LinkedIn is cool, WhatsApp is fast.)
                        </p>


                            <div class="btn-group-vertical custom_btn animated slideinright">
                            <a href="tel:+23407018438618"><div class="btn btn-rabbit">Call me</div></a>
                            <a href="mailto: daniandre.dah@gmail.com"><div class="btn btn-rabbit">Send an email</div></a>
                            <a href="https://www.linkedin.com/in/daniel-ojiaku-0a440221a/"><div class="btn btn-rabbit">Via LinkedIn</div></a>
                            <a href="https://wa.me/2347018438618"><div class="btn btn-rabbit">Via WhatsApp</div></a>
                            </div>      
                        
                    </div>
                </div>
            </div>
        </div>         

        @include('footer')
            
        @include('script')
    </body>
</html>