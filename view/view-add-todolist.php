<?php
require_once __DIR__ . "/../model/todolist.php";
require_once __DIR__ . "/../busines-logic/add-todolist.php";
require_once __DIR__ . "/../input/input.php";

function viewAddTodolist()
{
  echo "\n======= Tambah todo ======" . PHP_EOL;
  $pilihan = input("todo (x untuk batal)");

  if ($pilihan == "x") {
    echo "By2" . PHP_EOL;
  } else {
    addTodoList($pilihan);
  }
}
