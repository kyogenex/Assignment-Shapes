<?php

namespace Shapes;

include_once('ShapeInterface.php');
include_once('ThreeDimensionalShapeInterface.php');

class Cube implements ShapeInterface, ThreeDimensionalShapeInterface
{

    protected $side;

    /**
     * Square constructor.
     *
     * @param int $side
     */
    public function __construct($side)
    {
        $this->side = $side;
    }

    /**
     * Get the area
     *
     * @return int
     */
    public function area()
    {
        return 6 * pow($this->side, 2);
    }

    /**
     * Get the perimeter
     *
     * @return int
     */
    public function perimeter()
    {
        return 4 * $this->side;
    }


    /**
     * Get the volume
     *
     * @return int
     */
    public function volume()
    {
        return pow($this->side, 3);
    }
}
