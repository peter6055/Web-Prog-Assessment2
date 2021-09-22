<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Member Login | Life - Living It Fully Everyday</title>
    <?php require_once('includes/resources.php'); ?>
    <script type="text/javascript" src="assets/meal-plan.js"></script>
</head>

<body>
<div class="flex-container">

    <!--Nav Bar-->
    <?php require_once('includes/header.php'); ?>

    <!--To avoid sticky nav bar block content-->
    <div class="sticky-protect-bar"></div>

    <!--Announcement Bar-->
    <div class="accouncements"><a>For the latest Coronavirus (COVID-19) Victoria updates, restrictions, travel permits
        and exposure sites, visit the Victorian Government's Coronavirus website</a></div>

    <!--Main Content Area-->
    <div class="content">
        <div class="content-container">
            <div id="meal-left-col">
                <form name="meal-form" action="javascript:void(0);" onsubmit="return doCalculation()">
                    <h1>I want to eat
                        <input type="number" id="cal" name="cal">
                        <br>
                        calories a day!</h1><br><br>

                    <a>Please Select Your Preference:</a><br><br>
                    <input type="radio" id="anything" name="category" value="category" checked>
                    <label for="anything" id="any">Anything</label>

                    <input type="radio" id="paleo" name="category">
                    <label for="paleo" style="background-image: url(assets/images/fried-chicken.svg); background-repeat: no-repeat;
		   background-position: 18px 2px; background-size: 18px;">&nbsp; &nbsp; Paleo</label>

                    <input type="radio" id="vegetarian" name="category">
                    <label for="vegetarian" style="background-image: url(assets/images/carrot.svg); background-repeat: no-repeat;
		   background-position: 18px 5px; background-size: 21px;">&nbsp; &nbsp; &nbsp; Vegetatian</label>

                    <input type="radio" id="vegan" name="category">
                    <label for="vegan" style="background-image: url(assets/images/vegan.svg); background-repeat: no-repeat;
		   background-position: 18px 6.5px; background-size: 21px;">&nbsp; &nbsp; &nbsp; Vegan</label>
                    <br><br><br>

                    <input type="radio" id="keto" name="category">
                    <label for="keto" style="background-image: url(assets/images/cookie.svg); background-repeat: no-repeat;
		   background-position: 18px 6.5px; background-size: 21px">&nbsp; &nbsp; &nbsp; Ketogenic</label>

                    <input type="radio" id="medi" name="category">
                    <label for="medi" style="background-image: url(assets/images/chocolate.svg); background-repeat: no-repeat;
		   background-position: 18px 4px; background-size: 19px">&nbsp; &nbsp; &nbsp; Mediterranean</label>

                    <br><br><br><br><br>
                    <input type="submit" id="submit_btn" value="Start Calculation">
                </form>
                <input type="submit" id="reset_btn" value="Reset Calculation" onClick="location.reload();">
                <br><br>
            </div>
            <div id="meal-right-col"><img src="assets/images/meal-pana.svg" alt="LIFE"
                                          style="padding-top: 10px; height: 300px;"></div>
            <div id="meal-right-result-col" style="display:none;">
                <div id="result-col-overview">
                    <div id="overview-cals"></div>
                    <div id="overview-cals-remain"></div>
                    <div id="overview-pricing"></div>

                </div>
                <div id="result-col-breakfast">
                    <div class="result-col-title" id="result-col-breakfast-title"></div>

                </div>
                <div id="result-col-lunch">
                    <div class="result-col-title" id="result-col-lunch-title"></div>
                </div>
                <div id="result-col-dinner">
                    <div class="result-col-title" id="result-col-dinner-title"></div>
                </div>
            </div>

        </div>
    </div>

    <!--Footer Area-->
    <?php require_once('includes/footer.php'); ?>
</div>
</body>
</html>