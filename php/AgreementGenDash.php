<?php
    include_once 'sidebar.php';
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="../css/drop-down-menu.css">
<link rel="stylesheet" href="../css/agreementGenDash.css">
<link rel="stylesheet" href="../css/newpartner.css">


<section class="agreement_Dashboard">
    <div class="main">
        <h3>Agreement Generator</h3>
        NOTE: Pick an agreement to make
        <br>
        <br>
        <div class="main2">
            <div class="col-sm-6">
                <div class="card" style="width: 28rem;">
                    <img class="card-img-top" src="../images/mou.png" alt="Card image cap">
                    <div class="card-body" >
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#assessment">MOU</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card" style="width: 28rem;">
                    <img class="card-img-top" src="../images/nda.png" alt="Card image cap">
                    <div class="card-body">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#assessment">NDA</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Assessment Confirmation Modal -->
        <div class="modal fade" id="assessment" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Partner Assessment Check</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        In order to proceed and create an Agreement the system has to check if the user has passed the Partner Assessment Procedure. <br> <br>
                        Please enter your Company Name and Assessment ID. <br> <br>
                        <form class="partnercontent" action="" method="POST">
                            <div class="section1">
                                <div class="lbl_name">
                                    <a>Company Name</a>
                                </div>
                                <div class="input">
                                    <input type="text" class="txtfields2" name="compname" required>
                                </div>
                                <div class="lbl_name">
                                    <a>Assesment ID:</a>
                                </div>
                                <div class="input">
                                    <input type="number" class="txtfields2" name="assID" required>
                                </div>
                                <button type="submit" class="btn btn-primary" name="btn-check">Check</button>                              
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <a href="./NDA.php" class="btn btn-warning">NDA</a>
                        <a href="./MOU.php" class="btn btn-warning">MOU</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<?php
    include_once 'footer.php';
?>