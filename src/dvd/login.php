<?php
require_once('initialise.php');

$firstName = $_POST["first_name"] ?? '1';
$familyName = $_POST["family_name"] ?? '1';
$email = $_POST["email_address"] ?? '1';

$qryAdd = "INSERT INTO customer (store_id, address_id, active, create_date, first_name, last_name, email) VALUES (";
$qryAdd .= "1, 1, 1, NOW(), '" . $firstName . "', '" . $familyName ."', '" . $email . "')";

$qryFind = "SELECT * FROM customer ";
$qryFind .= "WHERE first_name = '" . $firstName . "' AND last_name = '" . $familyName . "' AND email = '" . $email . "'";

$connection = connectToDb();

//Check if the name exists
$result = mysqli_query($connection, $qryFind);
if (mysqli_num_rows($result) > 0) {
    closeDb($connection);
    $_SESSION['firstName'] = $firstName;
    $_SESSION['email'] = $email;
    header('Location: success.php');
    exit;
} else {
    $result = mysqli_query($connection, $qryAdd);
    if ($result) {
        closeDb($connection);
        $_SESSION['firstName'] = $firstName;
        $_SESSION['email'] = $email;
        $msg = "A new user account has been created";
        header("Location: success.php?msg=$msg");
        exit;
    } else {
        $msg = mysqli_error($connection);
        closeDb($connection);
        header("Location: error.php?msg='.$msg.'");
        exit;
    }
}
