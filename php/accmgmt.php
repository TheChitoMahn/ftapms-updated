<?php
    include_once 'sidebar.php';
    include '../includes/listusers.inc.php';
    include '../includes/accmgmt.inc.php';
?>
        <link rel="stylesheet" href="../css/dashboard.css">
        <link rel="stylesheet" href="../css/newpartner.css">
        <link rel="stylesheet" href="../css/index.css">
        <link rel="stylesheet" href="../css/drop-down-menu.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <section class="newpartners">
            <div class="main">
                <?php 
                    if (isset($_GET["error"])) {
                        if ($_GET["error"] == "goneBack2") {
                            echo "<p class='nperror'>Unexpected Error, check sql query!!</p>";
                        }
                        else if ($_GET["error"] == "goneBack1") {
                            echo "<p class='nperror'>Could not access the record from the Database, check sql query!!</p>";
                        }
                        else if ($_GET["error"] == "successMove") {
                            echo "<p class='nperror3'>User has been Approved, safe to Login!</p>";
                        }
                        else if ($_GET["error"] == "userAlreadyMoved") {
                            echo "<p class='errormsg'>The User Account has already been Approved</p>";
                        }
                        else if ($_GET["error"] == "successDelete") {
                            echo "<p class='nperror3'>A record has been Succesfully Deleted</p>";
                        }
                    }
                ?>
                <h3>User Account Management</h3>
                <h5>Users Unapproved List</h5>
                NOTE: Verify and Approve new Users here. After approval send an Email Notification
                notifying the user. This page will be empty if there are no new users or all the users have been moved to the approved table.
                <?php
                    if (mysqli_num_rows($result)) { ?>
                <div class="table-holder">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Full Name</th>
                                <th scope="col">Comp. Email</th>
                                <th scope="col">Department</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $i = 0;
                                    while($rows = mysqli_fetch_assoc($result)){
                                        $i++;
                            ?>
                            <tr>
                                <th scope="row"><?=$i?></th>
                                <td><?=$rows['fullname']?></td>
                                <td><?=$rows['companyemail']?></td>
                                <td><?=$rows['department']?></td>
                                <td><a href="../php/moveUsers.php?id=<?=$rows['id']?>" class="btn btn-warning">Move</a>
                                    <a href="../php/accmgmtDelete.php?id=<?=$rows['id']?>" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <?php } ?>
                
                <h5>Users Approved List</h5>
                <?php
                    if (mysqli_num_rows($result2)) { ?>
                <div class="table-holder">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Full Name</th>
                                <th scope="col">Comp. Email</th>
                                <th scope="col">Department</th>
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
                                <td><?=$rows['fullname']?></td>
                                <td><?=$rows['companyemail']?></td>
                                <td><?=$rows['department']?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <?php } ?>
                </div>
                </div>
            </div>
        </section>

<?php
    include_once 'footer.php';
?>
