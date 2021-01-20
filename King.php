<?php
  require_once 'AbstractChessmen.php';

  class King extends AbstractChessmen
  {

    function __construct($x=0,$y=0)
    {
      $this->x = $x;
      $this->y = $y;
    }
    public function move($x,$y) {
      if (($x>8 || $x<1) || ($y>8 || $y<1)) {
        throw new Exception('Выход за границы поля');
      }
      if ((!in_array($this->x, range($x-1,$x+1))) || (!in_array($this->y, range($y-1,$y+1)))) {
        throw new Exception('Данная фигура так не ходит');
      }
      $this->x = $x;
      $this->y = $y;
      return array('x' =>$this->x , 'y' =>$this->y);
    }
  }

?>
