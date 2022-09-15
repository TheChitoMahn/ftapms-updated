<?php

if (isset($_POST["scorecard-submit"])) {
    require_once 'dbh.inc.php';
    require_once '../php/sidebar.php';

    $orgname = $_POST["org"];

    // Development Value
    $dev1 = $_POST["pr-1"];
    $dev2 = $_POST["pr-2"];
    $dev3 = $_POST["pr-3"];
    $dev4 = $_POST["pr-4"];
    $dev5 = $_POST["pr-5"];

    $devTotal = $_POST["devtotal"];

    //Business Value
    $biz1 = $_POST["pr-6"];
    $biz2 = $_POST["pr-7"];
    $biz3 = $_POST["pr-8"];

    $biztotal = $_POST["biztotal"];

    //Government Value
    $gov1 = $_POST["pr-9"];
    $gov2 = $_POST["pr-10"];

    $govtotal = $_POST["govtotal"];

    //Risks and Transactions Costs
    $rsk1 = $_POST["pr-11"];
    $rsk2 = $_POST["pr-12"];
    $rsk3 = $_POST["pr-13"];
    $rsk4 = $_POST["pr-14"];
    $rsk5 = $_POST["pr-15"];

    $rsktotal = $_POST["rsktotal"];

    $RLname = $_SESSION["fullname"];
    $action = "has completed a FTA Partner Scoresheet Assessment ";

    require_once 'nptfunctions.inc.php';

    $sql = "INSERT into scorecard (orgname, dev1, dev2, dev3, dev4, dev5, devTotal,
                                            biz1, biz2, biz3, biztotal,
                                            gov1, gov2, govtotal,
                                            rsk1, rsk2, rsk3, rsk4, rsk5, rskTotal) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../php/ftaprzscorecard.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ssssssssssssssssssss", $orgname, $dev1, $dev2, $dev3, $dev4, $dev5, $devTotal,
                                                                    $biz1, $biz2, $biz3, $biztotal,
                                                                    $gov1, $gov2, $govtotal,
                                                                    $rsk1, $rsk2, $rsk3, $rsk4, $rsk5, $rsktotal);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    successnotify($conn, $RLname, $action);
    exit();

}else {
    header("location: ../php/ftaprzscorecard.php?error=posterror");
    exit();
}