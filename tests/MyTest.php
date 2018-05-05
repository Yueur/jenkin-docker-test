<?php

use PHPUnit\Framework\TestCase;

class MyTest extends TestCase{
    public function testAssertionWorks(){
    	$this->assertTrue(true); 
    	$this->assertEquals(true, true); 
    }
}
