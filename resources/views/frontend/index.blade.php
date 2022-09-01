@extends('frontend.main_master')
@section('main')

<div class="content">

 <!--carousel content start-->
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="" aria-current="true"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
    </div>
    <div class="carousel-inner">

      <div class="carousel-item active carousel-item-start">
          <img src="assets/img/slide.jpg" style="width: 100% ; height: 400px;" class="img-fluid" alt="...">
        <div class="container-carousel">
          <div class="carousel-caption t-start text-style">
                  
          </div>
        </div>
      </div>

      <div class="carousel-item carousel-item-next carousel-item-start"> 
           <img src="assets/img/slide1.jpg" style="width: 100% ; height: 400px;" class="img-fluid" alt="...">
        <div class="container-carousel">
          <div class="carousel-caption">
            
          </div>
        </div>
      </div>

      <div class="carousel-item">
         <img src="assets/img/slide2.jpg" style="width: 100%;height: 400px;" class="img-fluid" alt="...">
        <div class="container-carousel">          
          <div class="carousel-caption text-end d-none d-md-block">
            
          </div>
        </div>
      </div>

    </div>


    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


 <!--carousel content Ends-->

<!-- Section stars -->

<section class="container-wide step-illustration clearfix">
  <div class="container">  
    <p style="font-weight: 600; font-size: 28px; margin-top:30px;">The easy way to get your NHS repeat prescription</p>
    <br>

    <!-- Cards starts-->
    <div class="card-group">

      <div class="card">
        <img class="card-img-top" src="assets/img/medication_need.jpg" alt="Card image cap">
        <div class="card-body"></div>
        <div class="card-footer">
          <h3 class="card-title text-center">1</h3>
          <p class="card-text">You simply tell us what medication you need</p>
        </div>
      </div>

      <div class="card">
        <img class="card-img-top" src="assets/img/prescription_GP.jpg" alt="Card image cap">
        <div class="card-body"></div>
        <div class="card-footer">
          <h3 class="card-title text-center">2</h3>
          <p class="card-text">We order and receive the prescription form you GP*</p>          
        </div>
      </div>

      <div class="card">
        <img class="card-img-top" src="assets/img/pharmacists_check.jpg"alt="Card image cap">
        <div class="card-body"></div>
        <div class="card-footer">
          <h3 class="card-title text-center">3</h3>
          <p class="card-text">Our Pharmacists check and dispense your prescription</p>
        </div>
      </div>

      <div class="card">
        <img class="card-img-top" src="assets/img/delivery.jpg" alt="Card image cap">
        <div class="card-body"></div>
        <div class="card-footer">
          <h3 class="card-title text-center">4</h3>
          <p class="card-text">Your medicatiion is delivered to you for free!!!</p>        
        </div>
      </div>
    </div>
    <!-- card ends-->
    </div>

  
</section>

<!--Section ends-->

<!--Amal Pharmacy explained-->
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
        <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
      </div>
      <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

      </div>
    </div>

    
  <div class="container amalpharbuster">
      <div class="amalpharbuster-inner">
            <h2>Amal Pharmacy explained</h2>
            <div class="row">

              <div class="col-lg-6 col-xs-12 pad-left-0">
                <a href="" class="myth-feature" id="feature1" data-di-id="#feature1">
                  <span class="myth-gradient"></span>
                  <span class="title">
                      <span>
                          How is AmalPharmacy different from a high street&nbsp;pharmacy?
                      </span>
                  </span>
                  <span class="myth-back">
                      <span class="myth-text">
                          Like any other NHS contracted pharmacy, including those on the high street, we’re a private business and regulated by the GPhC. <strong>However, we have many key benefits when it comes to managing your repeat prescriptions</strong>
                          <span class="btn btn-ghost btn-slim desktop-only">Find out more</span>
                      </span>
                  </span>
                  <hr class="mobile-only">
              </a>
              </div>

              <div class="col-lg-6 col-xs-12 pad-right-0">
                <a href="" class="myth-feature" id="feature2" data-di-id="#feature2">
                  <span class="myth-gradient"></span>
                  <span class="title">
                      <span>
                          AmalPharmacy provides free Bloop Pressure if you are 60
                      </span>
                  </span>
                  <span class="myth-back">
                      <span class="myth-text">
                          Like any other NHS contracted pharmacy, including those on the high street, we’re a private business and regulated by the GPhC. <strong>However, we have many key benefits when it comes to managing your repeat prescriptions</strong>
                          <span class="btn btn-ghost btn-slim desktop-only">Find out more</span>
                      </span>
                  </span>
                  <hr class="mobile-only">
              </a>              
              </div>

            </div>
      </div>
  </div>

<!--Amal Pharmacy Ends-->

@endsection










