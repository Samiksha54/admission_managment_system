<script type="text/javascript"> function forgot_Password () {
var RegEmail = document. getElementById('txtname').value; var NewPassword = document. getElementById('txtpass').value;
 var ConPassword = document. getElementById('txtpass2').value; var pattern1 = /^\w+([\. -]?\w+)@\w+([\.-]?\w+)(\.\w{2,3})+$/; var pattern2 = /[0-9]/;
if ((RegEmail === "")||(NewPassword === "")||(ConPassword === "")){
alert ("Please enter input!!");
}
else { if((RegEmail.match(pattern1))&&(NewPassword.match(pattern2))&&(ConPassword.match( pattern2))){
if (NewPassword === ConPassword) { window. location="login_page.html";
}
else {
alert ("Password do not match");
}
}
else {
alert ("Invalid login details");
}
}
}
</script>
