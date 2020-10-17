<?php
include './Classes/RectangleClass.php';
$rectangle = new RectangleClass();
$rectangle->setData();
$rectangle->saveData();
$data = $rectangle->getLastElements(5);
$rectangle->show_data_in_terminal($data);
