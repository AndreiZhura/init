<?php

require("helpers.php");
require("data.php");
require("functions.php");

$page_content = include_template("main.php",[
    "categories" => $categories,
    "show_complete_tasks" => $show_complete_tasks,
     "works" => $works,
]);

$layout_content = include_template("layout.php",[
    "content" => $page_content,
     "title" => "Главная страница",
]);

print($layout_content);
?>
