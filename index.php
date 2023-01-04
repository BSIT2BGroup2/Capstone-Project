
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
	<meta charset="utf-8">

	<!--====== Title ======-->
	<title>Flight Booking System</title>

	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--====== Animate CSS ======-->
	<link rel="stylesheet" href="assets/css/animate.css">

	<!--====== Tiny slider CSS ======-->
	<link rel="stylesheet" href="assets/css/tiny-slider.css">

	<!--====== glightbox CSS ======-->
	<link rel="stylesheet" href="assets/css/glightbox.min.css">

	<!--====== Line Icons CSS ======-->
	<link rel="stylesheet" href="assets/css/LineIcons.2.0.css">

	<!--====== Selectr CSS ======-->
	<link rel="stylesheet" href="assets/css/selectr.css">

	<!--====== Nouislider CSS ======-->
	<link rel="stylesheet" href="assets/css/nouislider.css">

	<!--====== Bootstrap CSS ======-->
	<link rel="stylesheet" href="assets/css/bootstrap-5.0.5-alpha.min.css">

	<!--====== Style CSS ======-->
	<link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

<?php include ('database/dbcon.php'); ?>

	<!--====== PRELOADER PART START ======-->

	<div class="preloader">
		<div class="loader">
			<div class="ytp-spinner">
				<div class="ytp-spinner-container">
					<div class="ytp-spinner-rotator">
						<div class="ytp-spinner-left">
							<div class="ytp-spinner-circle"></div>
						</div>
						<div class="ytp-spinner-right">
							<div class="ytp-spinner-circle"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--====== PRELOADER PART ENDS ======-->

	<!--====== HEADER PART START ======-->

	<header class="header_area">
		<div id="header_navbar" class="header_navbar">
			<div class="container position-relative">
				<div class="row align-items-center">
					<div class="col-xl-10">
						<nav class="navbar navbar-expand-lg">
							<!-- <a class="navbar-brand" href="index.html">
								<img id="logo" src="assets/images/logo/logo.svg" alt="Logo">
							</a> -->
						</nav> <!-- navbar -->
					</div>
					<div class="col-xl-1">
						<button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
					Login
						</button>
						</div>
				</div> <!-- row -->
			</div> <!-- container -->
		</div> <!-- header navbar -->
	</header>

	<!-- Login Modal -->
	<div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Login</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
			<form action="" method="post" autocomplete="off">
				<div class="modal-body">
						<div class="row justify-content-center">
							<div class="col-lg-12 col-sm-12 col-12">
								<div class="search-input">
									<label for="account_id">ID Number</label>
									<input type="text" name="account_id" id="account_id" placeholder="Enter Your ID Number" required>
								</div>
							</div>
							<div class="col-lg-12 col-sm-12 col-12">
								<div class="search-input">
									<label for="password">Password</label>
									<input type="password" name="password" id="password" placeholder="Enter Your Password" required>
								</div>
							</div>
						</div>
				</div>
				<div class="modal-footer justify-content-between">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" name="login" value="login" class="btn btn-primary">Sign In</button>
				</div>
			</form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

	  	<?php

			if(isset($_POST['login'])){
			$account_id = $_POST['account_id'];
			$password = $_POST['password'];

				$login = mysqli_query($con, "SELECT * FROM users WHERE account_id='$account_id' AND password='$password'");
				$row = mysqli_fetch_array($login);
				if(mysqli_num_rows($login) == 1){
					session_start();
					$_SESSION['user_id'] = $row['user_id'];
					$_SESSION['logged_in'] = true;
					header('location:users/index.php');
				}else{
					header('location:index.php');
				}
			}
		?>

	<!--====== HEADER PART ENDS ======-->

	<!--====== HERO PART START ======-->
	<section id="home" class="hero-area bg_cover">
		<div class="container">
			<div class="row">
				<div class="mx-auto col-lg-9 col-xl-9 col-md-10">
					<div class="text-center hero-content">
						<h1 class="mb-30 wow fadeInUp" data-wow-delay=".2s">Flight Booking Ticket</h1>
						<p class="wow fadeInUp" data-wow-delay=".4s">Training System For Tourism Major at LSPU - Sta Cruz Campus</p></br>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!--====== HERO PART END ======-->

	<!--====== SEARCH PART START ======-->
	<div class="search-area">
		<div class="container">
			<div class="search-wrapper">
				<form action="first_book.php" method="post">
                    <div class="row justify-content-left">
                        <div class="col-lg-3 col-sm-5 col-10">
                            <div class="search-input">
                                <label for="round" style="clear: none;">Round Trip</label>
                                <input type="radio" style="height:1.5em; width:50%;" name="flight_type" value="round" id="round"
                                onclick="document.getElementById('return_date').hidden = false; document.getElementById('return_date_label').style.display = 'none';" 
                                checked>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-5 col-10">
                            <div class="search-input">
                                <label for="one-way" style="clear: none;">One-way Trip</label>
                                <input type="radio" style="height:1.5em; width:50%;" name="flight_type" value="one-way" id="one-way"
                                onclick="document.getElementById('return_date').hidden = true; document.getElementById('return_date_label').style.display = 'block';">
                            </div>
                        </div>
                    </div>
					<div class="row justify-content-left">
						<div class="col-lg-3 col-sm-5 col-10">
							<label>Flying From</label>
							<div class="search-input">
								<label for="flying_from"><i class="lni lni-plane theme-color"></i></label>
								<select name="flying_from" id="flying_from" required>
									<option value="none" selected disabled>Flying From</option>
                                    <?php 
                                        $query = mysqli_query($con, "SELECT * FROM airports");
                                        while ($o_airport = mysqli_fetch_array($query)):
                                    ?>
									    <option value="<?php echo $o_airport['airport_id']; ?>"><?php echo $o_airport['city']. " - " .$o_airport['iata_code'];?></option>
                                    <?php endwhile; ?>
                                </select>
							</div>
						</div>
						<div class="col-lg-3 col-sm-5 col-10">
							<label>Flying To</label>
							<div class="search-input">
								<label for="flying_to"><i class="lni lni-plane theme-color"></i></label>
								<select name="flying_to" id="flying_to" required>
									<option value="none" selected disabled>Flying To</option>
                                    <?php 
                                        $query = mysqli_query($con, "SELECT * FROM airports");
                                        while ($d_airport = mysqli_fetch_array($query)):
                                    ?>
									    <option value="<?php echo $d_airport['airport_id']; ?>"><?php echo $d_airport['city']. " - " .$d_airport['iata_code'];?></option>
                                    <?php endwhile; ?>
								</select>
								
							</div>
						</div>
						<div class="col-lg-3 col-sm-5 col-10">
							<label>Departing Date</label>
							<div class="search-input">
								<label for="departing_date"></label>
								<input type="date" name="departing_date" id="departing_date" required>
							</div>
						</div>
                        <div class="col-lg-3 col-sm-5 col-10">
							<label>Return Date</label>
                            <div class="search-input">
								<label for="return_date" id="return_date_label"></label>
								<input type="date" name="return_date" id="return_date">
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-5 col-10">
							<label>Travel Class</label>
                            <div class="search-input">
                                <label for="travel_class"></label>
                                <select name="travel_class" id="travel_class" required>
                                    <option value="" selected disabled>Travel Class</option>
                                    <option value="economy">Economy Class</option>
                                    <option value="business">Business Class</option>
                                    <option value="first">First Class</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-5 col-10">
							<label>Adult (12+ yr old)</label>
                            <div class="search-input">
                                <label for="adult"><i class="lni lni-person theme-color"></i></label>
                                <input type="number" name="adult" id="adult" value="1" min="1" required>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-5 col-10">
							<label>Child (2-12 yr old)</label>
                            <div class="search-input">
                                <label for="child"><i class="lni lni-person theme-color"></i></label>
                                <input type="number" name="child" id="child" placeholder="0" min="0" required>
                            </div>
                        </div>
						<div class="col-lg-3 col-sm-5 col-10">
							<div class="search-btn">
								<button class="main-btn btn-hover" type="submit" name="submit" value="submit">Search <i class="lni lni-search-alt"></i></button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!--====== SEARCH PART END ======-->

	<!--====== FEATURE PRODUCT PART START ======-->
	<section class="feature-product-area bg_cover">
		<div class="container">
			<div class="row">
				<div class="mx-auto col-lg-6 col-md-10">
					<div class="text-center section-title mb-60">
						<h2>Best Tourist Attraction at Philippines</h2>
					</div>
				</div>
			</div>

			<div class="product-carousel-wrapper">
				<div class="row feature-product-carousel">
				
					<div class="col-lg-4 col-md-6">
						<div class="single-product">
							<div class="product-img">
								<img src="assets/images/tour_spot/white_beach.jpg" alt="">
							</div>
				
							<div class="product-content">
								<h3 class="name">White Beach, Boracay</h3>
							</div>
						</div>
					</div>
				
					<div class="col-lg-4 col-md-6">
						<div class="single-product">
							<div class="product-img">
								<img src="assets/images/tour_spot/chocolate_hills.jpg" alt="">
							</div>
				
							<div class="product-content">
								<h3 class="name">Chocolate Hills, Bohol</h3>
							</div>
						</div>
					</div>
				
					<div class="col-lg-4 col-md-6">
						<div class="single-product">
							<div class="product-img">
								<img src="assets/images/tour_spot/underground_river.jpg" alt="">
							</div>
				
							<div class="product-content">
								<h3 class="name">Puerto Princesa Underground River, Palawan</h3>
							</div>
						</div>
					</div>
				
					<div class="col-lg-4 col-md-6">
						<div class="single-product">
							<div class="product-img">
								<img src="assets/images/tour_spot/cloud9.jpg" alt="">
							</div>
				
							<div class="product-content">
								<h3 class="name">Cloud 9, Siargao</h3>
							</div>
						</div>
					</div>
				
                    <div class="col-lg-4 col-md-6">
                        <div class="single-product">
                            <div class="product-img">
                                <img src="assets/images/tour_spot/bantayan.jpg" alt="">
                            </div>
                
                            <div class="product-content">
                                <h3 class="name">Cebu’s Beaches and Diving Spots</h3>
                            </div>
                        </div>
                    </div>
				
                <div class="col-lg-4 col-md-6">
                    <div class="single-product">
                        <div class="product-img">
                            <img src="assets/images/tour_spot/rice_terraces.jpg" alt="">
                        </div>
            
                        <div class="product-content">
                            <h3 class="name">Banaue Rice Terraces, Ifugao</h3>
                        </div>
                    </div>
                </div>
				
				</div>
			</div>
		</div>
	</section>
	<!--====== FEATURE PRODUCT PART ENDS ======-->

		<div class="copy-right">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="text-center">
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!--====== FOOTER PART ENDS ======-->

	<!--====== BACK TOP TOP PART START ======-->
	<a href="#" class="back-to-top btn-hover"><i class="lni lni-chevron-up"></i></a>
	<!--====== BACK TOP TOP PART ENDS ======-->


	<!--====== Bootstrap js ======-->
	<script src="assets/js/bootstrap.bundle-5.0.0.alpha-min.js"></script>

	<!--====== Tiny slider js ======-->
	<script src="assets/js/tiny-slider.js"></script>

	<!--====== wow js ======-->
	<script src="assets/js/wow.min.js"></script>

	<!--====== glightbox js ======-->
	<script src="assets/js/glightbox.min.js"></script>
	
	<!--====== Selectr js ======-->
	<script src="assets/js/selectr.min.js"></script>

	<!--====== Nouislider js ======-->
	<script src="assets/js/nouislider.js"></script>

	<!--====== Main js ======-->
	<script src="assets/js/main.js"></script>
	
<!-- Bootstrap 4 -->
<script src="users/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

	<script>

		//======== tiny slider for feature-product-carousel
		tns({
			slideBy: 'page',
			autoplay: false,
			mouseDrag: true,
			gutter: 20,
			nav: false,
			controls: true,
			controlsPosition: 'bottom',
			controlsText: [
				'<span class="prev"><i class="lni lni-chevron-left"></i></span>', 
				'<span class="next"><i class="lni lni-chevron-right"></i></span>'
			],
			container: ".feature-product-carousel",
			items: 1,
			center: false,
			autoplayTimeout: 5000,
			swipeAngle: false,
			speed: 400,
			responsive: {
				768: {
					items: 2,
				},

				992: {
					items: 2,
				},

				1200: {
					items: 3,
				}
			}
		});

		//======== tiny slider for testimonial
		tns({
			slideBy: 'page',
			autoplay: false,
			mouseDrag: true,
			gutter: 20,
			nav: true,
			controls: false,
			container: ".testimonial-carousel",
			items: 1,
			center: false,
			autoplayTimeout: 5000,
			swipeAngle: false,
			speed: 400,
			responsive: {
				768: {
					items: 2,
				},
				1200: {
					items: 3,
				}
			}
		});
	</script>

</body>

</html>