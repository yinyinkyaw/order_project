<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userName = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    require_once('../Config/Database.php');
    require_once('../Classes/Signup.php');

    $signup = new Signup($userName, $password);
    $isCreate = $signup->signupUser();

    require("../Home.php");
}
