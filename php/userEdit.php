<?php
    include_once 'sidebar.php';
    include '../includes/userEdit.inc.php';
?>
<link rel="stylesheet" href="../css/dashboard.css">
<link rel="stylesheet" href="../css/newpartner.css">
<link rel="stylesheet" href="../css/index.css">
<link rel="stylesheet" href="../css/drop-down-menu.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<section class="newpartners">
    <div class="main">
        <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "stmtFailed") {
                    echo "<p class='nperror2'>stmtFailed</p>";
                }
                else if ($_GET["error"] == "goneBack2") {
                    echo "<p class='nperror2'>Unexpected Error, check sql query!!</p>";
                }
                else if ($_GET["error"] == "emptyInput") {
                    echo "<p class='nperror2'>Fill in all the Text fields</p>";
                }
                else if ($_GET["error"] == "invalidName") {
                    echo "<p class='nperror2'>Choose a proper Name</p>";
                }
                else if ($_GET["error"] == "invalidCompanyEmail") {
                    echo "<p class='nperror2'>Choose a proper Email</p>";
                }
                else if ($_GET["error"] == "passwordDontMatch") {
                    echo "<p class='nperror2'>Passwords dont match</p>";
                }
            }
        ?>
        <h3>User Edit</h3>
        <form class="partnercontent" action="../includes/userEdit.inc.php" method="POST">
            <div class="section1">
            <input type="text" class="txtfields2" name="id" value="<?=$row['id']?>" hidden>
                <div class="lbl_name">
                    <a>Full Name</a>
                </div>
                <div class="input">
                    <input type="text" class="txtfields2" name="fullname" value="<?=$row['fullname']?>" required>
                </div>
                <div class="lbl_name">
                    <a>Company Email</a>
                </div>
                <div class="input">
                    <input type="text" class="txtfields2" name="companyemail" value="<?=$row['companyemail']?>" required>
                </div>
                <div class="lbl_name">
                    <a>Department</a>
                </div>
                <div class="input">
                    <input type="text" class="txtfields2" name="department" value="<?=$row['department']?>" required>
                </div>
                <div class="lbl_name">
                    <a>Password</a>
                </div>
                <div class="input">
                    <input type="password" class="txtfields2" name="password" value="<?=$row['password']?>" required>
                </div>
                <div class="lbl_name">
                    <a>Confirm Password</a>
                </div>
                <div class="input">
                    <input type="password" class="txtfields2" name="confirmpassword"  required>
                </div>
                <div class="buttons">
                    <button type="button" class="ingia_btn"><a href="../php/listusers.php?error=none">Exit</a></button>
                    <button type="submit" class="ingia_btn" name="btn-edit">Update Account</button>
                </div>
            </div>
        </form>
    </div>
</section>

<?php
    include_once 'footer.php';
?>
