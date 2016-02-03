<?php
include_once('src/Sphere.php');

class SphereTest extends \PHPUnit_Framework_TestCase
{
    protected $object;
    private $radius = 9;

    protected function setUp()
    {
        $this->object = new Shapes\Sphere($this->radius);
    }

    public function testArea()
    {
        $sphereArea = 4 * pi() * pow($this->radius, 2);
        $this->assertEquals($sphereArea, $this->object->area());
    }

    public function testVolume()
    {
        $sphereVolume = (4 / 3) * pi() * pow($this->radius, 3);
        $this->assertEquals($sphereVolume, $this->object->volume());
    }
}