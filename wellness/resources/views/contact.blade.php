@extends('index')
@section('title','Wellness Center || Contact')
@section('content')
  <section class="breadcrumb blog_bg">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="breadcrumb_iner">
                      <div class="breadcrumb_iner_item">
                          <h2>Contact us</h2>
                          <p>Home<span class="ti-angle-double-right"></span>Contact Us</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <section class="contact-section area-padding">
    <div class="container shadow-lg">
      <div class="peta d-none d-sm-block mb-5 pb-4">
        <iframe class="shadow-lg" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.77784704762!2d106.81216071368458!3d-6.1605003620911285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f6743d8668df%3A0xf1daa5bbf65dfca9!2sJl.%20Kyai%20Haji%20Zainul%20Arifin%2C%20RT.8%2FRW.7%2C%20Krukut%2C%20Kec.%20Taman%20Sari%2C%20Kota%20Jakarta%20Barat%2C%20Daerah%20Khusus%20Ibukota%20Jakarta!5e0!3m2!1sid!2sid!4v1600241457870!5m2!1sid!2sid" width="1100" height="400" frameborder="0" style="border:solid;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>


      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Hubungi Kami</h2>
        </div>
        <div class="col-lg-8">
          <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                    <textarea class="form-control w-100 placeholder hide-on-focus" name="message" id="message" cols="30" rows="9" placeholder="Enter Message"></textarea>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control placeholder hide-on-focus" name="name" id="name" type="text" placeholder="Enter your name">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control placeholder hide-on-focus" name="email" id="email" type="email" placeholder="Enter email address">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input class="form-control placeholder hide-on-focus" name="subject" id="subject" type="text" placeholder="Enter Subject">
                </div>
              </div>
            </div>
            <div class="form-group mt-3">
              <button type="submit" class="button button-contactForm">Send Message</button>
            </div>
          </form>
        </div>
        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3><a>KETAPANG BUSINESS CENTER BLOK A No. 18-19</a></h3>
              <p>Jl. KH.ZainulArifin No. 20, Jakarta 11140</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3><a href="tel:454545654">(021) - 8111 889 369</a></h3>
              <p>Mon to Fri 9am to 6pm</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3><a href="mailto:support@colorlib.com">woorizenindonesia@gmail.com</a></h3>
              <p>Send us your query anytime!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@stop