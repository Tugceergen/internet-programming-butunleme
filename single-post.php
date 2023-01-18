
<?php
include_once("lib/db_connect.php");
$oyuncuId = (isset($_GET["oyuncu_id"])) ? $_GET["oyuncu_id"] : 0;
$oyuncu = [];

if ($oyuncuId) {
    
    $voleybol = new Voleybol;
    $oyuncu =  $voleybol->getOyuncuById($oyuncuId);
    
} else {
    echo "takim id belirtiniz.";
}
?>







<!DOCTYPE html>
<!-- NordEx - Premium App Landing Pages Pack Template design by DSAThemes (http://www.dsathemes.com) -->
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">




	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="author" content="DSAThemes"/>	
		<meta name="description" content="NordEx - Premium App Landing Pages Pack"/>
		<meta name="keywords" content="Responsive, HTML5 template, DSAThemes, Mobile, Application, One Page, Landing, Product, Mobile App">	
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
				
  		<!-- SITE TITLE -->
		<title>Detay</title>
							
		<!-- FAVICON AND TOUCH ICONS -->
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
		<link rel="icon" href="images/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="120x120" href="images/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="76x76" href="images/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
		<link rel="icon" href="images/apple-touch-icon.png" type="image/x-icon">

		<!-- GOOGLE FONTS -->
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Google+Sans:wght@300;400;500;700;900&display=swap" rel="stylesheet">

		<!-- BOOTSTRAP CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
				
		<!-- FONT ICONS -->
		<link href="css/flaticon.css" rel="stylesheet">

		<!-- PLUGINS STYLESHEET -->
		<link href="css/menu.css" rel="stylesheet">	
		<link id="effect" href="css/dropdown-effects/fade-down.css" media="all" rel="stylesheet">
		<link href="css/magnific-popup.css" rel="stylesheet">	
		<link href="css/owl.carousel.min.css" rel="stylesheet">
		<link href="css/flexslider.css" rel="stylesheet">
		<link href="css/owl.theme.default.min.css" rel="stylesheet">

		<!-- TEMPLATE CSS -->
		<link href="css/style.css" rel="stylesheet">	
		
		<!-- ON SCROLL ANIMATION -->
		<link href="css/animate.css" rel="stylesheet">

		<!-- RESPONSIVE CSS -->
		<link href="css/responsive.css" rel="stylesheet">
	
	</head>




	<body>




		<!-- PRELOADER SPINNER
		============================================= -->	
		<div id="loader-wrapper">
			<div id="loading">
				<span class="cssload-loader"><span class="cssload-loader-inner"></span></span>
			</div>
		</div>




		<!-- PAGE CONTENT
		============================================= -->	
		<div id="page" class="page">




		<?php
		include 'inc/header.php';
		?>



			<!-- SINGLE POST
			============================================= -->
			<section id="single-post" class="bg_whitesmoke hero-offset-nav pb-80 single-post-section division">
				<div class="container">


					<!-- SINGLE POST CONTENT -->
					<div class="row">
					<?php
                        foreach ($oyuncu as $key => $oyuncuDetay) {
                        ?>
						<div class="col-lg-10 offset-lg-1">
							<div class="single-post-wrapper">


							
										

								<!-- BLOG POST INNER IMAGE -->
					 			<div class="post-inner-img">
									<img class="img-fluid" src="https://www.freepnglogos.com/uploads/galatasaray-logo-png/siyah-uzerine-gs-logosu-ve-yildizar-hd-kalite-ucretsiz-indir-15.png" alt="blog-post-image" />		
								</div>

								
								<!-- BLOG POST TEXT -->
								<div class="single-post-txt">
									<h4><?= $oyuncuDetay['isim_soyisim'] ?></h4>

									<!-- Text -->
									<p class="p-lg">
									<?= $oyuncuDetay['aciklama'] ?>
									</p>

								</div>	<!-- END BLOG POST TEXT -->


								


								

							</div>
						</div>
						<?php } ?>
					</div>	<!-- END SINGLE POST CONTENT -->


				</div>     <!-- End container -->


				<!-- GEOMETRIC OVERLAY -->	
				<div class="bg_fixed geometric_overlay"></div>


			</section>	<!-- END SINGLE POST -->






		<?php
		include 'inc/footer.php'
		
		?>



		</div>	<!-- END PAGE CONTENT -->




		<!-- EXTERNAL SCRIPTS
		============================================= -->	
		<script src="js/jquery-3.5.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
		<script src="js/modernizr.custom.js"></script>
		<script src="js/jquery.easing.js"></script>
		<script src="js/jquery.appear.js"></script>
		<script src="js/jquery.scrollto.js"></script>	
		<script src="js/menu.js"></script>
		<script src="js/jquery.flexslider.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/comment-form.js"></script>
		<script src="js/jquery.validate.min.js"></script>
		<script src="js/jquery.ajaxchimp.min.js"></script>	
		<script src="js/wow.js"></script>
				
		<!-- Custom Script -->		
		<script src="js/custom.js"></script>

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->															
		<!--
		<script>
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-XXXXX-X']);
			_gaq.push(['_trackPageview']);
			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
		-->




	</body>




</html>	