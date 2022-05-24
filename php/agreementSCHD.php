<?php
    include_once 'sidebar.php';
    include '../includes/listagreements.inc.php';
?>
        <link rel="stylesheet" href="../css/dashboard.css">
        <link rel="stylesheet" href="../css/newpartner.css">
        <link rel="stylesheet" href="../css/index.css">
        <link rel="stylesheet" href="../css/table.css">
        <link rel="stylesheet" href="../css/drop-down-menu.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <body class="motoo">
        <section class="newpartners">
            <div class="main">
                <form class="agreement_content" action="../includes/agreement.inc.php" method="POST">
                    <?php 
                        if (isset($_GET["error"])) {
                            if ($_GET["error"] == "goneBack2") {
                                echo "<p class='nperror'>Unexpected Error, check sql query!!</p>";
                            }
                            else if ($_GET["error"] == "goneBack1") {
                                echo "<p class='nperror'>Could not access the record from the Database, check sql query!!</p>";
                            }
                            else if ($_GET["error"] == "successAdded") {
                                echo "<p class='nperror3' name='added'>An Agreement has been added Succesfully</p>";
                            }
                            else if ($_GET["error"] == "successDelete") {
                                echo "<p class='nperror3'>An Agreement has been Deleted Succesfully</p>";
                            }
                            else if ($_GET["error"] == "NewPartnerAdded") {
                                echo "<p class='nperror3'>New Partner successfully added, schedule the Agreement to keep track of the record!</p>";
                            }
                        }
                        //$url = $_SERVER['REQUEST_URI'];
                        //echo $url;
                    ?>
                    <h3>Agreement Scheduler</h3>
                    Set the ending date of a desired partnership agreement and start the countdown timer to keep track of the record
                    <br>
                    <div class="lbl_name">
                        <a>Organaization Name</a>
                    </div>
                    <div class="input">
                        <input type="text" class="txtfields2" name="OrganaizatoinName" placeholder="Organaization Name" required>
                    </div> 
                    <div class="lbl_name">
                        <a>Set (Deadline) End Date</a>
                    </div>
                    <div class="input">
                        <input type="datetime-local" class="txtfields2" name="endDate" required>
                    </div>
                    <br>
                    <div class="buttons">
                        <button type="submit" class="ingia_btn" name="agreement-submit">Save & Start Countdown</button>
                    </div>
                </form>

                <h3>List of All Agreements</h3>
                NOTE: This is where you can manage Agreements. NB: This page will be empty if there no Agreements on the database!
                <?php
                    if (mysqli_num_rows($result4)) { ?>
                <div class="table-holder">
                    <table class="table table-striped table-borderd mogotio" id="agree">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Organaization Name</th>
                                <th scope="col">End Date (Deadline)</th>
                                <th scope="col">Countdown Timer</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $i = 0;
                                    while($rows = mysqli_fetch_assoc($result4)){
                                        $i++;
                            ?>
                            <tr>
                                <th scope="row"><?=$i?></th>
                                <td><?=$rows['orgname']?></td>
                                <td><?=$rows['date']?></td>
                                <td></td>

                                    <script>
                                        var table = document.getElementById("agree");

                                        var x = setInterval(
                                            function() {

                                                for (var i = 1, row; row = table.rows[i]; i++) {


                                                var date = row.cells[2];
                                                var countDownDate = new Date(date.innerHTML.replace(/-/g, "/")).getTime();
                                                var countDown = row.cells[3];

                                                var now = new Date().getTime();
                                                    

                                                var distance = countDownDate - now;
                                                    

                                                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                                                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                                var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                                                    

                                                countDown.innerHTML = (days + "d " + hours + "h "
                                                + minutes + "m " + seconds + "s " );                                           


                                                if (distance < 0) {
                                                    clearInterval(x);
                                                    countDown.innerHTML = "EXPIRED";
                                                }
                                            }
                                        }, 1000);
                                    </script>
                                <td>
                                    <!-- <button type="button" class="btn btn-primary yeye2">Start</button> -->
                                    <a href="../php/agreementDelete.php?id=<?=$rows['id']?>" class="btn btn-danger">Delete</a>    
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <?php } ?>
                </div>
            </div>             
        </section>
        </body>

<?php
    include_once 'footer.php';
?>