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
    <?php
    require "connect.php";

        $name = $_POST['name'];
        $regno =$_POST['regno'];
        $exam =$_POST['exam'];
        $lastdate =$_POST['lastdate'];
        $mobileno =$_POST['mobileno']; 
        $email =$_POST['email'];
        $password =$_POST['password'];
        $confirmpassword =$_POST['confirmpassw'];
        $companyname =$_POST['company'];
        $occupation =$_POST['occupation'];
        $telno =$_POST['telno'];
        $companyemail =$_POST['cmail'];
        $professional =$_POST['professional'];
        $membership =$_POST['memberships'];

        $nameErr = $regnoErr = $examErr = $lastsittingErr = $phonenoErr = $emailErr = $passwordErr = $confirmpasswordErr = $companynameErr = $occupation = $error; 


    ?>
   


    <div class="container">
        <form action="pendingregistration.php" method="POST">
            <h3><strong>Personal details</strong></h3><br>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Your name" required>
            <label for="regno" style="width:30%;">Reg No.</label>
            <input type="text" name="regno" id="regno" placeholder="KASNEB Reg No." required>
            <label for="exam">Examination</label>
            <input type="text" name="exam" placeholder="e.g. CICT, CPA" required>
            <span><label>Month</label>
            <select name="month" id="month"></select></span>
            <span><label>Year</label><select name="year" id="year"></select></span>
            <label for="mobileno">Mobile No.</label>
            <input type="text" name="mobileno" placeholder="e.g. 0712654789" required>
            <label for="email">Email address</label>
            <input type="email" name="email" id="email" placeholder="Enter email" required>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter password">
            <label for="confirmpassw">Confirm Password</label>
            <input type="password" name="confirmpassw" id="confirmpassw" placeholder="Re-enter your password"><br>
            <h3><strong>Work</strong></h3><br>
            <label for="company">Company name</label>
            <input type="text" name="company" id="company" placeholder="e.g. Safaricom PLC" required>
            <label for="occupation">Occupation</label>
            <input type="text" name="occupation" id="occupation" placeholder="e.g. Accountant" required>
            <label for="telno">Office Telephone No.</label>
            <input type="text" name="telno" id="telno">
            <label for="cmail">Company email</label>
            <input type="email" name="cmail" id="cmail">
            <label for="professional">Professional body</label>
            <input type="text" name="professional" id="professional" placeholder="e.g. ICPAK, ICIFA">
            <label for="membershiptype">Type of membership</label>
            <select id="membership" name="memberships" value="Select membership">
                <option selected="true" style="display: none;"></option>
                <option value="life">Life Membership</option>
                <option value="honorary">Honorary members</option>
                <option value="associate">Associate members</option>
                <option value="ordinary">Ordinary members</option>
            </select><br>
            
            <input type="submit" name="ok"  value="Register">
            <input type="cancel" name="reset"  value="Cancel">
        </form>

    </div>
    <script>
        // create references for dropdowns
const yearselect = document.getElementById("year");
const monthselect = document.getElementById("month");

const months = ['January', 'February', 'March', 'April', 'May', 'June', 
'July', 'August', 'September', 'October', 'November', 'December'];

function populateMonths(){
    for (var i=0; i<months.length; i++){
        const option = document.createElememnt('option');
        option.textContent = months[i];
        monthselect.appendChild(option);
    }
    monthselect.value = "January";
}(); 

function populateYears(){
    let year = yearselect.value
    //Get the current year as a number
    let year = new Date().getFullYear();

    //Make previous 100 years be options
    for (var i = 0; i < 101; i++) {
        const option = document.createElememnt("option");
        option.textContent = year - i;
        yearselect.appendChild(option);

    }

}
populateMonths(monthselect.value)
populateYears();


    </script>
    
 </body>
 </html>
