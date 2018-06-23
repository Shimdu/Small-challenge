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
            <input type="button" value="Test: Color change" onClick="chgbg('5, G')" />
        </div>
        <div class="input">
            <form action="map_distance.php" method="post">
                <label>Start:</label>
                <input type="text" name="start_x" placeholder="x axes"> <input type="text" name="start_y" placeholder="y axes"><br><br>
                <label>End:</label>
                <input type="text" name="end_x" placeholder="x axes"> <input type="text" name="end_y" placeholder="y axes"><br><br>
                <input type="submit" name="submit" value="Submit">
            </form><br><br>
            <label>Result:</label>
            <input type="text" value="<?php if(isset($result)){echo $result;}?>" disabled>
        </div>
    </body>
</html>