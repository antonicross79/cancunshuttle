<?php

$conexion = new mysqli("127.0.0.1","canczdhg_cancunshuttle","cM2~hmMMjsWr","canczdhg_cancunshuttle");


if ($conexion -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$strJsonFileContents = file_get_contents("./tabla1.json");
$array = json_decode($strJsonFileContents, true);
foreach ($array as $key) {
	$sql = "call updatePrices($key[3], $key[4], $key[5], $key[6], $key[7], $key[8], $key[9], $key[10], '$key[1]')";

	if ($conexion->query($sql) === TRUE) {
	  echo "Precio actualizado";
	} else {
	  echo "Error actualizando precio: " . $conn->error;
	  echo "Consulta: ".$sql;
	}
}