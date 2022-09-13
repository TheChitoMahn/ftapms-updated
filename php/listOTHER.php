<?php
    include_once 'sidebar.php';
    include '../includes/listOTHER.inc.php'
?>
<link rel="stylesheet" href="../css/dashboard.css">
<link rel="stylesheet" href="../css/newpartner.css">
<link rel="stylesheet" href="../css/index.css">
<link rel="stylesheet" href="../css/drop-down-menu.css">
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
                else if ($_GET["error"] == "successupdate") {
                    echo "<p class='nperror3'>Update of (Other) Agreement is Successfull!</p>";
                }
                else if ($_GET["error"] == "errorViewing") {
                    echo "<p class='nperror2'> There seems to be a problem viewing the document!</p>";
                }
            }
        ?>
        <h3>List of All Other Agreements'</h3>
        NOTE: This is where you can manage Other Agreements.
        <br>
        <br>

        <!-- Other Agreement Update Modal -->
        <form class="partnercontent" action="../includes/OTHERedit.inc.php" method="POST">
            <div class="modal fade" id="update-other" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Other Agreement Update</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Please fill out the form of the Agreement you want to update <br> <br>
                                <div>
                                    <input type="text" class="txtfields2" name="id" id="update_id" hidden>
                                    <div class="lbl_name">
                                        <a>Agreement Name</a>
                                    </div>
                                    <div class="input">
                                        <input type="text" class="txtfields2" name="otheragg-name" id="name" required>
                                    </div>
                                    <div class="lbl_name">
                                        <a>Date</a>
                                    </div>
                                    <div class="input">
                                        <input type="date" class="txtfields2" name="other-date" id="date" required>
                                    </div>                         
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="s-other-update">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <?php
            if (mysqli_num_rows($result)) { ?>
        <div class="table-holder">
            <table class="table table-striped table-bordered mogotio">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No.</th>
                        <th hidden scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Date</th>
                        <th scope="col">Signed Other Agreement</th>
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
                        <td hidden><?=$rows['id']?></td>
                        <td><?=$rows['name']?></td>
                        <td><?=$rows['date']?></td>
                        <td><a target="_blank" href='serviceview.php?id="<?=$rows['id']?>"'><?=$rows['file_name']?></a></td>
                        <td>
                            <button type="button" class="btn btn-warning updateother"><i class="las la-edit"></i></button>
                            <!-- <a href="./NDAedit.php?id=<?=$rows['id']?>" class="btn btn-warning"><i class="las la-edit"></i></a> -->
                            <a href="../php/OTHERDelete.php?id=<?=$rows['id']?>" class="btn btn-danger"><i class="las la-trash"></i></a>
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