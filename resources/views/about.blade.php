                                                               <!-- About ends here -->



                                                               <!DOCTYPE html>
<html lang="en">
    <head>
      @include('css')
        
    </head>

    <body>
    <div >                      <!-- about strats here  -->
            <div class="container main">
                <div class="row">
                    <div class="col-md-6 left" id="about_left">
                        <img class="img-responsive img-rabbit" src="assets/images/image2.jpeg">
                    </div>

                    <div class="col-md-6 right" id="about_right">
                        <a href="{{url('/')}}" class="btn btn-rabbit back"> <i class="fa fa-angle-left" aria-hidden="true"></i> Back to home </a>
                        <div id="watermark">
                            <h2 class="page-title" text-center>About</h2>
                            <div class="marker">a</div>
                        </div>
                        <p class='subtitle'>Hi, I am Daniel Ojiaku, Web developer from Lagos, Nigeria.
                             I am passionate about design, development and interaction. I really love and I'm good at what I do.
                        </p>
                        <p class="info">"I am a Full-stack Laravel, and React.js frontend engineer with 4 years experience,
                             I am an objective and dedicated person who likes to pay attention to details. I'm naturally a
                              self-starter with great interpersonal and communication skills, something I gained over the years working in 
                               renowned companies like AB Artworld, Roma-Rong and GIGM before becoming a developer. I have always loved exploring
                                new paths and doing fun things, I also like structured systems that are flexible and accomodating.
                                 Outside of work, I like to relax and enjoy quality time with family and friends, play football or any mentally stimulating
                                  games, watch movies and listen to music (Classics and Old School, helps ease my mind after debugging, lol).
                                   Oh! and I know 6 languages too, English, Igbo, Yoruba, Spanish, French and Italian (still learning Italian though)."</p>  
                    </div>
                </div>
            </div>            
        </div> 

        
       
            @include('footer')
            
        
        @include('script')
    </body>
</html>