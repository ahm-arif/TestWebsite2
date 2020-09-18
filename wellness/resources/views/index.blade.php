<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>@yield('title')</title>
   <link rel="icon" href="img/wc.png">
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/themify-icons.css">
   <link rel="stylesheet" href="css/magnific-popup.css">
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <link rel="stylesheet" href="css/style.css">

</head>

<body>
   <header class="shadow main_menu home_menu" style="background-color: rgb(255,255,255,1);position: fixed;">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<nav class="navbar navbar-expand-lg navbar-light">
						<a class="navbar-brand" href="/"> <img src="img/logo.png" alt="logo" style="width: 400px"> </a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
							aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse main-menu-item" id="navbarNav">
							<ul class="navbar-nav">
								<li class="nav-item active">
									<a class="nav-link" href="/" style="font-size: 20px;"><strong>Home</strong><span class="sr-only">(x)</span></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="/contact" style="font-size: 20px;"><strong>Contact Us</strong></a>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
										data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 20px;">
										<strong>About Us</strong>
									</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdown">
										<a class="dropdown-item" href="/companyprofile"><strong>Company Profile</strong></a>
										<a class="dropdown-item" href="/structure"><strong>Organization Structure</strong></a>
									</div>
								</li>
							</ul>
						</div>
						<div class="btn_1 d-none d-lg-block">
                     <div class="btn_sosmed">
				           <a href="#" class="download" style="color: white"><strong>Download App</strong></a>
                       <div class="sosmed">
                        <a href="https://www.facebook.com/" target="_blank" class="facebook"><img src="img/fb.png" style="height: 30px;width: 30px;margin-right: 5px;margin-top: 15px;"></a>
                        <a href="https://www.instagram.com/" target="_blank" class="instagram"><img src="img/ig.png" style="height: 30px;width: 30px;margin-right: 5px;;margin-top: 15px;"></a>
                        <a href="https://www.twitter.com/" target="_blank" class="twitter"><img src="img/twitter.png" style="height: 30px;width: 30px;margin-right: 5px;;margin-top: 15px;"></a>
                        <a href="https://www.whatsapp.com/" target="_blank" class="whatsapp"><img src="img/wa.png" style="height: 30px;width: 30px;margin-top: 15px;"></a>
						   </div>
                  </div>
					</nav>
				</div>
			</div>
		</div>
	</header>

    @yield('content')

   <footer class="footer_part">
      <div class="container">
         <div class="row">
            <div class="col-sm-6 col-lg-3">
               <div class="single_footer_part">
                  <h4>About Us</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation u</p>
                  <a href="index.html" class="footer_logo"> <img src="img/logo2.png" alt="#"> </a>
               </div>
            </div>
            <div class="col-sm-6 col-lg-3">
               <div class="single_footer_part">
                  <h4>Contact Info</h4>
                  <p>Address : Jl. KH.ZainulArifin No.20</p>
                  <p>Phone : 0218111889369</p>
                  <p>Email : woorizenindonesia@gmail.com</p>
               </div>
            </div>
            <div class="col-sm-6 col-lg-3">
               <div class="single_footer_part">
                  <h4>Download Our App</h4>
                  <ul class="list-unstyled">
                     <img src="img/googleplay.png" style="height: 70px;margin-bottom: 10px;">
                     <img src="img/appstore.png" style="height: 77px">
                  </ul>
               </div>
            </div>
            <div class="col-sm-6 col-lg-3">
               <div class="single_footer_part">
                  <h4>Newsletter</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco labori
                  </p>
                  <div class="mail_part">
                     <input type="text" placeholder="Email Address" class="placeholder hide-on-focus">
                     <a href="" class="email_icon"><i class="far fa-paper-plane"></i></a>
                  </div>
               </div>
            </div>
         </div>
         <hr>
         <div class="row">
            <div class="col-sm-6 col-lg-6">
               <div class="footer_icon">
                  <ul class="list-unstyled">
                     <li><a href="#" class="single_social_icon"><i class="fab fa-facebook-f"></i></a></li>
                     <li><a href="#" class="single_social_icon"><i class="fab fa-twitter"></i></a></li>
                     <li><a href="#" class="single_social_icon"><i class="fas fa-globe"></i></a></li>
                     <li><a href="#" class="single_social_icon"><i class="fab fa-behance"></i></a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </footer>
   <script src="js/bootstrap.min.js"></script>
</body>

</html>