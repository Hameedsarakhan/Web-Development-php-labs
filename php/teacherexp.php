<html lang="en">
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
            <td> <a href="Academic record.php">Academic Record</a></td>
            <td> <a href="Teaching Expirience.php"><mark>Teaching Expirience</mark></a></td>
            <td> <a href="Work Expirience.html">Work Expirience</a></td>
            <td> <a href="">Reference</a></td>
            <td> <a href="">Applied For</a></td>
            <td> <a href="">Application Prreview</a></td>
        </tr> 
    </table>
    <br>
    <table class="table2">
        <td>Highest Level of Education Taught</td>
        <td>Subjects Taught </td>
        <td>Class Average</td>
        <td>Institution/University</td>
    </table>
    <br>
    <br>
    <form action="teachingdata.php" method="get">
    <table class="table3">
        <tr>
            <td> <span>Highest Level of Education Taught</span></td>
            <td><select name="Education">
                <option value="Doctor of Philosophy PhD">Doctor of Philosophy PhD</option>
                <option value="Master's Degree">Master's Degree</option>
                <option value="Bachelor's Degree">Bachelor's Degree</option>
                <option value="FSc">FSc</option>
                <option value="Matriculation">Matriculation</option>
                <option value="High School">High School</option>
            </select> </td>
        </tr>
        <tr>
            <td> <span>Subjects Taught</span></td>
            <td><input type="text" name="Subjects Taught"> </td>
        </tr>
        <tr>
            <td><span>Class Average</span></td>
            <td><input type="number" name="Class Average"> </td>
        </tr>
        <tr>
            <td><span>Institution/Campus/University</span></td>
            <td><input type="text" name="Institution/Campus/University"> </td>
        </tr>
    </table>
    <input type="submit" value="Add Record" class="record"
    style="position:absolute; top:59%; left: 17%;" >
    </form> 
    <button class="back" ><p>&lt &lt <a href="Academic record.php">Academic Record</a> </p></button>
    <button class="next" ><p><a href="Work Expirience.html">Work Expirience >></p></button>
</body>
</html>
