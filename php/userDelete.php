<?php

if (isset($_GET['id'])) {

    include "../includes/dbh.inc.php";

    $id = sanitize_input($_GET['id']);

    $sql = "DELETE FROM users_approved WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: ../php/listusers.php?error=successDelete");
    }else {
        header("Location: ../php/listusers.php?error=goneBack1");
    }

}else {
    header("Location: ../php/listusers.php?error=goneBack2");
}