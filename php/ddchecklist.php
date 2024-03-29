<?php
    include_once 'sidebar.php';
    include_once '../includes/upload.inc.php';
?>

<link rel="stylesheet" href="../css/dashboard.css">
<link rel="stylesheet" href="../css/newpartner.css">
<link rel="stylesheet" href="../css/index.css">
<link rel="stylesheet" href="../css/drop-down-menu.css">
<link rel="stylesheet" href="../css/multistep.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<section class="newpartners">
    <div class="main">
        <h3>Due Diligence Checklist</h3>
        <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "stmtfailed") {
                    echo "<p class='nperror2'>stmtFailed</p>";
                }
                else if ($_GET["error"] == "NewchecklistAdded") {
                    echo "<p class='nperror3'>New Due Diligence Checklist Assessment, Added!</p>";
                }
                else if ($_GET["error"] == "posterror") {
                    echo "<p class='nperror2'>Something went wrong while posting</p>";
                }
            }
        ?>
        <form class="ftapascore-content" action="../includes/ddchecklist.inc.php" method="POST">
            <!-- Progress Bar -->
            <div class="progressbar">
                <div class="progress" id="progress"></div>
                <div class="progress-step progress-step-active" data-title="Due Diligence Checklist"></div>
                <div class="progress-step" data-title="Partnership Info."></div>
            </div>
            <!-- Due Diligence Checklist -->
            <div class="form-step form-step-active">
                <h4 class="text-center">Due Diligence Checklist</h4>
                <p>
                    <b>Goal:</b> To help FTA assess the value, risks and implications of a partnership 
                    in order to confidently engage the prospective partner and understand what 
                    further information /negotiation/ internal alignment is required.
                </p>
                <b>SCORING KEY</b>
                <div class="table-holder">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <td bgcolor="red">Not acceptable</td>
                                <td bgcolor="yellow">May become acceptable with adjustments</td>
                                <td bgcolor="green">Acceptable</td>
                                <td bgcolor="grey">Insufficient Information</td>
                            </tr>
                        </thead>
                    </table>
                </div>

                <div class="table-holder">
                    <table class="table table-striped table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>Area</th>
                                <th>Assessment</th>
                                <th>Outstanding Issues/ Further Information Required</th>
                                <th>Recommendations/Notes</th>
                            </tr>
                            <tr>
                                <td>
                                    Name of Organization <br>
                                    <select class="txtfields2" name="org" id="orgname">
                                        <?php while($row = mysqli_fetch_array($scr_result)):;?>
                                        <option value="<?php echo $row[1]; ?>"><?php echo $row[1]; ?></option>
                                        <?php endwhile;?>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <b>1. Partner Information <br> 
                                    (a) Background:</b> Organization profile, Reference check with partners and/or donors, 
                                    Verification of physical address, Organization website, Postal and mail addresses.
                                </td>
                                <td>
                                    <select name="1a" id="bginfo">
                                        <option value="Not Acceptable">Not Acceptable</option>
                                        <option value="May become Acceptable">Maybe</option>
                                        <option value="Acceptable">Acceptable</option>
                                        <option value="Insufficient Info">Insufficient Info</option>
                                    </select>
                                </td>
                                <td>
                                    <textarea class="txtfields2" name="1a_req" rows="5" cols="5" ></textarea>
                                </td>
                                <td>
                                    <textarea class="txtfields2" name="1a_notes" rows="5" cols="5" ></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td> 
                                    <b>(b) Financial standing:</b> 3-year Audited Financial statements, Annual reports 
                                    (financial & Narrative), Tax Registration & Compliance, Internal Controls, 
                                    Bank Accounts)
                                </td>
                                <td>
                                    <select name="1b" id="financialSTD">
                                        <option value="Not Acceptable">Not Acceptable</option>
                                        <option value="May become Acceptable">Maybe</option>
                                        <option value="Acceptable">Acceptable</option>
                                        <option value="Insufficient Info">Insufficient Info</option>
                                    </select>
                                </td>
                                <td>
                                    <textarea class="txtfields2" name="1b_req" rows="5" cols="5" ></textarea>
                                </td>
                                <td>
                                    <textarea class="txtfields2" name="1b_notes" rows="5" cols="5" ></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td> 
                                    <b>(c) Governance:</b> Organization structure, Proof of board, Company Registration status, Copies of applicable policies & procedures (Financial, Human Resource and Procurement)
                                </td>
                                <td>
                                    <select name="1c" id="Governance">
                                        <option value="Not Acceptable">Not Acceptable</option>
                                        <option value="May become Acceptable">Maybe</option>
                                        <option value="Acceptable">Acceptable</option>
                                        <option value="Insufficient Info">Insufficient Info</option>
                                    </select>
                                </td>
                                <td>
                                    <textarea class="txtfields2" name="1c_req" rows="5" cols="5" ></textarea>
                                </td>
                                <td>
                                    <textarea class="txtfields2" name="1c_notes" rows="5" cols="5" ></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td> 
                                    2. Partnership fits with organisational mandate and it's strategic <b>(Review organisational mandate & strategy, current programs etc)</b>
                                </td>
                                <td>
                                    <select name="2" id="2">
                                        <option value="Not Acceptable">Not Acceptable</option>
                                        <option value="May become Acceptable">Maybe</option>
                                        <option value="Acceptable">Acceptable</option>
                                        <option value="Insufficient Info">Insufficient Info</option>
                                    </select>
                                </td>
                                <td>
                                <textarea class="txtfields2" name="2_req" rows="5" cols="5" ></textarea>
                                </td>
                                <td>
                                <textarea class="txtfields2" name="2_notes" rows="5" cols="5" ></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td> 
                                    3. Partnership provides significant value/ impact <b>(Refer to the mission value & Organizational value in the next spreadsheet)</b>
                                </td>
                                <td>
                                    <select name="3" id="3">
                                        <option value="Not Acceptable">Not Acceptable</option>
                                        <option value="May become Acceptable">Maybe</option>
                                        <option value="Acceptable">Acceptable</option>
                                        <option value="Insufficient Info">Insufficient Info</option>
                                    </select>
                                </td>
                                <td>
                                <textarea class="txtfields2" name="3_req" rows="5" cols="5" ></textarea>
                                </td>
                                <td>
                                <textarea class="txtfields2" name="3_notes" rows="5" cols="5" ></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td> 
                                    4. Costs acceptable in relation to value gained <b>( Analysis of transaction, implementation and possible over-run cost)</b>
                                </td>
                                <td>
                                    <select name="4" id="4">
                                        <option value="Not Acceptable">Not Acceptable</option>
                                        <option value="May become Acceptable">Maybe</option>
                                        <option value="Acceptable">Acceptable</option>
                                        <option value="Insufficient Info">Insufficient Info</option>
                                    </select>
                                </td>
                                <td>
                                <textarea class="txtfields2" name="4_req" rows="5" cols="5" ></textarea>
                                </td>
                                <td>
                                <textarea class="txtfields2" name="4_notes" rows="5" cols="5" ></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td> 
                                    5. Implications are acceptable. <b>(Obligations/commitments being made and Accountability)</b>
                                </td>
                                <td>
                                    <select name="5" id="5">
                                        <option value="Not Acceptable">Not Acceptable</option>
                                        <option value="May become Acceptable">Maybe</option>
                                        <option value="Acceptable">Acceptable</option>
                                        <option value="Insufficient Info">Insufficient Info</option>
                                    </select>
                                </td>
                                <td>
                                <textarea class="txtfields2" name="5_req" rows="5" cols="5" ></textarea>
                                </td>
                                <td>
                                <textarea class="txtfields2" name="5_notes" rows="5" cols="5" ></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td> 
                                    6. Risks are sufficiently low or well mitigated <b>(Refer to the next spreadsheet)</b>
                                </td>
                                <td>
                                    <select name="6" id="6">
                                        <option value="Not Acceptable">Not Acceptable</option>
                                        <option value="May become Acceptable">Maybe</option>
                                        <option value="Acceptable">Acceptable</option>
                                        <option value="Insufficient Info">Insufficient Info</option>
                                    </select>
                                </td>
                                <td>
                                <textarea class="txtfields2" name="6_req" rows="5" cols="5" ></textarea>
                                </td>
                                <td>
                                <textarea class="txtfields2" name="6_notes" rows="5" cols="5" ></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td> 
                                    7a. Sufficient financial resources to implement i.e. <b>Funding sources for implementation.</b>
                                </td>
                                <td>
                                    <select name="7a" id="funding">
                                        <option value="Not Acceptable">Not Acceptable</option>
                                        <option value="May become Acceptable">Maybe</option>
                                        <option value="Acceptable">Acceptable</option>
                                        <option value="Insufficient Info">Insufficient Info</option>
                                    </select>
                                </td>
                                <td>
                                <textarea class="txtfields2" name="7a_req" rows="5" cols="5" ></textarea>
                                </td>
                                <td>
                                <textarea class="txtfields2" name="7a_notes" rows="5" cols="5" ></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td> 
                                    7b. Sufficient internal resources/capacities available i.e.<b> Management systems and staff capacity.</b>
                                </td>
                                <td>
                                    <select name="7b" id="management">
                                        <option value="Not Acceptable">Not Acceptable</option>
                                        <option value="May become Acceptable">Maybe</option>
                                        <option value="Acceptable">Acceptable</option>
                                        <option value="Insufficient Info">Insufficient Info</option>
                                    </select>
                                </td>
                                <td>
                                <textarea class="txtfields2" name="7b_req" rows="5" cols="5" ></textarea>
                                </td>
                                <td>
                                <textarea class="txtfields2" name="7b_notes" rows="5" cols="5" ></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td> 
                                    8. Clear measure of success for the organisation from Fairtrade Africa's perspective.
                                </td>
                                <td>
                                    <select name="8" id="8">
                                        <option value="Not Acceptable">Not Acceptable</option>
                                        <option value="May become Acceptable">Maybe</option>
                                        <option value="Acceptable">Acceptable</option>
                                        <option value="Insufficient Info">Insufficient Info</option>
                                    </select>
                                </td>
                                <td>
                                <textarea class="txtfields2" name="8_req" rows="5" cols="5" ></textarea>
                                </td>
                                <td>
                                <textarea class="txtfields2" name="8_notes" rows="5" cols="5" ></textarea>
                                </td>
                            </tr>
                        </thead>
                    </table>
                </div>
                <p>
                    Decision status as of Date: <span class="redbg">Decline</span>/<span class="amberbg">Continue to Pursue</span>/<span class="greenbg">Go Ahead</span>/<span class="greybg">Insufficient Information</span>
                </p>
                <div class="buttons">
                    <a href="#" class="ingia_btn_next">More Info.</a>
                    <button type="submit" class="ingia_btn" name="ddchecklist-submit">Save</button>
                </div>
                <br>
                <br>
            </div>

            <!-- Partnership Info -->
            <div class="form-step">
                <h4 class="text-center">Protective Partnership Information</h4>
                <div class="table-holder">
                    <table class="table table-striped table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th></th>
                                <th>Partnership Information</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Prospective partner(s)</td>
                                <td>
                                    a) Background. <br>
                                    b) Financial standing <br>
                                    c)Governance
                                </td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Fit</td>
                                <td>
                                    Aligned to organizational mandate <br>
                                    Aligned to organizational strategy <br>
                                    Aligned to current programmes, obligations, other partnerships.
                                </td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>Benefits/ Value <br>
                                    (Mission Value) <br>
                                    <br>
                                    (Organisational value)
                                </td>
                                <td>
                                    Contribution towards mission/ impact for ultimate beneficiaries <br>
                                    Increased capacity to deliver <br>
                                    Increased technical expertise/knowledge <br>
                                    Additional resources/Funds <br>
                                    Creativity/ innovation /sustainability <br>
                                    Positioning/ visibility/ positive branding / reputational <br>
                                    Increased social and political capital <br>
                                    Influence <br>
                                    Access to new networks/constituencies <br>
                                    Making the organisation increasingly a partner of choice
                                </td>
                            </tr>

                            <tr>
                                <td>4</td>
                                <td>Costs</td>
                                <td>
                                    Analysis of transaction, implementation and possible over-run cost
                                </td>
                            </tr>

                            <tr>
                                <td>5</td>
                                <td>Implications</td>
                                <td>
                                    What precedent (if any) does it set? <br>
                                    Obligations/commitments being made-Is there an exit strategy? <br>
                                    Effect on other relationships/reputation <br>
                                    Accountability
                                </td>
                            </tr>

                            <tr>
                                <td>6</td>
                                <td>Partnership Risks</td>
                                <td>
                                    Loss of programmatic Focus <br>
                                    Duplication of efforts<br>
                                    Overlong time investment<br>
                                    Financial Implications<br>
                                    Lack of sufficient capacity to deliver<br>
                                    Empowering others without legitimacy or interference with natural systems distorting the markets<br>
                                    Compromise neutrality or independence/ reputational issues<br>
                                    Loss of autonomy on key issues<br>
                                    Risk to existing relationships<br>
                                    Implied endorsement
                                </td>
                            </tr>

                            <tr>
                                <td>7</td>
                                <td>Sufficient internal skills and competencies to deliver</td>
                                <td>
                                    Funding sources for implementation <br>
                                    Internal buy-in from internal senior champion and relevant staff/offices <br>
                                    Sufficient resource that can be committed
                                </td>
                            </tr>

                            <tr>
                                <td>8</td>
                                <td>Measures of success</td>
                                <td>
                                Clear measures of success from the organisation's perspective 
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="buttons">
                    <a href="#" class="ingia_btn_prev">Previous</a>
                </div>
                <br>
                <br>
            </div>
        </form>
    </div>
</section>

<?php
    include_once 'footer.php';
?>