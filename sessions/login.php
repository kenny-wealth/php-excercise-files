<?php

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    session_start();

    try {
        $user = fetchDetails($email);

        if (!$user) {
            $_SESSION['error'] = "Invalid login credentials";
        } else {
            $_SESSION['message'] = "Authentication Successful!";
            $_SESSION['full_name'] = $user->full_name;
            $_SESSION['email'] = $user->email;
            header('Location:welcome.php');
            return;
        }

    } catch (Exception $ex) {
        $error = $ex->getMessage();
        $_SESSION['error'] = "Database Error: $error";
    }

    header('Location:error.php');
}

function fetchDetails($email)
{
    $host = "localhost";
    $database = "registration";
    $username = "root";
    $password = "";

    $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = $pdo->prepare("SELECT * FROM users WHERE email = :email_address LIMIT 1");

    $query->bindValue("email_address", $email);
    $query->execute();
    $result = $query->fetchObject();

    return $result;
}
