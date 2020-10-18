<?php
include './vendor/autoload.php';
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
        $data = $this->rectangle->getLastElements(5);
        var_dump($data);
    }
}
$recInstance = new RectangleClass();
 $rectangle_1 = new Test($recInstance);
