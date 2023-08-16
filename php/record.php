<html>
<head><meta charset="UTF-8"><link rel="stylesheet" href="style.css">
</head><body>
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
      <td> <a href="record.php"><mark>AcademicRecord</mark> </a></td>
            <td> <a href="teacherexp.php">Teaching Expirience</a></td>
            <td> <a href="workexp.php">Work Expirience</a></td>
            <td> <a href="">Reference</a></td>
            <td> <a href="">Applied For</a></td>
            <td> <a href="">Application Prreview</a></td>
        </tr> 
    </table>
    <br>
    <table class="table2">
        <td>Educational Qualification</td>
        <td>Specialization</td>
        <td>Per/CGPA</td>
        <td>Year of Passing</td>
        <td>Institution/University</td>
        <td>Country</td>
    </table>
    <br>
    <br>
    <form action="save.php" method="get">
    <table class="table3">
        <tr>
            <td> <span>Educational Qualification</span></td>
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
            <td> <span>Specialization</span></td>
            <td><input type="text" name="Specialization"> </td>
        </tr>
        <tr>
            <td><span>Percentage/CGPA</span></td>
            <td><input type="number" name="Percentage/CGPA"> </td>
        </tr>
        <tr>
            <td><span>Institution/Campus/University </span></td>
            <td><input type="text" name="Institution/Campus/University"> </td>
        </tr>
        <tr>
            <td><span>Year of Passing</span></td>
            <td><select id="year" name="Year"></select></td>
        </tr>
        <tr>
            <td><span>Country</span></td>
            <td><input type="text" name="Country"> </td>
        </tr>
    </table>
    <input type="submit" value="Add Record" class="record"
    style="position:absolute; top:59%; left: 17%;" >
    </form> 
    <button class="back button" ><p>&lt &lt <a href="Work Expirience..php">Personal Information</a></p></button>
    <button class="next button" ><p><a href="Teaching Expirience..php">Teaching Expirience</a> >></p></button>
    
    <script>
        var start = 1940;
var end = new Date().getFullYear();
var options = "";
for(var year = start ; year <=end; year++){options += "<option>"+ year +"</option>";}
document.getElementById("year").innerHTML = options;
    </script>
</body>
</html>
