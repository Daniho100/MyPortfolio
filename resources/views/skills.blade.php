<!DOCTYPE html>
<html lang="en">
    <head>
      @include('css')
        
    </head>

    <body>
        <div>
            <div class="container main">
                <div class="row">
                    <div class="col-md-6" id="work_left">
                        <div id="owl-demo" class="owl-carousel owl-theme">
                            <div class="item"><img class="img-responsive img-rabbit" src="assets/images/skills.jpg"></div>
                        </div>
                    </div>

                    <div class="col-md-6" id="work_right" style="margin-top: -35px;">
                        <a href="{{url('/')}}" class="btn btn-rabbit back"> <i class="fa fa-angle-left" aria-hidden="true"></i> Back to Home </a>
                        <div id="watermark">
                            <h2 class="page-title" text-center>Skills</h2>
                            <div class="marker">s</div>
                        </div>
                        <p class='subtitle'>These are the skills I use to have fun(work). The last one is actually an underrated skill but very important.
                        </p>
                        <div class="btn-group-vertical custom_btn animated slideinright">
                        <a href=""><div id="about" class="btn btn-rabbit">HTML</div></a>
                        <a href=""><div id="skills" class="btn btn-rabbit">CSS</div></a>
                        <a href=""><div id="work" class="btn btn-rabbit">Bootstrap</div></a>
                        <a href=""><div id="contact" class="btn btn-rabbit">Laravel</div></a>
                        <a href=""><div id="about" class="btn btn-rabbit">React.js</div></a>
                        <a href=""><div id="skills" class="btn btn-rabbit">Javascript</div></a>
                        <a href=""><div id="work" class="btn btn-rabbit">PHP</div></a>
                        <a href=""><div id="contact" class="btn btn-rabbit">Github</div></a>
                        <a href=""><div id="contact" class="btn btn-rabbit">Azure DevOps</div></a>
                        <a href=""><div id="work" class="btn btn-rabbit">Jira</div></a>
                        <a href=""><div id="contact" class="btn btn-rabbit">MySQL</div></a>
                        <a href=""><div id="work" class="btn btn-rabbit">Google research, StackOverflow and Youtube</div></a>
                        </div> 
                    </div>
                </div>
            </div>    
        </div>  
            @include('footer')
            
        @include('script')
    </body>
</html>