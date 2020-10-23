<?php

namespace App\Contracts;

interface SluggableContract
{
    public function getSlugField(): string;
}