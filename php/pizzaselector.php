<!DOCTYPE html>
<html>
    <head>
        <title>lab11</title>
    </head>
    <body>
        <form action="pizzaselector.php" method="post">
            <h1>Pizza Topping Selector</h1>
            <p>Select your favourite pizza topping</p>
            <input type="checkbox" name="PizzaFlavour[]" value="The Euro">The Euro<br>
            <input type="checkbox" name="PizzaFlavour[]" value="Fajita Sicilian">Fajita Sicilian <br>
            <input type="checkbox" name="PizzaFlavour[]" value="Chicken Tikka">Chicken Tikka <br>
            <input type="checkbox" name="PizzaFlavour[]" value="Chicken Fajita">Chicken Fajita <br>
            <input type="checkbox" name="PizzaFlavour[]" value="HotSpicy">Hot&Spicy <br>
            <input type="submit" name="btnSubmit" value="Submit">
        </form></body></html>
        //now second part
<html>
    <body>
        <h1>Pizza Topping Selector</h1>
        You selected the following flavors:<br>
        <?php
        if (isset($_POST['btnSubmit'])){
            if (isset($_POST['PizzaFlavour'])){
                echo "<ul>";
                foreach ($_POST['PizzaFlavour'] as $value){
                    echo "<li>$value</li>";
                }
                echo "</ul>"; } }?>
    </body></html>
