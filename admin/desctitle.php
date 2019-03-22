<?php include "inc/header.php"; ?>
<div class="col-md-10">
    <div class="panel panel-default">
        <div class="panel-heading section-title">
            <h2>Update Site Title and Description</h2>
        </div>
        <div class="panel-body">
            <div class="block">
                <div class="sloginblock">
                    <?php 

                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                            $title = $Helpers->validation($_POST['title']);
                            $slogan = $Helpers->validation($_POST['slogan']);

                            $title = mysqli_real_escape_string($db->link, $title);
                            $slogan = mysqli_real_escape_string($db->link, $slogan);

                            $image      = $_FILES['logo']['name'];
                            $image_type = array('png');
                            $file_size  = $_FILES['logo']['size'];
                            $tmp_name   = $_FILES['logo']['tmp_name'];

                            $div         = explode('.', $image);
                            $file_ext    = strtolower(end($div));
                            $logo_name = "logo".".".$file_ext;
                            $upload_image = "uploads/".$logo_name;

                            if (!empty($image)) {
                                if (empty($title) OR empty($slogan) OR empty($image)) {
                                    echo "<div class='alert alert-danger'><strong>Error! </strong>Field must not be empty!</div>";
                                }
                                else{
                                    if (in_array($file_ext, $image_type) === false) {
                                        echo "<div class='alert alert-danger'><strong>Error! </strong>Please select only png image!</div>";
                                    }
                                    else{
                                        move_uploaded_file($tmp_name, $upload_image);
                                        $query= "UPDATE sitetitle_table SET title='$title', slogan='$slogan', logo='$upload_image' WHERE id = '1'";

                                        $upPost = $db->updateData($query);
                                        if ($upPost) {
                                            echo "<div class='alert alert-success'><strong>Success! </strong>Title & Slogan Updated Successfully!</div>";
                                        }else{
                                            echo "<div class='alert alert-danger'><strong>Error! </strong>Title & Slogan Not Updated.....!</div>";
                                        }
                                    }
                                }
                            }
                            else{
                                if (empty($title) OR empty($slogan)) {
                                    echo "<div class='alert alert-danger'><strong>Error! </strong>Field must not be empty!</div>";
                                }
                                else{

                                    $query= "UPDATE sitetitle_table SET title='$title', slogan='$slogan' WHERE id = '1'";

                                    $upPost = $db->updateData($query);
                                    if ($upPost) {
                                        echo "<div class='alert alert-success'><strong>Success! </strong>Title & Slogan Updated Successfully!</div>";
                                    }else{
                                        echo "<div class='alert alert-danger'><strong>Error! </strong>Title & Slogan Not Updated.....!</div>";
                                    }
                                }
                            }    
                        }
                    ?>
                    <?php 
                        $query = "SELECT * FROM sitetitle_table WHERE id = '1'";
                        $siteinfo = $db->readData($query);
                        if ($siteinfo) {
                            while ($result = $siteinfo->fetch_assoc()) {                
                              
                    ?>
                    <form accept="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="sitetitle">Website Title:</label>
                            <input type="text" name="title" value="<?php echo $result['title'] ?>" id="sitetitle" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="slogan">Website Slogan:</label>
                            <input type="text" name="slogan" value="<?php echo $result['slogan'] ?>" id="slogan" class="form-control">
                        </div>

                        <img src="<?php echo $result['logo']; ?>" width="100px" alt="logo">

                        <div class="form-group">
                            <label for="file">Website Logo:</label>
                            <input type="file" id="file" name="logo">
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
