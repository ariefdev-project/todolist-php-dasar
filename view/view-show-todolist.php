<?php
require_once __DIR__ . "/../busines-logic/show-todolist.php";
require_once __DIR__ . "/../view/view-add-todolist.php";
require_once __DIR__ . "/../view/view-remove-todolist.php";
require_once __DIR__ . "/../input/input.php";
function viewShowTodolist()
{
  while (true) {
    echo "======= Todolist ======" . PHP_EOL;
    showTodoList();

    echo <<<menu
========= Menu ========
1. Tambah todo
2. Hapus todo
x. Keluar

menu;

    $menu = input("Pilih");

    if ($menu == "1") {
      viewAddTodolist();
    } else if ($menu == "2") {
      viewRemoveTodolist();
    } else if ($menu == "x") {
      echo "By2" . PHP_EOL;
      break;
    } else {
      echo "Pilihan tidak ada" . PHP_EOL;
    }
  }
}
