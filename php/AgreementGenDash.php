<?php
    include_once 'sidebar.php';
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="../css/drop-down-menu.css">
<link rel="stylesheet" href="../css/agreementGenDash.css">


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
                        <!-- <h5 class="card-title">MOU</h5>
                        <p class="card-text">Memorundum of Understanding</p> -->
                        <a href="./MOU.php" class="btn btn-primary">Create</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card" style="width: 28rem;">
                    <img class="card-img-top" src="../images/nda.png" alt="Card image cap">
                    <div class="card-body">
                        <!-- <h5 class="card-title">NDA</h5>
                        <p class="card-text">None Disclosure Agreement</p> -->
                        <a href="./NDA.php" class="btn btn-primary">Create</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<?php
    include_once 'footer.php';
?>