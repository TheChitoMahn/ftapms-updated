<?php
    include_once 'sidebar.php';
    include '../includes/NDAedit.inc.php';
?>

<link rel="stylesheet" href="../css/dashboard.css">
<link rel="stylesheet" href="../css/newpartner.css">
<link rel="stylesheet" href="../css/index.css">
<link rel="stylesheet" href="../css/drop-down-menu.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<section class="newpartners">
    <div class="main">
        <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "stmtFailed") {
                    echo "<p class='nperror2'>stmtFailed</p>";
                }
                else if ($_GET["error"] == "goneBack2") {
                    echo "<p class='nperror2'>Unexpected Error, check sql query!!</p>";
                }
                else if ($_GET["error"] == "goneBack1") {
                    echo "<p class='nperror2'>Unexpected Error, check sql query!!</p>";
                }
            }
        ?>

         <h3>Edit NDA</h3>
         NOTE: This is where you can Edit and Update NDA Agreements
         <form class="partnercontent" action="../includes/NDAedit.inc.php" method="POST">
            <div class="section1">
                <input type="text" class="txtfields2" name="id" value="<?=$row['id']?>" hidden>
                <div class="lbl_name">
                    <a>Date</a>
                </div>
                <div class="input">
                    <input type="Date" class="txtfields2" name="date" value="<?=$row['date']?>" required>
                </div>
                <div class="lbl_name">
                    <a>Subcontractor Name</a>
                </div>
                <div class="input">
                    <input type="text" class="txtfields2" name="name" value="<?=$row['name']?>" required>
                </div>
                <div class="lbl_name">
                    <a>Hereinafter called</a>
                </div>
                <div class="input">
                    <input type="text" class="txtfields2" name="partner" value="<?=$row['partner']?>" required>
                </div>
                <div class="lbl_name">
                    <a>Proposal/Project Name</a>
                </div>
                <div class="input">
                    <input type="text" class="txtfields2" name="proposal" value="<?=$row['proposal']?>" required>
                </div>
                <div class="lbl_name">
                    <a>Time of delivery</a>
                </div>
                <div class="input">
                    <input type="text" class="txtfields2" name="delivery" value="<?=$row['delivery']?>" required>
                </div>
                <div class="lbl_name">
                    <a>Day of Termination</a>
                </div>
                <div class="input">
                    <input type="Date" class="txtfields2" name="termination" value="<?=$row['termination']?>" required>
                </div>
                <div class="lbl_name">
                    <a>Country</a>
                </div>
                <div class="input">
                    <input type="text" class="txtfields2" name="country" value="<?=$row['country']?>" required>
                </div>
                <div class="lbl_name">
                    <a>Time</a>
                </div>
                <div class="input">
                    <input type="text" class="txtfields2" name="time" value="<?=$row['time']?>" required>
                </div>
                <div class="lbl_name">
                    <a>Written notice Time limit</a>
                </div>
                <div class="input">
                    <input type="text" class="txtfields2" name="timelimit" value="<?=$row['timelimit']?>" required>
                </div>
            </div>

            <div class="section2">
                <div class="lbl_name">
                    <a>Goals</a>
                </div>
                <div class="input">
                    <textarea class="txtfields2" name="goalsbiginput" rows="15" cols="50"><?=$row['goals']?></textarea>
                </div>
                IN WITNESS WHEREOF, the parties have executed this Agreement as of the day and year written above:
                <div class="lbl_name">
                    <a>Patners:</a>
                </div>
                <div class="input">
                    <input type="text" class="txtfields2" name="witnessname" value="<?=$row['w_name']?>" required>
                </div>
                <div class="input">
                    <input type="text" class="txtfields2" name="witnessdesignation" value="<?=$row['w_designation']?>" required>
                </div>
                <div class="input">
                    <input type="text" class="txtfields2" name="witnessaddress" value="<?=$row['w_address']?>" required>
                </div>
                <div class="lbl_name">
                    <a>Fairtrade Africa Name:</a>
                </div>
                <div class="input">
                    <input type="text" class="txtfields2" name="ftaname" value="<?=$row['fta_name']?>" required>
                </div>
                <div class="buttons">
                    <button type="button" class="ingia_btn"><a href="../php/listNDA.php?error=none">Exit</a></button>
                    <button type="submit" class="ingia_btn" name="btn-NDAedit">Update NDA</button>
                </div>
            </div>
         </form>       
    </div>
</section>

<?php
    include_once 'footer.php';
?>