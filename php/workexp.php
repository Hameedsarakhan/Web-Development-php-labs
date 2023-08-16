<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
   </head>
<body>
<table class="table1">
        <tr>
            <th>Step I</th>
            <th>Step II</th>
            <th>Step III</th>
            <th>Step IV</th>
            <th>Step V</th>
            <th>Step VI</th>
            <th>Step VII</th>
        </tr>
        <tr>
            <td> <a href="">Personal Information</a></td>
            <td> <a href=" record.php"><mark>Academic Record</mark></a></td>
            <td> <a href="teacherexp.php">Teaching Expirience</a></td>
            <td> <a href="workexp.php">Work Expirience</a></td>
            <td> <a href="">Reference</a></td>
            <td> <a href="">Applied For</a></td>
            <td> <a href="">Application Prreview</a></td>
        </tr> 
    </table>
    <br>
    <table class="table2">
        <td>Company Name</td>
        <td>Position</td>
        <td>Average Salary</td>
        <td>Years of Expirience</td>
        <td>Country</td>
    </table>
    <br>
    <br>
    <form action="workrecord.php" method="get">
    <table class="table3">
        <tr>
            <td> <span>Company Name</span></td>
            <td><input type="text" name="Company Name"> </td>
        </tr>
        <tr>
            <td><span>Position</span></td>
            <td><input type="text" name="Position"> </td>
        </tr>
        <tr>
            <td><span>Average Salary</span></td>
            <td><input type="number" name="Average Salary"> </td>
        </tr>
        <tr>
            <td><span>Years of Expirience</span></td>
            <td><input type="number" name="Years of Expirience"> </td>
        </tr>
        <tr>
            <td><span>Country</span></td>
            <td><input type="text" name="Country"> </td>
        </tr>
    </table>
    <input type="submit" value="Add Record" class="record"
    style="position:absolute; top:59%; left: 17%;" >
    </form> 
    <button class="back" ><p>&lt &lt <a href="Teaching Expirience.php">Teaching Expirience</a></p></button>
    <button class="next" ><p><a href="Academic record.php">Reference</a> >></p></button>
</body>
</html>
