<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === false){
    header("location: login.php");
    exit;
}
 
// Include config file
require_once "connect.php";
$sql = "SELECT * FROM users";
$result = $mysqli->query($sql);

$uri = $_SERVER['REQUEST_URI'];
$url_components = parse_url($uri);

parse_str($url_components['query'], $params);

echo ' Hi '.$params['name'].' your emailID is '.$params['email'];
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
            height: 650px;
            width: 700px;
           
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

    <table>
        <tr>
            <td>Name</td>
            <td>Reg No</td>
            <td>Examination</td>
            <td>Last Sitting</td>
            <td>Phone Number</td>
            <td>Email</td>
        </tr>
        <!-- PHP CODE TO FETCH DATA FROM ROWS -->
        <?php
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $rows['name'];?></td>
                <td><?php echo $rows['regno'];?></td>
                <td><?php echo $rows['examination'];?></td>
                <td><?php echo $rows['lastsitting'];?></td>
                <td><?php echo $rows['phoneNumber'];?></td>
                <td><?php echo $rows['email'];?></td>
                <td>
                     <?php
                     echo '<input type="button" value="Button" onclick="return showDetails(\'' . $rows['id'] . '\')">';
                      ?>
                </td>
            </tr>
            <?php
                }
            ?>
        
    </table>

    </div>
    
    <script>
        function showDetails(id)
        {
            console.log(id);
        }
    </script>

 </body>
 </html>
