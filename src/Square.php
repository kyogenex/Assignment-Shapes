<?php

namespace Shapes;

include_once('ShapeInterface.php');

class Square implements ShapeInterface
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
        return $this->side * $this->side;
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
        return 0;
    }
}
