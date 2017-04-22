<?php
    require "config.php";
    class LoginRegistration{
        function __construct()
        {
            $database=new databaseConnection();
        }
        public function registerUser($username,$password,$namee,$email,$website){
        global $pdo;
        $query=$pdo->prepare("SELECT id FROM users WHERE username = ? AND email = ? ");
        $query->execute(array($username,$email));
        $num=$query->rowCount();

        if($num==0){
            $query= $pdo->prepare("INSERT INTO users(username,password,namee,email,website)VALUES (?,?,?,?,?,?)");
            $query->execute(array($username,$password,$namee,$email,$website));
            return true;

        }else{
            return print "Username/Email already Ussed";
        }
    }
    }
?>

