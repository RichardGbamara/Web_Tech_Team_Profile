<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register Page</title>
</head>

<body>
	

	

	<h2>Register Here</h2>
	<!-- register form -->
	<form>
	  <label>User Name:</label><br>
	  <input type="text" name="uname"  id="uname"><br>
	  <label>User Pass:</label><br>
	  <input type="password" name="upass" id="upass"><br><br>
	  <input type="submit" name="register" id="register" value="Register" onclick="validatepost();">
	</form> 

	<!-- link to register -->
	<a href="login.php">Go to Login Page</a>

	<script type="text/javascript">

		function validatepost() {
			//colect the form data
			let userbutton = document.getElementById('register');
			const email = document.getElementById('uname').value;
			const userpass = document.getElementById('upass').value;

			//validate the email 
			if (validateEmail(email)) {
				alert('email is valid');
				//call the ajax post function
				loadDoc();
			} else{
				alert('Please enter a valid email address.');
				return false;
			}

			// Create request data object
			const data = {
				userpass,
				email
			};

			//make http post to backend register_proc.php
			function loadDoc() {
				const xhttp = new XMLHttpRequest();
				xhttp.onload = function() {
				// document.getElementById("demo").innerHTML = this.responseText;
					alert(this.responseText);
				}
				xhttp.open("GET", "register_proc.php", true);
				xhttp.send(JSON.stringify(data));
			}
		}

		// Email validation function
		function validateEmail(email) {
			const regEx = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
			return regEx.test(email);
		}
		
	</script>
</body>
</html>