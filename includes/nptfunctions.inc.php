<?php

function emptyInputnewpartner($typeofpartner, $orgname, $location, $country, $Address, $focalftastaff, $principalname, $Telephone, $Email, $altEmail, $Interests, $IndicateOrpotunities, $progress) {
    $result = null;
    if (empty($typeofpartner) || empty($orgname) || empty($location) || empty($country) || empty($Address) || empty($focalftastaff) || empty($principalname) || empty($Telephone) || empty($Email) || empty($altEmail) ||empty($Interests) || empty($IndicateOrpotunities) || empty($progress)) {
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
    if ($_SERVER['REQUEST_URI'] === '/includes/agreement.inc.php') {
        echo '<meta http-equiv="Refresh" content="0.01; url=../php/agreementSCHD.php?error=successAdded">';
    }elseif ($_SERVER['REQUEST_URI'] === '/includes/newpartner.inc.php') {
        echo '<meta http-equiv="Refresh" content="0.01; url=../php/agreementSCHD.php?error=NewPartnerAdded">';
    }elseif ($_SERVER['REQUEST_URI'] === '/includes/nda.inc.php') {
        echo '<meta http-equiv="Refresh" content="0.0; url=../php/listNDA.php?error=successnewnda">';
    }elseif ($_SERVER['REQUEST_URI'] === '/includes/MOU.inc.php') {
        echo '<meta http-equiv="Refresh" content="0.0; url=../php/listMOU.php?error=successnewmou">';
    }elseif ($_SERVER['REQUEST_URI'] === '/includes/actionplan.inc.php') {
        echo '<meta http-equiv="Refresh" content="0.01; url=../php/actionplan.php?error=NewapAdded">';
    }elseif ($_SERVER['REQUEST_URI'] === '/includes/ftapascoresheet.inc.php') {
        echo '<meta http-equiv="Refresh" content="0.01; url=../php/ftapascoresheet.php?error=NewscoresheetAdded">';
    }elseif ($_SERVER['REQUEST_URI'] === '/includes/ddchecklist.inc.php') {
        echo '<meta http-equiv="Refresh" content="0.01; url=../php/ddchecklist.php?error=NewchecklistAdded">';
    }elseif ($_SERVER['REQUEST_URI'] === '/includes/ftaprzscorecard.inc.php') {
        echo '<meta http-equiv="Refresh" content="0.01; url=../php/ftaprzscorecard.php?error=NewscorecardAdded">';
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
    if ($_SERVER['REQUEST_URI'] === "/php/agreementDelete.php?id={$id}") {
        echo '<meta http-equiv="Refresh" content="0.0; url=../php/agreementSCHD.php?error=successDelete">';
    }elseif ($_SERVER['REQUEST_URI'] === "/includes/update.inc.php") {
        echo '<meta http-equiv="Refresh" content="0.0; url=../php/editpartner.php?error=successupdate">';
    }elseif ($_SERVER['REQUEST_URI'] === "/php/delete.php?id={$id}") {
        echo '<meta http-equiv="Refresh" content="0.0; url=../php/editpartner.php?error=successDelete">';
    }elseif ($_SERVER['REQUEST_URI'] === "/includes/NDAedit.inc.php") {
        echo '<meta http-equiv="Refresh" content="0.0; url=../php/listNDA.php?error=successNDAedit">';
    }elseif ($_SERVER['REQUEST_URI'] === "/includes/MOUedit.inc.php") {
        echo '<meta http-equiv="Refresh" content="0.0; url=../php/listMOU.php?error=successMOUupdated">';
    }elseif ($_SERVER['REQUEST_URI'] === "/php/ndaDelete.php?id={$id}") {
        echo '<meta http-equiv="Refresh" content="0.0; url=../php/listNDA.php?error=successDelete">';
    }elseif ($_SERVER['REQUEST_URI'] === "/php/mouDelete.php?id={$id}") {
        echo '<meta http-equiv="Refresh" content="0.0; url=../php/listMOU.php?error=successDelete">';
    }elseif ($_SERVER['REQUEST_URI'] === "/php/actionplandelete.php?id={$id}") {
        echo '<meta http-equiv="Refresh" content="0.0; url=../php/actionplan.php?error=successDelete">';
    }elseif ($_SERVER['REQUEST_URI'] === "/php/SERVICEDelete.php?id={$id}") {
        echo '<meta http-equiv="Refresh" content="0.0; url=../php/listSERVICE.php?error=successDelete">';
    }elseif ($_SERVER['REQUEST_URI'] === "/php/OTHERDelete.php?id={$id}") {
        echo '<meta http-equiv="Refresh" content="0.0; url=../php/listOTHER.php?error=successDelete">';
    }elseif ($_SERVER['REQUEST_URI'] === "/php/scoresheetDELETE.php?id={$id}") {
        echo '<meta http-equiv="Refresh" content="0.0; url=../php/listofass.php?error=successDelete">';
    }elseif ($_SERVER['REQUEST_URI'] === "/php/ddDELETE.php?id={$id}") {
        echo '<meta http-equiv="Refresh" content="0.0; url=../php/listofass.php?error=successddDelete">';
    }elseif ($_SERVER['REQUEST_URI'] === "/php/scorecardDELETE.php?id={$id}") {
        echo '<meta http-equiv="Refresh" content="0.0; url=../php/listofass.php?error=successprzDelete">';
    }
    exit();
}

function createnpt($conn, $typeofpartner, $orgname, $location, $country, $Address, $focalftastaff, $principalname, $Telephone, $Email, $altEmail, $Interests, $IndicateOrpotunities, $progress, $partnershipAgreement, $Implementationdate, $agreementavailable, $ps, $data, $name, $RLname, $action){
    $sql = "INSERT INTO newpartner (typeofpartner, orgname, location, country, Address, focalftastaff, principalname, Telephone, Email, altemail, Interests, IndicateOrpotunities, progress, partnershipAgreement, Implementationdate, agreementavailable, ps, data, filename) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../php/newpartner.php?error=stmtFailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "sssssssssssssssssss", $typeofpartner, $orgname, $location, $country, $Address, $focalftastaff, $principalname, $Telephone, $Email, $altEmail, $Interests, $IndicateOrpotunities, $progress, $partnershipAgreement, $Implementationdate, $agreementavailable, $ps, $data, $name);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    successnotify($conn, $RLname, $action);
    //header("location: ../php/editpartner.php?error=NewPartnerAdded");
    exit();
}

function updatenpt($conn, $typeofpartner, $orgname, $location, $country, $Address, $focalftastaff, $principalname, $Telephone, $Email, $altEmail, $Interests, $IndicateOrpotunities, $progress, $partnershipAgreement, $Implementationdate, $agreementavailable, $ps, $id, $RLname, $action){
    $sql = "UPDATE newpartner SET typeofpartner=?, orgname=?, location=?, country=?, Address=?, focalftastaff=?, principalname=?, Telephone=?, Email=?, altemail=?, Interests=?, IndicateOrpotunities=?, progress=?, partnershipAgreement=?, Implementationdate=?, agreementavailable=?, ps=?  
            WHERE id=? ";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../php/update.php?error=stmtFailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ssssssssssssssssss", $typeofpartner, $orgname, $location, $country, $Address, $focalftastaff, $principalname, $Telephone, $Email, $altEmail, $Interests, $IndicateOrpotunities, $progress, $partnershipAgreement, $Implementationdate, $agreementavailable, $ps, $id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    successIDs($conn, $RLname, $action, $id);
    //header("location: ../php/editpartner.php?error=successupdate");
    exit();
}

function createnda($conn, $date, $name, $partner, $proposal, $delivery, $termination, $country, $time, $timelimit, $goals, $w_name, $w_designation, $w_address, $fta_name, $progress, $RLname, $action){
    $sql = "INSERT INTO nda (date, name, partner, proposal, delivery, termination, country, time, timelimit, goals, w_name, w_designation, w_address, fta_name, progress) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../php/NDA.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "sssssssssssssss", $date, $name, $partner, $proposal, $delivery, $termination, $country, $time, $timelimit, $goals, $w_name, $w_designation, $w_address, $fta_name, $progress);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    successnotify($conn, $RLname, $action);
    // header("location: ../php/NDA.php?error=successnewnda");
    exit();
}

function createmou($conn, $target, $logo, $orgname, $moudate, $preamble, $whereas, $whereas2, $article1, $article2, $article3, $article31, $article32, $article4, $article5, $article6, $article7, $article8, $contacts, $article9, $article10, $article11, $article12, $article13, $article14, $sign, $progress, $RLname, $action) {
    $sql = "INSERT INTO mou (logo, orgname, moudate, preamble, whereas, whereas2, article1, article2, article3, article31, article32, article4, article5, article6, article7, article8, contacts, article9, article10, article11, article12, article13, article14, sign, progress) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../php/MOU.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "sssssssssssssssssssssssss", $logo, $orgname, $moudate, $preamble, $whereas, $whereas2, $article1, $article2, $article3, $article31, $article32, $article4, $article5, $article6, $article7, $article8, $contacts, $article9, $article10, $article11, $article12, $article13, $article14, $sign, $progress);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    move_uploaded_file($_FILES['logo']['tmp_name'], $target);
    successnotify($conn, $RLname, $action);
    // header("location: ../php/MOU.php?error=successnewmou");
    exit();
}