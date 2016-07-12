<?php
namespace Juhedao\PackageName;

use Illuminate\Support\Facades\Facade;

class ClassNameFacade extends Facade
{
    /**
     * Return the facade name accessor
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Juhedao\PackageName\ClassName';
    }
}