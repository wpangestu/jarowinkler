	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Robotics</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">	
			<link rel="stylesheet" href="css/hexagons.min.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
			<link rel="stylesheet" type="text/css" href="plugins/loader/dist/css/gspinner.min.css">
		</head>
		<body>	
			  <header id="header" id="home">
			    <div class="container main-menu">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="index.php">Home</a></li>
				          <li><a href="about.php">Menu 2</a></li>
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Jaro Winkler				
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="about.html"> Jaro Winkler</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start about-video Area -->
			<section class="products-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-12 pb-40 header-text text-center">
							<h1 class="pb-10">Masukan Teks Anda</h1>
							<p>
								bandingkan dengan teks lain
							</p>
						</div>
					</div>		
					<form id="form_teks" method="post" enctype="multipart/form-data">	
						<div class="row">
							<div class="col-lg-6 col-md-6">	    						
							   	<label class="h4">Target</label>
							    <textarea rows="6" name="target" required class="form-control" height="10"></textarea>
							</div>	
							<div class="col-lg-6 col-md-6">
								<label class="h4">Pembanding</label>
								<textarea rows="6" name="pembanding" required class="form-control" height="10"></textarea>
							</div>
						</div>
						<div class="mt-4 mb-4 row justify-content-center">
							<button type="submit" class="nw-btn primary-btn btn-lg">Cek Hasil <i class="fa fa-arrow-right"></i></button>
<!-- 							<button type="submit" class="btn btn-primary btn-lg">Cek Hasil <i class="fa fa-arror-right"></i></button> -->
						</div>
					</form>
					<div id="result" class="section-top-border">
						<div id="loader"></div>
						<h3 class="text-center mb-2">Hasil Tes</h3>
						<div class="row section-top-border">
							<div class="col-md-12">
								<h4 class="mb-3">1. Case Folding</h4>								
							</div>
							<div class="col-md-6">
								<h5>Target</h5>
								<textarea rows="6" id="lower-target" readonly class="form-control"></textarea>
							</div>
							<div class="col-md-6">
								<h5>Pembanding</h5>
								<textarea rows="6" id="lower-pembanding" readonly class="form-control"></textarea>
							</div>
						</div>
						<div class="row section-top-border">
							<div class="col-md-12">
								<h4 class="mb-3">2. Stop Word</h4>								
							</div>
							<div class="col-md-6">
								<h5>Target</h5>
								<textarea rows="6" id="sw-target" readonly class="form-control"></textarea>
							</div>
							<div class="col-md-6">
								<h5>Pembanding</h5>
								<textarea rows="6" id="sw-pembanding" readonly class="form-control"></textarea>
							</div>
						</div>
						<div class="row section-top-border">
							<div class="col-md-12">
								<h4 class="mb-3">3. Stemming</h4>								
							</div>
							<div class="col-md-6">
								<h5>Target</h5>
								<textarea rows="6" id="area-target" readonly class="form-control" height="10"></textarea>
							</div>
							<div class="col-md-6">
								<h5>Pembanding</h5>
								<textarea rows="6" id="area-pembanding" readonly class="form-control"></textarea>
							</div>
						</div>
						<div class="row mt-2 justify-content-center">
							<div class="col-md-6">
								<table class="table table-bordered">
								  <thead>
								    <tr>
								      <th scope="col">Nilai Jarak Jaro (dJ)</th>
								      <th scope="row">Nilai Jaro Winkler Distance (dW)</th>
								    </tr>
								  </thead>
								  <tbody>
								    <tr>
								      <td id="dj">0</td>
								      <td id="dw">0</td>
								    </tr>
								  </tbody>
								</table>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12" >
								<blockquote class="generic-blockquote">
								Berdasarkan hasil diatas didapatkan hasil bahwa dokumen target memiliki tingkat plagiarism dengan dokumen pembanding sebesar <span id="hasil">0</span>% 
								</blockquote>
							</div>
						</div>
					</div>
				</div>	
			</section>
			<!-- End about-video Area -->			

			<!-- Start home-about Area -->
			<section class="home-about-area">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-lg-6 home-about-left no-padding">
							<img class="mx-auto d-block img-fluid" src="img/about-img.png" alt="">
						</div>
						<div class="col-lg-6 home-about-right no-padding">
							<h1>Globally Connected <br>
							by Large Network</h1>
							<h5>
								We are here to listen from you deliver exellence
							</h5>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
							</p>
							<a class="primary-btn text-uppercase" href="#">Get Details</a>
						</div>
					</div>
				</div>	
			</section>
			<!-- End home-about Area -->

			<!-- Start brand Area -->
			<section class="brand-area section-gap">
				<div class="container">
					<div class="row align-items-center">
						<div class="col single-brand">
							<img class="img-fluid" src="img/l1.png" alt="">
						</div>
						<div class="col single-brand">
							<img class="img-fluid" src="img/l2.png" alt="">
						</div>
						<div class="col single-brand">
							<img class="img-fluid" src="img/l3.png" alt="">
						</div>
						<div class="col single-brand">
							<img class="img-fluid" src="img/l4.png" alt="">
						</div>
						<div class="col single-brand">
							<img class="img-fluid" src="img/l5.png" alt="">
						</div>
					</div>
				</div>	
			</section>
			<!-- End brand Area -->			
				
			<!-- start footer Area -->		
			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row footer-bottom d-flex justify-content-between">
						<p class="col-lg-8 col-sm-12 footer-text m-0 text-white"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
						<div class="col-lg-4 col-sm-12 footer-social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</footer>
			<!-- End footer Area -->	

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>	
			<script src="js/hexagons.min.js"></script>							
			<script src="js/jquery.nice-select.min.js"></script>	
			<script src="js/jquery.counterup.min.js"></script>
			<script src="js/waypoints.min.js"></script>							
			<script src="js/mail-script.js"></script>
			<script src="plugins/loader/dist/js/g-spinner.min.js" type="text/javascript"></script>		
			<script src="js/main.js"></script>
						<script type="text/javascript">
				var $loader = $("#loader");
			</script>
			<script type="text/javascript">
			    $(document).ready(function() {

			        $("#form_teks").on('submit', function(e){
						 e.preventDefault();
						 
						 var form = $('#form_teks')[0];
						 var data = new FormData(form);
						 $loader.gSpinner();

						 $.ajax({
							type: "POST",
							 enctype: "multipart/form-data",
							 url: "proses_teks.php",
							 data: data,
							 processData: false,
							 contentType: false,
							 cache: false,
							 dataType:"json",
							 success: function(msg){
							 	console.log(msg);
							 	$loader.gSpinner("hide");
							 	$('#lower-target').val(msg.teks1_lower);
							 	$('#lower-pembanding').val(msg.teks2_lower);
							 	$('#sw-target').val(msg.sw_teks1);
							 	$('#sw-pembanding').val(msg.sw_teks2);
							 	$('#area-target').val(msg.teks1);
							 	$('#area-pembanding').val(msg.teks2);
							 	$('#dj').html(msg.dj);
							 	$('#dw').html(msg.dw);
							 	$('#hasil').html(msg.hasil);
							},
							error: function (e) {
								$loader.gSpinner("hide");
								 console.log("ERROR : ", e);
							}
						})
					});

			    });
			</script>
		</body>
	</html>


