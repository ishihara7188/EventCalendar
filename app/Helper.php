<?php
namespace App\Helper;

class Helper
{
static public function eventTime($element)
    {
        $time = new \DateTime($element);                
        return $time->format('Y-m-d\TH:i');
    }
}