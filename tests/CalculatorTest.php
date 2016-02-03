<?php
include_once('src/Calculator.php');

class CalculatorTest extends PHPUnit_Framework_TestCase
{
    protected $calculator;
    private $arrayValues;
    private $circleArea;
    private $squareArea;
    private $sphereArea;
    private $cubeArea;
    private $sphereVolume;
    private $cubeVolume;

    private $totalArea;
    private $totalVolume;

    private $radius = 9;
    private $side = 5;

    protected function setUp()
    {
        $this->calculator = new Shapes\Calculator;

        $this->circleArea = pi() * $this->radius * $this->radius;
        $this->squareArea = $this->side * $this->side;
        $this->sphereArea = 4 * pi() * pow($this->radius, 2);
        $this->cubeArea = 6 * pow($this->side, 2);

        $this->sphereVolume = (4 / 3) * pi() * pow($this->radius, 3);
        $this->cubeVolume = pow($this->side, 3);

        $this->totalArea = $this->circleArea + $this->squareArea + $this->sphereArea + $this->cubeArea;
        $this->totalVolume = $this->sphereVolume + $this->cubeVolume;

    }

    public function testSurfaceArea()
    {
        $squareMock = $this->getMockBuilder('Shapes\Square')->setConstructorArgs(array($this->side))->getMock();
        $squareMock->expects($this->once())->method('area')->will($this->returnValue($this->squareArea));

        $circleMock = $this->getMockBuilder('Shapes\Circle')->setConstructorArgs(array($this->radius))->getMock();
        $circleMock->expects($this->once())->method('area')->will($this->returnValue($this->circleArea));

        $cubeMock = $this->getMockBuilder('Shapes\Cube')->setConstructorArgs(array($this->side))->getMock();
        $cubeMock->expects($this->once())->method('area')->will($this->returnValue($this->cubeArea));

        $sphereMock = $this->getMockBuilder('Shapes\Sphere')->setConstructorArgs(array($this->radius))->getMock();
        $sphereMock->expects($this->once())->method('area')->will($this->returnValue($this->sphereArea));

        $this->arrayValues = [$squareMock, $circleMock, $cubeMock, $sphereMock];
        $this->assertEquals($this->totalArea, $this->calculator->surfaceArea($this->arrayValues));
    }

    public function testTotalVolume()
    {
        $cubeMock = $this->getMockBuilder('Shapes\Cube')->setConstructorArgs(array($this->side))->getMock();
        $cubeMock->expects($this->once())->method('volume')->will($this->returnValue($this->cubeVolume));

        $sphereMock = $this->getMockBuilder('Shapes\Sphere')->setConstructorArgs(array($this->radius))->getMock();
        $sphereMock->expects($this->once())->method('volume')->will($this->returnValue($this->sphereVolume));

        $this->arrayValues = [$cubeMock, $sphereMock];
        $this->assertEquals($this->totalVolume, $this->calculator->totalVolume($this->arrayValues));
    }
}
