<?php
session_start();
if(isset($_POST['Login'])){
    if(($_POST['nama']=="") && ($_POST['pass']=="")){
        echo "User Name dan Password masih kosong"; session_destroy();
    }else{
        //user = naufal & password = "chocolatos3"
        if (($_POST['nama']=="naufal") and ($_POST['pass'] == "chocolatos3")){
            $_SESSION['login']=1;
            $_SESSION['username']=$_POST['nama'];
        }
        if((isset($_SESSION['login'])) and ($_SESSION['login']==1)){
            header("location: submitFormlogin.php");
            exit();
        }
    }
}

?>
<html>
<head>
    <title>Session</title>
</head>
        <body>
            <form name = "session" method="post" action=""><p>Form Login</p>
            <p>username : <input type="text" name="nama"></p>
            <p>password : <input type="password" name="pass"></p>
            <input type="submit" name="Login" value="Login">
        </form>
    </body>
    </html>