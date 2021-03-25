<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/dbconnect.php';
    $username = $_POST["uname"];
 
    $password = $_POST["password"];
 
     
    $sql = "Select * from users where username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("location: index.php");

    } 
    else{
        $showError = "Invalid Credentials";
      
    }
}
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link rel="stylesheet" type="text/css" href ="css/login.css">
    
</head>
<body style="margin:0px;">
<?php
    if($login){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are logged in
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    if($showError){
    echo ' <script>
        alert("Invalid Credentials");
        console.log("PASSWORD INCORRET");
    </script>';
    }
    ?>
    <div class="img">


        <div class="sdiv">
            <div class="avatar"></div>
            <!-- <center>  -->
                <h2> User Login </h2><br>
            <!-- <h4 style="color:RED; font-size: 23px;">Successfully Registered!!!   </h4> -->
<!-- </center> -->
            <form class="form1" action="/Banksite_2021/login_page.php" method="post" onsubmit="isValidName()">
                <ul>
                    <li>
                        <p>Username</p><input id="inp" type="text" name="uname" oninput="isValidName(this.value)" required />
                    </li>
                    <li style="position:relative;top:20px;">
                        <p>Password</p><input id="inp" type="password" name="password" required/>
                    </li>
                    <li>
                        <input class="loginbtn" type="submit" value="Login" />
                    
                    </li>
                </ul>
            </form>

        </div>
        <div class="s2div">
            <h2 id="h2">Don't have an Account?</h2>

            <ul>
                <li>
                    <a href="register.php"><input id="a" type="button" value="Sign Up" /></a>
                </li>
                <li style="font-size:12px;position:relative;left:60px;top:20px;">


                    Develop by Lucky Dhiman
                </li>
            </ul>
        </div>
    </div>

    <header>
        <div class="axis">
            <div class="back"><form action="index.php">
                        <button type="submit">Home</button>
                    </form>            
               </div> 
        </div>
    </header>

      <script>
          function isValidName(str){
           
           var regex=/[^A-Za-z\s]/i;       // \s for whitespace, 
           var is =str.match(regex);
           if(is != null)
          // console.log("Valid String ",is);
          {alert("Not a Valid name");
           //return true;
           }
         
       }
          </script>


</body>
</html>