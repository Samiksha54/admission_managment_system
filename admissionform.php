<?php

 $languageknown = null;
$lanknown = null;
$Name = $_POST["txtname"];
$Admission_Number = $_POST["txtadno"];
$DOB = $_POST["dtdob"];
$Father_name = $_POST["fathername"];
$Mother_name = $_POST["mothername"];
$Phone_no = $_POST["phnumber"];
$Email = $_POST["txtemail"]; if (isset($_POST["chklan"])) {
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

if (isset($_POST["btnsubmit"])) {
echo "<table border=\"1\"><tr><th>Student Name</th><th>DOB</th><th>Father's name</th><th>Mother's name</th><th>Phone number</th><th>Email ID</th><th>Languages known</th><th>BloodGroup</th><th>Address</th><th>State</th><th>City</th><th>Pinco de</th><th>Board</th><th>College name</th><th>Percentage</th><th>Acquired marks</th><th>Total Marks</th></tr>";
echo "<tr><td>$Name</td><td>$DOB</td><td>$Father_name</td><td>$Mother_name</td><td
>$Phone_no</td><td>$Email</td><td>$languageknown</td><td>$BloodGroup</td><td>$ Address</td><td>$State</td><td>$City</td><td>$PinCode</td><td>$Board</td><td>$Coll ege_name</td><td>$Percentage</td><td>$Acquired_marks</td><td>$Total_marks</td></tr
></table>";
} else {
echo "Please enter missing values!!!";
 
}

// Establish connection with server
$connection = mysqli_connect('localhost', 'root', '', 'admission');

if (!$connection) {
die("Connection failed: " . mysqli_connect_error());
}

 if ($_POST["ddlCRUDOp"] == "Create/Insert") {
$languageknown = null;
$lanknown = null;
$Name = $_POST["txtname"];
$Admission_Number = $_POST["txtadno"];
$DOB = $_POST["dtdob"];
$Father_name = $_POST["fathername"];
$Mother_name = $_POST["mothername"];
$Phone_no = $_POST["phnumber"];
$Email = $_POST["txtemail"]; if (isset($_POST["chklan"])) {
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

$sqlquery = "INSERT INTO admission_table (Name, Admission_no, Registered_email, phone_no, dateofbirth, bloodgroup, fathername, mothername, language, address, state, city, pincode, board, college, percentage, acquiredmarks, totalmarks)
VALUES ('$Name', '$Admission_Number', '$Email', '$Phone_no', '$DOB', '$BloodGroup', '$Father_name', '$Mother_name', '$languageknown', '$Address', '$State', '$City', '$PinCode', '$Board', '$College_name', '$Percentage', '$Acquired_marks', '$Total_marks')";

$exequery = mysqli_query($connection, $sqlquery); if ($exequery) {
echo "<span style=\"color:Red\"><p><b><center>New Record created successfully</center></b></p></span><br/>";
echo "<center><a href=\"CourseRegistrationWithDB.html\">&lt-Back</a></center>";
} else {
echo "Exception!!! not able to execute query: " . mysqli_error($connection);
 
}

mysqli_close($connection);
}
 ?>
