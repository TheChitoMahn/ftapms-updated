<?php

include "dbh.inc.php";

$sql = "SELECT * FROM other ORDER BY id DESC";
$result = mysqli_query($conn, $sql);