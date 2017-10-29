<!DOCTYPE html>
<html>
<style>
/* Full-width input fields */
input[type=text], input[type=password] ,input[type=tel] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0px;
    border: none;
    cursor: pointer;
    width: 100%;
}


/* Add padding to container elements */
.container {
    padding-left: 240px;
	padding-right:240px;
	padding-top:18px;
	padding-bottom:18px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
</style>
<body>

<h2>Signup Form</h2>

<form action="register.php" method="POST" style="border:1px solid #ccc">
  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="user" required>
	
	<label><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
	
	<label><b>Contact</b></label>
    <input type="tel" placeholder="Enter Contact" name="contact" required>

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>

</body>
</html>
