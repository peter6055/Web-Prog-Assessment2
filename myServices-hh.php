<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Member | Life - Living It Fully Everyday</title>
    <?php require_once('includes/resources.php'); ?>
    <?php require_once('includes/myService-resources.php'); ?>
</head>

<body class="d-flex flex-column">

<?php require_once('includes/myService-header.php'); ?>

<div class="d-flex justify-content-start align-items-stretch">

    <?php require_once('includes/myService-navbar.php'); ?>

    <div class="container-fluid mx-5"></br></br>

        <div class="vh-100 d-flex "></br>
            <div id="meal-left-col">
                <form name="meal-form">
                    <h1>I want to eat
                        <input type="number" id="cal" name="cal"><br>
                        calories a day!
                    </h1><br><br>

                    <p>Please Select Your Preference:</p>
                    <input type="radio" id="anything" name="category" value="category" checked>
                    <label for="anything" id="any">Anything</label>

                    <input type="radio" id="paleo" name="category">
                    <label for="paleo" style="background-image: url(assets/images/fried-chicken.svg); background-repeat: no-repeat;
		   background-position: 18px 5px; background-size: 18px;">&nbsp; &nbsp; Paleo</label>

                    <input type="radio" id="vegetarian" name="category">
                    <label for="vegetarian" style="background-image: url(assets/images/carrot.svg); background-repeat: no-repeat;
		   background-position: 18px 7px; background-size: 21px;">&nbsp; &nbsp; &nbsp; Vegetatian</label>

                    <input type="radio" id="vegan" name="category">
                    <label for="vegan" style="background-image: url(assets/images/vegan.svg); background-repeat: no-repeat;
		   background-position: 18px 8px; background-size: 21px;">&nbsp; &nbsp; &nbsp; Vegan</label>

                    <input type="radio" id="keto" name="category">
                    <label for="keto" style="background-image: url(assets/images/cookie.svg); background-repeat: no-repeat;
		   background-position: 18px 8px; background-size: 21px">&nbsp; &nbsp; &nbsp; Ketogenic</label>

                    <input type="radio" id="medi" name="category">
                    <label for="medi" style="background-image: url(assets/images/chocolate.svg); background-repeat: no-repeat;
		   background-position: 18px 7px; background-size: 19px">&nbsp; &nbsp; &nbsp; Mediterranean</label>

                    <br><br><br><br><br>
                    <input type="submit" id="submit_btn" value="Start Calculation">
                </form>
                <input type="submit" id="reset_btn" value="Reset Calculation" onClick="location.reload();">
                <br><br>
            </div>


            <div id="meal-right-col">
                <img src="assets/images/meal-pana.svg" alt="LIFE" style="padding-top: 10px; height: 250px;">
            </div>


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

</div>
</body>
</html>
