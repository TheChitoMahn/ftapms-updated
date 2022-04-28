<?php
    include_once 'sidebar.php';
    include '../includes/editpartner.inc.php';
?>
<link rel="stylesheet" href="../css/dashboard.css">
<link rel="stylesheet" href="../css/newpartner.css">
<link rel="stylesheet" href="../css/index.css">
<link rel="stylesheet" href="../css/drop-down-menu.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
<section class="newpartners">
    <div class="main">
        <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "successupdate") {
                    echo "<p class='nperror3'>A record has been Succesfully Updated</p>";
                }else if ($_GET["error"] == "goneBack2") {
                    echo "<p class='nperror'>Unexpected Error, check sql query!!</p>";
                }
                else if ($_GET["error"] == "goneBack1") {
                    echo "<p class='nperror'>Could not access the record from the Database, check sql query!!</p>";
                }
                else if ($_GET["error"] == "successDelete") {
                    echo "<p class='nperror3'>A record has been Succesfully Deleted</p>";
                }
                else if ($_GET["error"] == "NewPartnerAdded") {
                    echo "<p class='nperror3'>New Partner Added</p>";
                }
            }
        ?>
        <h3>Edit Partners</h3>
        <?php
            if (mysqli_num_rows($result)) { ?>
        <div class="table-holder">
            <table class="table table-striped table-bordered" id="sortTable">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Acitivites Implemented</th>
                        <th scope="col">Key Challenges</th>
                        <th scope="col">Partnership Support Required</th>
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
                        <td><?=$rows['orgname']?></td>
                        <td><?php echo $rows['Email']?></td>
                        <td><?=$rows['specify']?></td>
                        <td><?=$rows['listkeychallenges']?></td>
                        <td><?=$rows['IndicatePartnership']?></td>
                        <td><a href="../php/update.php?id=<?=$rows['id']?>" class="btn btn-success">Update</a>
                            <a href="../php/delete.php?id=<?=$rows['id']?>" class="btn btn-danger">Delete</a>
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