<?php

namespace Athulyasanthosh\TestCalc;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Athulyasanthosh\TestCalc\TestCalc
 */
class TestCalcFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'test-calc';
    }
}
