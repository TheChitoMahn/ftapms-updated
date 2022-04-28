<?php
    include_once 'sidebar.php';
    include '../includes/fogopass.inc.php';
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
                    else if ($_GET["error"] == "successDelete") {
                        echo "<p class='nperror3'>A record has been Succesfully Deleted</p>";
                    }
                }
            ?>
                <h3>Password Assistance</h3>
                Here will be a list of people who have forgotten their passwords. NB: If the page is blank then there are no current enquiries
                <?php
                    if (mysqli_num_rows($result)) { ?>
                <div class="table-holder">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">User Company Email</th>
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
                                <td><?=$rows['compemail']?></td>
                                <td><a href="../php/fogoDelete.php?id=<?=$rows['id']?>" class="btn btn-warning">Delete</a></td>
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
