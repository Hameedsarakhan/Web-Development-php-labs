Welcome! Your Data Is: <br> <?php
$Education = filter_input(INPUT_GET, 'Education' ,FILTER_SANITIZE_STRING);?>
<?php if ($Education) : ?>
    <p>Highest Level of Education Taught: <span><?php echo $Education ?></span></p>
<?php endif ?>
<?php if(isset($_GET['Subjects Taught']) && isset($_GET['Class Average']) 
&& isset($_GET['Institution/Campus/University']) && isset($_GET['Country'])): ?>
Subjects Taught: <?php echo $_GET["Subjects Taught"]; ?><br><br>
Class Average: <?php echo $_GET["Class Average"]; ?><br><br>
Institution/University: <?php echo $_GET["Institution/Campus/University"]; ?><br><br>
Country: <?php echo $_GET["Country"]; ?>
<?php endif; ?>
