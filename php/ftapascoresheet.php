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
        <h3>FTA Partner Assessment Scoresheet</h3>
        <span class="nperror2">(Under Development)</span>
        <form class="ftapascore-content" action="#">
            <!-- Progress Bar -->
            <div class="progressbar">
                <div class="progress" id="progress"></div>
                <div class="progress-step progress-step-active" data-title="Instructions"></div>
                <div class="progress-step" data-title="Organaization Details"></div>
                <div class="progress-step" data-title="Strategic Fit"></div>
                <div class="progress-step" data-title="Capacity"></div>
                <div class="progress-step" data-title="Risk"></div>
                <div class="progress-step" data-title="Summary Analysis"></div>
            </div>
            <!-- Instructions -->
            <div class="form-step form-step-active">
                <h4 class="text-center">Instructions</h4>
                <p>
                    This form includes three tabs covering the following categories: Strategic Fit, Capacity and Risk. To complete the assessment 
                    enter a percentage score in 10% increments for all criteria in each of the three categories. Scores for each category are summarized
                    at the bottom of each sheet. An overall score is automatically generated in the sheet "Summary Analsysis".
                </p>
                <p>
                    All inputs are highlighted grey: <span class="greybg"> 0%</span>
                </p>
                <p>
                    NOTE: Each critereon includes guidance in the form of a comment for 0% and 100% scores. This is designed to help you understand
                    how to score the question. To view the comment, move your cursor aover the cell with a  red triangle. Additional guidance is provided
                    at the top of each sheet.
                </p>
                <b>Your Input</b>
                <p>
                    This assessment template is designed to provide a quantitative score for a qulitative assessment of a potential partner organaization.
                    This approach relies very much on subjective input from the user. It is anticipated that it will be difficult to give informed input for each
                    critereon. In such cases, users should use their own judgement based on experience, correspondance and even gut feeling. The end
                    result will be and informed assessment on which we can base descision-making.
                </p>
                <b>Scoring</b>
                <p>
                    The "Summary Analysis" sheet uses a color scoring system to categoris the results: <br>
                    <span class="greenbg">Green =  </span> good score that means the organaization is probably an appropriate partner for Fairtade. <br>
                    <span class="amberbg">Amber =  </span> mid-range score that the organaization may be an appropriate partner ofr Fairtrade (may need further consideration) <br>
                    <span class="redbg">Red =    </span> poor score that means the organaization is unlikely to be an appropriate for Fairtrade.
                </p>
                <p>
                    Results for each category are not wieghted, i.e. all categories have the same value in the final result.
                    improvement, the scope of improvement is wide, the improvement is permament and
                </p>
                <br>
                <div class="buttons">
                    <a href="#" class="ingia_btn_next">Next</a>
                </div>
                <br>
            </div>
            <!-- Details of Organaization -->
            <div class="form-step">
                <h4 class="text-center">Details of Organaization</h4>
                <div class="lbl_name">
                    <a>Name of Organaization</a>
                </div>
                <div class="input">
                    <input type="text" class="txtfields2" name="orgname" placeholder="">
                </div>
                <div class="lbl_name">
                    <a>Address</a>
                </div>
                <div class="input">
                    <input type="text" class="txtfields2" name="address" placeholder="">
                </div>
                <div class="lbl_name">
                    <a>Principal Contact</a>
                </div>
                <div class="input">
                    <input type="text" class="txtfields2" name="p-contact" placeholder="">
                </div>
                <div class="lbl_name">
                    <a>Email of Principal Contact</a>
                </div>
                <div class="input">
                    <input type="text" class="txtfields2" name="p-contact-email" placeholder="">
                </div>
                <div class="lbl_name">
                    <a>Phone of Principal Contact</a>
                </div>
                <div class="input">
                    <input type="text" class="txtfields2" name="p-contact-phone" placeholder="">
                </div>
                <div class="lbl_name">
                    <a>Date of Assessment</a>
                </div>
                <div class="input">
                    <input type="Date" class="txtfields2" name="dateofassessment" placeholder="">
                </div>
                <div class="lbl_name">
                    <a>Carried out by</a>
                </div>
                <div class="input">
                    <input type="text" class="txtfields2" name="carriedoutby" placeholder="">
                </div>
                <br>
                <div class="buttons">
                    <a href="#" class="ingia_btn_prev">Previous</a>
                    <a href="#" class="ingia_btn_next">Next</a>
                </div>
                <br>
            </div>
            <!-- Strategic Fit -->
            <div class="form-step">
                <h4 class="text-center">Category 1: Strategic Fit</h4>
                <b>Guidance</b>
                <p>
                    The strategic fit assessment evaluated the organaization with whom a partnership is under coosideration. Its use is
                    mandatory as a formal starting point for exploring any partnership we have.
                </p>
                <u>80% to 100% range:</u>
                <p>
                    The organaziation a vision and works in a way that isclearly compatible to Fairtrade.
                </p>
                <u>60% to 80% range:</u>
                <p>
                    The organaization's work and approach is compatible to Fairtrade
                </p>
                <u>40% to 60% range:</u>
                <p>
                    Some of the organaization's work has relevance to Fairtrade and there is scope for increased compatibility.
                </p>
                <u>20% to 40% range:</u>
                <p>
                    The organaization has an ambition to work more in a way that is compatible to Fairtrade.
                </p>
                <u>0% to 20% range:</u>
                <p>
                    The organaization's work is not currently compatible with Faitrade and there are no explicit ambitions to improve compatability.
                </p>
                <b>Enter Scores for Strategic Fit Criteria</b>
                <br>
                <div class="table-holder">
                    <form method="POST">
                        <table class="table table-striped" id="strategic_fit">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Criteria Number</th>
                                    <th>Criteria Description</th>
                                    <th>Criteria Score</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.01</td>
                                    <td>
                                        The organization fits at least one of 
                                        the categories of partners outlined in Fairtrade's 
                                        Partnership Strategy.
                                    </td>
                                    <td>
                                        <input type="number" class="txtfields2" name="sf-1" placeholder="%">
                                    </td>
                                </tr>

                                <tr>
                                    <td>1.02</td>
                                    <td>
                                        The organization have a record of reliability and
                                        performance within their sector.
                                    </td>
                                    <td>
                                        <input type="number" class="txtfields2" name="sf-2" placeholder="%">
                                    </td>
                                </tr>

                                <tr>
                                    <td>1.03</td>
                                    <td>
                                        The organization's vision is compatible with Fairtrade's vision
                                    </td>
                                    <td>
                                        <input type="number" class="txtfields2" name="sf-3" placeholder="%">
                                    </td>
                                </tr>

                                <tr>
                                    <td>1.04</td>
                                    <td>
                                        The organization is committed to one or more of our 
                                        Fairtrade's Vision.
                                    </td>
                                    <td>
                                        <input type="number" class="txtfields2" name="sf-4" placeholder="%">
                                    </td>
                                </tr>

                                <tr>
                                    <td>1.05</td>
                                    <td>
                                        A partnership with this organization will provide access to the services 
                                        or resources we need to achieve our Producer Impact Goals.
                                    </td>
                                    <td>
                                        <input type="number" class="txtfields2" name="sf-5" placeholder="%">
                                    </td>
                                </tr>

                                <tr>
                                    <td>1.06</td>
                                    <td>
                                        A partnership with this organization will provide access to the 
                                        services or resources we need to ahcieve our Producer Impact Goals.
                                    </td>
                                    <td>
                                        <input type="number" class="txtfields2" name="sf-6" placeholder="%">
                                    </td>
                                </tr>

                                <tr>
                                    <td>1.07</td>
                                    <td>
                                        A partnership with this organization is the best way to access the services or
                                        resources er need to achieve our Producer Impact Goals.
                                    </td>
                                    <td>
                                        <input type="number" class="txtfields2" name="sf-7" placeholder="%">
                                    </td>
                                </tr>

                                <tr>
                                    <td>1.08</td>
                                    <td>
                                        The organization has strongly intergrated ethics, public responsibilty,
                                        environmental protection, and safety into its business practices.
                                    </td>
                                    <td>
                                        <input type="number" class="txtfields2" name="sf-8" placeholder="%">
                                    </td>
                                </tr>

                                <tr>
                                    <td>1.09</td>
                                    <td>
                                        A partnership with this organization will follow an approach that is 
                                        consistent with Fairtrades's way of working.
                                    </td>
                                    <td>
                                        <input type="number" class="txtfields2" name="sf-9" placeholder="%">
                                    </td>
                                </tr>

                                <tr>
                                    <td>1.10</td>
                                    <td>
                                        The organaization considerd a leading corporate citizen.
                                    </td>
                                    <td>
                                        <input type="number" class="txtfields2" name="sf-10" placeholder="%">
                                    </td>
                                </tr>

                                <tr>
                                    <td></td>
                                    <td><b>Average%</b></td>
                                    <td>
                                        <button type="submit" class="btn btn-primary" name="avg">Calc</button>
                                        <span id="val"><b>AVG#DIV000</b></span>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                    <?php

                    if(isset($_POST["avg"])){
                        require_once '../php/sidebar.php';

                        $n1 = $_POST['sf-1'];
                        $n2 = $_POST['sf-2'];
                        $sum = $n1 + $n2;
                        echo "The Average is: " + $sum;
                        print $sum;
                    }

                    ?>
                </div>
                <br>
                <div class="buttons">
                    <a href="#" class="ingia_btn_prev">Previous</a>
                    <a href="#" class="ingia_btn_next">Next</a>
                </div>
                <br>
            </div>
            <!-- Capacity -->
            <div class="form-step">
                <h4 class="text-center">Category 2: Capacity</h4>
                <b>Guidance</b>
                <p>
                    The capacity assessment tool evaluates the capacity of the prospective partner to manage/implement a specific
                    project or initiative. This assessment must be completed as a basis for the further development of a partnership.
                </p>
                <u>80% to 100% range:</u>
                <p>
                    The organaziation has the required resources and skills, and has a track record of quality performance.
                </p>
                <u>60% to 80% range:</u>
                <p>
                    The organaization can access the required resources and skills, and is committed to the aims of the proposed partnerhsip.
                </p>
                <u>40% to 60% range:</u>
                <p>
                    The organization needs to acquire the resources and skills, and there is a commitment to do so.
                </p>
                <u>20% to 40% range:</u>
                <p>
                    The organaization is committed to the aims of the partnership but resource mobilisation may be a challenge.
                </p>
                <u>0% to 20% range:</u>
                <p>
                    The organaization does not have the required skills and resources, and there is no explicit committment to the aims of the partnership.
                </p>
                <b>Enter Scores for Capacity Criteria</b>
                <br>
                <div class="table-holder">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>Criteria Number</th>
                                <th>Criteria Description</th>
                                <th>Criteria Score</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2.01</td>
                                <td>
                                    The organization has the resources, skills and competencies (including
                                    managarial, technical and financial) needed to achieve the outcome of the 
                                    partnership
                                </td>
                                <td>
                                    <input type="number" class="txtfields2" name="cp-1" placeholder="%">
                                </td>
                            </tr>

                            <tr>
                                <td>2.02</td>
                                <td>
                                    The organization has the additional skills and competencies
                                    (complementary to those of Fairtrade) that are necessary to deliver the 
                                    intended outcome
                                </td>
                                <td>
                                    <input type="number" class="txtfields2" name="cp-2" placeholder="%">
                                </td>
                            </tr>

                            <tr>
                                <td>2.03</td>
                                <td>
                                    There is a clarity that the required skills and competencies will be available.
                                </td>
                                <td>
                                    <input type="number" class="txtfields2" name="cp-3" placeholder="%">
                                </td>
                            </tr>

                            <tr>
                                <td>2.04</td>
                                <td>
                                    The organization has access to required financial resources.
                                </td>
                                <td>
                                    <input type="number" class="txtfields2" name="cp-4" placeholder="%">
                                </td>
                            </tr>

                            <tr>
                                <td>2.05</td>
                                <td>
                                    The organization has a good track record in resource mobilisation
                                </td>
                                <td>
                                    <input type="number" class="txtfields2" name="cp-5" placeholder="%">
                                </td>
                            </tr>

                            <tr>
                                <td>2.06</td>
                                <td>
                                    The organization completed similar projects/activities successfully before 
                                    (completing projects to budget and to time).
                                </td>
                                <td>
                                    <input type="number" class="txtfields2" name="cp-6" placeholder="%">
                                </td>
                            </tr>

                            <tr>
                                <td>2.07</td>
                                <td>
                                    The organization is open to sharing lessons learned from previous experiences.
                                </td>
                                <td>
                                    <input type="number" class="txtfields2" name="cp-7" placeholder="%">
                                </td>
                            </tr>

                            <tr>
                                <td>2.08</td>
                                <td>
                                    Staff in the organization are reliable and have the required experiences.
                                </td>
                                <td>
                                    <input type="number" class="txtfields2" name="cp-8" placeholder="%">
                                </td>
                            </tr>

                            <tr>
                                <td></td>
                                <td><b>Average%</b></td>
                                <td>
                                    <button type="submit" class="btn btn-primary" >Calc</button>
                                    <b>AVG#DIV000</b>
                                    <script></script>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <br>
                <div class="buttons">
                    <a href="#" class="ingia_btn_prev">Previous</a>
                    <a href="#" class="ingia_btn_next">Next</a>
                </div>
                <br>
            </div>
            <!-- Risk -->
            <div class="form-step">
                <h4 class="text-center">Category 3: Risk Assessment</h4>
                <b>Guidance</b>
                <p>
                    The Risk assessment tool concerns the potential risks that are involved with engagement with the prospective partner. We will only enter into partnerships 
                    once a positive risk-reward ratio has been established.
                </p>
                <u>80% to 100% range:</u>
                <p>
                    Partnering with the organization has no significant strategic risks and all operational risks are manageable.									
                </p>
                <u>60% to 80% range:</u>
                <p>
                    Partnering with the organization entails manageable strategic and operational risks 									
                </p>
                <u>40% to 60% range:</u>
                <p>
                    Strategic and operational risks associated with a partnership with this organization should be manageable, but may require additional resources to do so.											
                </p>
                <u>20% to 40% range:</u>
                <p>
                    Strategic and operational risks associated with a partnership with this organisation may not be managable.									
                </p>
                <u>0% to 20% range:</u>
                <p>
                    There are significant strategic and operatiotional risks associated with a partnership with this organisation, and these risks are difficult to manage. 					
                </p>
                <b>Enter Scores for Capacity Criteria</b>
                <br>
                <div class="table-holder">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>Criteria Number</th>
                                <th>Criteria Description</th>
                                <th>Criteria Score</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>3.01</td>
                                <td>
                                    The other engagements of this organization do not represent represent a risk to Fairtrade.
                                </td>
                                <td>
                                    <input type="number" class="txtfields2" name="rk-1" placeholder="%">
                                </td>
                            </tr>

                            <tr>
                                <td>3.02</td>
                                <td>
                                    The organization has a good track record of financial stability / reliability (credibility with people / within sector they work / worked with / in).						
                                </td>
                                <td>
                                    <input type="number" class="txtfields2" name="rk-2" placeholder="%">
                                </td>
                            </tr>

                            <tr>
                                <td>3.03</td>
                                <td>
                                    There is no potential reputational damage associated with this partnership, particularly in cases which focus on sensitive topics.						
                                </td>
                                <td>
                                    <input type="number" class="txtfields2" name="rk-3" placeholder="%">
                                </td>
                            </tr>

                            <tr>
                                <td>3.04</td>
                                <td>
                                    The organization has a stable staff group.						
                                </td>
                                <td>
                                    <input type="number" class="txtfields2" name="rk-4" placeholder="%">
                                </td>
                            </tr>

                            <tr>
                                <td>3.05</td>
                                <td>
                                    Potential conflicts of interests associated with partnering with this organization have been made explicit?						
                                </td>
                                <td>
                                    <input type="number" class="txtfields2" name="rk-5" placeholder="%">
                                </td>
                            </tr>

                            <tr>
                                <td>3.06</td>
                                <td>
                                    A clear exit strategy can be envisioned.						
                                </td>
                                <td>
                                    <input type="number" class="txtfields2" name="rk-6" placeholder="%">
                                </td>
                            </tr>

                            <tr>
                                <td></td>
                                <td><b>Average%</b></td>
                                <td>
                                    <button type="submit" class="btn btn-primary" >Calc</button>
                                    <b>AVG#DIV000</b>
                                    <script></script>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <br>
                <div class="buttons">
                    <a href="#" class="ingia_btn_prev">Previous</a>
                    <a href="#" class="ingia_btn_next">Next</a>
                </div>
                <br>
            </div>
            <!-- Summary Analysis -->
            <div class="form-step">
                <h4>Partnership Assessment Score</h4>
                <div class="table-holder">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>Category</th>
                                <th>Percentage</th>
                            </tr>

                            <tr>
                                <td>1.0 Strategic Fit</td>
                                <td>AVG#DIV000</td>
                            </tr>
                            <tr>
                                <td>2.0 Capacity</td>
                                <td>AVG#DIV000</td>
                            </tr>
                            <tr>
                                <td>2.0 Risk</td>
                                <td>AVG#DIV000</td>
                            </tr>
                            <tr>
                                <td><b><i>Total</i></b></td>
                                <td>
                                    <button type="submit" class="btn btn-primary" >Calc</button>
                                    <b>SUM#DIV000</b>
                                </td>
                            </tr>
                        </thead>
                    </table>
                </div>
                <br>
                <label class="nperror2" name="assID">Assesment ID: <span>
                    <?php
                        $randomnumber = rand(0,1000);
                        print_r($randomnumber);
                    ?>
                </label></p>
                <br>
                <b>Color Scoring</b>
                <p>
                    Percentage scores are highlighted in one of the three colors:
                </p>
                <p>
                    <span class="greenbg">Green</span>   Good Scores falls in a range => <span class="greybg">70% to 100%</span> Action: proceed with partnership development <br>
                    <span class="amberbg">Amber</span>   Caution Scores falls in a range => <span class="greybg">40% to 69%</span> Action: carefull consideration/modification is recommended <br>
                    <span class="redbg">Red</span>     Poor Scores falls in a range => <span class="greybg">0% to 39%</span> Action: Do not proceed with the current plans <br>
                </p>
                <br>
                <div class="buttons">
                    <a href="#" class="ingia_btn_prev">Previous</a>
                    <button type="button" class="ingia_btn" name="scoresheet-submit">Save</button>
                </div>
                <br>
            </div>
        </form>
    </div>
</section>

<?php
    include_once 'footer.php';
?>