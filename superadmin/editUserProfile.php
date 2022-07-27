<!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
    
    
 	<title>Register</title>
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
        .container  a 
        {
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
            margin: auto;
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
            margin: auto;
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
    <?php
    require "connect.php";

    if (isset($_REQUEST['id'])) 
    {
        $id = $_REQUEST['id'];
        $query = "SELECT * FROM users WHERE id=$id";
        $result = mysqli_query($mysqli, $query) or die(mysqli_error());
        $row=mysqli_fetch_array($result);
    }


    //decalare and initialize variables
    $name = $regno = $exam = $lastdate = $mobileno = $email = $password = $confirmpassword = $companyname = $occupation = $telno = $companyemail = $professional = $membership = $userType  = "";
     $password_err = "<script>alert(Kindly enter password.)<script>";

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {

        $name = $_POST["name"];
        $regno = $_POST["regno"];
        $exam = $_POST["exam"];
        $lastSitting = $_POST["lastSitting"];
        $phoneNumber = $_POST["phoneNumber"];
        $email = $_POST["email"];
        $company = $_POST["company"];
        $occupation = $_POST["occupation"];
        $officePhone = $_POST["telno"];
        $companyEmail = $_POST["cmail"];
        $proffesionalBody = $_POST["professional"];
        $membershipType = $_POST["memberships"];
        $userType = $_POST["userType"];

        // (name, regno, examination, lastsitting, phoneNumber, email, password, company, occupation, officePhone, companyEmail, proffesionalBody, membershipType)
        $sql = "UPDATE users SET name = '".$name."', regno = '".$regno."', examination = '".$exam."', lastsitting = '".$lastSitting."', phoneNumber = '".$phoneNumber."',
        email = '".$email."', company = '".$company."', occupation = '".$occupation."', officePhone = '".$officePhone."', companyEmail = '".$companyEmail."',
        proffesionalBody = '".$proffesionalBody."',  membershipType = '".$membershipType."',  userType = '".$userType."' WHERE id ='".$id."'";
        //$sql = "UPDATE users SET name = $name, regno = $regno, exam = $examination, lastsitting = $lastSitting, phoneNumber = $phoneNumber, email = $email, company = $company,
        //occupation = $occupation, officePhone = $officePhone, companyEmail = $companyEmail, proffesionalBody = $proffesionalBody, membershipType = $membershipType, userType = $userType  WHERE id=$id";

        if ( $mysqli->query($sql) === TRUE)
        {
            echo "<script>alert('Saved')<script><br><br>";
            header("location: superadmin/index.php");
        }
        else
        {
            echo "Error: " . $sql . "<br>" . $mysqli->error;
        }


    }
    


    ?>
   


    <div class="container">
        <form action="editUserProfile.php" method="POST">
            <h3><strong>Personal details</strong></h3><br>
            <input type="hidden" name="id" id="id" value="<?php echo $row['id']; ?>">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Your name" required value="<?php echo $row['name']; ?>" >
            <label for="regno" style="width:30%;">Reg No.</label>
            <input type="text" name="regno" id="regno" placeholder="KASNEB Reg No." required value="<?php echo $row['regno']; ?>">
            <label for="exam">Examination</label>
            <input type="text" name="exam" placeholder="e.g. CICT, CPA" required value="<?php echo $row['examination']; ?>">
            <span><label>Last Sitting</label>
            <input type="month" id="lastSitting" name="lastSitting"  min="1980-08" value="<?php echo $row['lastsitting']; ?>"></span> <br>
            <label for="mobileno">Mobile No.</label>
            <input type="text" name="phoneNumber" placeholder="e.g. 0712654789" required value="<?php echo $row['phoneNumber']; ?>">
            <label for="email">Email address</label>
            <input type="email" name="email" id="email" placeholder="Enter email" required value="<?php echo $row['email']; ?>">
            <h3><strong>Work</strong></h3><br>
            <label for="company">Company name</label>
            <input type="text" name="company" id="company" placeholder="e.g. Safaricom PLC" required value="<?php echo $row['company']; ?>">
            <label for="occupation">Occupation</label>
            <input type="text" name="occupation" id="occupation" placeholder="e.g. Accountant" required value="<?php echo $row['occupation']; ?>">
            <label for="telno">Office Telephone No.</label>
            <input type="text" name="telno" id="telno" value="<?php echo $row['officePhone']; ?>">
            <label for="cmail">Company email</label>
            <input type="email" name="cmail" id="cmail" value="<?php echo $row['companyEmail']; ?>">
            <label for="professional">Professional body</label>
            <input type="text" name="professional" id="professional" placeholder="e.g. ICPAK, ICIFA" value="<?php echo $row['proffesionalBody']; ?>">
            <label for="membershiptype">Type of membership</label>
            <select id="membership" name="memberships" value="Select membership" value="<?php echo $row['membershiptype']; ?>">
                <option selected="true" style="display: none;"></option>
                <option value="life">Life Membership</option>
                <option value="honorary">Honorary members</option>
                <option value="associate">Associate members</option>
                <option value="ordinary">Ordinary members</option>
            </select>
            <label for="membershiptype">User Type</label>
            <select id="userType" name="userType" value="Select user Type" value="<?php echo $row['userType']; ?>">
                <option selected="true" style="display: none;"></option>
                <option value="alumni">Alumni</option>
                <option value="admin">Admin</option>
                <option value="superAdmin">superAdmin</option>
            </select>
            <br>
            
            <input type="submit" name="ok"  value="Update">
            <input type="cancel" name="reset"  value="Cancel">
        </form>
        <a href="index.php">Back</a>
    </div>
    
 </body>
 </html>
