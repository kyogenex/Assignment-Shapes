<?php
include_once('src/Sphere.php');

class SphereTest extends \PHPUnit_Framework_TestCase
{
    protected $object;

    protected function setUp()
    {
        $this->object = new Shapes\Sphere(9);
    }

    public function testArea()
    {
        $this->assertEquals(1017.8760197631, $this->object->area());
    }

    public function testVolume()
    {
        $this->assertEquals(3053.6280592893, $this->object->volume());
    }
}