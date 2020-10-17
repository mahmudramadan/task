<?php

namespace Classes;
use MainModel;
 // error_reporting(0);
error_reporting(-1);
ini_set('display_errors', 1);
// include 'MainModel.php';
class RectangleClass 
{
    /**
     * Class constructor.
     */
    private $table = 'rectangle';
    private $width;
    private $height;
    private $MainModel;

    public function __construct(MainModel $model)
    {
        $this->MainModel = $model ;
    }
    public function setData()
    {
        $this->setWidthOrHeight('width');
        $this->setWidthOrHeight('height');
    }
    public function setWidthOrHeight($var_name , $error = 0 )
    {
        echo $error != 0 ? "Error $var_name must be integer, Please re-enter $var_name value:" : "Enter $var_name value:";
        echo "\n"; 
        $number = fgets(STDIN); 
          if ( intval($number) > 0 ) {
             $this->$var_name = intval($number);
        }else{
            return $this->setWidthOrHeight($var_name  , 1 );
        }
    }
    public function getAverage(): float
    {
        return ($this->width + $this->height) / 2;
    }
    public function getArea(): int{
        return $this->width * $this->height;
    }
    public function getAreaSquare(): int{
        return $this->getArea() * $this->getArea();
    }
    public function saveData()
    {
        $data['width'] = $this->width;
        $data['height'] = $this->height;
        $data['average'] = $this->getAverage();
        $data['area'] = $this->getArea();
        $data['square_area'] = $this->getAreaSquare();
        $data['created_at'] = date('Y-m-d H:i:s');
        if($this->MainModel->addRow($this->table, $data)){
             echo "Data inserted successfully \n"; 
        }else{
             echo "An error, please try again \n";
         }
    }
    public function getLastElements(int $limit = 5)
    {
        $data = $this->MainModel->getWhere($this->table,'*',array(),'id','desc',$limit);
        return $data;
    }
    public function showDataInTerminal($data)
    {
        if ($data) {
            echo "Last inserted items are : \n";
            foreach ($data as $value) {
                echo "ID is : $value->id  , Width is : $value->width , Height is : $value->height , created at : $value->created_at \n";
            }
        } else {
            echo "there is not data added yet\n";
        }
    }
}

?>