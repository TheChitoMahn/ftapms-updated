<?php

if (isset($_GET['id'])) {
    
    include "dbh.inc.php";

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $id = validate($_GET['id']);

    $sql = "SELECT * FROM newpartner WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    }else {
        header("Location: ../php/editpartner.php?error=goneBack1");
    }

}else if (isset($_POST["btn-update"])) {
    require_once '../php/sidebar.php';

    $id = $_POST["id"];
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
    // $specify = file_get_contents($_FILES["biginput4"]["tmp_name"]);
    // $specify2 = $_FILES["biginput4"]["name"];
    $progress = $_POST["progress"];
    $listkeychallenges = trim($_POST["biginput5"]);
    $ps = $_POST["Partnershipstatus"];
    $Implementationdate = $_POST["implementationperiod"];
    $RLname = $_SESSION["fullname"];
    $action = "updated a Partner at ";
    // $data = file_get_contents($_FILES["Agreement"]["tmp_name"]);
    // $name = $_FILES["Agreement"]["name"];

    // $dataupdate = "ifx_update_blob($name, $data)";

    require_once 'dbh.inc.php';
    require_once 'nptfunctions.inc.php';

    if (emptyInputnewpartner($typeofpartner, $orgname, $location, $country, $Address, $focalftastaff, $principalname, $Telephone, $Email, $altEmail, $Interests, $IndicateOrpotunities, $IndicatePartnership, $progress, $listkeychallenges) !== false) {
        header("location: ../php/update.php?id=$id&error=emptyInput");
        exit();
    }
    if (invalidAddress($Address) !== false) {
        header("location: ../php/update.php?id=$id&error=invalidAddress");
        exit();
    }
    if (invalidnptEmail($Email) !== false) {
        header("location: ../php/update.php?id=$id&error=invalidEmail");
        exit();
    }

    updatenpt($conn, $typeofpartner, $orgname, $location, $country, $Address, $focalftastaff, $principalname, $Telephone, $Email, $altEmail, $Interests, $IndicateOrpotunities, $IndicatePartnership, $progress, $listkeychallenges, $partnershipAgreement, $Implementationdate, $agreementavailable, $ps, $id, $RLname, $action);

}else {
    header("Location: ../php/editpartner.php?error=goneBack2");
}