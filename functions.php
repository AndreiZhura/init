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


function difference_in_time($works)
{

    date_default_timezone_set('Europe/Moscow');
    $ny_date = strtotime("now");

        $date_work = strtotime($works);

        $diff =  $date_work - $ny_date;
        $number = floor($diff /3600);
        if($date_work == false)
        {
            return 2;
        }
        if ($number < 24 ) {
           
            return 1;
        } 
         else {
            return 2;
        }
    
}
?>