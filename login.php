<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: manageUsers.php");
    exit;
}
 
// Include config file
require_once "connect.php";
 
// Define variables and initialize with empty values
$email = $password = $userType = $userId = "";
$email_err = $password_err = $login_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if email is empty
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter email.";
    } else{
        $email = trim($_POST["email"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($email_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT email, password, userType, id FROM users WHERE email = ?";
        
        if($stmt = mysqli_prepare($mysqli, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            // Set parameters
            $param_email = $email;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);

                // var_dump(mysqli_stmt_bind_result($stmt,  $email, $hashed_password, $userType));
                // exit();
                
                // Check if email exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt,  $email, $hashed_password, $userType, $userId);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["email"] = $email;                            
                            $_SESSION["userType"] = $userType;                           
                            $_SESSION["userId"] = $userId;                           
                            
                            // Redirect user to welcome page
                            if($userType === "admin")
                            {
                                header("location: admin/index.php");
                            }
                            elseif ($userType === "superAdmin") 
                            {
                                header("location: superadmin/index.php");
                            }
                            elseif ($userType === "alumni") 
                            {
                                // var_dump($userType);exit();
                                header("location: alumni/index.php");
                            }
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid email or password.";
                        }
                    }
                } else{
                    // email doesn't exist, display a generic error message
                    $login_err = "Invalid email or password.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($mysqli);
}
?>
<!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
    
    
 	<title>Login</title>
    <style>
        body {
            display: block;
            margin: auto;
            }
        .container 
        {
            border-radius: 5px;
            background-color: #44c8f6;
            padding: 20px;
            margin: auto;
            height: 350px;
            width: 500px;
           
        }
        .container a {
            background-color: #ee3a3a;
            color: white;
            padding: 15px 25px;
            text-decoration: none;
            float:left;
        }
        
        h3 {
            text-align: center;
            margin-bottom: 3px;
        }
        input[type=text][name=name] {
            width: 48%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 5px;
            margin-bottom: 10px;
            margin-right: 30px;
        }
        input[type=text][name=regno] {
            width: 23%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 5px;
            margin-bottom: 10px;
            margin-right: 30px;
        }
        input[type=text][name=exam] {
            width: 20%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 5px;
            margin-bottom: 10px;
            margin-right: 30px;
        }
        input[type=text][name=mobileno] {
            width: 25%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 5px;
            margin-bottom: 10px;
            margin-right: 30px;
        }
         input[type=email][name=email] {
            width: 40%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 5px;
            margin-bottom: 10px;
            margin-right: 15px;
        }
        input[type=password][name=password] {
            width: 30%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 5px;
            margin-bottom: 10px;
            margin-right: 15px;
        }
        input[type=password][name=confirmpassw] {
            width: 30%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 5px;
            margin-bottom: 10px;
            margin-right: 15px;
        }
        select {
            width: 35%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 5px;
            margin-bottom: 10px;
            margin-right: 30px;
        }
        
        input[type=text][name=company] {
            width: 43%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 5px;
            margin-bottom: 10px;
            margin-right: 15px;
        }
        input[type=text][name=occupation] {
            width: 25%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 5px;
            margin-bottom: 10px;
            margin-right: 5px;
        }
        input[type=text][name=telno] {
            width: 23%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 5px;
            margin-bottom: 10px;
            margin-right: 5px;
        }
        input[type=datetime-local] {
            width: 30%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 5px;
            margin-bottom: 10px;
            margin-right: 5px;
        }
        input[type=email][name=cmail] {
            width: 38%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 5px;
            margin-bottom: 10px;
            margin-right: 5px;
        }
        span {

        
        }
        input[type=text][name=professional] {
            width: 23%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 5px;
            margin-bottom: 10px;
            margin-right: 5px;
        }
        .error {
            color: #FF0001;
        }
        

        input[type=cancel] {
            background-color: #ee3a3a;
            border-color: #ee3a3a;
            border-radius: 4px;
            color: white;
            padding: 16px 0px 16px 0px;
            text-decoration: none;
            margin: 4px 2px 0 0;
            cursor: pointer;
           
            text-align: center;

        }
        input[type=submit]  {
            background-color: #04AA6D;
            border-color: #04AA6D;
            border-radius: 4px;
            color: white;
            padding: 16px 32px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
        }
        
        @media (max-width: 500px){
            .container{
            
            width: 100%;
            height:1200px ;
            margin-top:0;
            }

        }
    </style>
 </head>
 <body>

    <div class="container">
        <form action="login.php" method="POST">
            <h3><strong>Please Login</strong></h3><br>
            <label for="name">Email</label><br>
            <input type="email" name="email" id="email" placeholder="email@host.com" required><br>
            
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password" placeholder="Enter password">
            <?php
            echo $password_err; 
            ?><br>
            
            <input type="submit" name="ok"  value="Login">
            <input type="cancel" name="reset"  value="Cancel">
        </form>
        <a href="./index.html">Back</a>
    </div>
    
 </body>
 </html>
