<?php
    include_once 'sidebar.php';
    include '../includes/MOUedit.inc.php';
?>

<link rel="stylesheet" href="../css/dashboard.css">
<link rel="stylesheet" href="../css/index.css">
<link rel="stylesheet" href="../css/newpartner.css">
<link rel="stylesheet" href="../css/mou.css">
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

         <h3>Edit MOU</h3>
         NOTE: This is where you can Edit and Update NDA Agreements
         <form class="partnercontent" action="../includes/MOUedit.inc.php" method="POST" enctype="multipart/form-data">
            <input type="text" class="txtfields2" name="id" value="<?=$row['id']?>" hidden>

            <div class="twopics">
                <div class="insertpic">
                    <img src="../ppp/<?=$row['logo']?>" alt="Company Logo"> 
                </div>
                <div class="ftalogo">
                    <img src="../images/FTA.PNG" alt="FTA Logo">   
                </div> 
            </div>

            <div class="mousection1">
                <div class="moutitle">
                    <p>
                        MEMORANDUM OF UNDERSTANDING (MOU)
                    </p>
                    <P>BETWEEN</P>
                    <P>FAIRTRADE AFRICA (FTA)</P>
                    <P>AND</P>
                    <div class="input">
                        <input type="text" class="txtfields2" name="orgname" value="<?=$row['orgname']?>" required>
                    </div>
                    <p>DATE</p>
                    <div class="input">
                        <input type="date" class="txtfields2" name="moudate" value="<?=$row['moudate']?>" required>
                    </div>
                </div>
            </div>

            <div class="mousection2">
                <div class="lbl_name">
                    <a>PREAMBLE</a>
                </div>
                <div class="input">
                    <textarea class="txtfields2" name="preamble" rows="20" cols="50"><?=$row['preamble']?></textarea>
                </div>
                <div class="lbl_name">
                    <a>WHEREAS;</a>
                </div>
                <div class="input">
                    <textarea class="txtfields2" name="whereas" rows="20" cols="50"><?=$row['whereas']?></textarea>
                </div>
                <div class="lbl_name">
                    <a>WHEREAS;</a>
                </div>
                <div class="input">
                    <textarea class="txtfields2" name="whereas2" rows="20" cols="50"><?=$row['whereas2']?></textarea>
                </div>
                <a>THEREFORE,</a> the Parties have reached the following understanding;
                <br>
                <br>
                <br>
                <div class="lbl_name">
                    <a>ARTICLE 1</a> <br>
                    <a>OBJECTIVES OF THE MOU</a>
                </div>
                <div class="input">
                    <textarea class="txtfields2" name="article1" rows="15" cols="50"><?=$row['article1']?></textarea>
                </div>
                <div class="lbl_name">
                    <a>ARTICLE 2</a> <br>
                    <a>SPECIFIC AREAS OF COLLABORATION</a>
                </div>
                <div class="input">
                    <textarea class="txtfields2" name="article2" rows="20" cols="50"><?=$row['article2']?></textarea>
                </div>
                <div class="lbl_name">
                    <a>ARTICLE 3</a> <br>
                    <a>MODE OF CO-OPERATION</a>
                </div>
                <div class="input">
                    <textarea class="txtfields2" name="article3" rows="5" cols="50"><?=$row['article3']?></textarea>
                </div>
                <div class="lbl_name">
                    <a>3.1 ROLE OF FTA</a>
                </div>
                <div class="input">
                    <textarea class="txtfields2" name="article31" rows="20" cols="50"><?=$row['article31']?></textarea>
                </div>
                <div class="lbl_name">
                    <a>3.2 ROLE OF OTHER PARTNER</a>
                </div>
                <div class="input">
                    <textarea class="txtfields2" name="article32" rows="20" cols="50"><?=$row['article32']?></textarea>
                </div>
                <div class="lbl_name">
                    <a>ARTICLE 4</a> <br>
                    <a>FUNDING AND RESOURCE MOBILIZATION ACTIVITIES</a>
                </div>
                <div class="input">
                    <textarea class="txtfields2" name="article4" rows="15" cols="50"><?=$row['article4']?></textarea>
                </div>
                <div class="lbl_name">
                    <a>ARTICLE 5</a> <br>
                    <a>AMMENDMENTS</a>
                </div>
                <div class="input">
                    <textarea class="txtfields2" name="article5" rows="5" cols="50"><?=$row['article5']?></textarea>
                </div>
                <div class="lbl_name">
                    <a>ARTICLE 6</a> <br>
                    <a>INTELLECTUAL PROPERTY RIGHTS AND PUBLICATIONS</a>
                </div>
                <div class="input">
                    <textarea class="txtfields2" name="article6" rows="15" cols="50"><?=$row['article6']?></textarea>
                </div>
                <div class="lbl_name">
                    <a>ARTICLE 7</a> <br>
                    <a>DURATION OF THE PARTNERSHIP</a>
                </div>
                <div class="input">
                    <textarea class="txtfields2" name="article7" rows="15" cols="50"><?=$row['article7']?></textarea>
                </div>
                <div class="lbl_name">
                    <a>ARTICLE 8</a> <br>
                    <a>NOTICES AND AUTHORIZED REPRESENTATIVES</a>
                </div>
                <div class="input">
                    <textarea class="txtfields2" name="article8" rows="15" cols="50"><?=$row['article8']?></textarea>
                </div>
                <div class="lbl_name">
                    <a>CONTACTS</a>
                </div>
                <div class="input">
                    <textarea class="txtfields2" name="contacts" rows="15" cols="50"><?=$row['contacts']?></textarea>
                </div>
                <div class="lbl_name">
                    <a>ARTICLE 9</a> <br>
                    <a>CONFIDENTIALITY</a>
                </div>
                <div class="input">
                    <textarea class="txtfields2" name="article9" rows="20" cols="50"><?=$row['article9']?></textarea>
                </div>
                <div class="lbl_name">
                    <a>ARTICLE 10</a> <br>
                    <a>TERMINATION</a>
                </div>
                <div class="input">
                    <textarea class="txtfields2" name="article10" rows="5" cols="50"><?=$row['article10']?></textarea>
                </div>
                <div class="lbl_name">
                    <a>ARTICLE 11</a> <br>
                    <a>LEGAL JURISDICTION</a>
                </div>
                <div class="input">
                    <textarea class="txtfields2" name="article11" rows="5" cols="50"><?=$row['article11']?></textarea>
                </div>
                <div class="lbl_name">
                    <a>ARTICLE 12</a> <br>
                    <a>DISPUTE RESOLUTION</a>
                </div>
                <div class="input">
                    <textarea class="txtfields2" name="article12" rows="15" cols="50"><?=$row['article12']?></textarea>
                </div>
                <div class="lbl_name">
                    <a>ARTICLE 13</a> <br>
                    <a>LEGAL STATUS OF THE MOU</a>
                </div>
                <div class="input">
                    <textarea class="txtfields2" name="article13" rows="5" cols="50"><?=$row['article13']?></textarea>
                </div>                <div class="lbl_name">
                    <a>ARTICLE 14</a> <br>
                    <a>FORCE MAJEURE</a>
                </div>
                <div class="input">
                    <textarea class="txtfields2" name="article14" rows="5" cols="50"><?=$row['article14']?></textarea>
                </div>
                <a>IN WITNESS WHEREOF</a>, the Parties duly authorized have agreed and executed this MOU on the date of the last signature hereunder.
                <br>
                <div class="input">
                    <textarea class="txtfields2" name="sign" rows="20" cols="50"><?=$row['sign']?></textarea>
                </div>
                <div class="buttons">
                    <button type="button" class="ingia_btn"><a href="../php/listMOU.php">Exit</a></button>
                </div>
                <div class="buttons">
                    <button type="submit" class="ingia_btn" name="btn-MOUedit">Update MOU</button>
                </div>
            </div>
         </form>

    </div>
</section>

<?php
    include_once 'footer.php';
?>