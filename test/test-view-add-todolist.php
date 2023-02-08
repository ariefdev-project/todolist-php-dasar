<?php

require_once __DIR__ . "/../model/todolist.php";
require_once __DIR__ . "/../busines-logic/show-todolist.php";
require_once __DIR__ . "/../view/view-add-todolist.php";
require_once __DIR__ . "/../busines-logic/add-todolist.php";

addTodoList("Belajar php");
addTodoList("Belajar mysql");
addTodoList("Belajar laravel");

showTodoList();

viewAddTodolist();
showTodoList();
