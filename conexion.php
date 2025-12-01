<?php

$mysqli = new mysqli("localhost:3306", "brsqfryi_admin", "29@X&puz^PJ:FB:", "brsqfryi_click2db");

if ($mysqli->connect_errno) {
	echo "la conexion a la base de datos no se ha logrado ";
}

return $mysqli;
