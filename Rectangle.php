<?php

use Classes\RectangleClass;

class Test
{
    /**
     * Class constructor.
     */
    public $rectangle;
    public function __construct(RectangleClass $rec)
    {
        $this->rectangle = $rec ;
        $data = $this->rectangle->get_last_elements(5);
        var_dump($data);
    }
}

 $rectangle_1 = new Test();
