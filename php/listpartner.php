<?php
    include_once 'sidebar.php';
    include '../includes/listpartner.inc.php';
?>
        <link rel="stylesheet" href="../css/dashboard.css">
        <link rel="stylesheet" href="../css/newpartner.css">
        <link rel="stylesheet" href="../css/index.css">
        <link rel="stylesheet" href="../css/drop-down-menu.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
       
        <section class="newpartners">
            <div class="main" id="printablearea">
                <h3>List of Partners</h3>
                <!-- <nav class="navbar navbar-light bg-light">
                    <form class="form-inline">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </nav> -->
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
                                <th hidden scope="col">Address</th>
                                <th scope="col">Focal FTA Staff</th>
                                <th scope="col">Activity</th>
                                <th scope="col">Telephone</th>
                                <th hidden scope="col">Email</th>
                                <th hidden scope="col">Alt Email</th>
                                <th hidden scope="col">Partnership Agreement</th>
                                <th hidden scope="col">Agreement Available</th>
                                <th hidden scope="col">Interests</th>
                                <th hidden scope="col">Indicated Opportunities</th>
                                <th scope="col">Progress<br>(Overall)</th>
                                <th scope="col">PS</th>
                                <th hidden scope="col">Implimentation Date</th>
                                <th scope="col">Agreement</th>
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
                                <td><?=$rows['typeofpartner']?></td>
                                <td><?=$rows['orgname']?></td>
                                <td><?=$rows['location']?></td>
                                <td><?=$rows['country']?></td>
                                <td hidden><?=$rows['Address']?></td>
                                <td><?=$rows['focalftastaff']?></td>
                                <td>
                                    <?php
                                        
                                    ?>
                                </td>
                                <td><?=$rows['Telephone']?></td>
                                <td hidden><?=$rows['Email']?></td>
                                <td hidden><?=$rows['altemail']?></td>
                                <td hidden><?=$rows['partnershipAgreement']?></td>
                                <td hidden><?=$rows['agreementavailable']?></td>
                                <td hidden><?=$rows['Interests']?></td>
                                <td hidden><?=$rows['IndicateOrpotunities']?></td>
                                <td><?=$rows['progress']?>%</td>
                                <td><?=$rows['ps']?></td>
                                <td hidden><?=$rows['Implementationdate']?></td>
                                <td><a target="_blank" href='view.php?id="<?=$rows['id']?>"'><?=$rows['filename']?></a></td>
                                <td><a href="../includes/printptSINGLE.inc.php?id=<?=$rows['id']?>" class="btn btn-primary" target="blank"><i class="las la-print"></i></a>
                                    <button type="button" class="btn btn-primary yeye" data-toggle="modal" data-target="#exampleModalLong"> +. </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body" id="rowprint">
                                                    <div class="rowhodler">
                                                        <b><label>Type: </label></b>
                                                        <label id="type">error</label>
                                                    </div>
                                                    <div class="rowhodler">
                                                    <b><label>Company Name: </label></b>
                                                        <label id="compname">error</label>
                                                    </div>
                                                    <div class="rowhodler">
                                                    <b><label>Location: </label></b>
                                                        <label id="location">error</label>
                                                    </div>
                                                    <div class="rowhodler">
                                                    <b><label>Country: </label></b>
                                                        <label id="country">error</label>
                                                    </div>
                                                    <div class="rowhodler">
                                                    <b><label>Address: </label></b>
                                                        <label id="address">error</label>
                                                    </div>
                                                    <div class="rowhodler">
                                                    <b><label>Focal FTA Staff: </label></b>
                                                        <label id="ftastaff">error</label>
                                                    </div>
                                                    <div class="rowhodler">
                                                    <b><label>Principal Name: </label></b>
                                                        <label id="principalname">error</label>
                                                    </div>
                                                    <div class="rowhodler">
                                                    <b><label>Telephone: </label></b>
                                                        <label id="telephone">error</label>
                                                    </div>
                                                    <div class="rowhodler">
                                                    <b><label>Email: </label></b>
                                                        <label id="email">error</label>
                                                    </div>
                                                    <div class="rowhodler">
                                                    <b><label>Alternate Email: </label></b>
                                                        <label id="altemail">error</label>
                                                    </div>
                                                    <div class="rowhodler">
                                                    <b><label>Partnership Agreement: </label></b>
                                                        <label id="partnershipAgreement">error</label>
                                                    </div>
                                                    <div class="rowhodler">
                                                    <b><label>Agreement Available: </label></b>
                                                        <label id="agreementavailable">error</label>
                                                    </div>
                                                    <div class="rowhodler">
                                                    <b><label>Interests: </label></b>
                                                        <label id="Interests">error</label>
                                                    </div>
                                                    <div class="rowhodler">
                                                    <b><label>Indicated Opportunities: </label></b>
                                                        <label id="IndicateOrpotunities">error</label>
                                                    </div>
                                                    <div class="rowhodler">
                                                    <b><label>Progress: </label></b>
                                                        <label id="progress">error</label>
                                                    </div>
                                                    <div class="rowhodler">
                                                    <b><label>Partnership Status: </label></b>
                                                        <label id="ps">error</label>
                                                    </div>
                                                    <div class="rowhodler">
                                                    <b><label>Implimentation Date: </label></b>
                                                        <label id="Implementationdate">error</label>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <?php } ?>
                </div>
                <div class="print">
                    <a href="../includes/printptALL.inc.php" class="ingia_btn" target="blank">Print All (Selected Entries Only)</a>
                </div>

            </div>
        </section>
<?php
    include_once 'footer.php';
?>    