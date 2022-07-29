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
            <h4>MOU</h4>
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
                    <a>Select an MOU</a>
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
                    <button type="submit" class="ingia_btn" name="s-mou-submit">Upload</button>
                </div>
            </div>
        </form>
        <br> <br>

        <p>
            <h4>NDA</h4>
            Select the appropriate NDA Agreement you want to upload the signed document to.
            Be carefull not to upload the signed NDA to a different partner!
        </p>
        <div class="section1">
            <div class="lbl_name">
                <a>Select an NDA</a>
            </div>
            <div class="input">
                <select class="txtfields2" name="mouselect" id="mouselect">
                    <?php while($row2 = mysqli_fetch_array($ndaresult)):;?>
                    <option value="<?php echo $row2[0]; ?>"><?php echo $row2[2]; ?></option>
                    <?php endwhile;?>
                </select>
            </div>
            Upload Signed NDA pdf file here:
            <div class="input">
                <input type="file" class="txtfields2">
            </div>
            <div class="buttons">
                <button type="submit" class="ingia_btn" name="s-mou-submit">Upload</button>
            </div>
        </div>
    </div>
</section>

<?php
    include_once 'footer.php';
?>