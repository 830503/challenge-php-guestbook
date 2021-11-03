<?php
declare(strict_types=1);

class PostLoader 
{
    private $post;
    private $message = [];

    function __construct(){

    }

    function loadPost(){
        $jsonData = file_get_contents("posts.json");
        $this->message = unserialize(json_decode($jsonData));

    }

    function savePost(){
        array_push($this->message, $post);
        $jsonData = json_encode(serialize($this->message));
        file_put_contents("posts.json", $jsonData);
    }

    function getMessage(){

    }

}

?>
