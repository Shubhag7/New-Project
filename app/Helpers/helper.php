<?php

namespace App\Helpers;

class helper
{
public static function numberToWords($number)
{
    $f = new \NumberFormatter("en", \NumberFormatter::SPELLOUT);
    return $f->format($number);
}

}