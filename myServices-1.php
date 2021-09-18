<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Member | Life - Living It Fully Everyday</title>
    <?php require_once('includes/source.php'); ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/myservice.css">
    <script type="text/javascript" src="assets/myservice.js"></script>

    <!--call when select service -->
    <?php
    if(isset($_POST['service'])) {
        getServiceType($_POST);
    }
    ?>

</head>
<body onload="myServiceValidation()">

<?php require_once('includes/header_login.php'); ?>

<div class="d-flex justify-content-start align-items-stretch">

    <?php require_once('includes/navbar_login.php'); ?>

    <div class="container"></br></br></br>

        <!-- Greeting -->
        <?php echo '<h2> Welcome ' . ($_SESSION[USER_SESSION_KEY])['first_name'] . '!</h2>' ?>
        <p class="lead">Please select a service.</p>

        <div class="container vh-100"></br>
            <form name="my-service-selection" id="my-service-selection" method="post">
<!--                 Service List -->
<!--                <div class="row align-items-start align-items-stretch" id="service">-->
<!--                     Yoga -->
<!--                    <div class="col flex-column d-flex">-->
<!--                        <input type="radio" class="btn-check" name="service" id="yoga" autocomplete="off">-->
<!--                        <button class="border h-100 w-100 rounded bg-white shadow-sm py-4 btn btn-secondary"-->
<!--                               onclick="checkedColor('yoga');" id="yoga_btn" for="yoga">-->
<!--                            <img class="mt-4" src="--><?php //getServiceIconFromDatabase('yoga') ?><!--" height="210px">-->
<!--                        </button>-->
<!--                        <p class="lead text-center mt-3" id="yoga_font">Yoga</p>-->
<!--                    </div>-->
<!---->
<!--                     Meditation -->
<!--                    <div class="col flex-column d-flex">-->
<!--                        <input type="radio" class="btn-check" name="service" id="meditation" autocomplete="off">-->
<!--                        <label class="border h-100 w-100 rounded bg-white shadow-sm py-4 btn btn-secondary"-->
<!--                               onclick="checkedColor('meditation');" id="meditation_btn" for="meditation">-->
<!--                            <img class="mt-4" src="--><?php //getServiceIconFromDatabase('meditation') ?><!--" height="210px">-->
<!--                        </label>-->
<!--                        <p class="lead text-center mt-3" id="meditation_font">Meditation</p>-->
<!--                    </div>-->
<!---->
<!--                     Stretching -->
<!--                    <div class="col flex-column d-flex">-->
<!--                        <input type="radio" class="btn-check" name="service" id="stretching" autocomplete="off">-->
<!--                        <label class="border h-100 w-100 rounded bg-white shadow-sm py-4 btn btn-secondary"-->
<!--                               onclick="checkedColor('stretching');" id="stretching_btn" for="stretching">-->
<!--                            <img class="mt-4" src="--><?php //getServiceIconFromDatabase('stretching') ?><!--" height="210px">-->
<!--                        </label>-->
<!--                        <p class="lead text-center mt-3" id="stretching_font">Stretching</p>-->
<!--                    </div>-->
<!---->
<!--                     Healthy habits -->
<!--                    <div class="col flex-column d-flex">-->
<!--                        <input type="radio" class="btn-check" name="service" id="healthy-habits" autocomplete="off">-->
<!--                        <label class="border h-100 w-100 rounded bg-white shadow-sm py-4 btn btn-secondary"-->
<!--                               onclick="checkedColor('healthy-habits');" id="healthy-habits_btn" for="healthy-habits">-->
<!--                            <img class="mt-4" src="--><?php //getServiceIconFromDatabase('healthy habits') ?><!--" height="210px">-->
<!--                        </label>-->
<!--                        <p class="lead text-center mt-3" id="healthy-habits_font">Healthy habits</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--                </br></br>-->

                <!-- Service List -->
                <div class="row align-items-start align-items-stretch" id="service">
                    <!-- Yoga -->
                    <div class="col flex-column d-flex">
                        <button type="submit" class="border h-100 w-100 rounded bg-white shadow-sm py-4 btn btn-secondary"
                                onclick="checkedColor('yoga');" id="yoga_btn" name="service" value="yoga">
                            <img class="mt-4" src="<?php getServiceIconFromDatabase('yoga') ?>" height="210px">
                        </button>
                        <p class="lead text-center mt-3" id="yoga_font">Yoga</p>
                    </div>

                    <!-- Meditation -->
                    <div class="col flex-column d-flex">
                        <button type="submit" class="border h-100 w-100 rounded bg-white shadow-sm py-4 btn btn-secondary"
                               onclick="checkedColor('meditation');" id="meditation_btn" name="service" value="meditation">
                            <img class="mt-4" src="<?php getServiceIconFromDatabase('meditation') ?>" height="210px">
                        </button>
                        <p class="lead text-center mt-3" id="meditation_font">Meditation</p>
                    </div>

                    <!-- Stretching -->
                    <div class="col flex-column d-flex">
                        <button type="submit" class="border h-100 w-100 rounded bg-white shadow-sm py-4 btn btn-secondary"
                               onclick="checkedColor('stretching');" id="stretching_btn" name="service" value="stretching">
                            <img class="mt-4" src="<?php getServiceIconFromDatabase('stretching') ?>" height="210px">
                        </button>
                        <p class="lead text-center mt-3" id="stretching_font">Stretching</p>
                    </div>

                    <!-- Healthy habits -->
                    <div class="col flex-column d-flex">
                        <button type="submit" class="border h-100 w-100 rounded bg-white shadow-sm py-4 btn btn-secondary"
                               onclick="checkedColor('healthy-habits');" id="healthy-habits_btn" name="service" value="healthy-habits">
                            <img class="mt-4" src="<?php getServiceIconFromDatabase('healthy habits') ?>" height="210px">
                        </button>
                        <p class="lead text-center mt-3" id="healthy-habits_font">Healthy habits</p>
                    </div>
                </div>
                </br></br>

            </form>

            <form name="my-user-service" id="my-user-service" method="post">
                <!-- type -->
                <div class="form-floating">
                    <select class="form-select" aria-label="What type of workout have you done?" id="type" name="type">
                        <option selected value="none">Please select....</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <label for="floatingSelect">What type of workout have you done?</label>
                </div>
                <div class ="errorMsg"></div>
                </br>

                <!-- email -->
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" placeholder="name@example.com" id="email" name="email">
                    <label for="email">Your email address</label>
                </div>
                <div class ="errorMsg"></div>

                <!-- duration -->
                <div class="form-floating mb-3">
                    <input type="input" class="form-control" id="duration" name="duration">
                    <label for="duration">How long have you workout? (mins)</label>
                </div>
                <div class ="errorMsg"></div>

                <!-- duration -->
                <div class="form-floating mb-3">
                    <input type="date" class="form-control" id="date" name="date">
                    <label for="date">When do you have your workout?</label>
                </div>
                <div class ="errorMsg"></div>

                <button type="submit" class="btn btn-outline-primary" value="Submit">Save and Start!</button>
            </form>



        </div>

    </div>

</div>
</body>
</html>
