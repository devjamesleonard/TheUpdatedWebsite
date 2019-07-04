<?php
DEFINE('DB_USER', 'id3536045_9991');
DEFINE('DB_HOST','localhost');
DEFINE('DB_PASSWORD','Raiyne100' );
DEFINE('DB_NAME','id3536045_notes');
DEFINE('DB_PORT',3306);
DEFINE('DB_SOCKET',ini_get('mysqli.default_socket'));

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die('Could not connect to MySQL ' . mysqli_connect_error());


?>
