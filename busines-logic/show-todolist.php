<?php
function showTodoList()
{
  global $todolist;

  foreach ($todolist as $number => $value) {
    echo "[{$number}]. $value" . PHP_EOL;
  }
}
