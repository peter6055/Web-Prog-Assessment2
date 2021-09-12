<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Member Regiter | Life - Living It Fully Everyday</title>
    <?php require_once('includes/source.php'); ?>
    <script type="text/javascript" src="assets/accounts.js"></script>
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
                                                   style="padding-top: 10px;"> <span>Already have an account?&nbsp;&nbsp;<a
                    href="login.php">Login in</a></span></div>
            <div id="members-form" style="width:40%; padding-left: 100px">
                <h1>Join us today!</h1>
                <form name="register-form" onsubmit="return registerValidateForm(true)">
                    <label class="contact-label" for="fname">First Name <a> *</a></label>
                    <br>
                    <input type="text" id="fname" name="firstname">
                    <br>
                    <br>
                    <label class="contact-label" for="lname">Last Name <a> *</a></label>
                    <br>
                    <input type="text" id="lname" name="lastname">
                    <br>
                    <br>
                    <label class="contact-label" for="email">Email Address <a> *</a></label>
                    <br>
                    <input type="text" id="email" name="email">
                    <br>
                    <br>
                    <label class="contact-label" for="email2">Confirm Email Address <a> *</a></label>
                    <br>
                    <input type="text" onpaste="return false;" onCopy="return false" id="email2" name="email2"
                           placeholder="Copy/Paste Disable">
                    <br>
                    <br>
                    <label class="contact-label" for="phone">Phone Number<a> *</a></label>
                    <br>
                    <input type="text" id="phone" name="phone" placeholder="Format +61 4XX XXX XXX">
                    <br>
                    <br>
                    <label class="contact-label" for="age">Age<a> *</a></label>
                    <br>
                    <span class="inline-description">Please drag your age.</span>
                    <div class="radio_col" style="padding-top: 20px;">
                        <input type="range" id="age" name="age" min="0" max="120" value="0"
                               oninput="rangeSliderValueUpdate(this.value);"
                               onChange="return registerValidateForm(false)">
                        <input type="sliderDisplayer" id="age_value" value="" readonly>
                        <br>
                    </div>
                    <br>
                    <label class="contact-label" for="std_status">Student Status<a> *</a></label>
                    <br>
                    <div class="radio_col" style="padding-top: 10px;">
                        <input type="radio" id="std_yes" name="std_status" value="std_yes"
                               onChange="return registerValidateForm(false)">
                        <label for="std_yes">Yes</label>
                        <br>
                    </div>
                    <div class="radio_col">
                        <input type="radio" id="std_no" name="std_status" value="std_no"
                               onChange="return registerValidateForm(false)">
                        <label for="std_no">No</label>
                        <br>
                    </div>
                    <br>
                    <label class="contact-label" for="emp_status">Employment Status<a> *</a></label>
                    <br>
                    <div class="radio_col" style="padding-top: 10px;">
                        <input type="radio" id="emp_yes" name="emp_status" value="emp_yes"
                               onChange="return registerValidateForm(false)">
                        <label for="emp_yes">Yes</label>
                        <br>
                    </div>
                    <div class="radio_col">
                        <input type="radio" id="emp_no" name="emp_status" value="emp_no"
                               onChange="return registerValidateForm(false)">
                        <label for="emp_no">No</label>
                    </div>
                    <br>
                    <label class="contact-label" for="memberFeeDisplayer">Annual Membership Fees</label>
                    <br>
                    <input type="memberFeeDisplayer" id="memberFee_value" value="AUD 10" readonly>
                    <br>
                    <br>
                    <br>
                    <input class="contact-submit" type="submit" value="Join us!">
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