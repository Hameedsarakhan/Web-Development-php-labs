<html>
    <body>
        <p>Performing Arthemetic With Operator Selection</p><br>
        You have entered <br>
        <p><?php echo $_POST["number1"]?> as number1<p>
        <p><?php echo $_POST["number2"]?> as number2<p>
        <p>You have selected the Operator<?php echo $_POST["Operator"]?><p>
        <p>Result:<?php echo $_POST["number1"]. $_POST["Operator"]. $_POST["number2"]?>=
        <?php
        $a = $_POST["number1"];
        $b = $_POST["number2"];
        if ($_POST["Operator"]=="+"){
            $result= $a+$b;
            echo $sum;}
        elseif($_POST["Operator"]=="-"){
            $result = $a+$b;
            echo $result;}
        elseif($_POST["Operator"]=="/"){
            $result = $a/$b;
            echo $result;}
        else{
            $result=$a*$b;
            echo $result; }
        ?> </p></body></html>


