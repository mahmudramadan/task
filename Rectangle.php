<?php
use Classes\RectangleClass;
use Classes\MainModel;
use Classes\ConnectDb;
class Test
{
    /**
     * Class constructor.
     */
    public $rectangle;
    public function __construct(RectangleClass $rec)
    {
        $this->rectangle = $rec ;
        $data = $this->rectangle->getLastElements(5);
        var_dump($data);
    }
}
 $rectangle_1 = new Test();
