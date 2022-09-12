<?php
    session_start();
    include '../includes/listnotify.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="../css/drop-down-menu.css">
    <link rel="stylesheet" href="../css/notify.css">
    <link rel="icon" type="image/gif" href="../images/FTA no cap.PNG" />

    <!-- Notification Box(Modal) Hii ndio problem ya vitu kuinigia ndani //FIXXXXXXXXXXXXXX// -->
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Alerts & Notifications</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="mkisii" aria-hidden="true">
                    <?php
                        if (mysqli_num_rows($result2)) { ?>
                    <div class="table-holder" aria-hidden="true">
                        <table class="table table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th  hidden scope="col">No.</th>
                                    <th  hidden scope="col">Username</th>
                                    <th  hidden scope="col">Activity</th>
                                    <th  hidden scope="col">Time</th>
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
                                <?php }?>
                            </tbody>
                        </table>
                        <?php }?>
                    </div>
                    <form class="print" action="../includes/notifyCLEARALL.inc.php" method="POST" aria-hidden="true">
                        <button type="submit" class="ingia_btn" name="clearall">Clear All</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- ---------------------------------------------------------ENDS HERE------------------------------------------------------------ -->

</head>
<body>
    <input type="checkbox" id="sidebar-toggle">
    <div class="sidebar">
        <div class="toggle-bar">
            <label for="sidebar-toggle"><i class="las la-list-ul fa-lg"></i></label>
        </div>
        <div class="sidebar-header">
            <div class="sidebar_logo">
                <img src="../images/FTA.PNG" alt="FTA Logo">
            </div>
        </div>
        <div class="sidebar_content">
            <ul>
                <li>
                    <i class="las la-home fa-lg"></i>
                    <a href="../php/home-dashboard.php">Dashboard</a>
                </li>
            </ul>
        </div>
        <div class="partners_title">
            <a>Partner Assesment</a>
        </div>
        <div class="sidebar_content">
            <ul>
                <li>
                    <i class="las la-passport fa-lg"></i>
                    <a href="../php/ftapascoresheet.php">FTA PA Scoresheet</a>
                </li>
                <li>
                    <i class="las la-poll-h fa-lg"></i>
                    <a href="../php/ddchecklist.php">Due diligence Checklist</a>
                </li>
                <li>
                    <i class="las la-id-badge fa-lg"></i>
                    <a href="../php/ftaprzscorecard.php">Prioritization Score card</a>
                </li>
                <li>
                    <i class="las la-server fa-lg"></i>
                    <a href="../php/listofass.php">List of Assesments</a>
                </li>
            </ul>
        </div>
        <div class="partners_title">
            <a>Agreements</a>
        </div>
        <div class="sidebar_content">
            <ul>
                <li>
                    <i class="las la-cogs fa-lg"></i>
                    <a href="./AgreementGenDash.php">Agreement Generator</a>
                </li>
                <li>
                    <i class="las la-folder-plus fa-lg"></i>
                    <a href="../php/agreementSCHD.php">PA Scheduler</a>
                </li>
                <li>
                    <i class="las la-server fa-lg"></i>
                    <a href="../php/listMOU.php">List of MOUs</a>
                </li>
                <li>
                    <i class="las la-server fa-lg"></i>
                    <a href="../php/listNDA.php">List of NDAs</a>
                </li>
                <li>
                    <i class="las la-server fa-lg"></i>
                    <a href="#">List of Service Agreements</a>
                </li>
                <li>
                    <i class="las la-server fa-lg"></i>
                    <a href="#">List of Other Agreements</a>
                </li>
                <li>
                    <i class="las la-file fa-lg"></i>
                    <a href="../php/upload.php">Upload</a>
                </li>
            </ul>
        </div>

        <div class="partners_title">
            <a>Partners</a>
        </div>
        <div class="sidebar_content">
            <ul>
                <?php
                    if (isset($_SESSION["department"])) {
                        if ($_SESSION["department"] == "admin") {
                            echo "<li><i class='las la-plus-circle fa-lg'></i><a href='../php/newpartner.php'>New Partner</a></li>";
                            echo "<li><i class='las la-tasks fa-lg'></i><a href='../php/actionplan.php'>Create Action Plan</a></li>";
                            echo "<li><i class='las la-pen fa-lg'></i><a href='../php/editpartner.php'>Edit Partner</a></li>";
                        }
                    }
                ?>
                <li>
                    <i class="las la-server fa-lg"></i>
                    <a href="../php/listpartner.php">List of Partners</a>
                </li>
            </ul>
        </div>

        <?php
            if (isset($_SESSION["department"])) {
                if ($_SESSION["department"] == "admin") {
                    echo "  
                        <div class='partners_title'>
                        <a>Admin Panel</a>
                        </div>
                        <div class='sidebar_content'>
                            <ul>
                                <li>
                                    <i class='las la-user fa-lg'></i>
                                    <a href='../php/accmgmt.php'>New Accounts Approval</a>
                                </li>
                                <li>
                                    <i class='las la-user-clock fa-lg'></i>
                                    <a href='../php/fogopass.php'>Forgotten Password Acc</a>
                                </li>
                                <li>
                                    <i class='las la-users fa-lg'></i>
                                    <a href='../php/listusers.php'>List of All Users</a>
                                </li>
                                <li>
                                    <i class='las la-user fa-lg'></i>
                                    <a href='../php/adduser.php'>Add User</a>
                                </li>
                            </ul>
                        </div>
                    ";
                }
            }
        ?>
    </div>
    <div class="main_content">
        <div class="main_header">
            <div class="name_goes_here">
                <?php
                    if (isset($_SESSION["fullname"])) {
                        echo "<a>Welcome, " . $_SESSION["fullname"] . "</a>";
                    }
                ?>
                <div class="dropdown">
                    <span onclick="myFunction()" class="notification"><i class="las la-bars fa-lg"></i></span>
                    <div id="settings-dropdown" class="dropdown-content">
                        <a href="../includes/logout.inc.php">Logout</a>
                    </div>
                </div>
            <a href="#" class="notification">
                <span data-toggle="modal" data-target=".bd-example-modal-lg"><i class="las la-bell fa-lg"></i></span>
                <span class="badge">
                    <?php
                        include '../includes/dbh.inc.php';
                        $sql = "SELECT * FROM notification";
                        $result = mysqli_query($conn, $sql);
                        $rows = mysqli_num_rows($result);
                        echo $rows;
                    ?>
                </span>
            </a>
        </div>
    </div>