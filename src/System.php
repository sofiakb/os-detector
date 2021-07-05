<?php
/**
 * This file contains System class.
 * Created by PhpStorm.
 * User: Sofiane Akbly <contact.sofiakb@gmail.com>
 * Date: 05/07/2021
 * Time: 14:57
 */

namespace Sofiakb\DetectOS;


/**
 * Class System
 * @package Sofiakb\DetectOS
 * @author Sofiane Akbly <contact.sofiakb@gmail.com>
 */
final class System
{
    /**
     * Integer value for unknown OS
     */
    const OS_UNKNOWN = 1;
    
    /**
     * Integer value for Windows OS
     */
    const OS_WIN = 2;
    
    /**
     * Integer value for Linux OS
     */
    const OS_LINUX = 3;
    
    /**
     * Integer value for Mac OS
     */
    const OS_OSX = 4;
    
    /**
     * @return int
     */
    public static function getOS()
    {
        switch (true) {
            case stristr(PHP_OS, 'DAR'):
                return self::OS_OSX;
            case stristr(PHP_OS, 'WIN'):
                return self::OS_WIN;
            case stristr(PHP_OS, 'LINUX'):
                return self::OS_LINUX;
            default :
                return self::OS_UNKNOWN;
        }
    }
    
    /**
     * Check if it's Windows.
     *
     * @return bool
     */
    public static function isWindows()
    {
        return self::getOS() === self::OS_WIN;
    }
    
    /**
     * Check if it's Linux.
     *
     * @return bool
     */
    public static function isLinux()
    {
        return self::getOS() === self::OS_LINUX;
    }
    
    /**
     * Check if it's Mac OS.
     *
     * @return bool
     */
    public static function isMac()
    {
        return self::getOS() === self::OS_OSX;
    }
    
}