<?php
    $current_date = getdate();

    echo "The current weekday is: ". $current_date['weekday']. " ,". $current_date['month']. " ,". $current_date['mday']. " ,". $current_date['year']. " ,". $current_date['hours']. " ,". $current_date['minutes']. " ,". $current_date['seconds'];

?>