<?php 
    session_start();
    if(isset($_POST['submit'])) {
        echo $email = $_POST['mail'];
        echo $_SESSION['verificationCode'] = mt_rand(3232, 999658);
        echo $code = $_SESSION['verificationCode'];
        $msg = "please enter this code in the login page to verify your email";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $body = $code."<br>".$msg;

        if(mail($email, "Email Verification Code", $body, $headers)){
            echo "<script>alert('Code Sent! Please  check your email to continue.')</script>";
            
        }
    }

    if(isset($_POST['verify'])) {
        echo $entered = $_POST['verification']."<br>";
        echo $code;
        if($code == $entered) {
            echo "Welcome bro";
        } else {
            echo "Wrong otp. Please try again";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email Verification Script</title>
</head>
<body>
    <form method="post" action="email.php">

        Enter Email: <input type="email" name="mail" id=""><br>
        <input type="submit" name="submit" value="Send Code"><br><br><br

    </form>
    <form method="post" action="email.php">

        Enter Otp: <input type="number" name="verification" id=""><br>
        <input type="submit" name="verify" value="Verify">

    </form>
</body>
</html>