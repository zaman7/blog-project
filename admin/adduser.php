<?php include "inc/header.php"; ?>
<div class="col-md-10">
    <div class="panel panel-default">
        <div class="panel-heading section-title">
            <h2>Add New User</h2>
        </div>
        <div class="panel-body">
            <div class="block">
                <div class="catblock">
                    <?php
                        if (Session::get('userRole') !== '0') {
                            header("Location: index.php");
                        }
                    ?>

                    <?php
                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            $username = $Helpers->validation($_POST['username']);
                            $email = $Helpers->validation($_POST['email']);
                            $password = $Helpers->validation(md5($_POST['password']));
                            $role = $Helpers->validation($_POST['role']);

                            $username = mysqli_real_escape_string($db->link, $username);
                            $email = mysqli_real_escape_string($db->link, $email);
                            $password = mysqli_real_escape_string($db->link, $password);

                            if (empty($username) OR empty($email) OR empty($role)) {
                                echo "<div class='alert alert-danger'>Field must not be empty!</div>";
                            }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                    echo "<div class='alert alert-danger'>Invalid email address!</div>";
                            }
                            else{
                                $getUsername= "SELECT username FROM user_table WHERE username= '$username' LIMIT 1";
                                $checkUsername = $db->readData($getUsername);

                                $getEmail = "SELECT email FROM user_table WHERE email= '$email' LIMIT 1";
                                $checkEmail = $db->readData($getEmail);

                                if ($checkUsername == true) {
                                    echo "This Username Alredy Exiest";
                                }
                                elseif ($checkEmail == true) {
                                    echo "This Email Alredy Exiest";
                                }
                                else{
                                    $query= "INSERT INTO user_table(username,email, password, role) VALUES('$username', '$email', '$password', '$role')";
                                    $adduser = $db->insertData($query);
                                    if ($adduser) {
                                        echo "<div class='alert alert-success'>User Added Successfully....</div>";
                                    }else{
                                        echo "<div class='alert alert-danger'>User Not Added.....!</div>";
                                    }
                                }
                            }                           
                        }

                    ?>

                    <form action="" method="POST">

                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" name="username" placeholder="Enter Username..." id="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" name="email" placeholder="Enter Username..." id="email" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" name="password" placeholder="Enter Password..." id="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="category">Role:</label>
                            <select id="select" name="role">
                                <option>Select Role</option>
                                <option value="0">Admin</option>
                                <option value="1">Author</option>
                                <option value="2">Editor</option>
                            </select>
                        </div>

                        <input type="submit" class="btn btn-success" name="submit" Value="Create" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "inc/footer.php"; ?>
