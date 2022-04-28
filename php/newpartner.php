 <?php
    include_once 'sidebar.php';
?>
        <link rel="stylesheet" href="../css/dashboard.css">
        <link rel="stylesheet" href="../css/newpartner.css">
        <link rel="stylesheet" href="../css/index.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <section class="newpartners">
            <div class="main">
                <h3><u>New Partner</u></h3>

                <?php
                    if (isset($_GET["error"])) {
                        if ($_GET["error"] == "emptyInput") {
                            echo "<p class='nperror'>Fill in all the Text fields (Go < back)</p>";
                        }
                        else if ($_GET["error"] == "none") {
                            echo "<p class='nperror3' name='added'>New Patner Added</p>";
                        }
                        else if ($_GET["error"] == "invalidEmail") {
                            echo "<p class='nperror'>Invalid Email (Go < back)</p>";
                        }
                        else if ($_GET["error"] == "invalidAddress") {
                            echo "<p class='nperror'>Invalid Address (Go < back)</p>";
                        }
                        else if ($_GET["error"] == "invalidTelephoneNumber") {
                            echo "<p class='nperror'>Invalid Telephone Number (Go < back)</p>";
                        }
                        else if ($_GET["error"] == "stmtFailed") {
                            echo "<p class='nperror'>stmtFailed (Go < back)</p>";
                        }
                    }
                ?>

                <form class="partnercontent" action="../includes/newpartner.inc.php" method="POST" enctype="multipart/form-data">
                    <div class="section1">
                        <div class="lbl_name">
                            <a>Type of Partner</a>
                        </div>
                        <div class="input">
                            <input type="text" class="txtfields" name="TypeofPartner" placeholder="Type of Partner" required>
                        </div> 
                        <div class="lbl_name">
                            <a>Organaization Name</a>
                        </div>
                        <div class="input">
                            <input type="text" class="txtfields" name="OrganaizatoinName" placeholder="Organaizatoin Name" required>
                        </div> 
                        <div class="lbl_name">
                            <a>Region</a>
                        </div>
                        <div class="input">
                            <input type="text" class="txtfields" name="location" placeholder="Region" required>
                        </div>
                        <div class="lbl_name">
                            <a>Country</a>
                        </div>
                        <div class="input">
                            <input type="text" class="txtfields" name="cc" placeholder="Country" required>
                        </div>  
                        <div class="lbl_name">
                            <a>Address</a>
                        </div>
                        <div class="input">
                            <input type="text" class="txtfields" name="Address" placeholder="Address" required>
                        </div>
                        <div class="lbl_name">
                            <a>Focal FTA Staff</a>
                        </div>
                        <div class="input">
                            <input type="text" class="txtfields" name="focalftastaff" placeholder="Focal FTA Staff" required>
                        </div> 
                        <div class="lbl_name">
                            <a>Principal Name</a>
                        </div>
                        <div class="input">
                            <input type="text" class="txtfields" name="PrincipalName" placeholder="Principal Name" required>
                        </div> 
                        <div class="lbl_name">
                            <a>Telephone</a>
                        </div>
                        <div class="input">
                            <input type="text" class="txtfields" name="Telephone" placeholder="+254 000 000000" required>
                        </div> 
                        <div class="lbl_name">
                            <a>Email</a>
                            <a class="errormsg"> e.g. 123@example.com </a>
                        </div>
                        <div class="input">
                            <input type="Email" class="txtfields" name="npEmail" placeholder="Email" required>
                        </div>
                        <div class="lbl_name">
                            <a>Alternate Email</a>
                        </div>
                        <div class="input">
                            <input type="Email" class="txtfields" name="npAltEmail" placeholder="Alternate Email" required>
                        </div>
                        <div class="lbl_name">
                            <a>Partnership Agreement in place?</a>
                        </div>
                        <div class="input">
                            <input type="text" class="txtfields" name="pap" placeholder="(Yes/No)" required>
                        </div>
                        <div class="lbl_name">
                            <a>Partner Agrement Available? <br></a>
                            <!-- <a class="errormsg">(If Yes then upload the file at the end of this form to avoid errors!)</a> -->
                        </div>
                        <div class="input">
                            <input type="text" class="txtfields" name="pav" placeholder="(Yes/No)" required>
                        </div>
                        

                        <div class="lbl_name">
                            <a>Interests between FTA and partner organization:</a>
                        </div>
                        <div class="input">
                            <textarea class="txtfields2" name="biginput1" rows="5" cols="50" required></textarea>
                        </div>
                        <div class="lbl_name">
                            <a>Indicate opportunities for FTA leverage:</a>
                        </div>
                        <div class="input">
                            <textarea class="txtfields2" name="biginput2" rows="5" cols="50" required></textarea>
                        </div>
                    </div>

                    <div class="section2">
                        <div class="lbl_name">
                            <a>Indicate partnership support required:</a>
                        </div>
                        <div class="input">
                            <textarea class="txtfields2" name="biginput3" rows="5" cols="50" required></textarea>
                        </div>
                        <div class="lbl_name">
                            <a>Specify areas of activity implementation:<br><b>DONE</b></a>
                        </div>
                        <div class="input">
                            <textarea class="txtfields2" name="biginput4" rows="5" cols="50" required></textarea>
                        </div>
                        <div class="lbl_name">
                            <b><a>NOT DONE</a></b>
                        </div>
                        <div class="input">
                            <textarea class="txtfields2" name="biginput6" rows="5" cols="50" required></textarea>
                        </div>
                        <div class="lbl_name">
                            <a>TOTAL Progress Quota</a>
                        </div>
                        <div class="input">
                            <input type="number" class="txtfields" name="progress" placeholder="%">
                        </div>
                        <div class="lbl_name">
                            <a>List key challenges, if any (related to this partnership):</a>
                        </div>
                        <div class="input">
                            <textarea class="txtfields2" name="biginput5" rows="5" cols="50" required></textarea>
                        </div>

                        
                        <div class="lbl_name">
                            <a>Partnership status</a>
                        </div>
                        <div class="input">
                            <input type="text" class="txtfields" name="Partnershipstatus" placeholder="(Active/Inactive)">
                        </div>
                        <div class="lbl_name">
                            <a>Indicate Activity Implementation period</a>
                        </div>
                        <div class="input">
                            <input type="text" class="txtfields" name="implementationperiod" placeholder="From Period - to Period">
                        </div>
                        <div class="lbl_name">
                            <a>Agreement<br></a>
                            <a class="errormsg">(Upload agreement file here!)</a>
                        </div>
                        <?php
                            if (isset($_GET["filerror"])) {
                                if ($_GET["filerror"] == "uploadfile") {
                                    echo "<p class='nperror'>If agreement available, upload agreement file here!</p>";
                                }
                            }
                        ?>
                        <div class="input">
                            <input type="file" name="Agreement">
                        </div>
                        <br>
                        <div class="buttons">
                            <button type="submit" class="ingia_btn" name="newpartner-submit">Save & Exit</button>
                        </div>
                    </div>     
                </form>
            </div>
        </section>

<?php
    include_once 'footer.php';
?>    