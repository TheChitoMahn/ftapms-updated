<?php

if (isset($_GET['id'])) {

    include "../includes/dbh.inc.php";

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $id = validate($_GET['id']);

    $sql = "DELETE FROM mou WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: ../php/listMOU.php?error=successDelete");
    }else {
        header("Location: ../php/listMOU.php?error=goneBack1");
    }

}else {
    header("Location: ../php/listMOU.php?error=goneBack2");
}