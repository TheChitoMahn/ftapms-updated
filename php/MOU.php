<?php
    include_once 'sidebar.php';
?>

<link rel="stylesheet" href="../css/newpartner.css">
<link rel="stylesheet" href="../css/dashboard.css">
<link rel="stylesheet" href="../css/index.css">
<link rel="stylesheet" href="../css/mou.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<section class="newpartners">
    <div class="main">
        <h3>Memorandum of Understanding</h3>
        NOTE: Create an MOU Agreement
        <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "stmtfailed") {
                    echo "<p class='nperror2'>stmtFailed</p>";
                }
                else if ($_GET["error"] == "successnewmou") {
                    echo "<p class='nperror3'>New MOU successfully created!</p>";
                }
                else if ($_GET["error"] == "posterror") {
                    echo "<p class='nperror2'>Something went wrong whikle posting</p>";
                }
            }
        ?>
        <form class="partnercontent" action="../includes/MOU.inc.php" method="POST" enctype="multipart/form-data">

            <div class="twopics">
                <div class="insertpic">
                    Insert your company logo here..
                    <input type="file" name="logo"> 
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
                        <input type="text" class="txtfields2" name="orgname" placeholder="Organaizatoin Name" required>
                    </div>
                    <p>DATE</p>
                    <div class="input">
                        <input type="date" class="txtfields2" name="moudate" placeholder="Date" required>
                    </div>
                </div>
            </div>

            <div class="mousection2">
                <div class="lbl_name">
                    <a>PREAMBLE</a>
                </div>
                <div class="input">
                    <textarea class="txtfields2" name="preamble" rows="20" cols="50" required></textarea>
                </div>
                <div class="lbl_name">
                    <a>WHEREAS;</a>
                </div>
                <div class="input">
                    <textarea class="txtfields2" name="whereas" rows="20" cols="50" required></textarea>
                </div>
                <div class="lbl_name">
                    <a>WHEREAS;</a>
                </div>
                <div class="input">
                    <textarea class="txtfields2" name="whereas2" rows="20" cols="50" required></textarea>
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
                    <textarea class="txtfields2" name="article1" rows="15" cols="50" required></textarea>
                </div>
                <div class="lbl_name">
                    <a>ARTICLE 2</a> <br>
                    <a>SPECIFIC AREAS OF COLLABORATION</a>
                </div>
                <div class="input">
                    <textarea class="txtfields2" name="article2" rows="20" cols="50" required></textarea>
                </div>
                <div class="lbl_name">
                    <a>ARTICLE 3</a> <br>
                    <a>MODE OF CO-OPERATION</a>
                </div>
                <div class="input">
                    <textarea class="txtfields2" name="article3" rows="5" cols="50" required></textarea>
                </div>
                <div class="lbl_name">
                    <a>3.1 ROLE OF FTA</a>
                </div>
                <div class="input">
                    <textarea class="txtfields2" name="article3.1" rows="20" cols="50" required></textarea>
                </div>
                <div class="lbl_name">
                    <a>3.2 ROLE OF OTHER PARTNER</a>
                </div>
                <div class="input">
                    <textarea class="txtfields2" name="article3.2" rows="20" cols="50" required></textarea>
                </div>
                <div class="lbl_name">
                    <a>ARTICLE 4</a> <br>
                    <a>FUNDING AND RESOURCE MOBILIZATION ACTIVITIES</a>
                </div>
                <div class="input">
                    <textarea class="txtfields2" name="article4" rows="15" cols="50" required></textarea>
                </div>
                <div class="lbl_name">
                    <a>ARTICLE 5</a> <br>
                    <a>AMMENDMENTS</a>
                </div>
                <div class="input">
                    <textarea class="txtfields2" name="article5" rows="5" cols="50" required></textarea>
                </div>
                <div class="lbl_name">
                    <a>ARTICLE 6</a> <br>
                    <a>INTELLECTUAL PROPERTY RIGHTS AND PUBLICATIONS</a>
                </div>
                <div class="input">
                    <textarea class="txtfields2" name="article6" rows="15" cols="50" required></textarea>
                </div>
                <div class="lbl_name">
                    <a>ARTICLE 7</a> <br>
                    <a>DURATION OF THE PARTNERSHIP</a>
                </div>
                <div class="input">
                    <textarea class="txtfields2" name="article7" rows="15" cols="50" required></textarea>
                </div>
                <div class="lbl_name">
                    <a>ARTICLE 8</a> <br>
                    <a>NOTICES AND AUTHORIZED REPRESENTATIVES</a>
                </div>
                <div class="input">
                    <textarea class="txtfields2" name="article8" rows="15" cols="50" required></textarea>
                </div>
                <div class="lbl_name">
                    <a>CONTACTS</a>
                </div>
                <div class="input">
                    <textarea class="txtfields2" name="contacts" rows="15" cols="50" required></textarea>
                </div>
                <div class="lbl_name">
                    <a>ARTICLE 9</a> <br>
                    <a>CONFIDENTIALITY</a>
                </div>
                <div class="input">
                    <textarea class="txtfields2" name="article9" rows="20" cols="50" required></textarea>
                </div>
                <div class="lbl_name">
                    <a>ARTICLE 10</a> <br>
                    <a>TERMINATION</a>
                </div>
                <div class="input">
                    <textarea class="txtfields2" name="article10" rows="5" cols="50" required></textarea>
                </div>
                <div class="lbl_name">
                    <a>ARTICLE 11</a> <br>
                    <a>LEGAL JURISDICTION</a>
                </div>
                <div class="input">
                    <textarea class="txtfields2" name="article11" rows="5" cols="50" required></textarea>
                </div>
                <div class="lbl_name">
                    <a>ARTICLE 12</a> <br>
                    <a>DISPUTE RESOLUTION</a>
                </div>
                <div class="input">
                    <textarea class="txtfields2" name="article12" rows="15" cols="50" required></textarea>
                </div>
                <div class="lbl_name">
                    <a>ARTICLE 13</a> <br>
                    <a>LEGAL STATUS OF THE MOU</a>
                </div>
                <div class="input">
                    <textarea class="txtfields2" name="article13" rows="5" cols="50" required></textarea>
                </div>                <div class="lbl_name">
                    <a>ARTICLE 14</a> <br>
                    <a>FORCE MAJEURE</a>
                </div>
                <div class="input">
                    <textarea class="txtfields2" name="article14" rows="5" cols="50" required></textarea>
                </div>
                <a>IN WITNESS WHEREOF</a>, the Parties duly authorized have agreed and executed this MOU on the date of the last signature hereunder.
                <br>
                <div class="input">
                    <textarea class="txtfields2" name="sign" rows="20" cols="50" required></textarea>
                </div>
                <div class="buttons">
                    <button type="button" class="ingia_btn"><a href="./lsitMOU.php">View all MOUs'</a></button>
                </div>
                <div class="buttons">
                    <button type="submit" class="ingia_btn" name="mou-submit">Save</button>
                </div>
            </div>
        </form>

    </div>
</section>

<?php
    include_once 'footer.php';
?>