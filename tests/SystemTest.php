<?php

use PHPUnit\Framework\TestCase;
use Sofiakb\DetectOS\System;

/**
 * This file contains SystemTest class.
 * Created by PhpStorm.
 * User: Sofiane Akbly <sofiane.akbly@gmail.com>
 * Date: 05/07/2021
 * Time: 15:24
 */
class SystemTest extends TestCase
{
    
    public function testOS()
    {
        $this->assertEquals(System::OS_OSX, System::getOS());
        $this->assertTrue(System::isMac());
        $this->assertFalse(System::isWindows());
        $this->assertFalse(System::isLinux());
    }
    
}