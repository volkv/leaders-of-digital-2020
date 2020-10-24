<?php

namespace App\Helpers;

class NCFU
{

    static function getRandomLetter(): string
    {
        $alphabet = 'цукенгшщзхэждлорпавыфячсмитбю';
        $letter   = rand(0, mb_strlen($alphabet) - 1);

        return mb_substr($alphabet, $letter, 1);
    }

}