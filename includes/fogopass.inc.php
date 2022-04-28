<?php

include "dbh.inc.php";

$sql = "SELECT * FROM fogo ORDER BY id DESC";
$result = mysqli_query($conn, $sql);