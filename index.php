<?php
declare(strict_types=1);

require 'Post.php';
require 'PostLoader.php';

$guestbook = new PostLoader();
$howManyPostShow = 20;



if($_SERVER["REQUEST_METHOD"]=="POST"){
    $errors = "";
    $title = validateTitle($errors);
    $name = validateName($errors);
    $content = validateContent($errors);

    if(!empty($errors)){
        echo " <div class='alert alert-dismissible alert-danger'>     
        <h4 class='alert-heading'>OOOOOOPS! !</h4> 
        <p class='mb-0'> <strong> $errors </strong>
        </p> </div>";
    }else{
        $newPost = new Post($title, $name, $content);
        //var_dump($newPost);
        $newPost->savePost();
    }
    $howManyPostShow=$_POST["howManyPostShow"];
}

function clearInput($data){
    $data = htmlspecialchars($data);
    $data = stripslashes($data);
    $data = trim($data);
    return $data;
}

function validateTitle(&$errors){
    if(empty($_POST["title"])){
        $errors = $errors . " Title is empty.";
    }else{
        return clearInput($_POST["title"]);
    }
}

function validateName(&$errors){
    if(empty($_POST["name"])){
        $errors = $errors . " Name is empty.";
    }else{
        return clearInput($_POST["name"]);
    }
}

function validateContent(&$errors){
    if(empty($_POST["content"])){
        $errors = $errors . " Content is empty.";
    }else{
        return clearInput($_POST["content"]);
    }
}
$test = $guestbook->loadPost();
//$guestbook->getMessage($test);

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guestbook</title>
</head>
<body>
    <h1>Guestbook</h1>
    <form method="post">
        <p>
            <label for="date">Title</label>
            <input type="text" name="title" id="title" value="">
        </p>
        <p>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="">
        </p>
        <p>
            <label for="content">Message</label>
            <textarea cols="50" rows="10" name="content" id="content"></textarea>
        </p>
            <button type="submit" name="submit" class="btn btn-primary">Send</button>
        <p>
            <label for="numOfMgs">Message Display</label>
            <br>
            <?php echo $guestbook->getMessage($test);?>
        </p>
            
    </form>


</body>
</html>