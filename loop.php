<?php 
include 'menu.php';
$sana[] = 0;
for ($i=0; $i < count($menu); $i++) { 
	for ($j=0; $j < count($menu); $j++) { 
		$sana[$j] = count($menu[$i]);
	}
}
for ($i=0; $i < count($menu); $i++) {  
	for ($j=0; $j < 1; $j++) { 
		echo  '<li class="nav-item">
		        <a class="nav-link" href="'.$menu[$i][1].'">'.'<i class="'.$menu[$i][2].'"></i> '.strtoupper($menu[$i][0]).'</a>
		       </li>';
	}  
}
?>