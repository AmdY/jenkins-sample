<?php
require_once 'src/Foo.php';
class FooTest extends PHPUnit_Framework_TestCase
{
    public function testBar()
    {
        $object = new Foo();
        $this->assertEquals('Foo::bar', $object->bar());
    }
}