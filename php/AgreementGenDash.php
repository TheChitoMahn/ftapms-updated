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
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#assessment">Create</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card" style="width: 28rem;">
                    <img class="card-img-top" src="../images/nda.png" alt="Card image cap">
                    <div class="card-body">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#assessment">Create</button>
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
                        Please upload the Your Score card so that the System can compare it with what is in the database. <br> <br>
                        <div class="form">
                            <div class="lbl_name">
                                <a>(Example: score_card.pdf)<br></a>
                            </div>
                            <div class="input">
                                <input type="file" name="Agreement">
                            </div>
                            <br>
                            Locate the same document on the list below:
                            <select name="Score Cards" id="scorecards">
                                <option value="1">Score Card 1</option>
                                <option value="2">Score Card 2</option>
                                <option value="3">Score Card 3</option>
                                <option value="4">Score Card 4</option>
                            </select>
                            <br>
                            <br>
                            <button type="button" class="btn btn-primary">Confirm</button>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Continue</button>
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