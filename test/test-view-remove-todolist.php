<?php
require_once __DIR__ . "/../model/todolist.php";
require_once __DIR__ . "/../busines-logic/add-todolist.php";
require_once __DIR__ . "/../busines-logic/show-todolist.php";
require_once __DIR__ . "/../view/view-remove-todolist.php";

addTodoList("Belajar php");
addTodoList("Belajar mysql");
addTodoList("Belajar laravel");

showTodoList();
viewRemoveTodolist();
showTodoList();
