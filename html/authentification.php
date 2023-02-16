<?php
if (empty($_POST["fname"])) {
    die("First Name required");
}

if (empty($_POST["lname"])) {
    die("Last Name required");
}

if (! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Invalid Email");
}

// if (strlen($_POST["password"] < 8)) {
//     die("Passoword must be at least 8 characters");
// }

// if (! preg_match("/[A-Z]/", $_POST["passowrd"])) {
//     die("Password must have at least 1 uppercase");
// }

// if (! preg_match("/[a-z]/", $_POST["passowrd"])) {
//     die("Password must have at least 1 lowercase");
// }

// if (! preg_match("/[0-9]/", $_POST["passowrd"])) {
//     die("Password must have at least 1 number");
// }

print_r($_POST);


?>