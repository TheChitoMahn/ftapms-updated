<?php
    include_once 'sidebar.php';
    require 'script.php';
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="../css/drop-down-menu.css">
<link rel="stylesheet" href="../css/agreementGenDash.css">
<link rel="stylesheet" href="../css/newpartner.css">
<link rel="stylesheet" href="../css/index.css">


<section class="agreement_Dashboard">
    <div class="main">
        <h3>Agreement Generator</h3>
        NOTE: Pick an agreement to make.
        <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "stmtFailed") {
                    echo "<p class='nperror2'>stmtFailed</p>";
                }
                else if ($_GET["error"] == "successupload") {
                    echo "<p class='nperror3'>Signed Service Agreement uploaded successfully!</p>";
                }
                else if ($_GET["error"] == "othersuccessupload") {
                    echo "<p class='nperror3'>Signed (Other) Agreement uploaded successfully!</p>";
                }
                else if ($_GET["error"] == "posterror") {
                    echo "<p class='nperror2'>Something went wrong while posting</p>";
                }
            }
        ?>
        <br>
        <br>
        <div class="main2">
            <div class="col-sm-6">
                <div class="card" style="width: 28rem;">
                    <img class="card-img-top" src="../images/mou.png" alt="Card image cap">
                    <div class="card-body" >
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#MOUassessment">MOU</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card" style="width: 28rem;">
                    <img class="card-img-top" src="../images/nda.png" alt="Card image cap">
                    <div class="card-body">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#NDAassessment">NDA</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card" style="width: 28rem;">
                    <img class="card-img-top" src="../images/service.png" alt="Card image cap">
                    <div class="card-body">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#service">Service Agreement</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card" style="width: 28rem;">
                    <img class="card-img-top" src="../images/other.png" alt="Card image cap">
                    <div class="card-body">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#uploadmodal">Other Agreement</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- MOU Assessment Confirmation Modal -->
        <div class="modal fade" id="MOUassessment" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Partner MOU Assessment Check</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form class="" action="../php/MOU.php" method="POST">
                        <div class="modal-body">
                            In order to proceed and create an Agreement the system has to check if the user has passed the Partner Assessment Procedure. <br> <br>
                            Please enter your Company Name and Assessment ID. <br> <br>
                                <div class="section1">
                                    <div class="lbl_name">
                                        <a>Company Name</a>
                                    </div>
                                    <div class="input">
                                        <input type="text" class="txtfields2" name="compname" id="compname" required>
                                    </div>
                                    <div class="lbl_name">
                                        <a>Assesment ID:</a>
                                    </div>
                                    <div class="input">
                                        <input type="number" class="txtfields2" name="assID" id="assID" required>
                                    </div>
                                    <button type="button" class="btn btn-primary" onclick="check('id');" >Check</button>                              
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <!-- <a href="./NDA.php" class="btn btn-warning">NDA</a> -->
                            <button type="submit" class="btn btn-warning" id="checkbtn" name="check-btn" disabled>MOU</button>
                            <!-- <a href="#" class="btn btn-warning">Service</a> -->
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- NDA Assessment Confirmation Modal -->
        <div class="modal fade" id="NDAassessment" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Partner NDA Assessment Check</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form class="" action="../php/NDA.php" method="POST">
                        <div class="modal-body">
                            In order to proceed and create an Agreement the system has to check if the user has passed the Partner Assessment Procedure. <br> <br>
                            Please enter your Company Name and Assessment ID. <br> <br>
                                <div class="section1">
                                    <div class="lbl_name">
                                        <a>Company Name</a>
                                    </div>
                                    <div class="input">
                                        <input type="text" class="txtfields2" name="NDAcompname" id="NDAcompname" required>
                                    </div>
                                    <div class="lbl_name">
                                        <a>Assesment ID:</a>
                                    </div>
                                    <div class="input">
                                        <input type="number" class="txtfields2" name="NDAassID" id="NDAassID" required>
                                    </div>
                                    <button type="button" class="btn btn-primary" onclick="checkNDA('nda_id');" >Check</button>                              
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <!-- <a href="./NDA.php" class="btn btn-warning">NDA</a> -->
                            <button type="submit" class="btn btn-warning" id="NDAcheckbtn" name="nda-check-btn" disabled>NDA</button>
                            <!-- <a href="#" class="btn btn-warning">Service</a> -->
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Other Agreement Upload Modal -->
        <form class="partnercontent" action="../includes/other.inc.php" method="POST" enctype="multipart/form-data">
            <div class="modal fade" id="uploadmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Other Agreement Quick Upload</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Please fill out the form of the Agreement you want to upload <br> <br>
                                <div>
                                    <div class="lbl_name">
                                        <a>Agreement Name</a>
                                    </div>
                                    <div class="input">
                                        <input type="text" class="txtfields2" name="otheragg-name" required>
                                    </div>
                                    <div class="lbl_name">
                                        <a>Date</a>
                                    </div>
                                    <div class="input">
                                        <input type="date" class="txtfields2" name="other-date" required>
                                    </div>
                                    Warning! <br>
                                    Make sure you've uploaded the signed Agreement before clicking the
                                    upload button. 
                                    <div class="input">
                                    <br>
                                        <input type="file" name="signedOTHER">
                                    </div>                            
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="s-other-upload">Upload</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <!-- Service Agreement Upload Modal -->
        <form class="partnercontent" action="../includes/service.inc.php" method="POST" enctype="multipart/form-data">
            <div class="modal fade" id="service" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Service Agreement Quick Upload</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Please fill out the form of the Service Agreement you want to upload <br> <br>
                                <div>
                                    <div class="lbl_name">
                                        <a>Agreement Name</a>
                                    </div>
                                    <div class="input">
                                        <input type="text" class="txtfields2" name="serviceagg-name" required>
                                    </div>
                                    <div class="lbl_name">
                                        <a>Date</a>
                                    </div>
                                    <div class="input">
                                        <input type="date" class="txtfields2" name="service-date" required>
                                    </div>
                                    Warning! <br>
                                    Make sure you've uploaded the signed Service Agreement before clicking the
                                    upload button. 
                                    <div class="input">
                                    <br>
                                        <input type="file" name="signedSERVICE">
                                    </div>                            
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="s-service-upload">Upload</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

<?php
    include_once 'footer.php';
?>