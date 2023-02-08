<?php

function removeTodolist(int $numberTodo): bool
{
  global $todolist;
  if ($numberTodo > sizeof($todolist)) {
    return false;
  }
  for ($i = $numberTodo; $i < sizeof($todolist); $i++) {
    $todolist[$i] = $todolist[$i + 1];
  }

  unset($todolist[sizeof($todolist)]);

  return true;
}
