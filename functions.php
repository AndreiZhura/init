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

    $ny_date = strtotime("now");

    date_default_timezone_set('Europe/Moscow');
        $one = strtotime($works);

        $diff =  $one - $ny_date;
        $number = floor($diff /3600);
        if($number == "null")
        {
            return 2;
        }
        if ($number > -24 ) {
           
            return 1;
        } 
         else {
            return 2;
        }
    
}
?>