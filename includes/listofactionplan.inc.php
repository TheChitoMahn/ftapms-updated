<?php

include "dbh.inc.php";

$sql = "SELECT * FROM actionplan ORDER BY id DESC";
$result = mysqli_query($conn, $sql);