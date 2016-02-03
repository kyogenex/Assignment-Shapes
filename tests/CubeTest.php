<?php
include_once('src/Cube.php');

class CubeTest extends \PHPUnit_Framework_TestCase
{
    protected $object;

    protected function setUp()
    {
        $this->object = new Shapes\Cube(5);
    }

    public function testArea()
    {
        $this->assertEquals(150, $this->object->area());
    }

    public function testVolume()
    {
        $this->assertEquals(125, $this->object->volume());
    }


}