<?php

namespace Ss\Etc;


class Runtime
{

    public $StartTime = 0;
    public $StopTime = 0;

    function Start()
    {
        $this->StartTime = $this->GetMicroTime();
    }

    function GetMicroTime()
    {
        list($usec, $sec) = explode(' ', microtime());
        return ((float)$usec + (float)$sec);
    }

    function Stop()
    {
        $this->StopTime = $this->GetMicroTime();
    }

    function SpendTime()
    {
        return round(($this->StopTime - $this->StartTime) * 1000, 1);
    }

}