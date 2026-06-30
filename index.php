<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Travel Rahman</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />

	<script src="https://kit.fontawesome.com/d5b956fb36.js" crossorigin="anonymous"></script>

	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

	<style>
		body {
			font-family: 'Jost', sans-serif;
			font-size: 16px;
			line-height: 1.8;
			font-weight: 400;
		}

		/* utils */
		.primary-color {
			color: rgb(249, 171, 48) !important;
		}

		.primary-bg {
			background-color: rgb(249, 171, 48) !important;
		}

		/* navbar */
		.navbar {
			transition: all 0.5s;
		}
		.navbar-brand:hover {
			color: rgb(249, 171, 48);
		}
		.navbar-brand-scrolled:hover {
			color: #fff !important;
		}

		a.nav-link {
			font-size: 18px;
		}

		.navbar-scrolled {
			background-color: rgb(249, 171, 48) !important;
			box-shadow: 0 3px 10px rgba(249, 171, 48, 0.3);
		}

		/* home carousel */
		.carousel {
			padding-right: 0;
			padding-left: 0;
		}

		.carousel-item img {
			width: 100%;
			height: 60vh;
			object-fit: cover;
		}

		/* choose us section */
		.features i {
			font-size: 42px;
			color: rgb(249, 171, 48);
		}

		.features img {
			height: 320px;
			object-fit: cover;
		}

		/* destinations */
		.section-title button {
			background-color: rgba(249, 171, 48, 0.1) !important;
		}

		.single-deal {
			border: 1px solid #ebe6de;
			border-radius: 6px;
		}

		.tr-price {
			font-size: 15px;
			font-weight: 600;
			float: right;
			position: relative;
			top: -90px;
			right: -17px;
			color: #fff;
			background-color: rgb(249, 171, 48);
		}

		.tr-price::before {
			content: '';
			left: -19px;
			top: 0px;
			position: absolute;
			border-top: 19px solid transparent;
			border-right: 19px solid rgb(249, 171, 48);
			border-bottom: 21px solid transparent;
		}

		/* services */
		.services {
			background-color: #F4F9FF;
		}

		.services i {
			font-size: 42px;
			color: #6e7434;
		}

		.service {
			background-color: #fff;
			box-sizing: border-box;
			border-radius: 5px;
		}

		.service i {
			font-size: 42px;
			color: rgb(249, 171, 48);
		}

		.tour-rating .rating_count {
			float: right;
			color: #727272;
		}

		/* gallery */
		.single-gallery h5 {
			font-weight: 600;
			float: inherit;
			position: relative;
			top: -50px;
			color: #fff;
		}

		/* packages */
		.tour-text {
			position: relative;
			bottom: 100px;
			color: #fff;
			background-color: rgba(249, 171, 48, 0.1);
		}

		.pack-price {
			font-weight: 900;
		}

		/* contact us */
		.contact-us {
			background-color: #F4F9FF;
		}

		.contact-form {
			background-color: #fff;
			border-radius: 4px 0px 0px 4px;
			padding: 55px 30px 55px 55px;
			height: 100%;
		}

		.form-control:focus {
			border-color: rgb(249, 171, 48) !important;
			box-shadow: 0 0 0 0.25rem rgb(249, 171, 48, 0.1) !important;
		}

		.submit-btn {
			color: #fff;
			font-size: 15px;
			font-weight: 700;
			margin-top: 20px;
			background-color: rgb(249, 171, 48);
			border-color: rgb(249, 171, 48);
		}

		.submit-btn:hover {
			background-color: #00102A;
		}

		.contact-info {
			padding: 55px 40px;
			height: 100%;
			border-radius: 0 4px 4px 0;
		}

		.single-info {
			background-color: #FFF;
			padding: 18px;
			margin-bottom: 20px;
			border-radius: 4px;
		}

		.single-info i {
			width: 40px;
			height: 40px;
			background-color: rgba(249, 171, 48, 0.1);
			color: #333;
			border-radius: 50%;
			float: left;
			margin-right: 15px;
			line-height: 40px;
		}

		.single-info p {
			font-weight: 500;
		}

		/* footer */
		.footer {
			padding: 70px 0 40px;
			background-color: #00102A;
			color: #fff;
		}

		.footer-top {
			margin-bottom: 30px;
			border-bottom: 1px solid rgba(249, 171, 48, 0.3);
			padding-top: 30px;
			padding-bottom: 30px;
		}

		.footer ul {
			list-style-type: none;
		}

		ul, li {
			margin: 0 0 10px 0;
			padding: 0;
		}

		.footer a {
			color: #fff;
			text-decoration: none;
			transition: .5s;
		}

		a:hover {
			color: rgb(249, 171, 48);
		}

		.sub-btn { 
			color: #fff;
			font-size: 15px;
			font-weight: 700;
			background-color: rgb(249, 171, 48);
			border-color: rgb(249, 171, 48);
		}

		.top-control {
			position: fixed;
			font-size: 20px;
			color: #fff;
			bottom: 15px;
			right: 15px;
			cursor: pointer;
			background-color: rgb(249, 171, 48);
			height: 45px;
			width: 45px;
			line-height: 45px;
			border-radius: 50%;
			transition: all .2s ease 0s;
		}

		.top-control i {
			margin-left: 12px;
		}
		.top-control:hover {
			background-color: #00102A;
		}
	</style>
</head>

<body>
	<nav id="navScrollSpy" class="navbar sticky-top navbar-expand-lg">
		<div class="container">
			<a class="navbar-brand fw-bolder" href="#">Travel Rahman</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
				aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse container d-flex-md justify-content-md-end" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="#">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#service">Service</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#gallery">Gallery</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#contact">Contact</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div id="carouselTravelWasp" class="carousel slide container-fluid" data-bs-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="https://uploads.onecompiler.io/44q8ezv2q/44qeevvd8/15532.gif" class="d-block w-100" alt="walk with nature" />
				<div class="carousel-caption">
					<h1 class="fw-bolder">To walk with Nature</h1>
					<p class="fw-medium">The mountains are calling and I must go.</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="https://uploads.onecompiler.io/44q8ezv2q/44qeevvd8/15503.gif" class="d-block w-100" alt="kayaking" />
				<div class="carousel-caption ">
					<h1 class="fw-bolder">Live life in Kayaks</h1>
					<p class="fw-medium">Never let your fears paddle solo</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="https://uploads.onecompiler.io/44q8ezv2q/44qe9wgdb/15411.jpg" class="d-block w-100" alt="man cave" />
				<div class="carousel-caption">
					<h1 class="fw-bolder">Man Cave</h1>
					<p class="fw-medium">You can always get out; there's never a dead end.</p>
				</div>
			</div>
		</div>
	</div>
	<section class="choose-us features py-5">
		<div class="container" data-aos="fade-up">
			<div class="row justify-content-md-center">
				<div class="col-xl-6 col-lg-6 col-md-12">
					<div class="row">
						<div class="col-xl-6 col-lg-6 col-md-6">
							<i class="fa-solid fa-plane-departure"></i>
							<h5 class="mt-2">Travel Arrangements</h5>
							<p class="text-lg-left">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi alias rem at a quia corrupti!</p>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6">
							<i class="fa-solid fa-chart-line"></i>
                			<h5 class="mt-2">Activities</h5>
							<p class="text-lg-left">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi alias rem at a quia corrupti!</p>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6">
							<i class="fa-solid fa-map-location-dot"></i>
							<h5 class="mt-2">Location Manager</h5>
							<p class="text-lg-left">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi alias rem at a quia corrupti!</p>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6">
							<i class="fa-solid fa-user-shield"></i>
							<h5 class="mt-2">Private Guide</h5>
							<p class="text-lg-left">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi alias rem at a quia corrupti!</p>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-12">
					<div class="row">
						<div class="col-md-6 ps-md-5 mt-sm-3">
							<img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?w=500" class="img-fluid" alt="beach" />
						</div>
						<div class="col-md-6 mt-md-5 ps-md-5 mt-3">
							<img src="https://images.unsplash.com/photo-1544735716-392fe2489ffa?w=500" class="img-fluid" alt="maldives" />
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="top-deals py-5">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center" data-aos="fade-up">
						<button type="button" class="btn primary-color btn-sm my-2" disabled>Destinations</button>
						<h3 class="mt-md-3">Travel Most Popular Places</h3>
					</div>
				</div>
			</div>
			<div class="row my-5">
				<div class="col-sm-12 col-xl-4 col-lg-6">
					<figure class="figure single-deal" data-aos="fade-right">
						<img src="https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?w=500" class="figure-img img-fluid" alt="Austria">
						<figcaption class="figure-caption p-3">
							<span class="tr-price p-2">$ 200/Night</span>
							<small><i class="fa-regular fa-clock my-2"></i> 10 Days Trip</small>
							<h5>Princetown, Austria</h5>
							<div class="tour-rating mt-3">
								<i class="fas fa-star primary-color"></i><i class="fas fa-star primary-color"></i><i class="fas fa-star primary-color"></i><i class="fas fa-star primary-color"></i><i class="fas fa-star primary-color"></i>
								<span class="rating_count">(140)</span>
							</div>
						</figcaption>
					</figure>
				</div>
				<div class="col-sm-12 col-xl-4 col-lg-6">
					<figure class="figure single-deal" data-aos="fade-up">
						<img src="https://images.unsplash.com/photo-1506929562872-bb421503ef21?w=500" class="figure-img img-fluid" alt="Australia">
						<figcaption class="figure-caption p-3">
							<span class="tr-price p-2">$ 150/Night</span>
							<small><i class="fa-regular fa-clock my-2"></i> 7 Days Trip</small>
							<h5>Surfers Paradise, Australia</h5>
							<div class="tour-rating mt-3">
								<i class="fas fa-star primary-color"></i><i class="fas fa-star primary-color"></i><i class="fas fa-star primary-color"></i><i class="fas fa-star primary-color"></i><i class="fas fa-star primary-color"></i>
								<span class="rating_count">(189)</span>
							</div>
						</figcaption>
					</figure>
				</div>
				<div class="col-sm-12 col-xl-4 col-lg-6">
					<figure class="figure single-deal" data-aos="fade-left">
						<img src="https://images.unsplash.com/photo-1528127269322-539801943592?w=500" class="figure-img img-fluid" alt="Sydney">
						<figcaption class="figure-caption p-3">
							<span class="tr-price p-2">$ 350/Night</span>
							<small><i class="fa-regular fa-clock my-2"></i> 10 Days Trip</small>
							<h5>Sydney, Australia</h5>
							<div class="tour-rating mt-3">
								<i class="fas fa-star primary-color"></i><i class="fas fa-star primary-color"></i><i class="fas fa-star primary-color"></i><i class="fas fa-star primary-color"></i><i class="fas fa-star primary-color"></i>
								<span class="rating_count">(250)</span>
							</div>
						</figcaption>
					</figure>
				</div>
			</div>
		</div>
	</section>

	<section class="services py-5" id="service">
		<div class="container" data-aos="fade-up">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">
						<button type="button" class="btn primary-color btn-sm my-2" disabled>Services</button>
						<h3 class="mt-md-3">What We Offer For You</h3>
					</div>
				</div>
			</div>
			<div class="row text-left mt-sm-2 mt-md-4">
				<div class="col-xl-4 col-lg-6 col-md-6 col-12 services-card p-sm-2 p-md-4">
					<div class="service p-4 my-2">
						<div class="icon my-3"><i class="fa-solid fa-bed"></i></div>
						<div class="service-text">
							<h4>Delux Room</h4>
							<p class="mt-md-2 mt-lg-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-6 col-md-6 col-12 services-card p-sm-2 p-md-4">
					<div class="service p-4 my-2">
						<div class="icon my-3"><i class="fa-solid fa-burger"></i></div>
						<div class="service-text">
							<h4>Delicious Food</h4>
							<p class="mt-md-2 mt-lg-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-6 col-md-6 col-12 services-card p-sm-2 p-md-4">
					<div class="service p-4 my-2">
						<div class="icon my-3"><i class="fa-solid fa-taxi"></i></div>
						<div class="service-text">
							<h4>Airport Taxi</h4>
							<p class="mt-md-2 mt-lg-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="gallery" class="tour-gallery py-5">
		<div class="container">
			<div class="row">
				<div class="col-md-12" data-aos="fade-up">
					<div class="section-title text-center">
						<button type="button" class="btn primary-color btn-sm my-2" disabled>Gallery</button>
						<h3 class="mt-md-3">Best Tourist's Shared Photos</h3>
					</div>
				</div>
			</div>
			<div class="row mt-sm-2 mt-md-4">
				<div class="col-lg-4 col-md-6 col-12 mb-3">
					<div class="single-gallery">
						<img src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?w=500" alt="Peru" class="img-fluid">
						<h5 class="text-center">Machu Picchu, Peru</h5>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-12 mb-3">
					<div class="single-gallery">
						<img src="https://images.unsplash.com/photo-1470071459604-3b5ec3a7fe05?w=500" alt="Canada" class="img-fluid">
						<h5 class="text-center">Morained Lake, Canada</h5>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-12 mb-3">
					<div class="single-gallery">
						<img src="https://images.unsplash.com/photo-1552465011-b4e21bf6e79a?w=500" alt="Thailand" class="img-fluid">
						<h5 class="text-center">Sea, Thailand</h5>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="package py-5">
		<div class="container">
			<div class="row">
				<div class="col-md-12" data-aos="fade-up">
					<div class="section-title text-center">
						<button type="button" class="btn primary-color btn-sm my-2" disabled>Popular Packages</button>
						<h3 class="mt-md-3">The Best of Our Packages</h3>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-6 col-lg-4">
					<div class="single-package" data-aos="fade-right">
						<div class="pack-image">
							<img src="https://uploads.onecompiler.io/44q8ezv2q/44qe9wgdb/15398.png" alt="French Sea Beach" class="img-fluid">
						</div>
						<div class="tour-text py-2 px-3">
							<div class="tour-rating mb-2">
								<i class="fas fa-star primary-color"></i><i class="fas fa-star primary-color"></i><i class="fas fa-star primary-color"></i><i class="fas fa-star primary-color"></i><i class="fas fa-star primary-color"></i>
							</div>
							<div class="row">
								<div class="col-8"><h5>French Sea Beach</h5></div>
								<div class="col-4"><p class="pack-price">$159</p></div>
							</div>
							<form action="cryptomus_pay.php" method="POST">
								<input type="hidden" name="package_name" value="French Sea Beach">
								<input type="hidden" name="amount" value="159.00">
								<button type="submit" class="btn btn-sm primary-bg text-white w-100 mt-2">Book & Pay Now</button>
							</form>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-4">
					<div class="single-package" data-aos="fade-up">
						<div class="pack-image">
							<img src="https://uploads.onecompiler.io/44q8ezv2q/44qe9wgdb/15398.png" alt="Beautiful Island Resort" class="img-fluid">
						</div>
						<div class="tour-text p-2">
							<div class="tour-rating mb-2">
								<i class="fas fa-star primary-color"></i><i class="fas fa-star primary-color"></i><i class="fas fa-star primary-color"></i><i class="fas fa-star primary-color"></i><i class="fas fa-star primary-color"></i>
							</div>
							<div class="row">
								<div class="col-8"><h5>Beautiful Island</h5></div>
								<div class="col-4"><p class="pack-price">$269</p></div>
							</div>
							<form action="cryptomus_pay.php" method="POST">
								<input type="hidden" name="package_name" value="Beautiful Island Resort">
								<input type="hidden" name="amount" value="269.00">
								<button type="submit" class="btn btn-sm primary-bg text-white w-100 mt-2">Book & Pay Now</button>
							</form>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-4">
					<div class="single-package" data-aos="fade-left">
						<div class="pack-image">
							<img src="https://uploads.onecompiler.io/44q8ezv2q/44qe9wgdb/15398.png" alt="Maldives Sea Beach" class="img-fluid">
						</div>
						<div class="tour-text p-2">
							<div class="tour-rating mb-2">
								<i class="fas fa-star primary-color"></i><i class="fas fa-star primary-color"></i><i class="fas fa-star primary-color"></i><i class="fas fa-star primary-color"></i><i class="fas fa-star primary-color"></i>
							</div>
							<div class="row">
								<div class="col-8"><h5>Maldives Beach</h5></div>
								<div class="col-4"><p class="pack-price">$350</p></div>
							</div>
							<form action="cryptomus_pay.php" method="POST">
								<input type="hidden" name="package_name" value="Maldives Sea Beach">
								<input type="hidden" name="amount" value="350.00">
								<button type="submit" class="btn btn-sm primary-bg text-white w-100 mt-2">Book & Pay Now</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="contact-us py-5" id="contact">
		<div class="container">
			<div class="row">
				<div class="col-xl-8 col-12">
					<div class="contact-form" data-aos="fade-right">
						<h4 class="py-2">Custom Payment & Booking Form</h4>
						<form action="cryptomus_pay.php" method="POST">
							<div class="row">
								<div class="col-xl-6 mb-3">
									<input type="text" name="name" class="form-control" placeholder="Name" required>
								</div>
								<div class="col-xl-6 mb-3">
									<input type="email" name="email" class="form-control" placeholder="Email" required>
								</div>
								<div class="col-xl-6 mb-3">
									<input type="text" name="phone" class="form-control" placeholder="Phone">
								</div>
								<div class="col-xl-6 mb-3">
									<input type="number" step="0.01" name="amount" class="form-control" placeholder="Enter Amount to Pay ($)" required>
								</div>
								<div class="col-xl-12 mb-3">
									<textarea rows="4" class="form-control" name="message" placeholder="Your Message or Special Requirements"></textarea>
								</div>
							</div>
							<button type="submit" class="btn btn-md primary-bg submit-btn">PROCEED TO CRYPTO PAYMENT</button>
						</form>
					</div>
				</div>
				<div class="col-xl-4 col-12">
					<div class="contact-info primary-bg" data-aos="fade-left">
						<h4 class="py-2">Contact Information</h4>
						<div class="single-info">
							<i class="fa-solid fa-phone text-center"></i>
							<div class="info-text"><h5>Call Phone</h5><p>+639183499232</p></div>
						</div>
						<div class="single-info">
							<i class="fa-solid fa-at text-center"></i>
							<div class="info-text"><h5>Email us</h5><p>travelrahman@example.com</p></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="footer py-5">
		<div class="container text-center">
			<small>Copyright @ Travel Rahman all right reserved.</small>
		</div>
	</section>

	<div id="topControl" class="top-control">
		<i class="fa-brands fa-space-awesome"></i>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

	<script>
    $(() => {
			AOS.init();
			const navbar = document.querySelector('.navbar');
			const navBrand = document.querySelector('.navbar-brand');
			window.addEventListener('scroll', () => {
				if (window.scrollY >= 56) {
					navbar.classList.add('navbar-scrolled');
					navBrand.classList.add(`navbar-brand-scrolled`);
				} else {
					navbar.classList.remove(`navbar-scrolled`);
					navBrand.classList.remove(`navbar-brand-scrolled`);
				}
			});

			$('#topControl').click(() => {
				$("html, body").scrollTop(0);
				return false;
			});
		});
	</script>
</body>
</html>
