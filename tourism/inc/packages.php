
<style>
	/* Packages section */
#packages-container {
  /* background-color: rgba(139, 230, 230, 0.218); */
  /* background:linear-gradient(to left top, rgba(0, 0, 255, 0.351), rgba(255, 255, 255, 0.312)); */
  background: linear-gradient(to top left, rgba(255, 255, 255, 0.312), rgba(95, 108, 255, 0.351));
  /* background:linear-gradient(-90deg,rgba(255, 255, 255, 0.312) ,rgba(95, 108, 255, 0.351) ); */

}

#packages {
  margin: 34px;
  margin-bottom: 0px;
  display: flex;
  flex-wrap: wrap;
}

#packages-container h1 {
  margin: 34px;
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
</style>
<section class="page-section bg-dark" id="packages-container">
	<div class="container" id="packages">
		<br>
		<h1 class="h-primary center" id="ph">Some Packages We Offer</h1>
	<div class="d-flex w-100 justify-content-center">
		<!-- <hr class="border-warning" style="border:3px solid" width="15%"> -->
	</div>
	<div class="d-flex w-100">
		<?php
		$packages = $conn->query("SELECT * FROM `packages` order by rand() ");
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
		?>
		<div id="packages">
			<br>
				<h1 class="h-primary center" id="ph">Some Packages We Offer</h1>

			<div class="card w-100 rounded-0 box">
				<img class="card-img-top" src="<?php echo validate_image($cover) ?>" alt="<?php echo $row['title'] ?>" height="200rem" style="object-fit:cover">
                <div class="card-body">
					<h5 class="card-title truncate-1"><?php echo $row['title'] ?></h5>
					<p class="card-text truncate"><?php echo $row['description'] ?></p>
					<div class="w-100 d-flex justify-content-end">
						<a href="./?page=packages&id=<?php echo md5($row['id']) ?>" class="btn btn-sm btn-flat btn-warning">View Package <i class="fa fa-arrow-right"></i></a>
					</div>
                </div>
            </div>
		</div>
		<?php endwhile; ?>
	</div>
	<div class="d-flex w-100 justify-content-end">
		<a href="./?page=packages" class="btn btn-flat btn-warning mr-4">Explore Package <i class="fa fa-arrow-right"></i></a>
	</div>
	</div>
</section>