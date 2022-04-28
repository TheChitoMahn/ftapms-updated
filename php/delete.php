<?php

if (isset($_GET['id'])) {

    include "../includes/dbh.inc.php";
    require_once '../php/sidebar.php';

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $id = validate($_GET['id']);
    $RLname = $_SESSION["fullname"];
    $action = "deleted a Partner at ";

    require_once "../includes/nptfunctions.inc.php";

    $sql = "DELETE FROM newpartner WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        successIDs($conn,$RLname, $action, $id);
        //header("Location: ../php/editpartner.php?error=successDelete");
    }else {
        header("Location: ../php/editpartner.php?error=goneBack1");
    }

}else {
    header("Location: ../php/editpartner.php?error=goneBack2");
}