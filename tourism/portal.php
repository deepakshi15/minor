<style>
	/* header.masthead{
		background-image: url('<?php echo validate_image($_settings->info('cover')) ?>') !important;
	}
	header.masthead .container{
		background:#0000006b;
	} */

	body {
		background: white;
	}

	html {
		scroll-behavior: smooth;
	}

	/* Video Sectio */

	#bg-video {
		position: absolute;
		width: 100%;
		top: -229px;
		right: 0px;
		z-index: -1;
		object-position: center;
		object-fit: cover;
		/* opacity: 0.5; */
		/* filter: blur(2px); */
		/* filter:brightness(75%); */
	}

	/* Home Section */

	#home1 {
		display: flex;
		flex-direction: column;
		padding: 3px 200px;
		height: 305px;
		justify-content: center;
		align-items: center;
		margin-bottom: 300px;
		margin-top: 150px;
	}

	#home1 h1 {
		font-size: 7rem;
		font-weight: 700;
		color: rgb(255, 255, 255);
		text-align: center;
		transition-property: all;
		transition-duration: .4s;
	}

	#home1 h1:hover {
		-webkit-text-stroke: 2px white;
		color: transparent;
		cursor: none;
	}

	#arrow {
		position: relative;
		bottom: -250px;
		/* right: 10px; */
		/* border: 2px solid white; */
		/* background:white; */
		border-radius: 50px;

	}

	#arrow svg {
		padding-top: 3px;
		color: white;
	}

	/* Packages section */
	#packages-container {
		background: linear-gradient(to top left, rgba(255, 255, 255, 0.312), rgba(95, 108, 255, 0.351));
		padding: 2rem;
	}

	#packages {
		margin: 4px;
		padding: 2rem;
		margin-bottom: 0px;
		display: flex;
		flex-wrap: wrap;
	}

	#packages-container h1 {
		display: block;
		margin: auto;
		margin-top: 30px;

	}

	#packages .box {
		height: 550px;
		width: 400px;
		border: 2px solid rgb(47, 0, 190);
		padding: 3px;
		margin: 3px 41px;
		margin-bottom: 40px;
		border-radius: 28px;
		background-color: rgba(6, 99, 248, 0.082);
		box-shadow: 0px 0px 40px -2px grey;
		transition-property: all;
		transition-duration: .3s;
	}

	#packages .box:hover {
		box-shadow: 0px 0px 50px 2px grey;
		border: 3px solid rgb(47, 0, 190);
		transform: scale(1.1);
		z-index: 2;
		cursor: pointer;
	}

	#packages .box img {
		/* width: 300px; */
		height: 200px;
		display: block;
		margin: 0px 100px;
		margin-top: 10px;
		margin-left: 45px;
		/* padding:10px 100px; */
		border-radius: 10px;
	}

	#packages .box p {
		font-family: 'Baloo Bhaijaan 2', cursive;
		font-size: 1.1rem;
		margin-bottom: 0rem;
	}

	#packages .box span {
		font-family: 'Baloo Bhaijaan 2', cursive;
		padding: 2px 10px;
		font-size: 23px;
		margin-top: 100px;
		/* color: white; */
		border-radius: 10px;
		/* background-color: rgba(5, 50, 255, 0.352); */
		margin-left: 20px;
	}

	/* Utility classes */

	.h-primary {
		font-size: 3rem;
		text-emphasis: bold;
		padding: 5px;
		font-family: 'Baloo Bhaijaan 2', cursive;


	}

	.h-secondary {
		font-size: 2.5rem;
		padding: 12px;
		font-family: 'Baloo Bhaijaan 2', cursive;

	}

	.center {
		text-align: center;
	}
</style>
<!-- Masthead-->
<div id="bg-video">

	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<video autoplay muted loop plays-inline src="img/Sea - 6399.mp4"></video>
				<!-- <img src="/img/Sea - 6399.mp4" class="d-block w-100" alt="..."> -->
			</div>
			<div class="carousel-item">
				<video autoplay muted loop plays-inline src="img/Beach - 7277.mp4"></video>
				<!-- <img src="/img/Beach - 7277.mp4" class="d-block w-100" alt="..."> -->
			</div>
			<div class="carousel-item">
				<video autoplay muted loop plays-inline src="img/Lake - 52849.mp4"></video>
				<!-- <img src="/img/Rock - 15527.mp4" class="d-block w-100" alt="..."> -->
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>
<section id="home1">
	<h1>Discover The Whole World</h1>
	<div id="arrow">
		<a href="#ph"> <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
				class="bi bi-chevron-down" viewBox="0 0 16 16">
				<path fill-rule="evenodd"
					d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
			</svg></a>
	</div>
</section>
<!-- Services -->
<section class="" id="packages-container">
	<h1 class="h-primary center" id="ph">Some Packages We Offer</h1>
	<section class="" id="packages">
		<div class="">
			<!-- <h2 class="text-center">Tour Packages</h2> -->
			<!-- <div class="d-flex w-100 justify-content-center">
				<hr class="border-warning" style="border:3px solid" width="15%">
			</div> -->
			<div class="row">
			<?php
		$packages = $conn->query("SELECT * FROM `packages` order by rand() limit 3");
			while($row = $packages->fetch_assoc() ):
				$cover='';
				if(is_dir(base_app.'uploads/package_'.$row['id'])){
					$img = scandir(base_app.'uploads/package_'.$row['id']);
					$k = array_search('.',$img);
					if($k !== false)
						unset($img[$k]);
					$k = array_search('..',$img);
					if($k !== false)
						unset($img[$k]);
					$cover = isset($img[2]) ? 'uploads/package_'.$row['id'].'/'.$img[2] : "";
				}
				$row['description'] = strip_tags(stripslashes(html_entity_decode($row['description'])));

				$review = $conn->query("SELECT * FROM `rate_review` where package_id='{$row['id']}'");
				$review_count =$review->num_rows;
				$rate = 0;
				while($r= $review->fetch_assoc()){
					$rate += $r['rate'];
				}
				if($rate > 0 && $review_count > 0)
				$rate = number_format($rate/$review_count,0,"");
		?>
				<div class="col-md-4 p-4 ">
					<div class="box">
						<img src="<?php echo validate_image($cover) ?>" alt="<?php echo $row['title'] ?>"
							height="200rem" style="object-fit:cover">
						<div class="card-body">
							<h5 class="card-title truncate-1 w-100">
								<?php echo $row['title'] ?>
							</h5><br>
							<div class=" w-100 d-flex justify-content-start">
								<div class="stars stars-small">
									<input disabled class="star star-5" id="star-5" type="radio" name="star" <?php echo
										$rate==5 ? "checked" : '' ?>/> <label class="star star-5" for="star-5"></label>
									<input disabled class="star star-4" id="star-4" type="radio" name="star" <?php echo
										$rate==4 ? "checked" : '' ?>/> <label class="star star-4" for="star-4"></label>
									<input disabled class="star star-3" id="star-3" type="radio" name="star" <?php echo
										$rate==3 ? "checked" : '' ?>/> <label class="star star-3" for="star-3"></label>
									<input disabled class="star star-2" id="star-2" type="radio" name="star" <?php echo
										$rate==2 ? "checked" : '' ?>/> <label class="star star-2" for="star-2"></label>
									<input disabled class="star star-1" id="star-1" type="radio" name="star" <?php echo
										$rate==1 ? "checked" : '' ?>/> <label class="star star-1" for="star-1"></label>
								</div>
							</div>
							<p class="card-text truncate">
								<?php echo $row['description'] ?>
							</p>
							<div class="w-100 d-flex justify-content-end">
								<a href="./?page=view_package&id=<?php echo md5($row['id']) ?>"
									class="btn btn-sm btn-flat btn-warning">View Package <i
										class="fa fa-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
				<?php endwhile; ?>
			</div>
			<div class="d-flex w-100 justify-content-end">
				<a href="./?page=packages" class="btn btn-flat btn-warning mr-4">Explore Package <i
						class="fa fa-arrow-right"></i></a>
			</div>
		</div>
	</section>
	<!-- About-->
	<section class="page-section" id="about">
		<div class="container">
			<div class="text-center">
				<h2 class="section-heading text-uppercase">About Us</h2>
			</div>
			<div>
				<div class="card w-100">
					<div class="card-body">
						<?php echo file_get_contents(base_app.'about.html') ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Contact-->
	<section class="page-section" id="contact" style="background-color:#4086cd; color: black;">
		<div class="container">
			<div class="text-center">
				<h2 class="section-heading text-uppercase">Contact Us</h2>
				<h3 class="section-subheading text-muted">Send us a message for inquiries.</h3>
			</div>
			<!-- * * * * * * * * * * * * * * *-->
			<!-- * * SB Forms Contact Form * *-->
			<!-- * * * * * * * * * * * * * * *-->
			<!-- This form is pre-integrated with SB Forms.-->
			<!-- To make this form functional, sign up at-->
			<!-- https://startbootstrap.com/solution/contact-forms-->
			<!-- to get an API token!-->
			<form id="contactForm">
				<div class="row align-items-stretch mb-5">
					<div class="col-md-6">
						<div class="form-group">
							<!-- Name input-->
							<input class="form-control" id="name" name="name" type="text" placeholder="Your Name *"
								required />
						</div>
						<div class="form-group">
							<!-- Email address input-->
							<input class="form-control" id="email" name="email" type="email" placeholder="Your Email *"
								data-sb-validations="required,email" />
						</div>
						<div class="form-group mb-md-0">
							<input class="form-control" id="subject" name="subject" type="subject"
								placeholder="Subject *" required />
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group form-group-textarea mb-md-0">
							<!-- Message input-->
							<textarea class="form-control" id="message" name="message" placeholder="Your Message *"
								required></textarea>
						</div>
					</div>
				</div>
				<div class="text-center"><button class="btn btn-primary btn-xl text-uppercase" id="submitButton"
						type="submit">Send Message</button></div>
			</form>
		</div>
	</section>
	<script>
		$(function () {
			$('#contactForm').submit(function (e) {
				e.preventDefault()
				$.ajax({
					url: _base_url_ + "classes/Master.php?f=save_inquiry",
					method: "POST",
					data: $(this).serialize(),
					dataType: "json",
					error: err => {
						console.log(err)
						alert_toast("an error occured", 'error')
						end_loader()
					},
					success: function (resp) {
						if (typeof resp == 'object' && resp.status == 'success') {
							alert_toast("Inquiry sent", 'success')
							$('#contactForm').get(0).reset()
						} else {
							console.log(resp)
							alert_toast("an error occured", 'error')
							end_loader()
						}
					}
				})
			})
		})
	</script>