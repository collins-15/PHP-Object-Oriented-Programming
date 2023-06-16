<?php
// Getters and Setters
class Video
{
    // Properties
    public $type = "";
    public $duration = "";

    // Setter -set method

    function setVideoInfo($video_type, $video_duration)
    {
        $this->type = $video_type;
        $this->duration = $video_duration;

    }


    // Getter -get method
    function getVideoInfo()
    {
        return "This is an " . $this->type . "video and it lasts" . $this->duration . "seconds";
    }
}
// Create Object
$myVideo = new Video();
$myVideo->setVideoInfo(".mp4", 45);
echo $myVideo->getVideoInfo();