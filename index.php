<?php
  require_once 'Queen.php';
  require_once 'King.php';

  $king = new King(1,1);
  $queen = new Queen(4,3);
  print_r($king->move());
  print_r($queen->move());
?>
