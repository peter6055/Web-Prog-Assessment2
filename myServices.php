<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Member | Life - Living It Fully Everyday</title>
    <?php require_once('includes/source.php'); ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

</head>
<body>

<?php require_once('includes/header_login.php'); ?>

<div class="d-flex justify-content-start align-items-stretch">

    <?php require_once('includes/navbar_login.php'); ?>

    <div class="container vh-100 "></br>
        <div class="alert alert-warning" role="alert">
            Due to scheduled system maintenance, some of our service will be temporarily unavailable.
        </div>
        </br></br>
        <?php echo '<h1 class="text-center"> Welcome ' . ($_SESSION[USER_SESSION_KEY])['first_name'] . ' to your service page.</h1>' ?>
        <br>
        <p class="lead text-center">Please select a service in the left navbar.</p><br><br>
        <img src="assets/images/welcome.svg" class="rounded mx-auto d-block" alt="welcome" height="400px">
    </div>

</div>
</body>
</html>
