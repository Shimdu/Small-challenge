<?php

require_once('class.php');

if(isset($_POST['submit'])){
    $num = $_POST['num'];

    $star1 = new Star;
    $star1->pyramids($num);
}

if(isset($_POST['submit1'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $oper = $_POST['operator'];
    
    $calculate = new Compute;
    
    echo $calculate->calculate($num1,$num2,$oper);

}

if(isset($_POST['submit2'])){
    $num = $_POST['num'];

    $calculate = new Compute;
    echo $calculate->area($num);
}

?>
<hr>
<a href="input_view.php">Back</a>