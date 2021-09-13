<?php


// Make DB connection.
function createConnection()
{
    // Setup db connection
    $mysqli = new mysqli("www.databaseaustralia.com", "s3789585_a2", "Peter0466555592_phpmyadmin", "s3789585_a2");

    if ($mysqli->connect_error) {
        die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
    }

    return $mysqli;
}


// Get user detail
function getUser($email)
{
    // Initial connection
    $mysqli = createConnection();

    // Query
    $result = $mysqli->query("SELECT * FROM user WHERE email='" . $email . "'");

    // Decompose result from array
    $user = $result->fetch_assoc();

    // no user exist return null, otherwise return users data
    if (empty($user)) {
        return null;
    } else {
        return $user;
    }
}


// Add user to DB
function addUser($user)
{
    // Initial connection
    $mysqli = createConnection();

    // Query
    $result = $mysqli->query("INSERT INTO `user` (`email`, `password`, `first_name`, `last_name`, `phone`, `age`, `is_student`, `is_employed`) VALUES ('" . $user['email'] . "', '" . $user['pswd'] . "', '" . $user['firstname'] . "', '" . $user['lastname'] . "', '" . $user['phone'] . "', '" . $user['age'] . "', '" . $user['std_status'] . "', '" . $user['emp_status'] . "')");
}


