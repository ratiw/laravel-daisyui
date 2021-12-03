<?php
namespace App\Models;

class UserStatus
{
    const INACTIVATED = 0;
    const ACTIVATED   = 1;
    const SUSPENDED   = 2;

    public static function text($value)
    {
        return [
            self::INACTIVATED => 'Inactivated',
            self::ACTIVATED   => 'Activated',
            self::SUSPENDED   => 'Suspended',
        ][$value];
    }

    public static function badge($value)
    {
        return [
            self::INACTIVATED => '<span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-gray-100 text-gray-800">Inactivated</span>',
            self::ACTIVATED   => '<span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-green-100 text-green-800">Activated</span>',
            self::SUSPENDED   => '<span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-red-100 text-red-800">Suspended</span>',
        ][$value];
    }
}
