<?php

namespace Coderetreat;

use PHPUnit\Framework\TestCase;

/**
 * @covers Email
 */
final class EmailTest extends TestCase
{
    /** @var MyClass */
    private $myClass;

    protected function setUp(){
        $this->myClass = new MyClass();
    }

    public function testAction()
    {
        $this->assertEquals(0, $this->myClass->doAction(), "expected Result");
    }
}
