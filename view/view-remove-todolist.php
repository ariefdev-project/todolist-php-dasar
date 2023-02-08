<?php
require_once __DIR__ . "/../model/todolist.php";
require_once __DIR__ . "/../busines-logic/remove-todolist.php";
require_once __DIR__ . "/../input/input.php";

function viewRemoveTodolist()
{
  echo "\n======= Hapus Todo ======" . PHP_EOL;
  $pilih = input("Nomor todo (x untuk batal)");

  if ($pilih == "x") {
    echo "Batal menghapus todo" . PHP_EOL;
  } else {

    $success = removeTodolist($pilih);
    if ($success) {
      echo "Berhasil menghapus todo : $pilih" . PHP_EOL;
    } else {
      echo "Gagal menghapus todo : $pilih" . PHP_EOL;
    }
  }
}
