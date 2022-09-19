<?php
    include_once 'sidebar.php';
    include '../includes/listnotify.inc.php';
    include '../includes/listagreements.inc.php';
?>
<link rel="stylesheet" href="../css/dashboard.css">
<link rel="stylesheet" href="../css/newpartner.css">
<link rel="stylesheet" href="../css/index.css">
<link rel="stylesheet" href="../css/drop-down-menu.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">

        <div class="main">

            <div class="overview">
                <h1>Overview</h1>
            </div>

            <div class="dash-cards">
                <div class="card-single">
                    <div class="card-body">
                        <div>
                            <i class="las la-archive fa-2x"></i>
                            <h5>Total Numbers of Partners</h5>
                            <h4>
                                <?php
                                    include '../includes/dbh.inc.php';
                                    $sql = "SELECT * FROM newpartner";
                                    $result = mysqli_query($conn, $sql);
                                    $rows = mysqli_num_rows($result);
                                    echo $rows;
                                ?>
                            </h4>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="../php/listpartner.php">View all</a>
                    </div>
                </div>
                
                <div class="card-single">
                    <div class="card-body">
                        <div>
                            <i class="las la-thumbtack fa-2x"></i>
                            <h5>Inactive Partners</h5>
                            <h4>
                                <?php
                                    include '../includes/dbh.inc.php';
                                    $sql = "SELECT * FROM newpartner WHERE ps='inactive'";
                                    $result = mysqli_query($conn, $sql);
                                    $rows = mysqli_num_rows($result);
                                    echo $rows;
                                ?> 
                            </h4>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="../php/listpartner.php">View all</a>
                    </div>
                </div>
                
                <div class="card-single">
                    <div class="card-body">
                        <div>
                            <i class="las la-business-time fa-2x"></i>
                            <h5>Active Partners</h5>
                            <h4>
                                <?php
                                    include '../includes/dbh.inc.php';
                                    $sql = "SELECT * FROM newpartner WHERE ps='active'";
                                    $result = mysqli_query($conn, $sql);
                                    $rows = mysqli_num_rows($result);
                                    echo $rows;
                                ?>
                            </h4>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="../php/listpartner.php">View all</a>
                    </div>
                </div>

                <?php
                    if (isset($_SESSION["department"])) {
                        if ($_SESSION["department"] == "admin") {
                            echo "     
                                <div class='card-single'>
                                    <div class='card-body'>
                                        <div>
                                            <i class='las la-users fa-2x'></i>
                                            <h5>All Users</h5>
                                            <h4> ";
                                                // <?php
                                                    include '../includes/dbh.inc.php';
                                                    $sql = 'SELECT * FROM users_approved';
                                                    $result = mysqli_query($conn, $sql);
                                                    $rows = mysqli_num_rows($result);
                                                    echo $rows;
                                                
                                                echo "
                                            </h4>
                                        </div>
                                    </div>
                                    <div class='card-footer'>
                                        <a href='../php/listusers.php'>View all</a>
                                    </div>    
                                </div>

                                <div class='card-single'>
                                    <div class='card-body'>
                                        <div>
                                            <i class='las la-user fa-2x'></i>
                                            <h5>Users with Issues</h5>
                                            <h4> ";
                                                // <?php
                                                    include '../includes/dbh.inc.php';
                                                    $sql = 'SELECT * FROM fogo';
                                                    $result = mysqli_query($conn, $sql);
                                                    $rows = mysqli_num_rows($result);
                                                    echo $rows;
                                                echo "
                                            </h4>
                                        </div>
                                    </div>
                                    <div class='card-footer'>
                                        <a href='../php/fogopass.php'>View all</a>
                                    </div>    
                                </div>

                                <div class='card-single'>
                                    <div class='card-body'>
                                        <div>
                                            <i class='las la-user-clock fa-2x'></i>
                                            <h5>New Users</h5>
                                            <h4> ";
                                                // <?php
                                                    include '../includes/dbh.inc.php';
                                                    $sql = 'SELECT * FROM users';
                                                    $result = mysqli_query($conn, $sql);
                                                    $rows = mysqli_num_rows($result);
                                                    echo $rows;
                                                echo "
                                            </h4>
                                        </div>
                                    </div>
                                    <div class='card-footer'>
                                        <a href='../php/listusers.php'>View all</a>
                                    </div>    
                                </div>
                            ";
                        }
                    }
                ?>
<!-- -------------------------------------------------------------------------------------------------------------- -->
                <div class="card-single">
                    <div class="card-body">
                        <div>
                            <i class="las la-server fa-2x"></i>
                            <h5>List of Non-Disclosure Agreements</h5>
                            <h4>
                                <?php
                                    include '../includes/dbh.inc.php';
                                    $sql = "SELECT * FROM nda";
                                    $result = mysqli_query($conn, $sql);
                                    $rows = mysqli_num_rows($result);
                                    echo $rows;
                                ?>
                            </h4>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="../php/listNDA.php">View all</a>
                    </div>    
                </div>

                <div class="card-single">
                    <div class="card-body">
                        <div>
                            <i class="las la-server fa-2x"></i>
                            <h5>List of Memorandum of Understanding</h5> <br>
                            <h4>
                                <?php
                                    include '../includes/dbh.inc.php';
                                    $sql = "SELECT * FROM mou";
                                    $result = mysqli_query($conn, $sql);
                                    $rows = mysqli_num_rows($result);
                                    echo $rows;
                                ?>
                            </h4>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="../php/listMOU.php">View all</a>
                    </div>    
                </div>

                <div class="card-single">
                    <div class="card-body">
                        <div>
                            <i class="las la-server fa-2x"></i>
                            <h5>List of Service Agreements</h5>
                            <h4>
                                <?php
                                    include '../includes/dbh.inc.php';
                                    $sql = "SELECT * FROM mou";
                                    $result = mysqli_query($conn, $sql);
                                    $rows = mysqli_num_rows($result);
                                    echo $rows;
                                ?>
                            </h4>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="../php/listSERVICE.php">View all</a>
                    </div>    
                </div>

                <div class="card-single">
                    <div class="card-body">
                        <div>
                            <i class="las la-server fa-2x"></i>
                            <h5>List of Other Aggrements</h5>
                            <h4>
                                <?php
                                    include '../includes/dbh.inc.php';
                                    $sql = "SELECT * FROM mou";
                                    $result = mysqli_query($conn, $sql);
                                    $rows = mysqli_num_rows($result);
                                    echo $rows;
                                ?>
                            </h4>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="../php/listOTHER.php">View all</a>
                    </div>    
                </div>
                
            </div>
            <br>

            <div class="overview">
                <h4>Agreements</h4>
                NOTE: Live Activities of Agreements
            </div>
            <br>
            <?php
                if (mysqli_num_rows($result4)) { ?>
            <div class="table-holder">
                <table class="table table-striped mogotio" id="agree2">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Organization Name</th>
                            <th scope="col">End Date (Deadline)</th>
                            <th scope="col">Countdown Timer</th>
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
                                var table = document.getElementById("agree2");

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
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <?php } ?>
                <br>
                <div class="print">
                    <a href="../php/agreementSCHD.php" class="ingia_btn">View All</a>
                </div>
                <br>
                <div class="overview">
                    <h4>Live Feed</h4>
                    NOTE: Live Activities of Users
                    <?php
                        if (mysqli_num_rows($result2)) { ?>
                    <div class="table-holder">
                        <table class="table table-striped table-bordered" id="sortTable">
                            <thead class="thead-dark">
                                <tr>
                                    <th  scope="col">No.</th>
                                    <th  scope="col">Username</th>
                                    <th  scope="col">Activity</th>
                                    <th  scope="col">Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $i = 0;
                                        while($rows = mysqli_fetch_assoc($result2)){
                                            $i++;
                                ?>
                                <tr>
                                    <th scope="row"><?=$i?></th>
                                    <td><?=$rows['name']?></td>
                                    <td><?=$rows['action']?></td>
                                    <td><?=$rows['time']?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
<?php
    include_once 'footer.php';
?>
    