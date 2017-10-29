<?php
  if($_SERVER["REQUEST_METHOD"] == "POST"){
	  $username = $_POST['user'];
	  $email = $_POST['email'];
	  $password = $_POST['psw'];
	  $contact = $_POST['contact'];
	  
	  $bool = true;
	  mysql_connect('localhost','root','');
	  mysql_select_db("reviews");
	  $query = mysql_query("SELECT * FROM users");
	  while($row = mysql_fetch_array($query))
	  {
		  $table_users = $row['username'];
		  if($username == $table_users)
		  {
			  $bool = false;
			  print '<script>alert("Username has been taken!");</script>';
			  print '<script>window.location.assign("register.php");</script>';
		  }
	  }
	  if($bool)
	  {
		  mysql_query("INSERT INTO users(username,email,password,contact) VALUES('$username','$email','$password','$contact')");
		  print '<script>alert("Successfully Registered!");</script>';
		  print '<script>window.location.assign("homepage.html");</script>';
		  
	  }  
  }
?>