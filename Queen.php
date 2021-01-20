<?php
  require_once 'AbstractChessmen.php';

  class Queen extends AbstractChessmen
  {

    function __construct($x,$y)
    {
      $this->x = $x;
      $this->y = $y;
    }
    public function move() {
        return array('x' =>$this->x , 'y' =>$this->y);
    }
  }

?>
