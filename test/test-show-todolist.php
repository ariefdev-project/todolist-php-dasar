<?php

require_once __DIR__ . "/../model/todolist.php";
require_once __DIR__ . "/../busines-logic/show-todolist.php";
echo "========= TODOLIST ========" . PHP_EOL;
$todolist[1] = "Belajar php";
$todolist[] = "Belajar mysql";
$todolist[] = "Belajar javascript";
$todolist[] = "Belajar nodejs";
$todolist[] = "Belajar golang";
$todolist[] = "Belajar laravel";

showTodoList();
