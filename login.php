<?php
// login.php
session_start();
require_once 'db.php';

$error = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE username = :username");
    $stmt->execute([':username' => $username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user'] = $user['username'];
        header("Location: Homepage.php");
    } else {
        $error = "Invalid Username or Password!";
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login </title>
   
	 <style> 
     
        body{
         display: flex;
         justify-content: center;
         align-items: center;
         min-height: 100vh;
         background: url(loginbg.jpg) no-repeat;
         background-size: cover;
         background-position: center;
  }
          h1 {
            font-size: 36px;
            text-align: center;
        }

        .container {
           width: 420px;
           background: transparent;
           border: 2px solid rgba(255, 255, 255, .2);
           backdrop-filter: blur(15px);
           color: #fff;
           border-radius: 12px;
           padding: 30px 40px;
        }
        .container.input-box{
         position: relative;
         width: 100%;
         height: 50px;
    
        margin: 30px 0;
        }
       .input-box input{
            width: 100%;
            height: 100%;
            background: transparent;
            border: none;
            outline: none;
            border: 2px solid rgba(255, 255, 255, .2);
            border-radius: 40px;
            font-size: 16px;
            left:10px;
            color: #fff;
            padding: 20px 45px 20px 20px;
         }
     .input-box input::placeholder{
           color: #fff;
        }

        .alert-light {
            color: #721c24;
            padding: 5px;
            border-radius: 3px;
            margin: 10px 0;
        }
        .container.remember-forgot{
            display: flex;
            justify-content: space-between;
            font-size: 16px;
            margin: -15px 0 15px;
        }

        .remember-forgot a{
            position:absolute; 
            color: #fff;
            left: 300px;
            text-decoration: none;
        }
    .remember-forgot a:hover{
            text-decoration: underline;
         }
    .container .register-link{
         font-size: 14.5px;
         text-align: center;
         margin: 20px 0 15px;
  
         }
     .register-link p a{
        color: #fff;
        text-decoration: none;
        font-weight: 600;
        }
    .register-link p a:hover{
         text-decoration: underline;
        }
    </style>
</head>
<body>
	<body>
    
  
	 <div class="container">
        <h1>Login</h1>

        <form action="process.php" method="post">

            <div class="input-box">
            <p><label for="username">&nbsp&nbsp&nbsp UserName </label>  
            <input type="text" name="username" placeholder="Username" style="width: 280px" required>
            <ion-icon name="person-outline"></ion-icon>
        </div>
            <div class="input-box">
                <p><label for="password"> &nbsp&nbsp&nbsp Password  </label>
            <input type="password" name="password" placeholder="Password" style="width: 280px"  required>
            <ion-icon name="lock-closed-outline"></ion-icon>
            
        </div>
            <br>
            <div class="remember-forgot">
                <label><input type="checkbox" > Remember Me &nbsp&nbsp&nbsp</label>  
                <a href="#">Forgot Password</a>
              </div>
              <br><br>
              <button type="submit" class="btn" style="  width: 100%; height: 45px;background: #fff;border: none;outline: none;
              border-radius: 40px;box-shadow: 0 0 10px rgba(0, 0, 0, .1);cursor: pointer;font-size: 16px;
              color: #333;font-weight: 600px;">Login</button>
              <div class="register-link">
                <p>Don't have an account? <a href="Registration.html">Register</a></p> <!--Registration Link-->
              </div>

              <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
            
        </form>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>