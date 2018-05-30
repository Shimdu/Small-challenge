<html>
    <head>
        <title>Small challenges</title>
    </head>
    <body>
        <h1>Pyramids</h1>
        <form action="print.php" method="post">
            <h3>Pleases enter a number of plies of pyramids</h3>
            <label>Number: </label>
            <input type="text" name="num" placeholder="A number"><br><br>
            <input type="submit" name="submit" value="Submit">
        </form><br><br>
        <label>Result:</label>
        <input type="text" value="<?php if(isset($result)){echo $result;}?>" disabled>
        <hr>
        <h1>Calculator</h1>
        <h3>Four arithmetic operations</h3>
        <form action="print.php" method="post">
            <input type="text" name="num1" placeholder="A number">
            <select name="operator">
                <option value="+"> + </option>
                <option value="-"> - </option>
                <option value="*"> * </option>
                <option value="/"> / </option>
            </select>
            <input type="text" name="num2" placeholder="A number">
            <input type="submit" name="submit1" value="Submit">
        </form><br><br>
        <label>Result:</label>
        <input type="text" value="<?php if(isset($result)){echo $result;}?>" disabled>
        <br>
        <h3>Area calculation</h3>
        <form action="print.php" method="post">
            <input type="text" name="num" placeholder="Radius"><br><br>
            <input type="submit" name="submit2" value="Submit">
        </form>
        <hr>
    </body>
</html>