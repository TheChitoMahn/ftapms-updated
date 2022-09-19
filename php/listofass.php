<?php
    include_once 'sidebar.php';
    include '../includes/listofass.inc.php';
?>
<link rel="stylesheet" href="../css/dashboard.css">
<link rel="stylesheet" href="../css/newpartner.css">
<link rel="stylesheet" href="../css/index.css">
<link rel="stylesheet" href="../css/drop-down-menu.css">
<link rel="stylesheet" href="../css/newaddons.css">
<link rel="stylesheet" href="../css/listofass.css">
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
                    echo "<p class='nperror3'>A FTA PA Scoresheet record has been Succesfully Deleted</p>";
                }
                else if ($_GET["error"] == "successddDelete") {
                    echo "<p class='nperror3'>A Due Diligence Checklist record has been Succesfully Deleted</p>";
                }
                else if ($_GET["error"] == "successprzDelete") {
                    echo "<p class='nperror3'>A Prioritization Scorecard record has been Succesfully Deleted</p>";
                }
                else if ($_GET["error"] == "successDDupdate") {
                    echo "<p class='nperror3'> Due Diligence Checklist Succesfully Updated</p>";
                }
                else if ($_GET["error"] == "successSCRupdate") {
                    echo "<p class='nperror3'> FTA PA Scoresheet Succesfully Updated</p>";
                }
                else if ($_GET["error"] == "successPRZZupdate") {
                    echo "<p class='nperror3'> Prioritization Scorecard Succesfully Updated</p>";
                }
            }
        ?>
        <h3>List of All Partner Assessements</h3>
        NOTE: This is where you can manage All Partner Assessments Records.
        <br>
        <br>

        <!-- FTA PA Scoresheet -->
        <div class="fogo_holder">
            <div class="fogo_password">
                <button type="button" class="btn_fogo_password">Fairtrade Africa Partnership Assessement Scoresheet</button>
                <div class="fogo_password_content">
                    <p>This is table with records of FTA PA Scoresheets.</p>
                    <br>
                    <?php
                        if (mysqli_num_rows($result)) { ?>
                    <div class="table-holder">
                        <table class="table table-striped table-bordered mogotio">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">No.</th>
                                    <th hidden scope="col">ID</th>
                                    <th scope="col">Organization Name</th>
                                    <th scope="col">Address</th>
                                    <th hidden scope="col">Contact</th>
                                    <th hidden scope="col">Email</th>
                                    <th hidden scope="col">Phone No.</th>
                                    <th scope="col">Date of Assessement</th>
                                    <th scope="col">Carried out by</th>
                                    <th scope="col">Strategic</th>
                                    <th scope="col">Capacity</th>
                                    <th scope="col">Risks</th>
                                    <th scope="col">Summary</th>
                                    <th scope="col">Action</th>
                                    <th hidden scope="col">UID</th>
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
                                    <td><?=$rows['orgname']?></td>
                                    <td><?=$rows['address']?></td>
                                    <td hidden><?=$rows['p_contact']?></td>
                                    <td hidden><?=$rows['p_email']?></td>
                                    <td hidden><?=$rows['p_phone']?></td>
                                    <td><?=$rows['dateofassessment']?></td>
                                    <td><?=$rows['carriedoutby']?></td>
                                    <td><?=$rows['strategic']?></td>
                                    <td><?=$rows['capacity']?></td>
                                    <td><?=$rows['risk']?></td>
                                    <td><?=$rows['summary']?></td>
                                    <td hidden><?=$rows['UID']?></td>
                                    <td>
                                        <button type="button" class="btn btn-warning updatescoresheet"><i class="las la-edit"></i></button>
                                        
                                        <!-- Scoresheet Update Modal -->
                                        <form class="partnercontent" action="../includes/scoresheetEDIT.inc.php" method="POST">
                                            <div class="modal fade" id="update-scoresheet" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLongTitle">FTA Partner Assessment Scoresheet Update</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Please fill out the update form below. <br> <br>
                                                                <div>
                                                                    <input type="text" class="txtfields2" name="id" id="update_id" hidden>
                                                                    <div class="lbl_name">
                                                                        <a>Organization Name</a>
                                                                    </div>
                                                                    <div class="input">
                                                                        <input type="text" class="txtfields2" name="scr-orgname" id="orgname" required>
                                                                    </div>
                                                                    <div class="lbl_name">
                                                                        <a>Address</a>
                                                                    </div>
                                                                    <div class="input">
                                                                        <input type="text" class="txtfields2" name="scr-address" id="address" required>
                                                                    </div>
                                                                    <div class="lbl_name">
                                                                        <a>Partner Contact</a>
                                                                    </div>
                                                                    <div class="input">
                                                                        <input type="text" class="txtfields2" name="scr-contact" id="u-contact" required>
                                                                    </div>
                                                                    <div class="lbl_name">
                                                                        <a>Partner Email</a>
                                                                    </div>
                                                                    <div class="input">
                                                                        <input type="text" class="txtfields2" name="scr-email" id="u-email" required>
                                                                    </div>
                                                                    <div class="lbl_name">
                                                                        <a>Partner Phone No.</a>
                                                                    </div>
                                                                    <div class="input">
                                                                        <input type="number" class="txtfields2" name="scr-phone" id="u-phone" required>
                                                                    </div>
                                                                    <div class="lbl_name">
                                                                        <a>Date of Assessement</a>
                                                                    </div>
                                                                    <div class="input">
                                                                        <input type="date" class="txtfields2" name="scr-das" id="u-das" required>
                                                                    </div>
                                                                    <div class="lbl_name">
                                                                        <a>Carried out By</a>
                                                                    </div>
                                                                    <div class="input">
                                                                        <input type="text" class="txtfields2" name="scr-cob" id="u-cob" required>
                                                                    </div>
                                                                    <div class="lbl_name">
                                                                        <a>Strategic</a>
                                                                    </div>
                                                                    <div class="input">
                                                                        <input type="number" class="txtfields2" name="scr-str" id="u-str" required>
                                                                    </div>
                                                                    <div class="lbl_name">
                                                                        <a>Capacity</a>
                                                                    </div>
                                                                    <div class="input">
                                                                        <input type="number" class="txtfields2" name="scr-cap" id="u-cap" required>
                                                                    </div>
                                                                    <div class="lbl_name">
                                                                        <a>Risk</a>
                                                                    </div>
                                                                    <div class="input">
                                                                        <input type="number" class="txtfields2" name="scr-rsk" id="u-rsk" required>
                                                                    </div>
                                                                    <div class="lbl_name">
                                                                        <a>Summary</a>
                                                                    </div>
                                                                    <div class="input">
                                                                        <input type="number" class="txtfields2" name="scr-smry" id="u-smry" required>
                                                                    </div>                         
                                                                </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary" name="scoresheet-edit">Update</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>

                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmscoresheet"><i class="las la-trash"></i></button>

                                        <!-- Scoresheet Delete Confirmation Pop up Box -->
                                        <div class="modal fade" id="confirmscoresheet" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Warning!</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Are you sure, you are about to delete a FTA Partner Assessement Scoresheet record!
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a href="../php/scoresheetDELETE.php?id=<?=$rows['id']?>" class="btn btn-primary">Yes</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <button type="button" class="btn btn-primary scoresheetmore" data-toggle="modal" data-target="#scoresheetmore">.+</i></button>

                                        <!-- FTA PA Scoresheet .+ button Modal -->
                                        <div class="modal fade" id="scoresheetmore" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="Title"></h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body" id="rowprint">
                                                        <div class="rowhodler">
                                                            <b><label>Address: </label></b>
                                                            <label id="addressM">error</label>
                                                        </div>
                                                        <div class="rowhodler">
                                                            <b><label>Partner Contact: </label></b>
                                                            <label id="contact">error</label>
                                                        </div>
                                                        <div class="rowhodler">
                                                            <b><label>Partner Email: </label></b>
                                                            <label id="email">error</label>
                                                        </div>
                                                        <div class="rowhodler">
                                                            <b><label>Partner Phone No: </label></b>
                                                            <label id="phone">error</label>
                                                        </div>
                                                        <div class="rowhodler">
                                                            <b><label>Date of Assessement: </label></b>
                                                            <label id="das">error</label>
                                                        </div>
                                                        <div class="rowhodler">
                                                            <b><label>Carried out by: </label></b>
                                                            <label id="coby">error</label>
                                                        </div>
                                                        <div class="rowhodler">
                                                            <b><label>Strategic: </label></b>
                                                            <label id="str">error</label>
                                                        </div>
                                                        <div class="rowhodler">
                                                            <b><label>Capacity: </label></b>
                                                            <label id="cap">error</label>
                                                        </div>
                                                        <div class="rowhodler">
                                                            <b><label>Risk: </label></b>
                                                            <label id="rsk">error</label>
                                                        </div>
                                                        <div class="rowhodler">
                                                            <b><label>Summary: </label></b>
                                                            <label id="smr">error</label>
                                                        </div>
                                                        <div class="rowhodler">
                                                            <b><label>Unique ID: </label></b>
                                                            <label id="uid">error</label>
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
                </div>
            </div>
        </div>

        <!-- Due Diligence Checklist -->
        <div class="fogo_holder">
            <div class="fogo_password">
                <button type="button" class="btn_fogo_password">Due Diligence Checklist</button>
                <div class="fogo_password_content">
                    <p>This is table with records of Due Diligence Checklist.</p>
                    <br>
                    <?php
                        if (mysqli_num_rows($result1)) { ?>
                    <div class="table-holder">
                        <table class="table table-striped table-bordered mogotio">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">No.</th>
                                    <th hidden scope="col">ID</th>
                                    <th scope="col">Organization Name</th>
                                    <th scope="col">Background</th>
                                    <th scope="col">Financial Standing</th>
                                    <th scope="col">Governance</th>
                                    <th scope="col">Strategy & Programs</th>
                                    <th scope="col">Company/Org Value</th>
                                    <th scope="col">Analysis of Transaction</th>
                                    <th hidden scope="col">Obligations</th>
                                    <th hidden scope="col">Risks</th>
                                    <th hidden scope="col">Funding</th>
                                    <th hidden scope="col">Staff Capacity</th>
                                    <th hidden scope="col">FTA Perspective</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $i = 0;
                                        while($rows = mysqli_fetch_assoc($result1)){
                                            $i++;
                                ?>
                                <tr>
                                    <th scope="row"><?=$i?></th>
                                    <td hidden><?=$rows['id']?></td>
                                    <td><?=$rows['orgname']?></td>
                                    <td><?=$rows['bginfo']?></td>
                                    <td><?=$rows['financeSTD']?></td>
                                    <td><?=$rows['Governance']?></td>
                                    <td><?=$rows['two']?></td>
                                    <td><?=$rows['three']?></td>
                                    <td><?=$rows['four']?></td>
                                    <td hidden><?=$rows['five']?></td>
                                    <td hidden><?=$rows['six']?></td>
                                    <td hidden><?=$rows['funding']?></td>
                                    <td hidden><?=$rows['management']?></td>
                                    <td hidden><?=$rows['eight']?></td>
                                    <td>
                                        <button type="button" class="btn btn-warning updatedd"><i class="las la-edit"></i></button>
                                        
                                        <!-- DD Checklist Update Modal -->
                                        <form class="partnercontent" action="../includes/ddEDIT.inc.php" method="POST">
                                            <div class="modal fade" id="update-dd" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLongTitle">Due Diligence Checklist Assessement Update</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Please fill out the update form below. <br> <br>
                                                                <div>
                                                                    <input type="text" class="txtfields2" name="id" id="update_id3" hidden>
                                                                    <div class="lbl_name">
                                                                        <a>Organization Name</a>
                                                                    </div>
                                                                    <div class="input">
                                                                        <input type="text" class="txtfields2" name="chk-orgname" id="orgname3" required>
                                                                    </div>
                                                                    <div class="lbl_name">
                                                                        <a>Background</a>
                                                                    </div>
                                                                    <div class="input">
                                                                        <!-- <input type="text" class="txtfields2" name="chk-bg" id="address3" required> -->
                                                                        <select class="txtfields2" name="chk-bg" id="address3" required>
                                                                            <option value="Not Acceptable">Not Acceptable</option>
                                                                            <option value="May become Acceptable">Maybe</option>
                                                                            <option value="Acceptable">Acceptable</option>
                                                                            <option value="Insufficient Info">Insufficient Info</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="lbl_name">
                                                                        <a>Financial Standing</a>
                                                                    </div>
                                                                    <div class="input">
                                                                        <!-- <input type="text" class="txtfields2" name="chk-fstand" id="u-contact1" required> -->
                                                                        <select class="txtfields2" name="chk-fstand" id="u-contact1" required>
                                                                            <option value="Not Acceptable">Not Acceptable</option>
                                                                            <option value="May become Acceptable">Maybe</option>
                                                                            <option value="Acceptable">Acceptable</option>
                                                                            <option value="Insufficient Info">Insufficient Info</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="lbl_name">
                                                                        <a>Governance</a>
                                                                    </div>
                                                                    <div class="input">
                                                                        <!-- <input type="text" class="txtfields2" name="chk-governace" id="u-email1" required> -->
                                                                        <select class="txtfields2" name="chk-governace" id="u-email1" required>
                                                                            <option value="Not Acceptable">Not Acceptable</option>
                                                                            <option value="May become Acceptable">Maybe</option>
                                                                            <option value="Acceptable">Acceptable</option>
                                                                            <option value="Insufficient Info">Insufficient Info</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="lbl_name">
                                                                        <a>Strategy & Programs</a>
                                                                    </div>
                                                                    <div class="input">
                                                                        <!-- <input type="text" class="txtfields2" name="scr-snp" id="u-phone1" required> -->
                                                                        <select class="txtfields2" name="chk-snp" id="u-phone1" required>
                                                                            <option value="Not Acceptable">Not Acceptable</option>
                                                                            <option value="May become Acceptable">Maybe</option>
                                                                            <option value="Acceptable">Acceptable</option>
                                                                            <option value="Insufficient Info">Insufficient Info</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="lbl_name">
                                                                        <a>Company/Organization Value</a>
                                                                    </div>
                                                                    <div class="input">
                                                                        <!-- <input type="text" class="txtfields2" name="chk-cov" id="u-das1" required> -->
                                                                        <select class="txtfields2" name="chk-cov" id="u-das1" required>
                                                                            <option value="Not Acceptable">Not Acceptable</option>
                                                                            <option value="May become Acceptable">Maybe</option>
                                                                            <option value="Acceptable">Acceptable</option>
                                                                            <option value="Insufficient Info">Insufficient Info</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="lbl_name">
                                                                        <a>Analysis of Transaction</a>
                                                                    </div>
                                                                    <div class="input">
                                                                        <!-- <input type="text" class="txtfields2" name="scr-aot" id="u-cob1" required> -->
                                                                        <select class="txtfields2" name="chk-aot" id="u-cob1" required>
                                                                            <option value="Not Acceptable">Not Acceptable</option>
                                                                            <option value="May become Acceptable">Maybe</option>
                                                                            <option value="Acceptable">Acceptable</option>
                                                                            <option value="Insufficient Info">Insufficient Info</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="lbl_name">
                                                                        <a>Obligations/commitments being made</a>
                                                                    </div>
                                                                    <div class="input">
                                                                        <!-- <input type="text" class="txtfields2" name="chk-obligation" id="u-str1" required> -->
                                                                        <select class="txtfields2" name="chk-obligation" id="u-str1" required>
                                                                            <option value="Not Acceptable">Not Acceptable</option>
                                                                            <option value="May become Acceptable">Maybe</option>
                                                                            <option value="Acceptable">Acceptable</option>
                                                                            <option value="Insufficient Info">Insufficient Info</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="lbl_name">
                                                                        <a>Risks are sufficiently low</a>
                                                                    </div>
                                                                    <div class="input">
                                                                        <!-- <input type="text" class="txtfields2" name="chk-lowrisk" id="u-cap1" required> -->
                                                                        <select class="txtfields2" name="chk-lowrisk" id="u-cap1" required>
                                                                            <option value="Not Acceptable">Not Acceptable</option>
                                                                            <option value="May become Acceptable">Maybe</option>
                                                                            <option value="Acceptable">Acceptable</option>
                                                                            <option value="Insufficient Info">Insufficient Info</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="lbl_name">
                                                                        <a>Sufficient financial resources</a>
                                                                    </div>
                                                                    <div class="input">
                                                                        <!-- <input type="text" class="txtfields2" name="chk_sufficient" id="u-rsk1" required> -->
                                                                        <select class="txtfields2" name="chk_sufficient" id="u-rsk1" required>
                                                                            <option value="Not Acceptable">Not Acceptable</option>
                                                                            <option value="May become Acceptable">Maybe</option>
                                                                            <option value="Acceptable">Acceptable</option>
                                                                            <option value="Insufficient Info">Insufficient Info</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="lbl_name">
                                                                        <a>Management systems and staff capacity.</a>
                                                                    </div>
                                                                    <div class="input">
                                                                        <!-- <input type="text" class="txtfields2" name="chk-management" id="u-smry1" required> -->
                                                                        <select class="txtfields2" name="chk-management" id="u-smry1" required>
                                                                            <option value="Not Acceptable">Not Acceptable</option>
                                                                            <option value="May become Acceptable">Maybe</option>
                                                                            <option value="Acceptable">Acceptable</option>
                                                                            <option value="Insufficient Info">Insufficient Info</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="lbl_name">
                                                                        <a>Clear measure of success for the organisation from Fairtrade Africa's perspective.</a>
                                                                    </div>
                                                                    <div class="input">
                                                                        <!-- <input type="text" class="txtfields2" name="chk-ftapers" id="chk-ftapers" required> -->
                                                                        <select class="txtfields2" name="chk-ftapers" id="chk-ftapers" required>
                                                                            <option value="Not Acceptable">Not Acceptable</option>
                                                                            <option value="May become Acceptable">Maybe</option>
                                                                            <option value="Acceptable">Acceptable</option>
                                                                            <option value="Insufficient Info">Insufficient Info</option>
                                                                        </select>
                                                                    </div>                          
                                                                </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary" name="checklist-edit">Update</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>

                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmdd"><i class="las la-trash"></i></button>

                                        <!-- CHECKLIST Confirmation Pop up Box -->
                                        <div class="modal fade" id="confirmdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Warning!</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Are you sure, you are about to delete a Due Diligence Checklist record!
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a href="../php/ddDELETE.php?id=<?=$rows['id']?>" class="btn btn-primary">Yes</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <button type="button" class="btn btn-primary ddmore" data-toggle="modal" data-target="#ddmore">.+</i></button>

                                        <!-- FTA Due Diligence Checklist .+ button Modal -->
                                        <div class="modal fade" id="ddmore" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="Title1"></h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body" id="rowprint">
                                                        Partner Information
                                                        <div class="rowhodler">
                                                            <b><label>Background: </label></b>
                                                            <label id="address1">error</label>
                                                        </div>
                                                        <div class="rowhodler">
                                                            <b><label>Financial Standing: </label></b>
                                                            <label id="contact1">error</label>
                                                        </div>
                                                        <div class="rowhodler">
                                                            <b><label>Governance: </label></b>
                                                            <label id="email1">error</label>
                                                        </div>
                                                        <div class="rowhodler">
                                                            <b><label>Strategy & Programs: </label></b>
                                                            <label id="phone1">error</label>
                                                        </div>
                                                        <div class="rowhodler">
                                                            <b><label>Company/Org Value: </label></b>
                                                            <label id="das1">error</label>
                                                        </div>
                                                        <div class="rowhodler">
                                                            <b><label>Analysis of Transaction: </label></b>
                                                            <label id="coby1">error</label>
                                                        </div>
                                                        <div class="rowhodler">
                                                            <b><label>Obligations: </label></b>
                                                            <label id="str1">error</label>
                                                        </div>
                                                        <div class="rowhodler">
                                                            <b><label>Risks: </label></b>
                                                            <label id="cap1">error</label>
                                                        </div>
                                                        <div class="rowhodler">
                                                            <b><label>Funding: </label></b>
                                                            <label id="rsk1">error</label>
                                                        </div>
                                                        <div class="rowhodler">
                                                            <b><label>Staff Capacity: </label></b>
                                                            <label id="smr1">error</label>
                                                        </div>
                                                        <div class="rowhodler">
                                                            <b><label>FTA Perspective: </label></b>
                                                            <label id="uid1">error</label>
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
                </div>
            </div>
        </div>

        <!-- FTA Prioritization Scorecard  -->
        <div class="fogo_holder">
            <div class="fogo_password">
                <button type="button" class="btn_fogo_password">Fairtrade Africa Prioritization Scorecard</button>
                <div class="fogo_password_content">
                    <p>This is table with records of Prioritization Scorecard.</p>
                    <br>
                    <?php
                        if (mysqli_num_rows($result2)) { ?>
                    <div class="table-holder">
                        <table class="table table-striped table-bordered mogotio">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">No.</th>
                                    <th hidden scope="col">ID</th>
                                    <th scope="col">Organization Name</th>

                                    <th  scope="col">Increased scale</th>
                                    <th hidden scope="col">Innovative Approach</th>
                                    <th hidden scope="col">Increased sustainability</th>
                                    <th hidden scope="col">Systemic change</th>
                                    <th hidden scope="col">Catalyzing increased</th>
                                    <th scope="col">Development Value</th>

                                    <th hidden scope="col">Business Goals</th>
                                    <th hidden scope="col">Partner Champion</th>
                                    <th hidden scope="col">Reputational & Brand Image</th>
                                    <th scope="col">Business Value</th>

                                    <th hidden scope="col">Supports government priorities</th>
                                    <th hidden scope="col">Increased government capacity to address issues</th>
                                    <th scope="col">Governmental Value</th>

                                    <th hidden scope="col">Complexity</th>
                                    <th hidden scope="col">Risk</th>
                                    <th hidden scope="col">Staff Intensity</th>
                                    <th hidden scope="col">Additional Resources</th>
                                    <th hidden scope="col">Time Horizon</th>
                                    <th scope="col">Risks & Transactional Costs</th>

                                    <th scope="col">Total Score</th>
                                    <th scope="col">Action</th>
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
                                    <td hidden><?=$rows['id']?></td>
                                    <td><?=$rows['orgname']?></td>

                                    <td ><?=$rows['dev1']?></td>
                                    <td hidden><?=$rows['dev2']?></td>
                                    <td hidden><?=$rows['dev3']?></td>
                                    <td hidden><?=$rows['dev4']?></td>
                                    <td hidden><?=$rows['dev5']?></td>
                                    <td><?=$rows['devTotal']?></td>

                                    <td hidden><?=$rows['biz1']?></td>
                                    <td hidden><?=$rows['biz2']?></td>
                                    <td hidden><?=$rows['biz3']?></td>
                                    <td><?=$rows['biztotal']?></td>

                                    <td hidden><?=$rows['gov1']?></td>
                                    <td hidden><?=$rows['gov2']?></td>
                                    <td><?=$rows['govtotal']?></td>

                                    <td hidden><?=$rows['rsk1']?></td>
                                    <td hidden><?=$rows['rsk2']?></td>
                                    <td hidden><?=$rows['rsk3']?></td>
                                    <td hidden><?=$rows['rsk4']?></td>
                                    <td hidden><?=$rows['rsk5']?></td>
                                    <td><?=$rows['rsktotal']?></td>

                                    <td><?=$rows['total']?></td>
                                    <td>
                                        <button type="button" class="btn btn-warning updateprzz"><i class="las la-edit"></i></button>
                                        
                                        <!-- Scoresheet Update Modal -->
                                        <form class="partnercontent" action="../includes/przzEDIT.inc.php" method="POST">
                                            <div class="modal fade" id="update-przz" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLongTitle">FTA Prioritization Scorecard Update</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Please fill out the update form below. <br> <br>
                                                                <div>
                                                                    <input type="number" class="txtfields2" name="id" id="update_id4" hidden>
                                                                    <div class="lbl_name">
                                                                        <a>Organization Name</a>
                                                                    </div>
                                                                    <div class="input">
                                                                        <input type="text" class="txtfields2" name="orgname4" id="orgname4" required>
                                                                    </div>
                                                                    <br>
                                                                    <br>
                                                                    <b><a>Development Value</a></b>
                                                                    <div class="lbl_name">
                                                                        <a>Increased Sale</a>
                                                                    </div>
                                                                    <div class="input">
                                                                        <input type="number" class="txtfields2" name="address4" id="address4" required>
                                                                    </div>
                                                                    <div class="lbl_name">
                                                                        <a>Innovative Approach</a>
                                                                    </div>
                                                                    <div class="input">
                                                                        <input type="number" class="txtfields2" name="u-contact2" id="u-contact2" required>
                                                                    </div>
                                                                    <div class="lbl_name">
                                                                        <a>Increased sustainability</a>
                                                                    </div>
                                                                    <div class="input">
                                                                        <input type="number" class="txtfields2" name="u-email2" id="u-email2" required>
                                                                    </div>
                                                                    <div class="lbl_name">
                                                                        <a>Systemic change.</a>
                                                                    </div>
                                                                    <div class="input">
                                                                        <input type="number" class="txtfields2" name="u-phone2" id="u-phone2" required>
                                                                    </div>
                                                                    <div class="lbl_name">
                                                                        <a>Catalyzing increased/improved Public Sector Engagement in FTA core areas</a>
                                                                    </div>
                                                                    <div class="input">
                                                                        <input type="number" class="txtfields2" name="u-das2" id="u-das2" required>
                                                                    </div>
                                                                    <div class="lbl_name">
                                                                        <b><a>SUM</a></b>
                                                                    </div>
                                                                    <div class="input">
                                                                        <input type="number" class="txtfields2" name="u-cob2" id="u-cob2" required>
                                                                    </div>

                                                                    <br>
                                                                    <br>
                                                                    <b><a>Business Value</a></b>
                                                                    <div class="lbl_name">
                                                                        <a>Business Goals</a>
                                                                    </div>
                                                                    <div class="input">
                                                                        <input type="number" class="txtfields2" name="u-str2" id="u-str2" required>
                                                                    </div>
                                                                    <div class="lbl_name">
                                                                        <a>Partner Champion</a>
                                                                    </div>
                                                                    <div class="input">
                                                                        <input type="number" class="txtfields2" name="u-cap2" id="u-cap2" required>
                                                                    </div>
                                                                    <div class="lbl_name">
                                                                        <a>Reputational & Brand Image</a>
                                                                    </div>
                                                                    <div class="input">
                                                                        <input type="number" class="txtfields2" name="u-rsk2" id="u-rsk2" required>
                                                                    </div>
                                                                    <div class="lbl_name">
                                                                        <b><a>SUM</a></b>
                                                                    </div>
                                                                    <div class="input">
                                                                        <input type="number" class="txtfields2" name="u-smry2" id="u-smry2" required>
                                                                    </div>

                                                                    <br>
                                                                    <br>
                                                                    <b><a>Government value</a></b>
                                                                    <div class="lbl_name">
                                                                        <a>Supports government priorities</a>
                                                                    </div>
                                                                    <div class="input">
                                                                        <input type="number" class="txtfields2" name="chk-ftapers1" id="chk-ftapers1" required>
                                                                    </div>
                                                                    <div class="lbl_name">
                                                                        <a>Increased government capacity to address issues faced by producers in trade</a>
                                                                    </div>
                                                                    <div class="input">
                                                                        <input type="number" class="txtfields2" name="przz1" id="przz1" required>
                                                                    </div>                   
                                                                    <div class="lbl_name">
                                                                        <b><a>SUM</a></b>
                                                                    </div>
                                                                    <div class="input">
                                                                        <input type="number" class="txtfields2" name="przz2" id="przz2" required>
                                                                    </div>

                                                                    <br>
                                                                    <br>
                                                                    <b><a>Risks and Transaction Costs</a></b>
                                                                    <div class="lbl_name">
                                                                        <a>Complexity</a>
                                                                    </div>
                                                                    <div class="input">
                                                                        <input type="number" class="txtfields2" name="przz3" id="przz3" required>
                                                                    </div>
                                                                    <div class="lbl_name">
                                                                        <a>Risks</a>
                                                                    </div>
                                                                    <div class="input">
                                                                        <input type="number" class="txtfields2" name="przz4" id="przz4" required>
                                                                    </div>
                                                                    <div class="lbl_name">
                                                                        <a>Staff Intensity</a>
                                                                    </div>
                                                                    <div class="input">
                                                                        <input type="number" class="txtfields2" name="przz5" id="przz5" required>
                                                                    </div>
                                                                    <div class="lbl_name">
                                                                        <a>Additional Resources</a>
                                                                    </div>
                                                                    <div class="input">
                                                                        <input type="number" class="txtfields2" name="przz6" id="przz6" required>
                                                                    </div>
                                                                    <div class="lbl_name">
                                                                        <a>Time Horizon</a>
                                                                    </div>
                                                                    <div class="input">
                                                                        <input type="number" class="txtfields2" name="przz7" id="przz7" required>
                                                                    </div>
                                                                    <div class="lbl_name">
                                                                        <b><a>SUM</a></b>
                                                                    </div>
                                                                    <div class="input">
                                                                        <input type="number" class="txtfields2" name="przz8" id="przz8" required>
                                                                    </div>

                                                                    <br>
                                                                    <br>

                                                                    <div class="lbl_name">
                                                                        <b><a>Total Score:</a></b>
                                                                    </div>
                                                                    <div class="input">
                                                                        <input type="number" class="txtfields2" name="przz9" id="przz9" required>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary" name="przz-edit">Update</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>

                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmprz"><i class="las la-trash"></i></button>

                                        <!-- Prioritization Scorecard Pop up Box -->
                                        <div class="modal fade" id="confirmprz" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Warning!</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Are you sure, you are about to delete a FTA Prioritization Scorecard record!
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a href="../php/scorecardDELETE.php?id=<?=$rows['id']?>" class="btn btn-primary">Yes</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <button type="button" class="btn btn-primary przzmore" data-toggle="modal" data-target="#przzmore">.+</i></button>

                                        <!-- FTA Due Diligence Checklist .+ button Modal -->
                                        <div class="modal fade" id="przzmore" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="Title2"></h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body" id="rowprint">
                                                        <div class="rowhodler">
                                                            <b><label>Increased scale: </label></b>
                                                            <label id="address2">error</label>
                                                        </div>
                                                        <div class="rowhodler">
                                                            <b><label>Innovative Approach: </label></b>
                                                            <label id="contact2">error</label>
                                                        </div>
                                                        <div class="rowhodler">
                                                            <b><label>Increased sustainability: </label></b>
                                                            <label id="email2">error</label>
                                                        </div>
                                                        <div class="rowhodler">
                                                            <b><label>Systemic change: </label></b>
                                                            <label id="phone2">error</label>
                                                        </div>
                                                        <div class="rowhodler">
                                                            <b><label>Catalyzing increased/improved Public: </label></b>
                                                            <label id="das2">error</label>
                                                        </div>
                                                        <div class="rowhodler">
                                                            <b><label>Aggregated Value: </label></b>
                                                            <label id="coby2">error</label>
                                                        </div>
                                                        <div class="rowhodler">
                                                            <b><label>Partner Champion: </label></b>
                                                            <label id="str2">error</label>
                                                        </div>
                                                        <div class="rowhodler">
                                                            <b><label>Reputational & Brand Image: </label></b>
                                                            <label id="cap2">error</label>
                                                        </div>
                                                        <div class="rowhodler">
                                                            <b><label>Aggregated Value: </label></b>
                                                            <label id="rsk2">error</label>
                                                        </div>
                                                        <div class="rowhodler">
                                                            <b><label>Supports government priorities: </label></b>
                                                            <label id="smr2">error</label>
                                                        </div>
                                                        <div class="rowhodler">
                                                            <b><label>Increased government capacity to address issues: </label></b>
                                                            <label id="uid2">error</label>
                                                        </div>
                                                        <div class="rowhodler">
                                                            <b><label>Aggregated Value: </label></b>
                                                            <label id="time">error</label>
                                                        </div>
                                                        <div class="rowhodler">
                                                            <b><label>Complexity: </label></b>
                                                            <label id="total">error</label>
                                                        </div>
                                                        <div class="rowhodler">
                                                            <b><label>Risks: </label></b>
                                                            <label id="grandtotal">error</label>
                                                        </div>
                                                        <div class="rowhodler">
                                                            <b><label>Staff Intensity: </label></b>
                                                            <label id="Staff">error</label>
                                                        </div>
                                                        <div class="rowhodler">
                                                            <b><label>Additional Resources: </label></b>
                                                            <label id="Additional">error</label>
                                                        </div>
                                                        <div class="rowhodler">
                                                            <b><label>Time Horizon: </label></b>
                                                            <label id="Horizon">error</label>
                                                        </div>
                                                        <div class="rowhodler">
                                                            <b><label>Aggregated Value: </label></b>
                                                            <label id="Value">error</label>
                                                        </div>
                                                        <div class="rowhodler">
                                                            <b><label>Total Score: </label></b>
                                                            <label id="Score">error</label>
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
                </div>
            </div>
        </div>
    </div>
</section>

<script src="../js/fogo_password_username.js"></script>
<?php
    include_once 'footer.php';
?>