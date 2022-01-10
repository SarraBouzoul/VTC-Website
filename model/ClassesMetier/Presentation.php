<?php

class Presentation
{
    private $title;

    private $description;
    private $video;
    private $image;

    public function __construct($title, $description, $video,$image){
        $this->title=$title;
        $this->description=$description;
        $this->video=$video;
        $this->image=$image;

    }
    public function getTitle()
    {
        return $this->title;
    }
    public function setTitle($title)
    {
        $this->title = $title;

    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setDescription($description)
    {
        $this->description = $description;

    }
    public function getVideo()
    {
        return $this->video;
    }
    public function setVideo($video)
    {
        $this->video = $video;

    }
    public function setImage($image)
    {
        $this->image = $image;

    }

    public function getImage()
    {
        return $this->image;
    }

}