<?php
class PostLoader 
{
    //private $post;
    //private $message = [];

    public function __construct(){
        $this->loadPost();
    }

    public function loadPost(){
        $jsonData = json_decode(file_get_contents("posts.json"));
       // $jsonData[] = $this->message;
       
       
       return $jsonData;
    }
    

    public function getMessage($posts){
        for ($i=count($posts)-1; $i > 0 ; $i--) { 
            echo $posts[$i]->title;
            echo  $posts[$i]->name;
            echo  $posts[$i]->content;
            echo  $posts[$i]->date;
        }


        /*foreach($test as $key => $value){
            echo $test[$key]->title;
        }*/




       /* $messageDisplay = "";
        $orderMgs = array_reverse($this->message);
        foreach($orderMgs as $index => $eachMgs){
            if($index < $howManyPostShow){
                $title = $eachMgs->getTitle();
                $date = $eachMgs->getDate();
                $content = $eachMgs->getContent();
                $name = $eachMgs->getName();

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
        return $messageDisplay;*/

    }

}

?>
