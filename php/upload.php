<?php
    include_once 'sidebar.php';
    include_once '../includes/upload.inc.php';
?>
<link rel="stylesheet" href="../css/dashboard.css">
<link rel="stylesheet" href="../css/newpartner.css">
<link rel="stylesheet" href="../css/index.css">
<link rel="stylesheet" href="../css/drop-down-menu.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<section class="newpartners">
    <div class="main">
        <h3>Upload Signed Agreements</h3>
        NOTE: This is where you upload signed NDA and MOU agreements.
        <p>
            <h4>Memorandum of Understanding</h4>
            Select the appropriate MOU Agreement you want to upload the signed document to.
            Be carefull not to upload the signed MOU to a different partner!
        </p>
        <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "stmtFailed") {
                    echo "<p class='nperror2'>stmtFailed</p>";
                }
                else if ($_GET["error"] == "successupload") {
                    echo "<p class='nperror3'>Signed MOU uploaded successfully!</p>";
                }
                else if ($_GET["error"] == "posterror") {
                    echo "<p class='nperror2'>Something went wrong while posting</p>";
                }
            }
        ?>
        
        <form action="../includes/upload.inc.php" method="POST" enctype="multipart/form-data">
            <div class="section1">
                <div class="lbl_name">
                    <a>Select an Memorandum of Understanding</a>
                </div>
                <div class="input">
                    <select class="txtfields2" name="mouselect" id="mouselect">
                        <?php while($row1 = mysqli_fetch_array($mouresult)):;?>
                        <option value="<?php echo $row1[0]; ?>"><?php echo $row1[2]; ?></option>
                        <?php endwhile;?>
                    </select>
                </div>
                Upload Signed MOU pdf file here:
                <div class="input">
                    <input type="file" name="signedMOU">
                </div>
                <div class="buttons">
                    <button type="button" class="ingia_btn" data-toggle="modal" data-target="#confirmMOU">Upload</button>
                </div>
                <!-- MOU Confirmation Pop up Box -->
                <div class="modal fade" id="confirmMOU" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Warning!</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Are you sure, you are about to save this Signed MOU on the selected Agreement!
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" name="s-mou-submit">Yes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <br> <br>

        <p>
            <h4>Non-Disclosure Aggrements</h4>
            Select the appropriate NDA Agreement you want to upload the signed document to.
            Be carefull not to upload the signed NDA to a different partner!
        </p>
        <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "nstmtFailed") {
                    echo "<p class='nperror2'>stmtFailed</p>";
                }
                else if ($_GET["error"] == "nsuccessupload") {
                    echo "<p class='nperror3'>Signed NDA uploaded successfully!</p>";
                }
                else if ($_GET["error"] == "posterror") {
                    echo "<p class='nperror2'>Something went wrong while posting</p>";
                }
            }
        ?>

        <form action="../includes/upload.inc.php" method="POST" enctype="multipart/form-data">
            <div class="section1">
                <div class="lbl_name">
                    <a>Select an Non-Disclosure Aggrements</a>
                </div>
                <div class="input">
                    <select class="txtfields2" name="n_mouselect" id="mouselect">
                        <?php while($row2 = mysqli_fetch_array($ndaresult)):;?>
                        <option value="<?php echo $row2[0]; ?>"><?php echo $row2[2]; ?></option>
                        <?php endwhile;?>
                    </select>
                </div>
                Upload Signed NDA pdf file here:
                <div class="input">
                    <input type="file" name="signedNDA">
                </div>
                <div class="buttons">
                    <button type="button" class="ingia_btn" data-toggle="modal" data-target="#confirmNDA">Upload</button>
                </div>
                <!-- NDA Confirmation Pop up Box -->
                <div class="modal fade" id="confirmNDA" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Warning!</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Are you sure, you are about to save this Signed NDA on the selected Agreement!
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" name="s-nda-submit">Yes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <br> <br>

        <!-- <p>
            <h4>Service Agreements</h4>
            Select the appropriate Service Agreement you want to upload the signed document to.
            Be carefull not to upload the signed Service Agreement to a different partner!
        </p>
        <div class="section1">
            <div class="lbl_name">
                <a>Select an Service Aggrements</a>
            </div>
            <div class="input">
                <select class="txtfields2" name="mouselect" id="mouselect">
                    <?php while($row2 = mysqli_fetch_array($ndaresult)):;?>
                    <option value="<?php echo $row2[0]; ?>"><?php echo $row2[2]; ?></option>
                    <?php endwhile;?>
                </select>
            </div>
            Upload Signed Service Agreement pdf file here:
            <div class="input">
                <input type="file" class="txtfields2">
            </div>
            <div class="buttons">
                <button type="submit" class="ingia_btn" name="s-mou-submit">Upload</button>
            </div>
        </div> -->
    </div>
</section>

<?php
    include_once 'footer.php';
?>