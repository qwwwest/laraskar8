<?php

namespace App\Namaskar;

//use Psr\Log\LoggerInterface;

class Namaskar
{
    //private $mempad;
    private static $mempads = [];


    public function getMempad($mempad): MemPad
    {

        if (!isset(self::$mempads[$mempad])) {
            self::$mempads[$mempad] = new MemPad($mempad);
        }

        return self::$mempads[$mempad];
    }
}