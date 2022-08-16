<?php
    include_once 'sidebar.php';
?>

<link rel="stylesheet" href="../css/dashboard.css">
<link rel="stylesheet" href="../css/newpartner.css">
<link rel="stylesheet" href="../css/index.css">
<link rel="stylesheet" href="../css/drop-down-menu.css">
<link rel="stylesheet" href="../css/multistep.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<section class="newpartners">
    <div class="main">
        <h3>FTA Partnership Prioritization Tool</h3>
        <span class="nperror2">(Under Development)</span>
        <form class="ftapascore-content" action="#">
            <!-- Progress Bar -->
            <div class="progressbar">
                <div class="progress" id="progress"></div>
                <div class="progress-step progress-step-active" data-title="Partnership Prioritization Tool"></div>
                <div class="progress-step" data-title="Scoring Criteria"></div>
            </div>

            <!-- Partnership Prioritization Tool -->
            <div class="form-step form-step-active">
                <h4 class="text-center">Partnership Prioritization Tool</h4>
                <div class="table-holder">
                    <table class="table table-striped table-bordered">
                        <thead class="thead-dark">
                                <tr>
                                    <th>Priority Type</th>
                                    <th>Priority Factor</th>
                                    <th>Score</th>
                                </tr>
                            <tbody>
                                <tr>
                                    <td>Development value</td>
                                    <td>
                                        Increased scale <br>
                                        Innovative Approach <br>
                                        Increased sustainability <br>
                                        Systemic change <br>
                                        Catalyzing increased/improved Public Sector Engagement in FTA core areas <br>
                                        <br>
                                        <br>
                                        <b>Aggregated Value:</b>
                                    </td>
                                    <td>
                                        <input type="number" class="txtfields" name="pr-1" placeholder="%"> <br>
                                        <input type="number" class="txtfields" name="pr-2" placeholder="%"> <br>
                                        <input type="number" class="txtfields" name="pr-3" placeholder="%"> <br>
                                        <input type="number" class="txtfields" name="pr-4" placeholder="%"> <br>
                                        <input type="number" class="txtfields" name="pr-5" placeholder="%"> <br>
                                        <br>
                                        <b>#TOTAL</b>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Business value</td>
                                    <td>
                                        Business Goals <br>
                                        Partner Champion <br>
                                        Reputational & Brand Image <br>
                                        <br>
                                        <b>Aggregated Value:</b>
                                    </td>
                                    <td>
                                        <input type="number" class="txtfields" name="pr-1" placeholder="%"> <br>
                                        <input type="number" class="txtfields" name="pr-2" placeholder="%"> <br>
                                        <input type="number" class="txtfields" name="pr-3" placeholder="%"> <br>
                                        <br>
                                        <b>#TOTAL</b>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Government value</td>
                                    <td>
                                        Supports government priorities <br>
                                        Increased government capacity to address issues faced by producers in trade <br>
                                        <br>
                                        <b>Aggregated Value:</b>
                                    </td>
                                    <td>
                                        <input type="number" class="txtfields" name="pr-1" placeholder="%"> <br>
                                        <input type="number" class="txtfields" name="pr-2" placeholder="%"> <br>
                                        <br>
                                        <b>#TOTAL</b>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Risks and Transaction Costs</td>
                                    <td>
                                        Complexity <br>
                                        Risks <br>
                                        Staff Intensity <br>
                                        Additional Resources <br>
                                        Time Horizon <br>
                                        <br>
                                        <br>
                                        <b>Aggregated Value:</b>
                                    </td>
                                    <td>
                                        <input type="number" class="txtfields" name="pr-1" placeholder="%"> <br>
                                        <input type="number" class="txtfields" name="pr-2" placeholder="%"> <br>
                                        <input type="number" class="txtfields" name="pr-2" placeholder="%"> <br>
                                        <input type="number" class="txtfields" name="pr-2" placeholder="%"> <br>
                                        <input type="number" class="txtfields" name="pr-2" placeholder="%"> <br>
                                        <br>
                                        <b>#TOTAL</b>
                                    </td>
                                </tr>

                                <tr>
                                    <td></td>
                                    <td><b>Total Score</b></td>
                                    <td><b>Average</b></td>
                                </tr>
                            </tbody>
                        </thead>
                    </table>
                </div>
                <p>
                    <b>Goal of Partnership Prioritization:</b> To Identify partnership opportunities that are most realistic, impactful and sustainable to be pursued.
                </p>
                Scoring:
                <p>
                    <span class="redbg">22 and below</span>	Not acceptable <br>
                    <span class="amberbg">22 - 37</span>	Acceptable with adjustments <br>
                    <span class="greenbg">Above 37</span>	Acceptable
                </p>
                <div class="buttons">
                    <a href="#" class="ingia_btn_next">Score Criteria</a>
                    <button type="button" class="ingia_btn" name="scoresheet-submit">Save</button>
                </div>
                <br>
                <br>
            </div>

            <!-- Score Criteria -->
            <div class="form-step">
                <h4 class="text-center">Score Criteria</h4>
                <p>
                    <b>Development Value</b>
                </p>
                <div class="table-holder">
                    <table class="table table-striped table-bordered">
                        <thead> 
                            <tr>
                                <th bgcolor="cyan">Factor</th>
                                <th bgcolor="cyan">Definition</th>
                                <th bgcolor="red">
                                    Low <br>
                                    <b>Score:1</b>
                                </th>
                                <th bgcolor="yellow">
                                    Medium <br>
                                    <b>Score:2</b>
                                </th>
                                <th bgcolor="green">
                                    High <br>
                                    <b>Score:3</b>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td bgcolor="cyan">Increased scale</td>
                                <td>Increases number of beneficiaries reached</td>
                                <td>Low: Local in 1-2 cities/towns</td>
                                <td>Moderate: Covers a number of cities/towns and/or shows potential for scale</td>
                                <td>High: Country-level reach (or beyond), and/or strong potential to grow/replicate beyond initial investment</td>
                            </tr>
                            <tr>
                                <td bgcolor="cyan">Innovative Approach</td>
                                <td>Presents new approach to addressing key issues related to empowerment of producers through trade, including through application of technology </td>
                                <td>Use existing/tried approaches</td>
                                <td>Puts pre-existing solutions/approaches together in new ways</td>
                                <td>Out-of-the-Box new approach to addressing empowerment of producers through trade</td>
                            </tr>
                            <tr>
                                <td bgcolor="cyan">Increased sustainability</td>
                                <td>Increases likelihood that development impact will extend beyond donor funds/core funds </td>
                                <td>One -off intervention</td>
                                <td>Some expansion/continuation beyond project</td>
                                <td>Partnership or partnering outcomes are expected to continue far beyond planned projects </td>
                            </tr>
                            <tr>
                                <td bgcolor="cyan">Systemic change</td>
                                <td>Addresses root causes of underlying development challenge</td>
                                <td>Do not alter fundamentals of the issue</td>
                                <td>Cnages nature/performs awareness to some degree</td>
                                <td>Solves/Fundamentally shifts the issue/behavior</td>
                            </tr>
                            <tr>
                                <td bgcolor="cyan">Catalyzing increased/improved Partner Engagement in FTA core areas</td>
                                <td>Partnership has the potential to enhance the role and involvement of traders in increasing opportunities for trade</td>
                                <td>low foreseen effect on the role of traders in increasing trade opportunities</td>
                                <td>Potential to increase/improve trader involvement in enhancing trade</td>
                                <td>Significant potential to increase /improve the role of traders in enhancing trade</td>
                            </tr>
                        </tbody>
                    </table>

                    <b>Business Value</b>
                    <table class="table table-striped table-bordered">
                        <thead> 
                            <tr>
                                <th bgcolor="cyan">Factor</th>
                                <th bgcolor="cyan">Definition</th>
                                <th bgcolor="red">
                                    Low <br>
                                    <b>Score:1</b>
                                </th>
                                <th bgcolor="yellow">
                                    Medium <br>
                                    <b>Score:2</b>
                                </th>
                                <th bgcolor="green">
                                    High <br>
                                    <b>Score:3</b>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td bgcolor="cyan">Business Goals</td>
                                <td>Addresses a core business priority; improving businessoperations</td>
                                <td>Addresses a business challenge in a limited way</td>
                                <td>Tackles significant component of a business priority</td>
                                <td>Fully addresses the businesses identified objective/challenge being addressed in the partnership</td>
                            </tr>
                            <tr>
                                <td bgcolor="cyan">Partner Champion</td>
                                <td>An anchor business/organization has been identified to help lead the partnership</td>
                                <td>Have not identified a clear champion</td>
                                <td>Have identified potential champions but need to confirm</td>
                                <td>Have received direct indication from organization that they would champion partnership</td>
                            </tr>
                            <tr>
                                <td bgcolor="cyan">Reputational & Brand Image</td>
                                <td>Reputational and/or brand image motives driver for companies participation</td>
                                <td>Creates minimal additional value for reputation/brand</td>
                                <td>Creates moderate value to reputation/brand</td>
                                <td>Creates significant value to reputation/brand</td>
                            </tr>
                        </tbody>
                    </table>

                    <b>Government Value</b>
                    <table class="table table-striped table-bordered">
                        <thead> 
                            <tr>
                                <th bgcolor="cyan">Factor</th>
                                <th bgcolor="cyan">Definition</th>
                                <th bgcolor="red">
                                    Low <br>
                                    <b>Score:1</b>
                                </th>
                                <th bgcolor="yellow">
                                    Medium <br>
                                    <b>Score:2</b>
                                </th>
                                <th bgcolor="green">
                                    High <br>
                                    <b>Score:3</b>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td bgcolor="cyan">Supports government priorities</td>
                                <td>Supports local government priorities on enhancing trade opportunities , achieves government buy-in, and/or facilitates cooperation or positive relations with government</td>
                                <td>Does not present opportunities to collaborate with/support government efforts in trade</td>
                                <td>Moderate support to government. Potential for positive engagement with government.</td>
                                <td>Strongly linked to/supportive of government trade efforts. Abundant oppportunites to strengthenrelationship with government</td>
                            </tr>
                            <tr>
                                <td bgcolor="cyan">Increased government capacity to address issues faced by producers in trade</td>
                                <td>Strengthens government capacity to better address issues in trade and integrate measures into activities, policies and undertakings</td>
                                <td>Does not strengthen government's capacity to address trade issues</td>
                                <td>Moderate potential to strengthen government capacity to address trade issues</td>
                                <td>Significant potential to strengthen government's capacity to address trade issues</td>
                            </tr>
                        </tbody>
                    </table>

                    <b>Risks and Transaction Costs</b>
                    <table class="table table-striped table-bordered">
                        <thead> 
                            <tr>
                                <th bgcolor="cyan">Factor</th>
                                <th bgcolor="cyan">Definition</th>
                                <th bgcolor="red">
                                    Low <br>
                                    <b>Score:1</b>
                                </th>
                                <th bgcolor="yellow">
                                    Medium <br>
                                    <b>Score:2</b>
                                </th>
                                <th bgcolor="green">
                                    High <br>
                                    <b>Score:3</b>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td bgcolor="cyan">Complexity</td>
                                <td>How complex is the partnership to put together</td>
                                <td>Very difficult with many stakeholders and varying interests</td>
                                <td>Moderate, may take time but doable</td>
                                <td>Relatively easy with clear partners and objectives</td>
                            </tr>
                            <tr>
                                <td bgcolor="cyan">Risks</td>
                                <td>Reputational and security risk levels</td>
                                <td>Partner company or organizations engaged in controversial practices <b>(High Risk)</b></td>
                                <td>Partner company or organization has a mixed or unknown reputation <b>(Medium risk)</b></td>
                                <td>Partner companies or organizations not involved in controversial/risky operations or practices <b>(Low Risk)</b></td>
                            </tr>
                            <tr>
                                <td bgcolor="cyan">Staff Intensity</td>
                                <td>Effort needed from FTA to implement partnership</td>
                                <td>May require significant staff effort/new hires</td>
                                <td>Moderate additional ongoing work for FTA staff</td>
                                <td>Relatively little added involvement needed from FTA staff</td>
                            </tr>
                            <tr>
                                <td bgcolor="cyan">Additional Resources</td>
                                <td>Amount to which additional resources (including finance) are needed</td>
                                <td>Significant resources neededeyond what FTA can offer</td>
                                <td>Moderate but manageable additional resources needed</td>
                                <td>FTA is able to provide/locate needed resources for partnership</td>
                            </tr>
                            <tr>
                                <td bgcolor="cyan">Time Horizon</td>
                                <td>What is the timeframe of the partnership?</td>
                                <td>Partnership may take longer than the project lifespan to mature an yield results</td>
                                <td>Partnership will mature during the latter hald of the project</td>
                                <td>Partnership will show strong results during the project time frame</td>
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