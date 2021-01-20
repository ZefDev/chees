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
        $a = $this->x; $b = $this->y;

        if ($a + $b === $x + $y || $a - $x === $b - $y) {
            // bishop
        } elseif ( $a === $x || $b === $y) {
            //  rook
        } else {
          try {
              throw new Exception();
          } catch (Exception $e) {
              return array('error' => "Данная фигура (".get_class($this).") так не ходит" );
          }
        }

        $this->x = $x;
        $this->y = $y;
        return array('x' =>$this->x , 'y' =>$this->y);
    }
  }

?>
