<?php
    include_once 'sidebar.php';
    include '../includes/update.inc.php';
?>
        <link rel="stylesheet" href="../css/dashboard.css">
        <link rel="stylesheet" href="../css/newpartner.css">
        <link rel="stylesheet" href="../css/index.css">
        <link rel="stylesheet" href="../css/drop-down-menu.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <section class="newpartners">
            <div class="main">
                <h3>Update Partner</h3>

                <?php
                if (isset($_GET["error"])) {
                    if ($_GET["error"] == "emptyInput") {
                        echo "<p class='nperror'>Fill in all the Text fields</p>";
                    }
                    else if ($_GET["error"] == "invalidEmail") {
                        echo "<p class='nperror'>Invalid Email</p>";
                    }
                    else if ($_GET["error"] == "invalidAddress") {
                        echo "<p class='nperror'>Invalid Address</p>";
                    }
                    else if ($_GET["error"] == "invalidTelephoneNumber") {
                        echo "<p class='nperror'>Invalid Telephone Number</p>";
                    }
                    else if ($_GET["error"] == "stmtFailed") {
                        echo "<p class='nperror'>stmtFailed</p>";
                    }
                }
            ?>

                <form class="partnercontent" action="../includes/update.inc.php" method="POST" enctype="multipart/form-data">
                    <div class="section1">
                        <input type="text" class="txtfields2" name="id" value="<?=$row['id']?>" hidden>
                        <div class="lbl_name">
                            <a>Type of Partner</a>
                        </div>
                        <div class="input">
                            <input type="text" class="txtfields2" name="TypeofPartner" value="<?=$row['typeofpartner']?>">
                        </div> 
                        <div class="lbl_name">
                            <a>Organaization Name</a>
                        </div>
                        <div class="input">
                            <input type="text" class="txtfields2" name="OrganaizatoinName" value="<?=$row['orgname']?>">
                        </div> 
                        <div class="lbl_name">
                            <a>Region</a>
                        </div>
                        <div class="input">
                            <input type="text" class="txtfields2" name="location" value="<?=$row['location']?>">
                        </div>
                        <div class="lbl_name">
                            <a>Country</a>
                        </div>
                        <div class="input">
                            <input type="text" class="txtfields2" name="cc" value="<?=$row['country']?>">
                        </div> 
                        <div class="lbl_name">
                            <a>Address</a>
                        </div>
                        <div class="input">
                            <input type="text" class="txtfields2" name="Address" value="<?=$row['Address']?>">
                        </div>
                        <div class="lbl_name">
                            <a>Focal FTA Staff</a>
                        </div>
                        <div class="input">
                            <input type="text" class="txtfields2" name="focalftastaff" value="<?=$row['focalftastaff']?>">
                        </div> 
                        <div class="lbl_name">
                            <a>Principal Name</a>
                        </div>
                        <div class="input">
                            <input type="text" class="txtfields2" name="PrincipalName" value="<?=$row['principalname']?>">
                        </div> 
                        <div class="lbl_name">
                            <a>Telephone</a>
                        </div>
                        <div class="input">
                            <input type="number" class="txtfields2" name="Telephone" value="<?=$row['Telephone']?>">
                        </div> 
                        <div class="lbl_name">
                            <a>Email</a>
                        </div>
                        <div class="input">
                            <input type="Email" class="txtfields2" name="npEmail" value="<?=$row['Email']?>">
                        </div>
                        <div class="lbl_name">
                            <a>Alternate Email</a>
                        </div>
                        <div class="input">
                            <input type="Email" class="txtfields2" name="npAltEmail" value="<?=$row['altemail']?>">
                        </div>
                        <div class="lbl_name">
                            <a>Partnership Agreement in place?</a>
                        </div>
                        <div class="input">
                            <input type="text" class="txtfields2" name="pap"  value="<?=$row['partnershipAgreement']?>">
                        </div>
                        <div class="lbl_name">
                            <a>Partner Agrement Available? <br></a>
                        </div>
                        <div class="input">
                            <input type="text" class="txtfields2" name="pav" value="<?=$row['agreementavailable']?>">
                        </div>
                    </div>

                    <div class="section2">
                        <div class="lbl_name">
                            <a>Shared Value:</a>
                        </div>
                        <div class="input">
                            <textarea class="txtfields2" name="biginput1" rows="5" cols="50"><?=$row['Interests']?></textarea>
                        </div>
                        <div class="lbl_name">
                            <a>Opportunities for leverage:</a>
                        </div>
                        <div class="input">
                            <textarea class="txtfields2" name="biginput2" rows="5" cols="50"><?=$row['IndicateOrpotunities']?></textarea>
                        </div>
                        <!-- <div class="lbl_name">
                            <a>Indicate partnership support required:</a>
                        </div>
                        <div class="input">
                            <textarea class="txtfields2" name="biginput3" rows="5" cols="50"><?=$row['IndicatePartnership']?></textarea>
                        </div> -->
                        <div class="lbl_name">
                            <a>Areas of activity implementation.</a>
                        </div>
                        <!-- <div class="lbl_name">
                            <a>NOT DONE</a>
                        </div>
                        <div class="input">
                            <textarea class="txtfields2" name="biginput6" rows="5" cols="50"><?=$row['specify2']?></textarea>
                        </div> -->
                        <div class="lbl_name">
                            <a><b>Total Progress Quota</b></a>
                        </div>
                        <div class="input">
                            <input type="number" class="txtfields2" name="progress" value="<?=$row['progress']?>">
                        </div>
                        <!-- <div class="lbl_name">
                            <a>List key challenges, if any (related to this partnership):</a>
                        </div>
                        <div class="input">
                            <textarea class="txtfields2" name="biginput5" rows="5" cols="50"><?=$row['listkeychallenges']?></textarea>
                        </div> -->

                        
                        <div class="lbl_name">
                            <a>Partnership status</a>
                        </div>
                        <div class="input">
                            <input type="text" class="txtfields2" name="Partnershipstatus" value="<?=$row['ps']?>">
                        </div>
                        <div class="lbl_name">
                            <a>Indicate Activity Implementation period</a>
                        </div>
                        <div class="input">
                            <input type="text" class="txtfields2" name="implementationperiod" value="<?=$row['Implementationdate']?>">
                        </div>
                        <!-- <div class="lbl_name">
                            <a>Agreement<br></a>
                        </div>
                        <div class="input">
                            <input type="file" name="Agreement">
                        </div> -->
                        <a>Current file: </a>
                        <a target="_blank" href='view.php?id="<?=$row['id']?>"'><?=$row['filename']?></a>
                        <br>
                        <div class="buttons">
                            <button type="button" class="ingia_btn"><a href="../php/editpartner.php">Exit</a></button>
                            <button type="submit" class="ingia_btn" name="btn-update">Update & Exit</button>
                        </div>
                    </div>     
                </form>
            </div>
        </section>

<?php
    include_once 'footer.php';
?>    