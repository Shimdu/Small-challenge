<html>
    <head>
        <title>Small challenges</title>
    </head>
    <body>
        <form action="calculate.php" method="post">
            <label>Start:</label>
            <input type="text" name="start_x" placeholder="x axes"> <input type="text" name="start_y" placeholder="y axes"><br><br>
            <label>End:</label>
            <input type="text" name="end_x" placeholder="x axes"> <input type="text" name="end_y" placeholder="y axes"><br><br>
            <input type="submit" name="mapDistance">
        </form><br><br>
        <label>Result:</label>
        <input type="text" disabled>
    </body>
</html>