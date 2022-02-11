<?php

$vnome=$_GET["fname"];
$vemail=$_GET["femail"];
$vtext=$_GET["textarea"];
$vdate=$_GET["date"];
$vdate2=$_GET["date2"];
$vcheck=$_GET["check"];

echo "Nome: ".$vnome."<br>Email: ".$vemail."<br>Comentario: ".$vtext."<br> Data1: ".$vdate."<br>
Data2: ".$vdate2."<br>Hamilton: ".$vcheck."<br>";

?>