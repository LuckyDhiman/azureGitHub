<?php
$showAlert=false;
$showAlert_pass=false;
$showError = false;
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    include 'partials/dbconnect.php';
    $username = $_POST["uname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $amount = $_POST["amount"];
    $address = $_POST["address"];
    // $address = $_POST["address"];
    $phone = $_POST["phone"];
    $exists = false;
    if(($password == $cpassword) && $exists ==false){
        $sql = "INSERT INTO `users` ( `username`, `email`, `password`, `amount`, `address`, `phone_no`) VALUES ( '$username', '$email', '$password', '$amount', '$address', '$phone');";
        $result = mysqli_query($conn, $sql);
        if($result){
            $showAlert = true;
        }
    }
    else{
        // $showError = "Passwords do not match";
     echo  ' <script>
        console.log("PASSWORD DOES NOT MATCH");
        alert("Password Does Not Match");
        </script>
        ';
       // $showAlert_pass = true;
    }
}
?>

<html>
    <head>
        <meta charset="utf-8" />
        <title>Registration Page</title>
        <link rel="stylesheet" type="text/css" href ="css/register.css">
    </head>
    <body style="margin:0px;color:#4d4c4c;">
        <div class="img">
            <div class="sdiv">

                <h2> Create Your Account </h2>
                <h4>Already have an Account?   <a href="login_page.php" style="color:#d15555;"> Sign In</a></h4>
                <?php
                    if($showAlert){
                        echo '   <h4 style="color:#4caf50; font-size: 23px; padding-top: 10px;">Successfully Registered!!!   </h4>';
                    }
                    // else{
                    //     echo '   <h4 style="color:RED; font-size: 23px; padding-top: 10px;">Password does not match   </h4>';
                    // }
                ?>
                <center>  
                    <form class="form1" action="/Banksite_2021/register.php" method="post">
                        <table>
                            <tr>
                                <td>Username</td>
                                <td><input id="inp" type="text" name="uname" /></td>

                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><input id="inp" type="text" name="email" /></td>

                            </tr>
                            <tr>
                                <td>Password</td>
                                <td><input id="inp" type="password" name="password" /></td>
                            </tr>
                            <tr>
                                <td>Confirm Password</td>
                                <td><input id="inp" type="password" name="cpassword" /></td>
                            </tr>
                            <tr>
                                <td>Amount</td>
                                <td><input id="inp" type="text" name="amount" /></td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td><input id="inp" type="text" name="address" /></td>
                            </tr>
                            <tr>
                                <td>Phone No</td>
                                <td><input id="inp" type="text" name="phone" /></td>
                            </tr>

                            <tr>
                                <td></td>
                                <td style="text-align:left">
                                    <input class="loginbtn" type="submit" value="Create Account" />
                                    <input class="clearbtn" type="reset" name="Reset" />
                                </td>

                            </tr>

                        </table>
                    </form>
                </center>


            </div>

        </div>

        <header> <div class="axis"> <div class="back"> <form action="index.php">
                        <button type="submit">Home</button>
                    </form>     </div> </div></header>

    </body>
</html>