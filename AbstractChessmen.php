<?php
require_once 'IChessmen.php';

abstract class AbstractClass implements IChessmen
{
    public $x;
    public $y;
   /* Данный метод должен быть определён в дочернем классе */
    abstract protected function move();
    abstract protected function getPosition();

   /* Общий метод */
    public function getPosition() {
        return array('x' =>$x , 'y' =>$y);
    }
}
 ?>
