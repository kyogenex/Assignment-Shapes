<?php
include_once('src/Circle.php');

class CircleTest extends \PHPUnit_Framework_TestCase
{
    protected $object;
    private $radius = 9;

    protected function setUp()
    {
        $this->object = new Shapes\Circle($this->radius);
    }

    public function testArea()
    {
        $circleArea = pi() * $this->radius * $this->radius;
        $this->assertEquals($circleArea, $this->object->area());
    }
}