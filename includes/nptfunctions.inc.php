<?php

function emptyInputnewpartner($typeofpartner, $orgname, $location, $country, $Address, $focalftastaff, $principalname, $Telephone, $Email, $altEmail, $Interests, $IndicateOrpotunities, $IndicatePartnership, $progress, $listkeychallenges) {
    $result = null;
    if (empty($typeofpartner) || empty($orgname) || empty($location) || empty($country) || empty($Address) || empty($focalftastaff) || empty($principalname) || empty($Telephone) || empty($Email) || empty($altEmail) ||empty($Interests) || empty($IndicateOrpotunities) || empty($IndicatePartnership) || empty($progress) || empty($listkeychallenges)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidAddress($Address) {
    $result = null;
    if (preg_match("/^[a-zA-Z0-9]*$/", $Address)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

// function invalidTelephone($Telephone) {
//     $result = null;
//     if (!is_numeric($Telephone)) {
//         $result = true;
//     }
//     else {
//         $result = false;
//     }
//     return $result;
// }

function invalidnptEmail($Email) {
    $result = null;
    if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}
function invalidnptaltEmail($altEmail) {
    $result = null;
    if (!filter_var($altEmail, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function successnotify($conn, $RLname, $action) {
    $sql = "INSERT INTO notification (name, action) VALUES (?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../php/agreementSCHD.php?error=NotifytikNope");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $RLname, $action);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    if ($_SERVER['REQUEST_URI'] === '/FTA_Partners_System/includes/agreement.inc.php') {
        echo '<meta http-equiv="Refresh" content="0.01; url=../php/agreementSCHD.php?error=successAdded">';
    }elseif ($_SERVER['REQUEST_URI'] === '/FTA_Partners_System/includes/newpartner.inc.php') {
        echo '<meta http-equiv="Refresh" content="0.01; url=../php/agreementSCHD.php?error=NewPartnerAdded">';
    }elseif ($_SERVER['REQUEST_URI'] === '/FTA_Partners_System/includes/nda.inc.php') {
        echo '<meta http-equiv="Refresh" content="0.01; url=../php/NDA.php?error=successnewnda">';
    }elseif ($_SERVER['REQUEST_URI'] === '/FTA_Partners_System/includes/MOU.inc.php') {
        echo '<meta http-equiv="Refresh" content="0.01; url=../php/MOU.php?error=successnewmou">';
    }
    exit();
}

function successIDs($conn, $RLname, $action, $id) {
    $sql = "INSERT INTO notification (name, action) VALUES (?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../php/agreementSCHD.php?error=NotifytikNope");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $RLname, $action);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    if ($_SERVER['REQUEST_URI'] === "/FTA_Partners_System/php/agreementDelete.php?id={$id}") {
        echo '<meta http-equiv="Refresh" content="0.0; url=../php/agreementSCHD.php?error=successDelete">';
    }elseif ($_SERVER['REQUEST_URI'] === "/FTA_Partners_System/includes/update.inc.php") {
        echo '<meta http-equiv="Refresh" content="0.0; url=../php/editpartner.php?error=successupdate">';
    }elseif ($_SERVER['REQUEST_URI'] === "/FTA_Partners_System/php/delete.php?id={$id}") {
        echo '<meta http-equiv="Refresh" content="0.0; url=../php/editpartner.php?error=successDelete">';
    }elseif ($_SERVER['REQUEST_URI'] === "/FTA_Partners_System/includes/NDAedit.inc.php") {
        echo '<meta http-equiv="Refresh" content="0.0; url=../php/listNDA.php?error=successNDAedit">';
    }elseif ($_SERVER['REQUEST_URI'] === "/FTA_Partners_System/includes/MOUedit.inc.php") {
        echo '<meta http-equiv="Refresh" content="0.0; url=../php/listMOU.php?error=successMOUupdated">';
    }elseif ($_SERVER['REQUEST_URI'] === "/FTA_Partners_System/php/ndaDelete.php?id={$id}") {
        echo '<meta http-equiv="Refresh" content="0.0; url=../php/listNDA.php?error=successDelete">';
    }elseif ($_SERVER['REQUEST_URI'] === "/FTA_Partners_System/php/mouDelete.php?id={$id}") {
        echo '<meta http-equiv="Refresh" content="0.0; url=../php/listMOU.php?error=successDelete">';
    }
    exit();
}

function createnpt($conn, $typeofpartner, $orgname, $location, $country, $Address, $focalftastaff, $principalname, $Telephone, $Email, $altEmail, $Interests, $IndicateOrpotunities, $IndicatePartnership, $specify, $specify2, $progress, $listkeychallenges, $partnershipAgreement, $Implementationdate, $agreementavailable, $ps, $data, $name, $RLname, $action){
    $sql = "INSERT INTO newpartner (typeofpartner, orgname, location, country, Address, focalftastaff, principalname, Telephone, Email, altemail, Interests, IndicateOrpotunities, IndicatePartnership, action_plan, ac_filename, progress, listkeychallenges, partnershipAgreement, Implementationdate, agreementavailable, ps, data, filename) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../php/newpartner.php?error=stmtFailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "sssssssssssssssssssssss", $typeofpartner, $orgname, $location, $country, $Address, $focalftastaff, $principalname, $Telephone, $Email, $altEmail, $Interests, $IndicateOrpotunities, $IndicatePartnership, $specify, $specify2, $progress, $listkeychallenges, $partnershipAgreement, $Implementationdate, $agreementavailable, $ps, $data, $name);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    successnotify($conn, $RLname, $action);
    //header("location: ../php/editpartner.php?error=NewPartnerAdded");
    exit();
}

function updatenpt($conn, $typeofpartner, $orgname, $location, $country, $Address, $focalftastaff, $principalname, $Telephone, $Email, $altEmail, $Interests, $IndicateOrpotunities, $IndicatePartnership, $progress, $listkeychallenges, $partnershipAgreement, $Implementationdate, $agreementavailable, $ps, $id, $RLname, $action){
    $sql = "UPDATE newpartner SET typeofpartner=?, orgname=?, location=?, country=?, Address=?, focalftastaff=?, principalname=?, Telephone=?, Email=?, altemail=?, Interests=?, IndicateOrpotunities=?, IndicatePartnership=?, progress=?, listkeychallenges=?, partnershipAgreement=?, Implementationdate=?, agreementavailable=?, ps=?  
            WHERE id=? ";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../php/update.php?error=stmtFailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ssssssssssssssssssss", $typeofpartner, $orgname, $location, $country, $Address, $focalftastaff, $principalname, $Telephone, $Email, $altEmail, $Interests, $IndicateOrpotunities, $IndicatePartnership, $progress, $listkeychallenges, $partnershipAgreement, $Implementationdate, $agreementavailable, $ps, $id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    successIDs($conn, $RLname, $action, $id);
    //header("location: ../php/editpartner.php?error=successupdate");
    exit();
}

function createnda($conn, $date, $name, $partner, $proposal, $delivery, $termination, $country, $time, $timelimit, $goals, $w_name, $w_designation, $w_address, $fta_name, $RLname, $action){
    $sql = "INSERT INTO nda (date, name, partner, proposal, delivery, termination, country, time, timelimit, goals, w_name, w_designation, w_address, fta_name) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../php/NDA.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ssssssssssssss", $date, $name, $partner, $proposal, $delivery, $termination, $country, $time, $timelimit, $goals, $w_name, $w_designation, $w_address, $fta_name);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    successnotify($conn, $RLname, $action);
    // header("location: ../php/NDA.php?error=successnewnda");
    exit();
}

function createmou($conn, $target, $logo, $orgname, $moudate, $preamble, $whereas, $whereas2, $article1, $article2, $article3, $article31, $article32, $article4, $article5, $article6, $article7, $article8, $contacts, $article9, $article10, $article11, $article12, $article13, $article14, $sign, $RLname, $action) {
    $sql = "INSERT INTO mou (logo, orgname, moudate, preamble, whereas, whereas2, article1, article2, article3, article31, article32, article4, article5, article6, article7, article8, contacts, article9, article10, article11, article12, article13, article14, sign) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../php/MOU.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ssssssssssssssssssssssss", $logo, $orgname, $moudate, $preamble, $whereas, $whereas2, $article1, $article2, $article3, $article31, $article32, $article4, $article5, $article6, $article7, $article8, $contacts, $article9, $article10, $article11, $article12, $article13, $article14, $sign);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    move_uploaded_file($_FILES['logo']['tmp_name'], $target);
    successnotify($conn, $RLname, $action);
    // header("location: ../php/MOU.php?error=successnewmou");
    exit();
}