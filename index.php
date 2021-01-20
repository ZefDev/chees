<?php
  require_once 'Queen.php';
  require_once 'King.php';

  //создали фигуры
  $king = new King(4,3);
  $queen = new Queen(1,1);
  // перемещение фигур
  $queen->move(7,3);
  $king->move(2,2);
  // вывод позиций
  print_r($queen->getPosition());
  print_r($king->getPosition());
?>
