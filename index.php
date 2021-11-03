<?php
declare(strict_types=1);

require 'Post.php';
require 'PostLoader.php';



?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <p>
            <label for="date">Title</label>
            <input type="text" name="title" id="title" value="">
        </p>
        <p>
            <label for="date">Date</label>
            <input type="text" name="date" id="date" value="">
        </p>
        <p>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="">
        </p>
        <p>
            <label for="message">Message</label>
            <textarea cols="50" rows="10" name="message" id="message"></textarea>
        </p>
            <button type="submit" name="submit" class="btn btn-primary">Send</button>
        
    </form>
</body>
</html>