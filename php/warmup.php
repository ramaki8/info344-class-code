
<?php
    // Simple Warm-Up
    $rand = rand(1, 100);
    echo 'Your new random value is ' . $rand . ".\n";
    
    //Arrays and Loops
    date_default_timezone_set("America/New_York");
    $months = array();
    for($i = 1; $i <  13; $i++) {
        $month = date("F", mktime(0,0,0,$i,1,2016));
        array_push($months, $month);
    }
    foreach($months as $m) {
        echo $m . ', ';
    }
?>
