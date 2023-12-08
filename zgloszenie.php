<?php
$l = $_POST["lowisko"];
$d = $_POST["dat"];
$s = $_POST["sedzia"];
$lacz = mysqli_connect('localhost','root','','wedkarstwo');
$pyt = "INSERT INTO `zawody_wedkarskie`(`Karty_wedkarskie_id`, `Lowisko_id`, `data_zawodow`, `sedzia`) VALUES (0, '$l','$d','$s')";
$wyn = mysqli_query($lacz, $pyt);
mysqli_close($lacz);
?>