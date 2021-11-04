<?php
class PostLoader 
{
    public function __construct(){
        $this->loadPost();
    }

    public function loadPost(){
        $jsonData = json_decode(file_get_contents("posts.json"));
       return $jsonData;
    }
    

    public function getMessage($posts){
        for ($i=count($posts)-1; $i > 0 ; $i--) { 
            $title = $posts[$i]->title;
            $name = $posts[$i]->name;
            $content = $posts[$i]->content;
            $date = $posts[$i]->date;
            echo "<ul>
                    <li?>Title: $title</li><br>
                    <li?>Name: $name </li><br>
                    <li?>Content: $content </li><br>
                    <li?>Date: $date </li><br>
                </ul>";
        }
    }
}
?>
