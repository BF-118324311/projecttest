<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
/* Style all input fields */
input {
  width: 25%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
}

/* Style the submit button */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
}

/* Style the container for inputs */
.container {
  background-color: #f1f1f1;
  padding: 20px;
}

/* The message box is shown when the user clicks on the password field */
#message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}

#message p {
  padding: 10px 35px;
  font-size: 18px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "✖";
}
</style>

<title>Payment Details</title>

</head>
<body>

<h3>Password Validation</h3>
<p>Try to submit the form.</p>

<div class="container">
  <form action="/action_page.php">
    <label for="usrname">Name:</label>
    <input type="text" id="txtName" name="txtName" required>
    
    <br>

    <label for="password">Password:</label>
    <input type="password" id="pass" name="pass" pattern="(?=.*\d).{4,}" title="Must be a 4 digit pin" required>
    
    <br>
    
    <label for="phone">Phone Number:</label>
    <input type="text" id="txtNum" name="txtNum" required>
    
    <br>
    
    <input type="submit" value="Submit">
  </form>
</div>

<div id="message">
  <h3>Password must contain the following:</h3>
  <p id="length" class="invalid"><b>4 digit pin</b></p>
</div>
				
<script>
var myInput = document.getElementById("password");
var length = document.getElementById("length");
var number = document.getElementById("number");

// When the user clicks on the password field, show the message box
myInput.onclick = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}


// Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  
  // Validate length
  if(myInput.value.length <= 4) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>

</body>
</html>
