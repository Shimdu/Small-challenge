<?php
require('calculate.php');
?>
<html>
    <head>
        <title>Small challenges</title>
        <link rel='stylesheet' type='text/css' href="style.css">
        <script src="table.js"></script>
    </head>
    <body>
        <div class="header">
            <h1>The shortest distance between two points</h1>
        </div>
        <div class="map">
            <h3>Map:</h3>
            <?php map();?>
            <br>
            <input type="button" value="Test button: Color change" onClick="chgbg(['2, G','3, G','4, G','5, G','5, H','5, I'])">
        </div>
        <div class="input">
            <form action="map_distance.php" method="post">
                <label>Start:</label>
                <input type="text" name="start_x" placeholder="x axes" value="<?php if(isset($start_x)){echo $start_x;}?>">
                <input type="text" name="start_y" placeholder="y axes" value="<?php if(isset($start_y)){echo $start_y;}?>"><br><br>
                <label>End:</label>
                <input type="text" name="end_x" placeholder="x axes" value="<?php if(isset($end_x)){echo $end_x;}?>">
                <input type="text" name="end_y" placeholder="y axes" value="<?php if(isset($end_y)){echo $end_y;}?>"><br><br>
                <input type="submit" name="submit" value="Submit">
            </form><br><br>
            <label>Result:</label>
            <input type="text" value="<?php if(isset($result)){echo $result;}?>" style="width:300px" disabled>
        </div>
    </body>
</html>