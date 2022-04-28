<?php
    include '../includes/listpartner.inc.php';
?>
<link rel="stylesheet" href="../css/dashboard.css">
<link rel="stylesheet" href="../css/newpartner.css">
<link rel="stylesheet" href="../css/index.css">
<link rel="stylesheet" href="../css/printALL.css">
<link rel="stylesheet" href="../css/drop-down-menu.css">
<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
<div class="picnheader">
    <div class="pic">
        <img src="../images/FTA.PNG" alt="fta_main">
    </div>
    <div class="hedtitle">
        <h4>All Partners Report Summarized</h4><br>
        <p id="date"></p>
    </div>
</div>
<section class="newpartners">
    <div class="main">
        <h3>List of Partners</h3>
        <?php
            if (mysqli_num_rows($result)) { ?>
        <div class="table-holder">
            <table class="table table-striped table-bordered mogotio">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Type</th>
                        <th scope="col">Comp. Name</th>
                        <th scope="col">Region</th>
                        <th scope="col">Country</th>
                        <th scope="col">Focal FTA Staff</th>
                        <th scope="col">Principal Name</th>
                        <th scope="col">Telephone</th>
                        <th scope="col">PS</th>
                        <th scope="col">Agreement</th>
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
                        <td><?=$rows['typeofpartner']?></td>
                        <td><?=$rows['orgname']?></td>
                        <td><?=$rows['location']?></td>
                        <td><?=$rows['country']?></td>
                        <td><?=$rows['focalftastaff']?></td>
                        <td><?=$rows['principalname']?></td>
                        <td><?=$rows['Telephone']?></td>
                        <td><?=$rows['ps']?></td>
                        <td><a target="_blank" href='view.php?id="<?=$rows['id']?>"'><?=$rows['filename']?></a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <?php } ?>
        </div>
        <div class="print">
            <a onclick="window.print()"><i class="las la-print fa-lg"></i></a>
        </div>
<script>
    n =  new Date();
    y = n.getFullYear();
    m = n.getMonth() + 1;
    d = n.getDate();
    document.getElementById("date").innerHTML = m + "/" + d + "/" + y;
</script>

<?php
    include_once '../php/footer.php';
?>    