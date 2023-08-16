<!DOCTYPE html>
<html>
    <head>
        <title>lab11</title>
    </head>
    <body>
        <form action="calculator.php" method="post">
            Number 1:<input type="number" name="number1"><br>
            Number 2:<input type="number" name="number2"><br>
            Selet Operation:<br>
            <input type="radio" name="Operator" value="+">Addition<br>
            <input type="radio" name="Operator" value="-">Subtraction<br>
            <input type="radio" name="Operator" value="/">Division<br>
            <input type="radio" name="Operator" value="*">Multiplication<br>

            <input type="submit" name="btnSubmit" value="Submit">
            <input type="reset">
        </form>  </body></html>