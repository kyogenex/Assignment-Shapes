<?php
include_once('src/Calculator.php');

class CalculatorTest extends PHPUnit_Framework_TestCase
{
    protected $calculator;
    private $arrayValues;

    protected function setUp()
    {
        $this->calculator = new Shapes\Calculator;
    }

    public function testSurfaceArea()
    {
        $squareMock = $this->getMockBuilder('Shapes\Square')->setConstructorArgs(array(9))->getMock();
        $squareMock->expects($this->once())->method('area')->will($this->returnValue(25));

        $circleMock = $this->getMockBuilder('Shapes\Circle')->setConstructorArgs(array(9))->getMock();
        $circleMock->expects($this->once())->method('area')->will($this->returnValue(254.46900494077));

        $cubeMock = $this->getMockBuilder('Shapes\Cube')->setConstructorArgs(array(5))->getMock();
        $cubeMock->expects($this->once())->method('area')->will($this->returnValue(150));

        $sphereMock = $this->getMockBuilder('Shapes\Sphere')->setConstructorArgs(array(9))->getMock();
        $sphereMock->expects($this->once())->method('area')->will($this->returnValue(1017.8760197631));

        $this->arrayValues = [$squareMock, $circleMock, $cubeMock, $sphereMock];
        $this->assertEquals(1447.3450247039, $this->calculator->surfaceArea($this->arrayValues));
    }

    public function testTotalVolume()
    {
        $cubeMock = $this->getMockBuilder('Shapes\Cube')->setConstructorArgs(array(5))->getMock();
        $cubeMock->expects($this->once())->method('volume')->will($this->returnValue(125));

        $sphereMock = $this->getMockBuilder('Shapes\Sphere')->setConstructorArgs(array(9))->getMock();
        $sphereMock->expects($this->once())->method('volume')->will($this->returnValue(3053.6280592893));

        $this->arrayValues = [$cubeMock, $sphereMock];
        $this->assertEquals(3178.6280592893, $this->calculator->totalVolume($this->arrayValues));
    }
}
