<?php
include_once('src/Circle.php');

class CircleTest extends \PHPUnit_Framework_TestCase
{
    protected $object;

    protected function setUp()
    {
        $this->object = new Shapes\Circle(9);
    }

    public function testArea()
    {
        $this->assertEquals(254.46900494077, $this->object->area());
    }
}