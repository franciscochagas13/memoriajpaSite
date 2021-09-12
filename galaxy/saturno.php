<?php

$mysqli = new mysqli("localhost", "root", "", "memoriaj_site1");
$mysqli->set_charset("utf8");
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

?>
