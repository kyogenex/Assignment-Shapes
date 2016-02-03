<?php
include_once('src/Square.php');

class SquareTest extends \PHPUnit_Framework_TestCase
{
    protected $object;

    protected function setUp()
    {
        $this->object = new Shapes\Square(5);
    }

    public function testArea()
    {
        $this->assertEquals(25, $this->object->area());
    }

}