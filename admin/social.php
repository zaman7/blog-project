<?php include "inc/header.php"; ?>
<div class="col-md-10">
    <div class="panel panel-default">
        <div class="panel-heading section-title">
            <h2>Update Social Media</h2>
        </div>
        <div class="panel-body">
            <div class="block">
                <div class="social">
                    <?php 

                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                            $facebook = $Helpers->validation($_POST['facebook']);
                            $twitter = $Helpers->validation($_POST['twitter']);
                            $linkedin = $Helpers->validation($_POST['linkedin']);
                            $google = $Helpers->validation($_POST['google']);

                            

                            if (empty($facebook) OR empty($twitter) OR empty($linkedin) OR empty($google)) {
                                echo "<div class='alert alert-danger'><strong>Error! </strong>Field must not be empty!</div>";
                            }
                            else{
                                $facebook = mysqli_real_escape_string($db->link, $facebook);
                                $twitter = mysqli_real_escape_string($db->link, $twitter);
                                $linkedin = mysqli_real_escape_string($db->link, $linkedin);
                                $google = mysqli_real_escape_string($db->link, $google);

                                $query= "UPDATE social_table SET facebook='$facebook', twitter='$twitter', linkedin='$linkedin', google='$google' WHERE id = '1'";

                                $upPost = $db->updateData($query);
                                if ($upPost) {
                                    echo "<div class='alert alert-success'><strong>Success! </strong>Social link Updated Successfully!</div>";
                                }else{
                                    echo "<div class='alert alert-danger'><strong>Error! </strong>Social link Not Updated.....!</div>";
                                }
                            }  
                        }
                    ?>

                    <?php 
                        $query = "SELECT * FROM social_table WHERE id = '1'";
                        $sociallink = $db->readData($query);
                        if ($sociallink) {
                            while ($result = $sociallink->fetch_assoc()) {                
                              
                    ?>
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="facebook">Facebook:</label>
                            <input type="text" name="facebook" value="<?php echo $result['facebook'] ?>" id="facebook" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="twitter">Twitter:</label>
                            <input type="text" name="twitter" value="<?php echo $result['twitter'] ?>" id="twitter" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="linkedin">LinkedIn:</label>
                            <input type="text" name="linkedin" value="<?php echo $result['linkedin'] ?>" id="linkedin" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="google">Google Plus:</label>
                            <input type="text" name="google" value="<?php echo $result['google'] ?>" id="google" class="form-control">
                        </div>

                        <input type="submit" name="submit" Value="Update" class="btn btn-success" />
                    </form>
                    <?php } } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "inc/footer.php"; ?>
