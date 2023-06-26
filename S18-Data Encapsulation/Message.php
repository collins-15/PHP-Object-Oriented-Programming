<?php

class Message
{
    private $message;
    public function setMessage($sms)
    {
        $this->message = $sms;
    }
    public function getMessage()
    {
        echo "The message I recieved says : $this->message";
    }
}

$sms1 = new Message();
$sms1->setMessage('Hello there!');
$sms1->getMessage();