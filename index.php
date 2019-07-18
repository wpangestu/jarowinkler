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
		<title>Jaro Winkler</title>

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
			<link rel="stylesheet" type="text/css" href="plugins/formfile/font/font-fileuploader.css">
			<link rel="stylesheet" type="text/css" href="plugins/formfile/jquery.fileuploader.min.css">
			<link rel="stylesheet" type="text/css" href="plugins/loader/dist/css/gspinner.min.css">
			<link rel="stylesheet" type="text/css" href="plugins/dropify/css/dropify.min.css">			
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
			<section class="banner-area" id="home">
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						<div class="banner-content col-lg-6 col-md-6">
							<h1>
								Tes Plagiarism <br>
								Dokumen Bahasa Indonesia<br>
								Jaro Winkler	
							</h1>
							<p class="text-white text-uppercase">
								Everyone wants the innovation through robotics
							</p>
							<a href="#" class="primary-btn header-btn text-uppercase">View Details</a>
						</div>
						<div class="banner-img col-lg-6 col-md-6">
							<img class="img-fluid" src="img/banner-img.png" alt="">
						</div>												
					</div>
				</div>
			</section>
			<!-- End banner Area -->

			<!-- Start products Area -->
			<section class="products-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-12 pb-40 header-text text-center">
							<h1 class="pb-10">Unggah File Anda</h1>
							<p>
								Who are in extremely love with eco friendly system.
							</p>
						</div>
					</div>		
					<form id="fupForm" action="upload.php" method="post" enctype="multipart/form-data">					
						<div class="row">
							<div class="col-lg-6 col-md-6">	    						
							   	<label class="h4">Target</label>
							    <input type="file" name="target" class="dropify" data-height="100" data-allowed-file-extensions="pdf" required>
							</div>	
							<div class="col-lg-6 col-md-6">
								<label class="h4">Pembanding</label>
							    <input type="file" name="pembanding" class="dropify" data-allowed-file-extensions="pdf" data-height="100" required>
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
						<div class="row">
							<div class="col-md-6">
								<h4>Target</h4>
								<textarea rows="6" id="area-target" readonly class="form-control" height="10"></textarea>
							</div>
							<div class="col-md-6">
								<h4>Pembanding</h4>
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
<!-- 						<div class="row">
							<div class="col-md-12">
								<blockquote class="generic-blockquote">
								Berdasarkan hasil diatas didapatkan hasil bahwa dokumen target memiliki tingkat plagiarism dengan dokumen pembanding sebesar 0.50 (50%) dan dianggap sebagai plagiarism sedang. 
								</blockquote>
							</div>
						</div> -->
					</div>
				</div>	
			</section>



			<section class="feature-area pt-3">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-12 pb-40 header-text text-center">
							<h1 class="pb-10 text-white">Some Features that Made us Unique</h1>
							<p class="text-white">
								Who are in extremely love with eco friendly system.
							</p>
						</div>
					</div>							
					<div class="row">


					</div>
				</div>	
			</section>
			
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
			<script src="js/main.js"></script>
			<script src="plugins/loader/dist/js/g-spinner.min.js" type="text/javascript"></script>	
			<script src="plugins/formfile/jquery.fileuploader.min.js" type="text/javascript"></script>
			<script src="plugins/dropify/js/dropify.min.js" type="text/javascript"></script>			
			<script type="text/javascript">
				var $loader = $("#loader");
			</script>
			<script type="text/javascript">
			    $(document).ready(function() {

			         $('.dropify').dropify({
			            messages: {
			                default: 'Pilih file pdf',
			                replace: 'Ganti',
			                remove:  'Hapus',
			                error:   'error'
			            }
			        });

			        $("#fupForm").on('submit', function(e){
						 e.preventDefault();
						 
						 var form = $('#fupForm')[0];
						 var data = new FormData(form);
						 $loader.gSpinner();

						 $.ajax({
							type: "POST",
							 enctype: "multipart/form-data",
							 url: "upload.php",
							 data: data,
							 processData: false,
							 contentType: false,
							 cache: false,
							 dataType:"json",
							 success: function(msg){
							 	console.log(msg);
							 	$loader.gSpinner("hide");
							 	$('#area-target').val(msg.teks1);
							 	$('#area-pembanding').val(msg.teks2);
							 	$('#dj').html(msg.dj);
							 	$('#dw').html(msg.dw);
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



