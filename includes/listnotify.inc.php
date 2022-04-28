<?php

include "dbh.inc.php";

$sql = "SELECT * FROM notification ORDER BY id DESC LIMIT 15";
$result2 = mysqli_query($conn, $sql);