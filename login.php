<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Member Login | Life - Living It Fully Everyday</title>
    <?php require_once('includes/source.php'); ?>
    <script src="assets/accounts.js"></script>
</head>

<body>
<div class="flex-container">

    <!--Nav Bar-->
    <?php require_once('includes/header.php'); ?>

    <!--To avoid sticky nav bar block content-->
    <div class="sticky-protect-bar"></div>

    <!--Announcement Bar-->
    <?php require_once('includes/accouncements.php'); ?>


    <!--Main Content Area-->
    <div class="content">
        <div class="content-container">
            <div id="members-form-decoration"><img src="assets/images/account.svg" alt="LIFE"
                                                   style="padding-top: 10px;"></div>
            <div id="members-form" style="width:40%; padding-left: 100px">
                <h1>Log in to LIFE</h1>
                <br>
                <form action="" method="post">
                    <label class="contact-label" for="usrname">Username</label>
                    <br>
                    <input type="text" id="usrname" name="usrname" required>
                    <br>
                    <br>
                    <label class="contact-label" for="pswd">Password</label>
                    <br>
                    <input type="password" id="pswd" name="pswd" required>
                    <br>
                    <br>
                    <br>
                    <input class="contact-submit" type="submit" value="Login" onclick="alertLoginBtnOnClick();">
                    <br>
                    <br>
                    <span id="">Not have an account?&nbsp;&nbsp;<a href="register.php">Register</a></span>
                </form>
                <br>
            </div>
        </div>
    </div>

    <!--Footer Area-->
    <?php require_once('includes/footer.php'); ?>
</div>
</body>
</html>