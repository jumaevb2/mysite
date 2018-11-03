<?php 
include 'menu.php';
$sana[] = 0;
for ($i=0; $i < count($slider); $i++) { 
	for ($j=0; $j < count($slider); $j++) { 
		$sana[$j] = count($slider[$i]);
	}
}
for ($i=0; $i < count($slider); $i++) {  
	for ($j=0; $j < 1; $j++) { 
	 echo '<div class="carousel-item '.$slider[$i][2].'" style="background-image: url('.$slider[$i][1].');">'.
	       '<div class="carousel-caption d-none d-md-block"><h3>'.$slider[$i][3].'</h3><p>'.$slider[$i][4].'</p></div></div>';
	}  
}
?>