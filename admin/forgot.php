<?php
    include "../lib/Session.php";
    Session::init();
    Session::checkLogin();

?>
<?php include "../lib/config.php";?>
<?php include "../lib/Database.php";?>
<?php include "../lib/Helpers.php";?>

<?php 
    $db = new Database();
    $Helpers = new Helpers();
?>
<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>Recovery Password</title>
    <link rel="stylesheet" type="text/css" href="css/stylelogin.css" media="screen">
</head>

<body>
    <div class="container">
        <section id="content">
            <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $email = $Helpers->validation($_POST['email']);
                    $email = mysqli_real_escape_string($db->link, $email);

                    if (empty($email)) {
                        echo "<div class='alert alert-danger'>Field must not be empty!</div>";
                    }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            echo "<div class='alert alert-danger'>Invalid email address!</div>";
                    }else{
                        $getEmail = "SELECT * FROM user_table WHERE email= '$email' LIMIT 1";
                        $checkEmail = $db->readData($getEmail);

                        if ($checkEmail == true) {
                            while ($value = $checkEmail->fetch_assoc()) {
                                $userId = $value['id'];
                                $userName = $value['username'];
                            }
                            $text = substr($email, 0, 4);
                            $rand = rand(10000, 99999);
                            $newPass = "$text$rand";
                            $password = md5($newPass);
                            $upquery = "UPDATE user_table SET password= '$password' WHERE id = '$userId'";
                            $updatePass = $db->updateData($upquery);

                            $to = "$email";
                            $form = "zaman7u@gmail.com";
                            $headers = "From: $form\n";                         
                            $headers .= "MIME-Version: 1.0"."\r\n"; 
                            $headers .= "Content-type: text/html; charset=iso-8859"."\r\n";
                            $subject = "Your New Password";
                            $message = "Your Username is ".$userName." and password is ".$newPass." Please visit website to login.";

                            $sendEmail = mail($to, $subject, $message, $headers);
                            if ($sendEmail) {
                                echo "Plese chech your email for new password";
                            }else{
                                echo "Email Not send";
                            }
                            
                        }
                        else{
                            echo "Email Address Not Exists";
                        }

                    }
                }

            ?>
                <form action="forgot.php" method="post">
                    <h1>Recovery Password</h1>
                    <div>
                        <input type="text" placeholder="Email" name="email" />
                    </div>

                    <div>
                        <input type="submit" value="Log in" name="submit" />
                    </div>
                </form>
                <!-- form -->
                <div class="button">
                    <a href="login.php">Login</a>
                </div>
                <div class="button">
                    <a href="#">zaman-inc.blogspot.com</a>
                </div>
                <!-- button -->
        </section>
        <!-- content -->
    </div>
    <!-- container -->
</body>

</html>
