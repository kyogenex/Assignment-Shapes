<?php
include_once('src/Cube.php');

class CubeTest extends \PHPUnit_Framework_TestCase
{
    protected $object;
    private $side = 5;

    protected function setUp()
    {
        $this->object = new Shapes\Cube($this->side);
    }

    public function testArea()
    {
        $cubeArea = 6 * pow($this->side, 2);
        $this->assertEquals($cubeArea, $this->object->area());
    }

    public function testVolume()
    {
        $cubeVolume = pow($this->side, 3);
        $this->assertEquals($cubeVolume, $this->object->volume());
    }


}