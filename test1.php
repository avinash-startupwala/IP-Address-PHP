<?php




$today = getdate();
print_r($today);
echo "<br>";


echo "<br>";
echo $today['mday']."/".$today['mon']."/".$today['year']."-".$today['hours'].":".$today['minutes'];




?>
