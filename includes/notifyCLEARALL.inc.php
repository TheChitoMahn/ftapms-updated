<?php

if (isset($_POST["clearall"])) {

    include "dbh.inc.php";

    // for future errors jaribu hizi:
    // DELETE FROM notification WHERE time < GETDATE()- 30
    // DELETE FROM notification WHERE time < UNIX_TIMESTAMP(DATE_SUB(NOW(), INTERVAL 180 DAY))
    // DELETE FROM notification WHERE time < NOW() - interval 1 DAY
    // This one works:
    // DELETE FROM notification WHERE time < DATE_SUB(NOW(), INTERVAL 5 HOUR)

    $sql = "DELETE FROM notification";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("location:../php/home-dashboard.php?info=success");
    }else {
        header("location:../php/home-dashboard.php?info=notifyfailedCLEARALL");
    }

}else {
    header("location:../php/home-dashboard.php?info=CheckSQL");
}