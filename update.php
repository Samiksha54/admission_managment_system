<?php

$languageknown = "";
$lanknown = null;
$Name = $_POST["txtname"];
$Admission_Number = $_POST["txtadno"];
$DOB = $_POST["dtdob"];
$Father_name = $_POST["fathername"];
 $Mother_name = $_POST["mothername"];
$Phone_no = $_POST["phnumber"];
$Email = $_POST["txtemail"];
$Gender = isset($_POST["rdgender"]) ? $_POST["rdgender"] : ""; if (isset($_POST["chklan"])) {
$lanknown = $_POST["chklan"]; foreach ($lanknown as $lknown) {
$languageknown .= $lknown . "<br>";
}
}
$BloodGroup = $_POST["txtbloodgroup"];
$Address = $_POST["txtaddress"];
$State = $_POST["SeleState"];
$City = $_POST["txtcity"];
$PinCode = $_POST["txtcode"];
$Board = $_POST["txtboards"];
$College_name = $_POST["txtcollege"];
$Percentage = $_POST["txtpercent"];
$Acquired_marks = $_POST["txtmarks"];
$Total_marks = $_POST["txttotmarks"];


// Establish connection with server
$connection = mysqli_connect('localhost', 'root', '', 'admission');

if (!$connection) {
die("Connection failed: " . mysqli_connect_error());
}

if ($_POST["ddlCRUDOp"] == "Create/Insert") {
$sqlquery = "INSERT INTO nameadmission_table (Name, Admission_no, Registered_email, phone_no, dateofbirth, bloodgroup, fathername, mothername, language, gender, address, state, city, pincode, board, college, percentage, acquiredmarks, totalmarks)
VALUES ('$Name', '$Admission_Number', '$Email', '$Phone_no', '$DOB', '$BloodGroup', '$Father_name', '$Mother_name', '$languageknown', '$Gender', '$Address', '$State', '$City', '$PinCode', '$Board', '$College_name', '$Percentage', '$Acquired_marks', '$Total_marks')";

if (mysqli_query($connection, $sqlquery)) {
echo "<span style=\"color:Red\"><p><b><center>New Record created
 
successfully</center></b></p></span><br/>";
echo "<center><a href=\"update.html\">&lt-Back</a></center>";
} else {
echo "Error: " . $sqlquery . "<br>" . mysqli_error($connection);
}
} elseif ($_POST["ddlCRUDOp"] == "Read/Display") {
$selectquery = "SELECT * FROM nameadmission_table WHERE Admission_no='$Admission_Number'";
 $result = mysqli_query($connection, $selectquery);

if (mysqli_num_rows($result) > 0) { echo "<table border=\"1\">
<tr>
<th>Student Name</th>
<th>Admission No</th>
<th>Registered Email</th>
<th>Phone No</th>
<th>Date of Birth</th>
<th>Blood Group</th>
<th>Father's Name</th>
<th>Mother's Name</th>
<th>Languages Known</th>
<th>Gender</th>
<th>Address</th>
<th>State</th>
<th>City</th>
<th>Pin Code</th>
<th>Board</th>
<th>College Name</th>
<th>Percentage</th>
<th>Acquired Marks</th>
<th>Total Marks</th>
</tr>";

while ($row = mysqli_fetch_assoc($result)) { echo "<tr>
<td>".$row['Name']."</td>
<td>".$row['Admission_no']."</td>
<td>".$row['Registered_email']."</td>
<td>".$row['phone_no']."</td>
<td>".$row['dateofbirth']."</td>
<td>".$row['bloodgroup']."</td>
<td>".$row['fathername']."</td>
<td>".$row['mothername']."</td>
<td>".$row['language']."</td>
<td>".$row['gender']."</td>
<td>".$row['address']."</td>
<td>".$row['state']."</td>
<td>".$row['city']."</td>
<td>".$row['pincode']."</td>
 
<td>".$row['board']."</td>
<td>".$row['college']."</td>
<td>".$row['percentage']."</td>
<td>".$row['acquiredmarks']."</td>
<td>".$row['totalmarks']."</td>
</tr>";
}
echo "</table>";
echo "<center><a href=\"update.html\">&lt-Back</a></center>";
 } else {
echo "<span style=\"color:Red\"><p><b><center>Record not found!!!! Try with some other input</center></b></p></span><br/>";
echo "<center><a href=\"update.html\">&lt-Back</a></center>";
}
} elseif ($_POST["ddlCRUDOp"] == "Update") {
$updatequery = "UPDATE nameadmission_table SET Name='$Name',
Registered_email='$Email', phone_no='$Phone_no', dateofbirth='$DOB', bloodgroup='$BloodGroup', fathername='$Father_name', mothername='$Mother_name', language='$languageknown', gender='$Gender', address='$Address', state='$State',
city='$City', pincode='$PinCode', board='$Board', college='$College_name', percentage='$Percentage',
acquiredmarks='$Acquired_marks', totalmarks='$Total_marks'
WHERE Admission_no='$Admission_Number'";

if (mysqli_query($connection, $updatequery)) {
echo "<span style=\"color:Red\"><p><b><center>Record updated successfully</center></b></p></span><br/>";
echo "<center><a href=\"update.html\">&lt-Back</a></center>";
} else {
echo "Error: " . $updatequery . "<br>" . mysqli_error($connection);
}
} elseif ($_POST["ddlCRUDOp"] == "Delete") {
$deleteQuery = "DELETE FROM nameadmission_table WHERE Admission_no='$Admission_Number'";

if (mysqli_query($connection, $deleteQuery)) {
echo "<span style=\"color:Red\"><p><b><center>Record deleted successfully</center></b></p></span><br/>";
 
echo "<center><a href=\"update.html\">&lt-Back</a></center>";
} else {
echo "Error: " . $deleteQuery . "<br>" . mysqli_error($connection);
}
}

mysqli_close($connection);
 ?>
