<?php
require_once"admin/dbconfig.php";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Bikefrenzy</title>

		<!-- Favicon -->
		<link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/icon.png">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>

		<!-- Main style sheet -->
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<!-- responsive style sheet -->
		<link rel="stylesheet" type="text/css" href="css/responsive.css">


		<!-- Fix Internet Explorer ______________________________________-->

		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="vendor/html5shiv.js"></script>
			<script src="vendor/respond.js"></script>
		<![endif]-->
			
	</head>

	<body>
		<div class="main-page-wrapper">



			<!-- 
			=============================================
				Theme Header
			============================================== 
			-->
			<header class="theme-main-header" style="background-color:#8c8b8b">
				<div class="container-fluid" >
					<a href="index.php" class="logo float-left tran4s"><img src="images/logo/logo.png" alt="Logo"></a>
					
					<!-- ========================= Theme Feature Page Menu ======================= -->
					   <?php include"nav.php";?><!-- /.navbar-collapse -->
					<!-- /.theme-feature-menu -->
				</div>
			</header> <!-- /.theme-main-header -->


			<!--
			=====================================================
				Theme Inner page Banner
			=====================================================
			-->
			
			<!--
			=====================================================
				
			=====================================================
			-->
			</br>
		</br>
	
		
		
		<div id="blog-section">
				<div class="container">
					<div class="theme-title">
						<h2>Details</h2>
</div> <!-- /.theme-title -->

					<div class="clear-fix">
					<?php
					$t=select("SELECT * FROM `bicycle_for_rent` WHERE id='".$_REQUEST['id']."'");
					while($y=mysqli_fetch_array($t))
					{extract($y);
				
					?>
						<div id="contact-section">
				<div class="container">
					<div class="clear-fix contact-address-content">
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="left-side">
								<h2><?=ucwords($name)?></h2>
								<iframe src="<?=$map_link?>" width="360" height="220" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
								<p style="text-align:justify"><?=$description?></p>
								
								<p style="text-align:justify;font-weight:bold;color:green">Price - € <?=$price?> Per Hour</p>

								<ul>
									<!--<li>
										<div class="icon tran3s round-border p-color-bg"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
										<h6>Location</h6>
										<p><?=$location?></p>
									</li>
									<li>
										<div class="icon tran3s round-border p-color-bg"><i class="fa fa-building-o" aria-hidden="true"></i></div>
										
									-->
									<li>
										<div class="icon tran3s round-border p-color-bg"><i class="fa fa-phone" aria-hidden="true"></i></div>
										<h6>Phone</h6>
										<p>+353 0876025304</p>
										</br>
										</br>
										<a href="book.php?id=<?=$id?>&price=<?=$price?>"><button class="btn btn-success">Book
										</button></a>
									</li>
									
								</ul>
							</div> <!-- /.left-side -->
						</div> <!-- /.col- -->


						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="map-area">
								<h2></h2>
								<div id="map"><img src="admin/images/<?=$image?>"></div>
							</div> <!-- /.map-area -->
						</div> <!-- /.col- -->
					</div> 

				</div> <!-- /.container -->
			</div> <!-- /.col- -->
<?php
					}
?><!--
						 -->
			</div>
			</div>
			
	        



			<!--
			=====================================================
				Footer
			=====================================================
			-->
			 <?php include"footer.php";?>

			<!-- =============================================
				Loading Transition
			============================================== -->
			<div id="loader-wrapper">
				<div id="preloader_1">
	                <span></span>
	                <span></span>
	                <span></span>
	                <span></span>
	                <span></span>
	            </div>
			</div>

			

	        <!-- Scroll Top Button -->
			<button class="scroll-top tran3s p-color-bg">
				<i class="fa fa-long-arrow-up" aria-hidden="true"></i>
			</button>




		<!-- Js File_________________________________ -->

		<!-- j Query -->
		<script type="text/javascript" src="vendor/jquery.2.2.3.min.js"></script>

		<!-- Bootstrap JS -->
		<script type="text/javascript" src="vendor/bootstrap/bootstrap.min.js"></script>

		<!-- Vendor js _________ -->
		
		<!-- owl.carousel -->
		<script type="text/javascript" src="vendor/owl-carousel/owl.carousel.min.js"></script>
		<!-- mixitUp -->
		<script type="text/javascript" src="vendor/jquery.mixitup.min.js"></script>
		<!-- Progress Bar js -->
		<script type="text/javascript" src="vendor/skills-master/jquery.skills.js"></script>
		<!-- Validation -->
		<script type="text/javascript" src="vendor/contact-form/validate.js"></script>
		<script type="text/javascript" src="vendor/contact-form/jquery.form.js"></script>
		<!-- Calendar js -->
		<script type="text/javascript" src="vendor/monthly-master/js/monthly.js"></script>


		<!-- Theme js -->
		<script type="text/javascript" src="js/theme.js"></script>
		<script type="text/javascript" src="js/map-script.js"></script>

		</div> <!-- /.main-page-wrapper -->
	</body>
</html>