<?php
    include_once 'sidebar.php';
?>

<link rel="stylesheet" href="../css/dashboard.css">
<link rel="stylesheet" href="../css/newpartner.css">
<link rel="stylesheet" href="../css/index.css">
<link rel="stylesheet" href="../css/drop-down-menu.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<section class="newpartners">
    <div class="main">
        <h3>Add a New User Account</h3>
        <span class="nperror2">(Under Development)</span>
        <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyInputSI") {
                    echo "<p class='nperror2'>Fill in all the Text fields (Go < back)</p>";
                }
                else if ($_GET["error"] == "invalidName") {
                    echo "<p class='nperror2'>Choose a proper Name (Go < back)</p>";
                }
                else if ($_GET["error"] == "invalidCompanyEmail") {
                    echo "<p class='nperror2'>Choose a proper Email (Go < back)</p>";
                }
                else if ($_GET["error"] == "passwordDontMatch") {
                    echo "<p class='nperror2'>Passwords dont match (Go < back)</p>";
                }
                else if ($_GET["error"] == "companyEmailAlreadyExists") {
                    echo "<p class='nperror2'>The Company Email already exists (Go < back)</p>";
                }
                else if ($_GET["error"] == "stmtFailed") {
                    echo "<p class='nperror2'>Something went wrong, try again! (Go < back)</p>";
                }
                else if ($_GET["error"] == "recap") {
                    echo "<p class='nperror2'>re-Captcha error, check site domain Key!</p>";
                }
            }
        ?>
        <form class="fogo_password_content" action="../includes/signup.inc.php" method="POST">
            <p class="ssl-lock"><i class="las la-lock fa-lg"></i>HASH ENCRYPTED</p>
            <p>Please fill this form to create an account. Your account details will be sent for verification and Approval, Thank you.</p>
            <div class="lbl_name">
                <a>Full Name</a>
            </div>
            <div class="input">
                <input type="text" class="txtfields2" name="fullname" placeholder="First Name" required>
            </div>
            <div class="lbl_name">
                <a>Company Email</a>
            </div>
            <div class="input">
                <input type="text" class="txtfields2" name="companyemail" placeholder="Company Email" required>
            </div>
            <div class="lbl_name">
                <a>Department</a>
            </div>
            <div class="input">
                <input type="text" class="txtfields2" name="department" placeholder="Department" required>
            </div>
            <div class="lbl_name">
                <a>Password</a>
            </div>
            <div class="input">
                <input type="password" class="txtfields2" name="password" placeholder="Password" required>
            </div>
            <div class="lbl_name">
                <a>Confirm Password</a>
            </div>
            <div class="input">
                <input type="password" class="txtfields2" name="confirmpassword" placeholder="Confirm Password" required>
            </div>
            <div class="g-recaptcha" data-sitekey="6LcbRakfAAAAAGwFte8SYsb2QXYg-330o5YMTDFx" aria-required="true"></div>
            <div class="input">
                <input type="checkbox" name="remember" required> By creating an account you agree to our Terms & Privacy.
            </div>
            <div class="buttons">
                <button type="submit" class="ingia_btn" name="signup-submit">Create New Account</button>
            </div>
        </form>
    </div>
</section>

<?php
    include_once 'footer.php';
?>