<?php
require('functions.php');

//if(isset($_POST['submit'])){
    $start_x = $_POST['start_x'];
    $start_y = $_POST['start_y'];
    $end_x = $_POST['end_x'];
    $end_y = $_POST['end_y'];
    
    $start = array($start_x,$start_y);
    $end = array($end_x,$end_y);
    
    echo mapDistance($start,$end);
//}

?>