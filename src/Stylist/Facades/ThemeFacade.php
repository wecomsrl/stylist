<?php
namespace Ohswedd\Stylist\Facades;

use Illuminate\Support\Facades\Facade;

class ThemeFacade extends Facade
{
	public static function getFacadeAccessor()
    {
        return 'stylist.theme';
    }
}
