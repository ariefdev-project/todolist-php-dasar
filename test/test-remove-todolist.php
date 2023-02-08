<?php

require_once __DIR__ . "/../model/todolist.php";
require_once __DIR__ . "/../busines-logic/remove-todolist.php";
require_once __DIR__ . "/../busines-logic/add-todolist.php";
require_once __DIR__ . "/../busines-logic/show-todolist.php";

echo "=========== TODOLIST =======" . PHP_EOL;
addTodoList("Belajar php");
addTodoList("Belajar mysql");
addTodoList("Belajar javascript");

showTodoList();
removeTodolist(2);

echo "=========== TODOLIST =======" . PHP_EOL;
showTodoList();
