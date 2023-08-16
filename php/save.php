Welcome! Your Data Is: <br>
<?php
$Education = filter_input(INPUT_GET, 'Education', FILTER_SANITIZE_STRING);?>
<?php if ($Education) : ?>
    <p>Educational Qualification: <span><?php echo $Education ?></span></p>
<?php endif ?>

<?php if(isset($_GET['Specialization']) && isset($_GET['Percentage/CGPA']) 
&& isset($_GET['Institution/Campus/University']) && isset($_GET['Country'])): ?>
Specialization: <?php echo $_GET["Specialization"]; ?><br><br>
Percentage/CGPA: <?php echo $_GET["Percentage/CGPA"]; ?><br><br>
Institution/University: <?php echo $_GET["Institution/Campus/University"]; ?><br><br>
Country: <?php echo $_GET["Country"]; ?>
<?php endif; ?>

<?php
$Year = filter_input(INPUT_GET, 'Education', FILTER_SANITIZE_STRING);?>
<?php if ($Year) : ?>
    <p>Year of Passing: <span><?php echo $Year ?></span></p>
<?php endif ?>
