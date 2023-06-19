<?php
class Bank
{
    public $balance = 80;
    public $amount;

    function account()
    {
        echo "Your account has " . $this->balance . "euros.";
        $this->amount = 100;
        return $this;
    }
    function withdraw()
    {
        echo " You can not withdraw " . $this->amount . " euros.";
        return $this;
    }
    function tryAgain()
    {
        echo " You can withdraw less than " . $this->balance . " euros.Try Again!";
    }

}
$bank1 = new Bank();
$bank1->account()->withdraw()->tryAgain();