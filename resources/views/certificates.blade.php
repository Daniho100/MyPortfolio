<!DOCTYPE html>
<html lang="en">
    <head>
    @include('css')
    
    </head>

    <body>
        <div >
            <div class="container main">
                <div class="row">
                    <div class="col-md-6 left" id="about_left">
                        <img class="img-responsive img-rabbit" src="assets/images/work.jpg">
                    </div>

                    <div class="col-md-6 right" id="about_right" style="margin-top: -55px;">
                        <a href="{{url('/')}}" class="btn btn-rabbit back"> <i class="fa fa-angle-left" aria-hidden="true"></i> Back to home </a>
                        <div id="watermark">
                            <h2 class="page-title" text-center>Certificates</h2>
                            <div class="marker">c</div>
                        </div>
                        <p class='subtitle'>These are my certificates and achievements since I started out as a software developer.
                        </p>
                        <a href="http://alison.com/user/learner-verification/22411303/1415"><div id="about" class="btn btn-rabbit"> Design Thinking and People Centered Design</div></a>
                        <a href="https://www.credly.com/badges/9a519a1a-c955-4a2f-ac81-ef7499db1b7f?source=linked_in_profile"><div id="skills" class="btn btn-rabbit">Enterprise Design Thinking Practitioner</div></a>
                        <a href="http://alison.com/user/learner-verification/22411303/2396"><div id="work" class="btn btn-rabbit">Idea Validation in Entrepreneurship</div></a>
                        <a href="http://alison.com/user/learner-verification/22411303/1565"><div id="contact" class="btn btn-rabbit"> Usability Testing</div></a>
                        <a href="http://alison.com/user/learner-verification/22411303/1564"><div id="about" class="btn btn-rabbit"> Generating Ideas, Stories and Prototypes</div></a>
                        <a href="http://alison.com/user/learner-verification/22411303/1420"><div id="skills" class="btn btn-rabbit"> Design Research and Analysis</div></a>
                        <a href="http://alison.com/user/learner-verification/22411303/2739"><div id="work" class="btn btn-rabbit">User Contexts and Sustainability of Design Process</div></a>
                        <a href="http://alison.com/user/learner-verification/22411303/2136"><div id="contact" class="btn btn-rabbit">Thinking Critically</div></a>
                        <a href="http://alison.com/user/learner-verification/22411303/2606"><div id="contact" class="btn btn-rabbit">Problem Solving and Critical Thinking Skills</div></a>
                        </div> 
                    </div>
                </div>
            </div>            
        </div> 

    
    
        @include('footer')
        
    
        @include('script')
    </body>
</html>