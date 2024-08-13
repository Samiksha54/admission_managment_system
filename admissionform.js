<script type="text/javascript">

function Admission_form() {
var name = document.getElementById('txtname').value; var adm=document.getElementById('txtadm').value;
var RegEmail = document.getElementById('txtemail').value; var Phone_no = document.getElementById('phnumber').value; var dob = document. getElementById('dtdob').value;
var Bloodgroup = document.getElementById('txtbloodgroup').value; var Father_name = document.getElementById('fathername').value; var Mother_name = document.getElementById('mothername').value; var Language_known = [];
var gender = null;
var address = document.getElementById('txtaddress').value; var state = document.getElementById('SeleState').value; var city = document.getElementById('txtcity').value;
var pincode = document.getElementById('txtcode').value; var board = document.getElementById('txtboards').value;
 
var college = document.getElementById('txtcollege').value; var percentage = document.getElementById('txtpercent').value; var acqmarks = document.getElementById('txtmarks').value; var totmarks = document.getElementById('txttotmarks').value;

var rdvalue = document.getElementsByName("rdgender"); for (var i = 0; i < rdvalue.length; i++) {
if (rdvalue[i].checked) { gender = rdvalue[i].value;
 }
}

var chkvalue = document.getElementsByName("chklan"); for (var j = 0; j < chkvalue.length; j++) {
if (chkvalue[j].checked) { Language_known.push(chkvalue[j].value);
}
}
//declaration of an array which will hold the data of the each student var formData = [
name, adm, RegEmail, Phone_no, dob,
Bloodgroup, Father_name, Mother_name,
Language_known.join(", "), gender,
address, state, city, pincode, board, college,
percentage, acqmarks, totmarks
];

var validationMessage = validateFormData(formData); if (validationMessage !== "") {
alert(validationMessage);
}
}
// javascript to validate the data entered by the user function validateFormData(formData) {
var patternEmail = /^\w+([\.-]?\w+)@\w+([\.-]?\w+)(\.\w{2,3})+$/; var patternPhone = /^[0-9]{10}$/;
 
var patternName = /^[a-zA-Z\s]*$/;

if (!patternName.test(formData[0])) { return "Invalid Name";
}
if (!patternEmail.test(formData[2])) { return "Invalid Email";
}
 if (!patternPhone.test(formData[3])) { return "Invalid Phone Number";
}
if (formData[4] === "") { return "DOB is required";
}
if (formData[6] === "" || !patternName.test(formData[6])) { return "Invalid Father's Name";
}
if (formData[7] === "" || !patternName.test(formData[7])) { return "Invalid Mother's Name";
}
if (formData[9] === null) { return "Gender is required";
}
if (formData[10] === "") { return "Address is required";
}
if (formData[11] === "0") { return "State is required";
}
if (formData[12] === "") { return "City is required";
}
if (formData[13] === "") { return "Pincode is required";
}
if (formData[15] === "0") { return "Board is required";
}
if (formData[16] === "") {
return "College name is required";
}
if (formData[17] === "") {
return "Percentage is required";
}
if (formData[18] === "") {
return "Acquired marks are required";
}
if (formData[19] === "") {
return "Total marks are required";
}
 
return "";
}

</script>
