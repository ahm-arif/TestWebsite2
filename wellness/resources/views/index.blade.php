<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>@yield('title')</title>
   <link rel="icon" href="img/favicon.png">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- animate CSS -->
   <link rel="stylesheet" href="css/animate.css">
   <!-- owl carousel CSS -->
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <!-- themify CSS -->
   <link rel="stylesheet" href="css/themify-icons.css">
   <!-- flaticon CSS -->
   <link rel="stylesheet" href="css/flaticon.css">
   <!-- magnific-popup CSS -->
   <link rel="stylesheet" href="css/magnific-popup.css">
   <!-- font awesome CSS -->
   <link rel="stylesheet" href="fontawesome/css/all.min.css">
   <!-- style CSS -->
   <link rel="stylesheet" href="css/style.css">
</head>

<body>
   <!--::menu part start::-->
   <header class="main_menu home_menu" style="background-color: rgb(189, 159, 90,1)">
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
							<a href="#" class="float-right" style="color: white"><strong>Download App</strong></a>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header>
   <!--::menu part end::-->

    @yield('content')

   <!--::footer_part start::-->
   <footer class="footer_part">
      <div class="container">
         <div class="row">
            <div class="col-sm-6 col-lg-3">
               <div class="single_footer_part">
                  <h4>About Us</h4>
                  <p>Heaven fruitful doesn't over lesser days appear creeping seasons so behold bearing days open</p>
                  <a href="index.html" class="footer_logo"> <img src="img/logo.png" alt="#"> </a>
               </div>
            </div>
            <div class="col-sm-6 col-lg-3">
               <div class="single_footer_part">
                  <h4>Contact Info</h4>
                  <p>Address : Jalan Kemenangan 3 No.47</p>
                  <p>Phone : 021661830</p>
                  <p>Email : Wellnesscenter.com</p>
               </div>
            </div>
            <div class="col-sm-6 col-lg-3">
               <div class="single_footer_part">
                  <h4>Important Link</h4>
                  <ul class="list-unstyled">
                     <li><a href=""> WHMCS-bridge</a></li>
                     <li><a href="">Search Domain</a></li>
                     <li><a href="">My Account</a></li>
                     <li><a href="">Shopping Cart</a></li>
                     <li><a href="">Our Shop</a> Our Shop</li>
                  </ul>
               </div>
            </div>
            <div class="col-sm-6 col-lg-3">
               <div class="single_footer_part">
                  <h4>Newsletter</h4>
                  <p>Heaven fruitful doesn't over lesser in days. Appear creeping seasons deve behold bearing days open
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
   <!--::footer_part end::-->
   <!-- jquery plugins here-->
   <!-- jquery -->
   <script src="js/jquery-1.12.1.min.js"></script>
   <!-- popper js -->
   <script src="js/popper.min.js"></script>
   <!-- bootstrap js -->
   <script src="js/bootstrap.min.js"></script>
   <!-- easing js -->
   <script src="js/jquery.magnific-popup.js"></script>
   <!-- particles js -->
   <script src="js/owl.carousel.min.js"></script>
   <!-- easing js -->
   <script src="js/jquery.easing.min.js"></script>
   <!-- custom js -->
   <script src="js/custom.js"></script>
</body>

</html>