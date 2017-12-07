<?php
	
	$csv = fopen("inc/equipe.csv", "r");
	$data = array();
	$temp = "";
	
	while (!feof($csv)) {
		$line = fgets($csv);
		$temp = explode(";", $line);
		
		echo '<div class="col-xs-12 col-md-3"> <div class="card text-center">';

		echo '<img class="img-circle" style="max-width:60%" src="img/'.trim($temp[0]).'.jpg" alt="Avatar de '.$temp[0].'">';

		echo '<div class="card-body">';
			echo '<h4 class="card-title">'.ucfirst($temp[0]).'</h4>';
			echo '<h5>'.ucfirst($temp[1]).'</h5>';
			if (strlen($temp[2]) > 5){
				echo '<a href="'.trim($temp[2]).'" target="_blank" > <i class="fa fa-facebook fa-3" aria-hidden="true"></i> </a>';
			}else{
				echo '<i class="fa fa-times" aria-hidden="true"></i>';
			}
		echo '</div>';

		echo '</div> </div>';

	}
?>