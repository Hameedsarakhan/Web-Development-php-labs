<html>
<body>

<?php
// get form selection
$day = $_GET['day'];
// initialize $special variable
$special = '';

// check value and select appropriate item using switch-case
switch ($day) {
    case 1:
        $special = 'Chicken';
        break;
    case 2:
        $special = 'Rice';
        break;
    case 3:
        $special = 'Potatoes and salad';
        break;
    default:
        $special = 'Fish';
}

?>

<h2>Today's special is:</h2>
<?php echo $special; ?>
</body>
</html>
