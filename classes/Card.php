<?php

class Card
{
    protected $title;
    protected $content;
    protected $color;

    public function __construct($title, $content, $color)
    {
        $this->title = $title;
        $this->content = $content;
        $this->color = $color;
    }


    public function getTitle(){
        return $this->title;
    }

    public function setTitle($title){
        $this->title = $title;
    }    

    public function getContent(){
        return $this->content;
    }

    public function setContent($content){
        $this->title = $content;
    }    

    public function getColor(){
        return $this->color;
    }

    public function setColor($color){
        $this->title = $color;
    }    


}