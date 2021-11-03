<?php
declare(strict_types=1);

class PostLoader 
{
    private $post;
    private $message = [];

    function __construct(){
        $this->loadPost();
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

    function getMessage($numOfMgs){
        $messageDisplay = "";
        $orderMgs = array_reverse($this->message);
        foreach($orderMgs as $i => $eachMgs){
            if($i < $numOfMgs){
                $title = $eachMgs->getTitle();
                $date = $eachMgs->getDate();
                $content = getContent();
                $name = getName();

                $messageDisplay = $messageDisplay . "
                <ul>
                    <li?>Title: $title </li>
                    <li?>Name: $name </li>
                    <li?>Date: $date </li>
                    <li?>Content: $content </li>

                </ul>
                ";
            }
        }
        return $messageDisplay;

    }

}

?>
