<?php

class Countdown
{

    private $maxDuration = 10;
    public function startCountdownFromTenTO($time)
    {
        for ($duration = 10; $duration > $time; $duration--) {
            sleep(1);
            $this->maxDuration = $this->maxDuration - 1;
            echo $this->maxDuration . " <br>";
        }
    }
}

$time1 = new Countdown();
$time1->startCountdownFromTenTO(5);