<?php

if (isset($_GET['id'])) {

    include "../includes/dbh.inc.php";

    // function validate($data){
    //     $data = trim($data);
    //     $data = stripslashes($data);
    //     $data = htmlspecialchars($data);
    //     return $data;
    // }

    $id = sanitize_input($_GET['id']);

    $sql = "SELECT * FROM users_approved WHERE id=$id;";
    $res = mysqli_query($conn, $sql);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        if ($id==$row['id']) {
            header("Location: ../php/accmgmt.php?error=userAlreadyMoved");
        }
    }else {
        $sql2 = "INSERT INTO users_approved SELECT * FROM users WHERE id = $id;";
        $result = mysqli_query($conn, $sql2);

        if ($result) {
            header("Location: ../php/accmgmt.php?error=successMove");
        }else {
            header("Location: ../php/accmgmt.php?error=goneBack1");
        }
    }

}else {
    header("Location: ../php/accmgmt.php?error=goneBack2");
}