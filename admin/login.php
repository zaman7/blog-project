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
?><!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="icon shortcut" href="favicon-l.png">
    <link rel="stylesheet" type="text/css" href="css/stylelogin.css">
</head>

<body>
    <div class="contact-form">
        <section class="content">
            <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $username = $Helpers->validation($_POST['username']);
                    $password = $Helpers->validation(md5($_POST['password']));

                    $username = mysqli_real_escape_string($db->link, $username);
                    $password = mysqli_real_escape_string($db->link, $password);

                    $sql = "SELECT * FROM user_table WHERE username = '$username' AND password = '$password'";
                    $result = $db->readData($sql);
                    if ($result != false){
                        $value = mysqli_fetch_array($result);
                        $row =mysqli_num_rows($result);
                        if ($row > 0) {
                            Session::set('login', true);
                            Session::set('username', $value['username']);
                            Session::set('userId', $value['id']);
                            Session::set('userRole', $value['role']);
                            header('Location: index.php');
                        }
                        else{
                            echo "No result found...!!";
                        }
                    }
                    else{
                        echo "Username Or password not match....!!";
                    }
                }

            ?>
            <h1>Login Here</h1>
            <form action="" method="post">
                <div class="login-ipbox">
                    <label for="email">Username*</label>
                    <input type="text" placeholder="Username" id="email" name="username" value="zaman" />
                </div>
                <div class="login-ipbox">
                    <label for="password">Password*</label>
                    <input type="password" placeholder="Password" id="password" value="1234" name="password" />
                </div>
                <div class="login-submit-box">
                    <button type="submit" name="submit">Login</button>
                </div>
            </form>
            <!-- form -->
            <div class="button">
                <a href="#">zaman-io.blogspot.com</a>
            </div>
        </section>
    </div>
</body>

</html>
