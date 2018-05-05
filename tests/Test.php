<?php

use PHPUnit\Framework\TestCase;

class Test extends TestCase{
    public function testAssertionWorks(){
    	$this->assertTrue(true); 
    	$this->assertEquals(true, true); 
    }
}
