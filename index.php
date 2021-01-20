<?php
  require_once 'Queen.php';
  require_once 'King.php';

  //создали фигуры
  $king = new King(4,3);
  $queen = new Queen(1,1);
  // перемещение фигур
  $data_queen = $queen->move(7,3);
  $data_king = $king->move(2,2);
  //Исключение возвращается в массиве, если при ходе была ошибка,
  //то здесь мы её и выводим
  if (isset($data_queen['error'])) {
    echo $data_queen['error'].'</br>';
  }
  if (isset($data_king['error'])) {
    echo $data_king['error'].'</br>';
  }
  // вывод позиций
  echo $queen->getPosition().'</br>';
  echo $king->getPosition().'</br>';
?>
