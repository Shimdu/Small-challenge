<?php
require('calculate.php');
?>
<html>
    <head>
        <title>Small challenges</title>
    </head>
    <body>
        <h1>The shortest distance between two points</h1>
        <h3>Map:</h3>
        <?php map();?>
        <hr>
        <form action="map_distance.php" method="post">
            <label>Start:</label>
            <input type="text" name="start_x" placeholder="x axes"> <input type="text" name="start_y" placeholder="y axes"><br><br>
            <label>End:</label>
            <input type="text" name="end_x" placeholder="x axes"> <input type="text" name="end_y" placeholder="y axes"><br><br>
            <input type="submit" name="submit" value="Submit">
        </form><br><br>
        <label>Result:</label>
        <input type="text" value="<?php if(isset($result)){echo $result;}?>" disabled>
    </body>
</html>