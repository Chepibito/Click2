<?php

$mysqli = new mysqli("185.207.224.10:3306", "brsqfryi_clik012e_CESARDANIEL", "Cesardiosdelawa123", "brsqfryi_clik012e_click");

if ($mysqli->connect_errno) {
	echo "la conexion a la base de datos no se ha logrado ";
}

return $mysqli;
