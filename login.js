<script type="text/javascript"> function studentLogin() {
// Accessing the value of the GUI component.
var userName = document.getElementById('txtusername').value; var password = document.getElementById('txtpassword').value;
// Defining regular Expression for Validation.
var pattern1 = /^[a-zA-Z]+$/; // Allows only uppercase and lowercase letters for username var pattern2 = /^[a-zA-Z0-9]+$/; // Allows only alphanumeric characters for password
// Validation of details.
if (userName === "" || password === "") { alert("Please enter the input!!!!!!"); return false;
 
} else if (!userName.match(pattern1) || !password.match(pattern2)) { alert("Invalid login credentials!!!!");
return false;
} else {
return true;
}
}
</script>
