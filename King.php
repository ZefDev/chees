<?php
  require_once 'AbstractChessmen.php';

  class King extends AbstractChessmen
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
