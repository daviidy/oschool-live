<!DOCTYPE html>
<html lang="fr">
<head>
<title>Oschool | Formation en télé présentiel</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Toutes les formations en télé présentiel par Oschool">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="/new/styles/bootstrap4/bootstrap.min.css">
<link href="/new/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="/new/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="/new/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="/new/plugins/OwlCarousel2-2.2.1/animate.css">
@if(Request::path() == '/')
<link rel="stylesheet" type="text/css" href="/new/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="/new/styles/responsive.css">
@endif
@if(Request::path() == 'devweb' || Request::path() == 'trading' || Request::path() == 'webdesign' || Request::path() == 'frontend' || Request::path() == 'devmobile' || Request::path() == 'socialmedia' || Request::path() == 'blog' || Request::path() == 'jeuxvideos' || Request::path() == 'android' || Request::path() == 'python')
<link rel="stylesheet" type="text/css" href="/new/styles/course.css">
<link rel="stylesheet" type="text/css" href="/new/styles/course_responsive.css">
@endif
@if(Request::path() == 'cours' || Request::path() == 'ecoleprog' || Request::path() == 'ecolemarketing' || Request::path() == 'ecolebusiness' || Request::path() == 'ecoleai' || Request::path() == 'ecoledatascience' || Request::path() == 'ecolelang')
<link rel="stylesheet" type="text/css" href="/new/styles/courses.css">
<link rel="stylesheet" type="text/css" href="/new/styles/courses_responsive.css">
@endif
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">

		<!-- Top Bar -->
		<div class="top_bar">
			<div class="top_bar_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
								<div class="top_bar_phone"><span class="top_bar_title">question ?</span>info@oschool.ci</div>
								<div class="header_content_right ml-auto text-right">
									<div class="header_search">
										<div class="search_form_container">
											<form action="#" id="search_form" class="search_form trans_400">
												<input type="search" class="header_search_input trans_400" placeholder="Faire une recherche" required="required">
												<div class="search_button">
													<i class="fa fa-search" aria-hidden="true"></i>
												</div>
											</form>
										</div>
									</div>

	                </div>
								<div class="top_bar_right ml-auto">



									<!-- Language -->
									<div class="top_bar_lang">
										<span class="top_bar_title">langue du site:</span>
										<ul class="lang_list">
											<li class="hassubs">
												<a href="#">Francais<i class="fa fa-angle-down" aria-hidden="true"></i></a>
												<ul>
													<li><a href="#">English</a></li>
												</ul>
											</li>
										</ul>
									</div>

									<!-- Social -->
									<div class="top_bar_social">
										<span class="top_bar_title social_title">suivez-nous</span>
										<ul>
											<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Header Content -->
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo_container mr-auto">
								<a href="/">
									<div class="logo_text">
										<img width="150" src="/new/images/logo.png" alt="">
									</div>
								</a>
							</div>
							<nav class="main_nav_contaner">
								<ul class="main_nav">
									<li class="active"><a href="https://oschool.ci/">Accueil</a></li>
									<li><a href="/#schools">Toutes les formations</a></li>
									<li><a target="_blank" href="https://events.oschool.ci">Evénements</a></li>
									<li><a target="_blank" href="https://oschool.ci/blog/">Blog</a></li>
						<!--			<li><a target="_blank" class="demo" href="https://calendly.com/oschool_e-learning/demo-oschool-code">Demandez une démo</a></li> -->
								</ul>
							</nav>


								<!-- Hamburger -->

                <a href="{{ route('login') }}" style="margin-left: 10px;" class="">
                  Ma salle de classe
                </a>
								<div class="hamburger menu_mm">
									<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
								</div>



						</div>
					</div>
				</div>
			</div>
		</div>

	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="search">
			<form action="#" class="header_search_form menu_mm">
				<input type="search" class="search_input menu_mm" placeholder="Faire une recherche" required="required">
				<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
					<i class="fa fa-search menu_mm" aria-hidden="true"></i>
				</button>
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="/">Accueil</a></li>
				<li class="menu_mm"><a href="/#schools">Toutes nos formations</a></li>
				<li class="menu_mm"><a target="_blank" href="https://events.oschool.ci">Evénements</a></li>
				<li class="menu_mm"><a target="_blank" href="https://oschool.ci/blog/">Blog</a></li>
			</ul>
		</nav>
		<div class="menu_extra">
			<div class="menu_phone"><span class="menu_title">question ?:</span>info@oschool.ci</div>
			<div class="menu_social">
				<span class="menu_title">suivez nous</span>
				<ul>
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		</div>
	</div>

  @yield('content')


  <!-- Footer -->

  <footer class="footer">

    <div class="copyright">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="copyright_content d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-start">
              <div class="cr"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved.
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
              <div class="cr_right ml-md-auto">
                <div class="footer_phone"><span class="cr_title">question ?</span>info@oschool.ci</div>
                <div class="footer_social">
                  <span class="cr_social_title">suivez-nous</span>
                  <ul>
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
</div>

<script src="/new/js/jquery-3.2.1.min.js"></script>
<script src="/new/styles/bootstrap4/popper.js"></script>
<script src="/new/styles/bootstrap4/bootstrap.min.js"></script>
<script src="/new/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="/new/plugins/easing/easing.js"></script>
@if(Request::path() == '/')
<script src="/new/js/custom.js"></script>
@endif
@if(Request::path() == 'devweb' || Request::path() == 'trading' || Request::path() == 'webdesign' || Request::path() == 'frontend' || Request::path() == 'devmobile' || Request::path() == 'socialmedia' || Request::path() == 'blog' || Request::path() == 'jeuxvideos' || Request::path() == 'android' || Request::path() == 'python')
<script src="/new/plugins/parallax-js-master/parallax.min.js"></script>
<script src="/new/plugins/progressbar/progressbar.min.js"></script>
<script src="/new/js/course.js"></script>
@endif
@if(Request::path() == 'cours' || Request::path() == 'ecoleprog' || Request::path() == 'ecolemarketing' || Request::path() == 'ecolebusiness' || Request::path() == 'ecoleai' || Request::path() == 'ecoledatascience' || Request::path() == 'ecolelang')
<script src="/new/js/courses.js"></script>
@endif
</body>
</html>
