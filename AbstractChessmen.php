<?php
require_once 'IChessmen.php';

abstract class AbstractChessmen implements IChessmen
{
    public $x;
    public $y;
   /* Данный метод должен быть определён в дочернем классе */
    public function move(){
      
    }
    public function getPosition(){
      return array('x' =>$x , 'y' =>$y);
    }
}
 ?>
