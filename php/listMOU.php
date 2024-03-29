<?php
    include_once 'sidebar.php';
    include '../includes/listMOU.inc.php'
?>
<link rel="stylesheet" href="../css/dashboard.css">
<link rel="stylesheet" href="../css/newpartner.css">
<link rel="stylesheet" href="../css/index.css">
<link rel="stylesheet" href="../css/drop-down-menu.css">
<link rel="stylesheet" href="../css/moutable.css">
<link rel="stylesheet" href="../css/listMOU.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">

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
                else if ($_GET["error"] == "successMOUupdated") {
                    echo "<p class='nperror3'> MOU Succesfully Updated</p>";
                }
                else if ($_GET["error"] == "successnewmou") {
                    echo "<p class='nperror3'>New MOU successfully created!</p>";
                }
                else if ($_GET["error"] == "errorViewing") {
                    echo "<p class='nperror2'> There seems to be a problem viewing the document!</p>";
                }
            }
        ?>
        <h3>List of All MOUs'</h3>
        NOTE: This is where you can manage MOU Agreements.
        <br>
        <br>
        <?php
            if (mysqli_num_rows($result)) { ?>
        <div class="table-holder">
            <table class="table table-striped table-bordered mogotio">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Partner Name</th>
                        <th scope="col">Date</th>
                        <th scope="col">Progress</th>
                        <th scope="col">Status</th>
                        <th scope="col">Signed MOU</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $i = 0;
                            while($rows = mysqli_fetch_assoc($result)){
                                $i++;
                    ?>
                    <tr height="50px">
                        <th scope="row"><?=$i?></th>
                        <td height="50"><?=$rows['orgname']?></td>
                        <td><?=$rows['moudate']?></td>
                        <td><?=$rows['progress']?>/3</td>
                        <td>
                            <?php
                                if ($rows['progress'] === "1") {
                                    echo "<p class = 'nperror2'>Incomplete <br> Not SIGNED, PRINTED or UPLOADED!</p>";
                                } elseif ($rows['progress'] === "2") {
                                    echo "<p class = 'nperror1'>PRINTED! <br> Not SIGNED or UPLOADED!</p>";
                                } elseif ($rows['progress'] === "3") {
                                    echo "<p class = 'nperror3'>Complete <br> PRINTED, SIGNED & UPLOADED!</p>";
                                } else {
                                    echo "<p>Invalid</p>";
                                }
                            ?>
                        </td>
                        <td><a target="_blank" href='mouview.php?id="<?=$rows['id']?>"'><?=$rows['name']?></a></td>
                        <td>
                            <a href="./MOUedit.php?id=<?=$rows['id']?>" class="btn btn-warning"><i class="las la-edit"></i></a>
                            <!-- <a href="./MOUedit.php?id=<?=$rows['id']?>" class="btn btn-warning">Edit & Update</i></a> <br> -->
                            <a href="../php/mouDelete.php?id=<?=$rows['id']?>" class="btn btn-danger"><i class="las la-trash"></i></a>
                            <!-- <a href="../php/mouDelete.php?id=<?=$rows['id']?>" class="btn btn-danger">Delete</i></a> <br> -->
                            <a target="blank" href="../includes/print_MOU_single.inc.php?id=<?=$rows['id']?>" class="btn btn-primary"><i class="las la-print"></i></a>
                            <!-- <a target="blank" href="../includes/print_MOU_single.inc.php?id=<?=$rows['id']?>" class="btn btn-primary">View & Print</i></a> -->
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