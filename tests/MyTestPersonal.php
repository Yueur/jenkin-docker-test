<?php

use PHPUnit\Framework\TestCase;

class MyTestPersonal extends TestCase{
    public function testAssertionWorks(){
    	$this->assertTrue(true); 
    	$this->assertEquals(true, true); 
    }
}
