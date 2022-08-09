<!DOCTYPE html>
    <html lang="en">
    <head>
      @include('css')

      <style>
        .un
        {
            margin-top: 10px;
        }
        </style>
        
    </head>

    <body>
    
    <div >                                  <!-- Work starts here -->
            <div class="container main">
                <div class="row">
                    <div class="col-md-6" id="work_left">
                        <div id="owl-demo" class="owl-carousel owl-theme">
                            <div class="item"><img class="img-responsive img-rabbit" src="assets/images/work.jpg"></div>
                            <!-- <div class="item"><img class="img-responsive img-rabbit" src="assets/images/home.jpg"></div>
                            <div class="item"><img class="img-responsive img-rabbit" src="assets/images/contact.jpg"></div> -->
                        </div>
                    </div>

                    <div class="col-md-6" id="work_right">
                        <a href="{{url('/')}}" class="btn btn-rabbit back"> <i class="fa fa-angle-left" aria-hidden="true"></i> Back to Home </a>
                        <div id="watermark">
                            <h2 class="page-title" text-center>Live Projects</h2>
                            <div class="marker">l</div>
                        </div>
                        <p class='subtitle'>This is a selection of my web design and development works. I've been involved in different types of project.
                        </p>
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-3">
                                    <div class="card" style="width: 12rem;">
                                        <div class="card-body">
                                            <h5 class="card-title"><span style="color: #62c6b7;">Tracnine</span></h5>
                                            <p class="card-text">A logistics app.</p>
                                            <a href="https://portal.tracnine.com" class="btn btn-primary">View App</a>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                    <div class="card" style="width: 12rem;">
                                        <div class="card-body">
                                            <h5 class="card-title"><span style="color: #62c6b7;">OA Ltd</span></h5>
                                            <p class="card-text">A tailoring app.</p>
                                            <a href="https://oaltd.com.ng" class="btn btn-primary">View App</a>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    </div>

                                    <div class="container un">
                                <div class="row">
                                    <div class="col-sm-3">
                                    <div class="card" style="width: 10rem;">
                                        <div class="card-body">
                                            <h5 class="card-title"><span style="color: #62c6b7;">Dropify Mall</span></h5>
                                            <p class="card-text">An ecommerce app.</p>
                                            <a href="https://www.dropifymall.com.ng" class="btn btn-primary">View App</a>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                    <div class="card" style="width: 10rem;">
                                        <div class="card-body">
                                            <h5 class="card-title"><span style="color: #62c6b7;">Estate Mate</span></h5>
                                            <p class="card-text">A real estate app.</p>
                                            <a href="https://www.estatemate.co.za/" class="btn btn-primary">View App</a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="container un">
                                <div class="row">
                                    <div class="col-sm-3">
                                    <div class="card" style="width: 10rem;">
                                        <div class="card-body">
                                            <h5 class="card-title"><span style="color: #62c6b7;">Cucumishlush</span></h5>
                                            <p class="card-text">An ecommerce app.</p>
                                            <a href="" class="btn btn-primary">In progress</a>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                    <div class="card" style="width: 10rem;">
                                        <div class="card-body">
                                            <h5 class="card-title"><span style="color: #62c6b7;">Starson Apparels</span></h5>
                                            <p class="card-text">An ecommerce app. </p>
                                            <a href="" class="btn btn-primary">In progress</a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>   
                        
                    </div>
                </div>
            </div>    
        </div>    
        
       
            @include('footer')
            
                                                                     <!-- Contact ends here -->
        
        @include('script')
    </body>
</html>