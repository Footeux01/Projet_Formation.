<div id="section3" class="container-fluid mt-5 p-2 text-center carousel section">
	<div class="row">
		<div class="col-xl-12 col-lg-12 col-sm-12 col-xs-12 text-center">
			<div id="carouselExampleControls" class="carousel slide col-xl-12 col-lg-12 col-sm-12 col-xs-12 text-center" data-ride="carousel">
  				<div id ="carou" class="carousel-inner col-xl-12 col-lg-12 col-sm-12 col-xs-12 text-center" role="listbox">
					<?php
					$tab = fopen('ressources/carousel.csv', 'r');
					$bat = [];
					if ($tab) {
					while (!feof($tab)) {
						$lignes = fgets($tab);
						$lignes_explode=explode(';',$lignes);
						array_push($bat, $lignes_explode[1]);
						}
					for ($i=0; $i < count($bat)-1; $i++) {
						if ($i==0) {
							echo "<div class='carousel-item active'>"."<img class='d-block img-fluid' alt='First slide' src='ressources/portfolio/".trim($bat[$i])."'>"."</div>";
						}else{
							echo "<div class='carousel-item'>"."<img class='d-block img-fluid' src='ressources/portfolio/".trim($bat[$i])."'>"."</div>";
							}
						}
					}	
					fclose($tab);
					?>
		 		</div>
		 		<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    				<span class="controlslide"><</span>
  				</a>
  				<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    				<span class="controlslide">></span>
  				</a>
		 	</div>
		</div>
	</div>
</div>


  