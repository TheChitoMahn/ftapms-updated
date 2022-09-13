<?php

if (isset($_GET['id'])) {
    
    include "../includes/dbh.inc.php";

    $id = $_GET['id'];

    $sql = "SELECT * FROM mou WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        $fileExt = explode('.', $row['name']);
        $fileActualExt = strtolower(end($fileExt));

        if ($fileActualExt == 'docx') {
            header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
            echo $row['data'];
        }elseif ($fileActualExt == 'pdf') {
            header('Content-Type: application/pdf');
            echo $row['data'];
        }
        
    }else {
        header("Location: ../php/listMOU.php?=errorViewing");
    }

}