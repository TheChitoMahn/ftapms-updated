<?php

include "dbh.inc.php";

$sql = "SELECT * FROM users_approved ORDER BY id DESC";
$result = mysqli_query($conn, $sql);