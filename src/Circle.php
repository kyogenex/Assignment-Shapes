<?php

namespace Shapes;

include_once('ShapeInterface.php');

class Circle implements ShapeInterface
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
        return pi() * $this->radius * $this->radius;
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

}
