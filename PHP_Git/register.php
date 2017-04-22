<?php
require_once "functions.php";
$user=new LoginRegistration();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Page</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>

<div class="wrapper">
    <div class="header">
        <h3>PHP LOGIN SYSTEM</h3>
    </div>
    <div class="mainmenu">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="profile.php">Show Profile</a></li>
            <li><a href="chagePassword.php">Change Password</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="logout.php">Logout</a></li>
            <li><a href="register.php">Register</a></li>
        </ul>
    </div>

 <div class="content">
     <h2>Register</h2>

    <p class="msg">
        <?php
        if ($_SERVER['REQUEST_METHOD']=='POST'){
           $username= $_POST['username'];
           $password= $_POST['password'];
           $namee= $_POST['name'];
           $email= $_POST['email'];
           $website= $_POST['website'];

           if (empty($username)or empty($password)or empty($name)or empty($email) or empty($website)){
               echo "<span style='color: #e53d37'> Failed!Required Filed Must Not be Empty</span>";
           } else{
               $password =md5($password);
               $register=$user->registerUser( $username,$password,$name,$email,$website);
               if ($register){
                   echo "Register Done";
               }else{
                   echo "UseName Or Email Already Exist";
               }
           }
        }

        ?>

       </p>
    <div class="loginreg">
        <form action="" method="post">
            <table>
                <tr>
                    <td>UserName:</td>
                    <td><input type="text" name="username" placeholder="Please Give Your Username"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="Password" name="password" placeholder="Please Give Your Password"></td>
                </tr>
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="name" placeholder="Please Give Your Name"></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="text" name="email" placeholder="Please Give Your Email"></td>
                </tr>
                <tr>
                    <td>Website:</td>
                    <td><input type="text" name="website" placeholder="Please Give Your Website"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <span style="float: right">
                            <input type="submit" name="register" value="Register">
                            <input type="reset" name="reset" value="Reset">
                            </span>
                    </td>

                </tr>

            </table>





        </form>




    </div>




<div class="back">
    <a href="login.php"><img src="ic_menu_back.png" alt="Back"></a>
</div>
 </div>
<div class="footer">
    <h3>www.sujitbarua.weebly.com</h3>
</div>
</div>

</body>
</html>