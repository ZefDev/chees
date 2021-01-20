<?php
  require_once 'AbstractChessmen.php';

  class Queen extends AbstractChessmen
  {

    function __construct($x=0,$y=0)
    {
      $this->x = $x;
      $this->y = $y;
    }
    public function move($x ,$y) {
        if (($x>8 || $x<1) || ($y>8 || $y<1)) {
          throw new Exception('Выход за границы поля');
        } 
        $this->x = $x;
        $this->y = $y;
        return array('x' =>$this->x , 'y' =>$this->y);
    }
  }

?>
