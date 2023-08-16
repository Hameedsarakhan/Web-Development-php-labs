

<?php if(isset($_GET['Company Name']) 
&& isset($_GET['Position']) 
&& isset($_GET['Average Salary']) 
&& isset($_GET['Years of Expirience'])
&& isset($_GET['Country'])): ?>
Company Name: <?php echo $_GET["Company Name"]; ?><br><br>
Position: <?php echo $_GET["Position"]; ?><br><br>
Average Salary: <?php echo $_GET["Average Salary"]; ?><br><br>
Country: <?php echo $_GET["Years of Expirience"]; ?><br><br>
Country: <?php echo $_GET["Country"]; ?>
<?php endif; ?
