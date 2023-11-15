<?php

require("/templates/layout");
// показывать или нет выполненные задачи
$show_complete_tasks = rand(0, 1);
$categories = ['Входящие', 'Учеба', 'Работа', 'Домашние дела', 'Авто'];
$title = 'Дела в порядке';

$works = [
    [
        "title" => "Собеседование в IT компании",
        "date" => "01.12.2019",
        "category" => "Работа",
        "сompleted" => false,
    ],
    [
        "title" => "Выполнить тестовое задание",
        "date" => "25.12.2019",
        "category" => "Работа",
        "сompleted" => false,
    ],
    [
        "title" => "Сделать задание первого раздела",
        "date" => "21.12.2019",
        "category" => "Учеба",
        "сompleted" => true,
    ],
    [
        "title" => "Встреча с другом",
        "date" => "22.12.2019",
        "category" => "Входящие",
        "сompleted" => false,
    ],
    [
        "title" => "Купить корм для кота",
        "date" => "null",
        "category" => "Домашние дела",
        "сompleted" => false,
    ],
    [
        "title" => "Заказать пиццу",
        "date" => "null",
        "category" => "Домашние дела",
        "сompleted" => false,
    ],
];
function task_list($works, $categories)
{
    $count = 0;
    foreach ($works as $work) {
        if ($categories == $work["category"]) {
                $count++;
        }
    }
    return $count;
}
?>
