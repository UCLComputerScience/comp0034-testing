<?php

function requireLogIn()
{
    if (!isset($_SESSION['email'])) {
        header("Location: index.php");
        exit;
    }
}

function getAccountDetails()
{
    $email = $_SESSION['email'];

    $query = "SELECT first_name, last_name, email, address, district, phone FROM customer c JOIN address a on c.address_id = a.address_id WHERE c.email = '" . $email . "'";

    $connection = connectToDb();

    $result = mysqli_query($connection, $query);

    $user = mysqli_fetch_assoc($result);

    mysqli_free_result($result);

    echo "<h1>Account details</h1>";
    echo "<p id='name'>Name: " . $user['first_name'] . " " . $user['last_name'] . "</p>";
    echo "<p id='email'>Email: " . $email . "</p>";
    echo "<p id='address'>Address: " . $user['address'] . " " . $user['district'] . "</p>";
    echo "<p id='phone'>Phone: " . $user['phone'] . "</p>";
    exit;
}