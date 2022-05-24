<?php
    include_once 'sidebar.php';
    include '../includes/listAllApprovedUsers.inc.php';
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
                        echo "<p class='nperror2'>Unexpected Error, check sql query!!</p>";
                    }
                    else if ($_GET["error"] == "goneBack1") {
                        echo "<p class='nperror2'>Could not access the record from the Database, check sql query!!</p>";
                    }
                    else if ($_GET["error"] == "successDelete") {
                        echo "<p class='nperror3'>A record has been Succesfully Deleted</p>";
                    }
                    else if ($_GET["error"] == "successUserUpdate") {
                        echo "<p class='nperror3'>A User has been Succesfully Updated</p>";
                    }
                }
            ?>
            <h3>List of All Users</h3>
            NOTE: This is where you can manage Users who have forgotten their password.
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
                            <td><a href="../php/userEdit.php?id=<?=$rows['id']?>" class="btn btn-warning">Edit</a>
                                <a href="../php/userDelete.php?id=<?=$rows['id']?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <?php } ?>
            </div>

        </div>
    </section>

<?php
    include_once 'footer.php';
?>