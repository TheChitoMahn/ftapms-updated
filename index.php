<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FTA Partners Login</title>

    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/newaddons.css">
    <link rel="stylesheet" href="./css/newpartner.css">
    <link rel="icon" type="image/gif" href="./images/FTA no cap.PNG" />
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

</head>
<body>
    <div class="title">
        <div class="title_content">
            <img src="../FTA_Partners_System/images/FTA.PNG" alt="FTA Logo">
            <br>
            <a>FTA PARTNERS MANAGEMENT SYSTEM</a>
        </div>
    </div>
    <div class="login_parent">
        <form class="login_content" action="./includes/login.inc.php" method="POST">
            <p class="ssl-lock"><i class="las la-lock fa-lg"></i>SSL/TLS SECURE CHANNEL <br>HASH ENCRYPTED</p>
            <?php
                if (isset($_GET["error"])) {
                    if ($_GET["error"] == "emptyInput") {
                        echo "<p class='error2'>Fill in all the Text fields</p>";
                    }
                    else if ($_GET["error"] == "wrongLogin") {
                        echo "<p class='error2'>Wrong email or Password</p>";
                    }
                    else if ($_GET["error"] == "depnotallowed") {
                        echo "<p class='error2'>Department not Allowed</p>";
                    }
                }
            ?>
            <div class="lbl_name">
                <a>Company Email</a>
            </div>
            <div class="input">
                <input type="email" class="txtfields2" name="lgcompanyemail" placeholder="Company Email" required>
            </div>
            <div class="lbl_name">
                <a>Password</a>
            </div>
            <div class="input">
                <input type="password" class="txtfields2" name="lgpassword" placeholder="Password" required>
            </div>
            <div class="buttons">
                <button type="submit" class="ingia_btn" name="login-submit">Sign In</button>
            </div>
        </form>
    </div>
    <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "stmtfogoFailed") {
                echo "<p class='nperror2'>stmtfogoFailed (Go < back)</p>";
            }
            else if ($_GET["error"] == "fogonone") {
                echo "<p class='nperror3'>Your Email has been sent, Contact the Admin for more, Thank you.</p>";
            }
            else if ($_GET["error"] == "invalidCompEmail") {
                echo "<p class='nperror2'>Invalid Email Address (Go < back)</p>";
            }
        }
    ?>
    <div class="fogo_holder">
            <div class="fogo_password">
                <button type="button" class="btn_fogo_password">Forgot Password or Can't log in?</button>
                <form class="fogo_password_content" action="../FTA_Partners_System/includes/fogo.inc.php" method="POST">
                    <p>Type in your company Email.
                        This will be send to administrator for review. <br>
                        Thank you
                    </p>
                    <div class="lbl_name">
                        <a>Company Email</a>
                    </div>
                    <div class="input">
                        <input type="text" class="txtfields2" name="compemail" placeholder="Company Email" required>
                    </div>
                    <div class="buttons">
                        <button type="submit" class="ingia_btn" name="fogo-submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
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
            // else if ($_GET["error"] == "none") {
            //     echo "<p class='nperror3'>Your New Account has been made, You will recieve an email confirming account verification!</p>";
            // }
        }
    ?>
    <div class="fogo_holder">
        <div class="fogo_password">
            <button type="button" class="btn_fogo_password">Create a New Account?</button>
            <form class="fogo_password_content" action="./includes/signup.inc.php" method="POST">
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
    </div>
<script src="../FTA_Partners_System/js/fogo_password_username.js"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</body>
</html>