<?php
$show_complete_tasks = rand(0, 1);

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