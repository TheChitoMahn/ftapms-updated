<?php

include "dbh.inc.php";

$sql = "SELECT * FROM mou ORDER BY id DESC";
$result = mysqli_query($conn, $sql);