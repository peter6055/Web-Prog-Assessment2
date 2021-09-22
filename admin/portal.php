<?php
// back to life website call
if (isset($_POST['back'])) {
    header("Location: https://saturn.csit.rmit.edu.au/~s3789585/wp/a2/");

}
?>


<!-- PHP DEBUG -->
<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin Portal | Life - Living It Fully Everyday</title>
    <!--https://saturn.csit.rmit.edu.au/~s3789585/wp/a2/-->


    <!-- General PHP Functions-->
    <?php require_once('includes/functions.php'); ?>



    <!-- Google font API-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Noto Sans" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet" type="text/css">

    <!--jQuery CDN-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!--JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
            crossorigin="anonymous"></script>

    <!--jQuery Data Validation-->
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

    <!--js-->
    <script type="text/javascript" src="assets/admin.js"></script>

</head>

<body class="d-flex flex-column" onload="loadServiceType()">
<header class="p-3 bg-dark text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                <img src="assets/images/LIFE-logos-white.png" alt="LIFE logo" width="100x">
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a class="nav-link px-2 text-secondary">Admin Portal</a></li>
            </ul>

            <?php require_once "includes/api/getWeather.php" ?>

            <form method="post" class="text-end" >
                <button type="submit" class="btn btn-warning" name="back" value="back">Back to Client Site</button>
            </form>
        </div>
    </div>
</header>


<div class="d-flex justify-content-start align-items-stretch">

    <div class="container vh-100"></br>

    </div>
</div>
</body>
</html>
