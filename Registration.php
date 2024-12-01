<?php
// Include the database connection file
require 'db.php';
// Check if the request method is POST (i.e., form submitted)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Retrieve form data from POST request
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $passno = $_POST['passno'];
    $pno = $_POST['pno'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $gender = $_POST['sex'];

    try {
        // SQL query to insert user data into the 'users' table
        $sql = "INSERT INTO users (fname, lname, username, dob, email, passno, pno, password, gender) VALUES ('$fname', '$lname', '$username', '$dob', '$email', '$passno', '$pno', '$password', '$gender')";
       // Redirect the user to the login page with a success message
        header("Location: index.php?message=Registration successful! Please log in.");
        exit();
    } catch (PDOException $e) {
        $error = $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title> Registration </title>
	 <style>
/* General reset and box-sizing */
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}
 /* Full page styling */
        body{
    display: flex;
    height: 100vh;
    justify-content: center;
    align-items: center;
    background: url(bg3.webp);
    background-size: cover;
}
/* Form container styling */
.container{
    width: 100%;
    max-width: 650px;
    background: rgba(0, 0, 0, 0.5);
    padding: 28px;
    margin: 0 28px;
    border-radius: 10px;
    box-shadow: inset -2px 2px 2px white;
}
/* Form title styling */
.form-title{
    font-size: 26px;
    font-weight: 600;
    text-align: center;
    padding-bottom: 6px;
    color: white;
    text-shadow: 2px 2px 2px black;
    border-bottom: solid 1px white;
}
/* Styling the form's main user info section */
.main-user-info{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    padding: 20px 0;
   
}
/* Styling individual input fields */

.user-input-box:nth-child(2n){
    justify-content: end;
}

.user-input-box{
    display: flex;
    flex-wrap: wrap;
    width: 46%;
    padding-bottom: 15px;
   
}

.user-input-box label{
    width: 95%;
    color: white;
    font-size: 20px;
    font-weight: 400;
    margin: 5px 0;
}
.user-input-box input{
    height: 35px;
    width: 95%;
    border-radius: 20px;
    outline: none;
    border: 1px solid grey;
    padding: 0 10px;
}
.submit-btn{
    margin-top: 40px;
}

.submit-btn input:hover{
    background: rgba(13, 88, 128, 0.7);
    color: rgb(255, 255, 255);
}
/* Select input styling */
        select {
            width: 95%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 10px;
        }

        
/* Display error messages in red */
        .error {
            color: red;
        }
        .submit-btn{
            display: block; width: 50%; position: relative; left: 160px;
    margin-top: 10px; font-size: 20px; padding: 10px; border:none; cursor: pointer; border-radius: 3px; color: rgb(209, 209, 209);
    background: rgba(11, 185, 31, 0.7);
        }
    </style>
</head>
<body>

	
	<form method="post" action="">
        <div class="container">
        <h1 class="form-title">Registration</h1>
		<form action="#">
        <!--main container-->
            <div class="main-user-info"> 
              <div class="user-input-box">  <!--user input class-->
                <label for="fname">First Name</label><input type="text"id="fname"name="fname" placeholder="Enter First Name" required/>
          </div>
          <div class="user-input-box">
            <label for="lname">Last Name</label>
        <input type="text"
                id="lname"
                name="lname"
                placeholder="Enter Last Name" required/>
      </div>
      <div class="user-input-box">
        <label for="username">Username</label>
    <input type="text"
            id="username"
            name="username"
            placeholder="Enter Username" required/>
    </div>
      <div class="user-input-box">
        <label for="dob">Birth Date</label>
    <input type="date"
            id="dob"
            name="dob"
            placeholder="Enter Birth Date" required/>
  </div>
  <div class="user-input-box">
    <label for="email">Email</label>
<input type="email"
        id="email"
        name="email"
        placeholder="Enter Email" required/>
</div>
<div class="user-input-box">
    <label for="passno">Passport Number</label>
<input type="text"
        id="passno"
        name="passno"
        placeholder="Enter Passport Number" required/>
</div>
<div class="user-input-box">
    <label for="pno">Phone Number</label>
<input type="text"
        id="pno"
        name="pno"
        placeholder="Enter Phone Number" required/>
</div>
<div class="user-input-box">
    <label for="password">Password</label>
<input type="password"
        id="password"
        name="password"
        placeholder="Enter Password" required/>

</div>
<div class="user-input-box">
    <label for="password">Confirm Password</label>
<input type="password"
        id="password"
        name="password"
        placeholder="Confirm Password" required/>

</div>
<div class="user-input-box">
    <label for="sex">Gender</label>
    <select id="sex" name="sex"  required>
        <option value="selectoption" >Select Gender</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select>
</div>

  <button type="submit" value="Register" class="submit-btn"> Register</button> <!--registration link-->
  </div>
  <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
	</form>
</div>
</form>
</body>
</html>