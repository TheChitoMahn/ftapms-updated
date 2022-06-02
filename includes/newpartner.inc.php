<?php

// error_reporting(E_ERROR);
ini_set('display_errors', 1); 
ini_set('log_errors',1); 
error_reporting(E_ALL); 
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

if (isset($_POST["newpartner-submit"])) {
    require_once '../php/sidebar.php';
    
    $typeofpartner = $_POST["TypeofPartner"];
    $orgname = $_POST["OrganaizatoinName"];
    $location = $_POST["location"];
    $country = $_POST["cc"];
    $Address = $_POST["Address"];
    $focalftastaff = $_POST["focalftastaff"];
    $principalname = $_POST["PrincipalName"];
    $Telephone = $_POST["Telephone"];
    $Email = $_POST["npEmail"];
    $altEmail = $_POST["npAltEmail"];
    $partnershipAgreement = $_POST["pap"];
    $agreementavailable = $_POST["pav"];
    $Interests = trim($_POST["biginput1"]);
    $IndicateOrpotunities = trim($_POST["biginput2"]);
    $IndicatePartnership = trim($_POST["biginput3"]);
    $specify = file_get_contents($_FILES["biginput4"]["tmp_name"]);
    $specify2 = $_FILES["biginput4"]["name"];
    $progress = $_POST["progress"];
    $listkeychallenges = trim($_POST["biginput5"]);
    $ps = $_POST["Partnershipstatus"];
    $Implementationdate = $_POST["implementationperiod"];
    $data = file_get_contents($_FILES["Agreement"]["tmp_name"]);
    $name = $_FILES["Agreement"]["name"];
    $RLname = $_SESSION["fullname"];
    $action = "added a new Partner at ";

    require_once 'dbh.inc.php';
    require_once 'nptfunctions.inc.php';
    
    if (emptyInputnewpartner($typeofpartner, $orgname, $location, $country, $Address, $focalftastaff, $principalname, $Telephone, $Email, $altEmail, $Interests, $IndicateOrpotunities, $IndicatePartnership, $specify, $specify2, $progress, $listkeychallenges) !== false) {
        echo '<meta http-equiv="Refresh" content="0.01; url=../php/newpartner.php?error=emptyInput">';
        // header("location: ../php/newpartner.php?error=emptyInput");
        exit();
    }
    // if (invalidAddress($Address) !== false) {
    //     echo '<meta http-equiv="Refresh" content="0.01; url=../php/newpartner.php?error=invalidAddress">';
    //     exit();
    // }
    // if (invalidTelephone($Telephone) !==false) {
    //     echo '<meta http-equiv="Refresh" content="0.01; url=../php/newpartner.php?error=invalidTelephoneNumber">';
    //     exit();
    // }
    if (invalidnptEmail($Email) !== false) {
        echo '<meta http-equiv="Refresh" content="0.01; url=../php/newpartner.php?error=invalidEmail">';
        exit();
    }
    if (invalidnptaltEmail($altEmail) !== false) {
        echo '<meta http-equiv="Refresh" content="0.01; url=../php/newpartner.php?error=invalidEmail">';
        exit();
    }
    
    createnpt($conn, $typeofpartner, $orgname, $location, $country, $Address, $focalftastaff, $principalname, $Telephone, $Email, $altEmail, $Interests, $IndicateOrpotunities, $IndicatePartnership, $specify, $specify2, $progress, $listkeychallenges, $partnershipAgreement, $Implementationdate, $agreementavailable, $ps, $data, $name, $RLname, $action);

}else {
    header("location: ../php/newpartner.php");
    exit();
}