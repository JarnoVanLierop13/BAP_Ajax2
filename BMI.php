<?php
$gewicht = $_GET["gewicht"];
$lengte1 = $_GET["lengte"];
//BMIcalc($gewicht, $lengte);

  $lengte = $lengte1/100;
//function BMIcalc($gewicht, $lengte) {




 $bmi =  round($gewicht / ($lengte*$lengte), 1);

echo $bmi;//dit gaat als string terug naar client met ajax

//}

 ?>
