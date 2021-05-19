<?php

include_once '../vendor/autoload.php';
include_once '../config.php';
session_start();

use Core\Router;

$router = new Router();
$router->loadPage();

md5('password' . 'salt');


?>

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Document</title>
    <style>
        .form-frontal {
            margin-left: 1rem;
            color: white;
            width: 25%;
        }

        .form-frontal>button {
            color: black;
        }

        input {
            color: black;
            margin-bottom: 1rem;
            width: 100%;

        }

        textarea {
            width: 100%;
            color: black;
        }
    </style>
</head>

<body>
    <form class="form-frontal" action="contactForm.php" method="post">
        <p>Ask a question</p>
        <input type="text" name="name" placeholder="enter your name">
        <br>
        <input type="email" name="email" placeholder="enter your email">
        <br>
        <input type="text" name="subject" placeholder="Subject">
        <br>
        <textarea name="message" placeholder="Message"></textarea>
        <br>
        <button type="submit" name="submit">Send mail</button>
    </form>
</body>

</html> -->