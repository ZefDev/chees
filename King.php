<?php
  require_once 'AbstractChessmen.php';

  class King extends AbstractChessmen
  {

    function __construct()
    {
      // code...
    }
    public function move() {
        return array('x' =>$x , 'y' =>$y);
    }
  }

?>
