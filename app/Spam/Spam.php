<?php

namespace App\Spam;

use Illuminate\Support\Facades\Facade;
use App\Spam\Service\SpamServiceInterface;

class Spam extends Facade
{
    protected static function getFacadeAccessor()
    {
        return SpamServiceInterface::class;
    }
}
