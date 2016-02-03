<?php
include_once('src/Square.php');

class SquareTest extends \PHPUnit_Framework_TestCase
{
    protected $object;
    private $side = 5;

    protected function setUp()
    {
        $this->object = new Shapes\Square($this->side);
    }

    public function testArea()
    {
        $squareArea = $this->side * $this->side;
        $this->assertEquals($squareArea, $this->object->area());
    }

}