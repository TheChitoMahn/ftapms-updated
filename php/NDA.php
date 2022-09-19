<?php
    include_once 'sidebar.php';
    if (isset($_POST["nda-check-btn"])){
        $assUID = $_POST["NDAassID"];
        if (empty($assUID)) {
            if ($_SERVER['REQUEST_URI'] === "/FTA_Partners_System/php/NDA.php") {
                echo '<meta http-equiv="Refresh" content="0.0; url=../php/AccessDenied.php">';
                exit();
            }
        }
        else {
            echo "

<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous'>
<link rel='stylesheet' href='../css/newpartner.css'>
<link rel='stylesheet' href='../css/dashboard.css'>
<link rel='stylesheet' href='../css/index.css'>
<link rel='stylesheet' href='../css/newaddons.css'>


<section class='newpartners'>
    <div class='main'>
        <h3>Non-Disclosure Agreement</h3>
        NOTE: Create an NDA Agreement ";
        
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "stmtfailed") {
                    echo "<p class='nperror2'>stmtFailed</p>";
                }
                else if ($_GET["error"] == "successnewnda") {
                    echo "<p class='nperror3'>New NDA successfully created!</p>";
                }
                else if ($_GET["error"] == "posterror") {
                    echo "<p class='nperror2'>Something went wrong while posting</p>";
                }
            }
        echo "
        <form class='partnercontent' action='../includes/nda.inc.php' method='POST'>
            <div class='section1'>
                <div class='lbl_name'>
                    <a>Date</a>
                </div>
                <div class='input'>
                    <input type='Date' class='txtfields2' name='date' placeholder='Date' required>
                </div>
                <div class='lbl_name'>
                    <a>Subcontractor Name</a>
                </div>
                <div class='input'>
                    <input type='text' class='txtfields2' name='name' placeholder='Name' required>
                </div>
                <div class='lbl_name'>
                    <a>Hereinafter called</a>
                </div>
                <div class='input'>
                    <input type='text' class='txtfields2' name='partner' placeholder='Partner/Consultant' required>
                </div>
                <div class='lbl_name'>
                    <a>Proposal/Project Name</a>
                </div>
                <div class='input'>
                    <input type='text' class='txtfields2' name='proposal' placeholder='Proposal/Project Name' required>
                </div>
                <div class='lbl_name'>
                    <a>Time of delivery</a>
                </div>
                <div class='input'>
                    <input type='text' class='txtfields2' name='delivery' placeholder='In Weeks' required>
                </div>
                <div class='lbl_name'>
                    <a>Day of Termination</a>
                </div>
                <div class='input'>
                    <input type='Date' class='txtfields2' name='termination' placeholder='In Weeks' required>
                </div>
                <div class='lbl_name'>
                    <a>Country</a>
                </div>
                <div class='input'>
                    <input type='text' class='txtfields2' name='country' placeholder='Country' required>
                </div>
                <div class='lbl_name'>
                    <a>Time</a>
                </div>
                <div class='input'>
                    <input type='text' class='txtfields2' name='time' placeholder='In Weeks/Years' required>
                </div>
                <div class='lbl_name'>
                    <a>Written notice Time limit</a>
                </div>
                <div class='input'>
                    <input type='text' class='txtfields2' name='timelimit' placeholder='In Days' required>
                </div>
            </div>

            <div class='section2'>
                <div class='lbl_name'>
                    <a>Goals</a>
                </div>
                <div class='input'>
                    <textarea class='txtfields2' name='goalsbiginput' rows='15' cols='50' required></textarea>
                </div>
                IN WITNESS WHEREOF, the parties have executed this Agreement as of the day and year written above:
                <div class='lbl_name'>
                    <a>Patners:</a>
                </div>
                <div class='input'>
                    <input type='text' class='txtfields2' name='witnessname' placeholder='Signup Name' required>
                </div>
                <div class='input'>
                    <input type='text' class='txtfields2' name='witnessdesignation' placeholder='Designation' required>
                </div>
                <div class='input'>
                    <input type='text' class='txtfields2' name='witnessaddress' placeholder='Address' required>
                </div>
                <div class='lbl_name'>
                    <a>Fairtrade Africa Name:</a>
                </div>
                <div class='input'>
                    <input type='text' class='txtfields2' name='ftaname' placeholder='Signup Name' required>
                </div>
                <div class='buttons'>
                    <button type='button' class='ingia_btn'><a href='./listNDA.php'>View All NDAs'</a></button>
                </div>
                <div class='buttons'>
                    <button type='submit' class='ingia_btn' name='nda-submit'>Save</button>
                </div>
            </div>
        </form>

    </div>
</section>";
include_once 'footer.php';
}
} else {
    if ($_SERVER['REQUEST_URI'] === "/FTA_Partners_System/php/NDA.php") {
        echo '<meta http-equiv="Refresh" content="0.0; url=../php/AccessDenied.php">';
        exit();
    }
}
?>