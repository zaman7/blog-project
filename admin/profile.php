<?php include "inc/header.php"; ?>
<div class="col-md-10">
    <div class="panel panel-default">
        <div class="panel-heading section-title">
            <h2>User Profile</h2>
        </div>
        <div class="panel-body">
            <div class="block">
                <div class="catblock">
                    <?php 
                        $userId = Session::get("userId");
                        $userRole = Session::get("userRole");
                    ?>

                    <?php
                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                            $name = $Helpers->validation($_POST['name']);
                            $email = $Helpers->validation($_POST['email']);
                            $username = $Helpers->validation($_POST['username']);
                            $details = $Helpers->validation($_POST['details']);

                            $name = mysqli_real_escape_string($db->link, $name);
                            $email = mysqli_real_escape_string($db->link, $email);
                            $username = mysqli_real_escape_string($db->link, $username);
                            $details = mysqli_real_escape_string($db->link, $details);

                            if (empty($name) OR empty($email) OR empty($username) OR empty($details)) {
                                echo "<div class='alert alert-danger'>Field must not be empty!</div>";
                            }
                            elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                echo "<div class='alert alert-danger'>Invalid email address!</div>";
                            }
                            else{
                                $query= "UPDATE user_table SET name='$name', email='$email', username='$username',details= '$details' WHERE id = '$userId' AND role='$userRole'";
                                $updateuser = $db->updateData($query);
                                if ($updateuser) {
                                    echo "<div class='alert alert-success'>User Updated Successfully....</div>";
                                }else{
                                    echo "<div class='alert alert-danger'>User Not Updated.....!</div>";
                                }
                            }                           
                        }

                    ?>

                    <?php 
                        $query = "SELECT * FROM user_table WHERE id = '$userId' AND role='$userRole'";
                        $getUser = $db->readData($query);
                        if ($getUser) {
                            while ($result = $getUser->fetch_assoc()) {
                    ?>

                    <form action="" method="POST">

                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" name="name" value="<?php echo $result['name'] ?>" id="name" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" name="email" value="<?php echo $result['email'] ?>" id="email" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" name="username" value="<?php echo $result['username'] ?>" id="username" class="form-control">
                        </div>


                        <div class="textarea">
                            <label>Messages:</label>
                            <textarea name="details" placeholder="Details"><?php echo $result['details'] ?></textarea>
                        </div>

                        <input type="submit" class="btn btn-success" name="update" Value="Update" />
                    </form>
                    <?php } } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "inc/footer.php"; ?>
