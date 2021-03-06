<?php

namespace Shapes;

include_once('ShapeInterface.php');
include_once('ThreeDimensionalShapeInterface.php');

class Sphere implements ShapeInterface, ThreeDimensionalShapeInterface
{

    protected $radius;

    /**
     * Circle constructor.
     *
     * @param int $radius
     */
    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    /**
     * Get the area
     *
     * @return int
     */
    public function area()
    {
        return 4 * pi() * pow($this->radius, 2);
    }

    /**
     * Get the perimeter
     * NOTE: For a circle/sphere this is also known as circumference
     *
     * @return int
     */
    public function perimeter()
    {
        return 2 * pi() * $this->radius;
    }

    /**
     * Get the volume
     *
     * @return int
     */
    public function volume()
    {
        return (4 / 3) * pi() * pow($this->radius, 3);
    }
}
