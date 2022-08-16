<?php
    include_once 'sidebar.php';
?>
<link rel="stylesheet" href="../css/dashboard.css">
<link rel="stylesheet" href="../css/newpartner.css">
<link rel="stylesheet" href="../css/index.css">
<link rel="stylesheet" href="../css/drop-down-menu.css">
<link rel="stylesheet" href="../css/newaddons.css">
<!-- <link rel="stylesheet" href="../css/moutable.css">
<link rel="stylesheet" href="../css/listMOU.css"> -->
<link rel="stylesheet" href="../css/listofass.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">

<section class="newpartners">
    <div class="main">
        <?php 
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "goneBack2") {
                    echo "<p class='nperror2'>Unexpected Error, check sql query!!</p>";
                }
                else if ($_GET["error"] == "goneBack1") {
                    echo "<p class='nperror2'>Could not access the record from the Database, check sql query!!</p>";
                }
                else if ($_GET["error"] == "successDelete") {
                    echo "<p class='nperror3'>A record has been Succesfully Deleted</p>";
                }
                else if ($_GET["error"] == "successMOUupdated") {
                    echo "<p class='nperror3'> MOU Succesfully Updated</p>";
                }
            }
        ?>
        <h3>List of All Partner Assessements</h3>
        NOTE: This is where you can manage All Partner Assessments Records. <br> <span class="nperror2">(Under Development)</span>
        <br>
        <br>
        <div class="fogo_holder">
            <div class="fogo_password">
                <button type="button" class="btn_fogo_password">Fairtrade Africa Partnership Assessement Scoresheet</button>
                <form class="fogo_password_content" action="../FTA_Partners_System/includes/fogo.inc.php" method="POST">
                    <p>This is table with records of FTA PA Scoresheets.
                    </p>
                </form>
            </div>
        </div>

        <div class="fogo_holder">
            <div class="fogo_password">
                <button type="button" class="btn_fogo_password">Due Diligence Checklist</button>
                <form class="fogo_password_content" action="../FTA_Partners_System/includes/fogo.inc.php" method="POST">
                    <p>This is table with records of Due Diligence Checklist.
                    </p>
                </form>
            </div>
        </div>

        <div class="fogo_holder">
            <div class="fogo_password">
                <button type="button" class="btn_fogo_password">Fairtrade Africa Prioritization Card</button>
                <form class="fogo_password_content" action="../FTA_Partners_System/includes/fogo.inc.php" method="POST">
                    <p>This is table with records of FTA Prioritization Card.
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>
