// for password and re-password 

var password = document.getElementById("password")
  , re_password = document.getElementById("re_password");

function validatePassword() {
  if (password.value != re_password.value) {
    re_password.setCustomValidity("Passwords Don't Match");
  } else {
    re_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
re_password.onkeyup = validatePassword;

// For showing Form Data.....After submit  ;)

function takevalue()
        {
            var fname=document.getElementById("fname").value;
            var lname=document.getElementById("lname").value;
            var email=document.getElementById("email").value;
            var ph=document.getElementById("pno").value;
            var branch=document.getElementById("branch").value;
            // var uname=document.getElementById("uname").value;
			
			
			
			
            document.write("Hello  "+fname+"<br><br>");
            document.write("Your Info  is succesfully Recevied : <BR><BR>"+"Name : "+fname+" "+lname+"<br>");
            
            document.write("  Email   : "+email+"<br>");
			document.write("  Phone no.   : "+ph+"<br>");
			document.write("  your branch   : "+branch+"<br>");
			
        }
