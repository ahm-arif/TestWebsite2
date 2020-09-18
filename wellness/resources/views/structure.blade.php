@extends('index')
@section('title','Wellness Center || Organization Structure')
@section('content')

<section class="breadcrumb blog_bg">
  <div class="container" style="margin-top: 100px;">
    <div class="row">
      <div class="col-lg-12">
        <div class="breadcrumb_iner">
          <div class="breadcrumb_iner_item">
            <h2>Organizational Structure</h2>
            <p>Home
              <span class="ti-angle-double-right"></span>Organizational Structure
            </p>
            <h2 class="h1-responsive font-weight-bold my-5">Meet the Team</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="team-section text-center my-5">
  <div class="container">
  
    <div class="row text-center" style="display: flex;justify-content: space-around;">
   
      <div class="shadow col-md-3">
        <div class="avatar mx-auto" style="margin-top: 40px;  ">
          <img src="img/people.png" class="rounded z-depth-1-half" alt="Sample avatar">
          </div>
          <div class="namajabatan" style="margin-bottom: 20px;">
            <h4 class="font-weight-bold dark-grey-text my-4">Maria Kate</h4>
            <h6 class="text-uppercase grey-text mb-3">
              <strong>Photographer</strong>
            </h6>
       
            <a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-fb">
              <i class="fab fa-facebook-f"></i>
            </a>
      
            <a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-dribbble">
              <i class="fab fa-dribbble"></i>
            </a>
      
            <a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-tw">
              <i class="fab fa-twitter"></i>
            </a>
          </div>
        </div>
      
        <div class="shadow-lg col-md-3">
          <div class="avatar mx-auto" style="margin-top: 40px;">
            <img src="img/people.png" class="rounded z-depth-1-half" alt="Sample avatar">
            </div>
            <h4 class="font-weight-bold dark-grey-text my-4">John Doe</h4>
            <h6 class="text-uppercase grey-text mb-3">
              <strong>Front-end Developer</strong>
            </h6>
    
            <a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-email">
              <i class="fas fa-envelope"></i>
            </a>

            <a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-fb">
              <i class="fab fa-facebook-f"></i>
            </a>

            <a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-git">
              <i class="fab fa-github"></i>
            </a>
          </div>

          <div class="shadow col-md-3">
            <div class="avatar mx-auto" style="margin-top: 40px;">
              <img src="img/people.png" class="rounded z-depth-1-half" alt="Sample avatar">
              </div>
              <h4 class="font-weight-bold dark-grey-text my-4">Sarah Melyah</h4>
              <h6 class="text-uppercase grey-text mb-3">
                <strong>Web Developer</strong>
              </h6>

              <a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-li">
                <i class="fab fa-linkedin-in "></i>
              </a>

              <a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-tw">
                <i class="fab fa-twitter "></i>
              </a>

              <a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-pin">
                <i class="fab fa-pinterest "></i>
              </a>
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row2 -->
          <div class="row text-center" style="display: flex;justify-content: space-around;margin-top: 30px;margin-bottom: 140px;">
            <!-- Grid column -->
            <div class="shadow col-md-3">
              <div class="avatar mx-auto" style="margin-top: 40px">
                <img src="img/people.png" class="rounded z-depth-1-half" alt="Sample avatar">
                </div>
                <div class="namajabatan" style="margin-bottom: 60px;">
                  <h4 class="font-weight-bold dark-grey-text my-4">Maria Kate</h4>
                  <h6 class="text-uppercase grey-text mb-3">
                    <strong>Photographer</strong>
                  </h6>
                </div>
              </div>

              <div class="shadow-lg col-md-3">
                <div class="avatar mx-auto" style="margin-top: 40px;">
                  <img src="img/people.png" class="rounded z-depth-1-half" alt="Sample avatar">
                  </div>
                  <h4 class="font-weight-bold dark-grey-text my-4">John Doe</h4>
                  <h6 class="text-uppercase grey-text mb-3">
                    <strong>Front-end Developer</strong>
                  </h6>
                </div>

                <div class="shadow col-md-3">
                  <div class="avatar mx-auto" style="margin-top: 40px;">
                    <img src="img/people.png" class="rounded z-depth-1-half" alt="Sample avatar">
                    </div>
                    <h4 class="font-weight-bold dark-grey-text my-4">Sarah Melyah</h4>
                    <h6 class="text-uppercase grey-text mb-3">
                      <strong>Web Developer</strong>
                    </h6>
                  </div>

                </div>
              </div>
            </section>
@stop