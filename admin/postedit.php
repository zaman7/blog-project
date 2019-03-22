<?php include "inc/header.php"; ?>
<div class="col-md-10">
    <div class="panel panel-default">
        <div class="panel-heading section-title">
            <h2>Update Old Post</h2>
        </div>
        <div class="panel-body">
            <div class="block">
                <div class="editpost">
                    <?php
                    if (!isset($_GET['editpost']) OR $_GET['editpost'] == NULL ) {
                            header("Location: postlist.php");
                        }
                        else{
                            $postId = $_GET['editpost'];
                        }
                    ?>

                    <?php 

                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            
                            $cat    = $_POST['cat'];
                            $title  = $_POST['title'];
                            $body   = $_POST['body'];
                            $tags   = $_POST['tags'];
                            $author = $_POST['author'];
                            $userid = $_POST['userid'];

                            $image      = $_FILES['image']['name'];
                            $image_type = array('jpg','png', 'gif','jpeg' );
                            $file_size  = $_FILES['image']['size'];
                            $tmp_name   = $_FILES['image']['tmp_name'];

                            $div         = explode('.', $image);
                            $file_ext    = strtolower(end($div));
                            $unique_name = substr(md5(time()),0,10).'.'.$file_ext;
                            $upload_image = "uploads/".$unique_name;


                            if (!empty($image)) {
                                if (empty($cat) OR empty($title) OR empty($body) OR empty($tags) OR empty($author) OR empty($image)) {
                                    echo "<div class='alert alert-danger'><strong>Error! </strong>Field must not be empty!</div>";
                                }
                                else{
                                    if (in_array($file_ext, $image_type) === false) {
                                        echo "<div class='alert alert-danger'><strong>Error! </strong>Please select any image file:-".implode(', ',$image_type)."</div>";
                                    }
                                    else{
                                        move_uploaded_file($tmp_name, $upload_image);
                                        $cat    = mysqli_real_escape_string($db->link, $cat);
                                        $title  = mysqli_real_escape_string($db->link, $title);
                                        $body   = mysqli_real_escape_string($db->link, $body);
                                        $tags   = mysqli_real_escape_string($db->link, $tags);
                                        $author = mysqli_real_escape_string($db->link, $author);
                                        $userid = mysqli_real_escape_string($db->link, $userid);

                                        $query= "UPDATE post_table SET cat ='$cat', title='$title', body='$body', image='$upload_image', tags='$tags', userid='$userid', author='$author' WHERE id= '$postId'";

                                        $upPost = $db->updateData($query);
                                        if ($upPost) {
                                            echo "<div class='alert alert-success'><strong>Success! </strong>Post Updated Successfully. With image!</div>";
                                        }else{
                                            echo "<div class='alert alert-danger'><strong>Error! </strong>Post Not Updated.....!</div>";
                                        }
                                    }
                                }
                            }
                            else{
                                if (empty($cat) OR empty($title) OR empty($body) OR empty($tags) OR empty($author)) {
                                    echo "<div class='alert alert-danger'><strong>Error! </strong>Field must not be empty!</div>";
                                }
                                else{
                                    $cat    = mysqli_real_escape_string($db->link, $cat);
                                    $title  = mysqli_real_escape_string($db->link, $title);
                                    $body   = mysqli_real_escape_string($db->link, $body);
                                    $tags   = mysqli_real_escape_string($db->link, $tags);
                                    $author = mysqli_real_escape_string($db->link, $author);
                                    $userid = mysqli_real_escape_string($db->link, $userid);

                                    $query= "UPDATE post_table SET cat ='$cat', title='$title', body='$body', tags='$tags', author='$author', userid='$userid' WHERE id= '$postId'";

                                    $upPost = $db->updateData($query);
                                    if ($upPost) {
                                        echo "<div class='alert alert-success'><strong>Success! </strong>Post Updated Successfully. Image not change!</div>";
                                    }else{
                                        echo "<div class='alert alert-danger'><strong>Error! </strong>Post Not Updated.....!</div>";
                                    }
                                }
                            }
                        }
                    ?>

                    <?php 
                        $query = "SELECT * FROM post_table WHERE id = '$postId'";
                        $getPost = $db->readData($query);
                        if ($getPost) {
                            $i= 0;
                            while ($result = $getPost->fetch_assoc()) {
                                $i++;
                    ?>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="title">Title:</label>
                            <input type="text" name="title" value="<?php echo $result['title']; ?>" id="title" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="category">Category:</label>
                            
                            <select id="select" name="cat">
                            <?php 
                                $query = "SELECT * FROM category_table";
                                $getCat = $db->readData($query);
                                if ($getCat) {
                                    $i= 0;
                                    while ($resultCat = $getCat->fetch_assoc()) {
                                        $i++;                                    
                            ?>
                                <option
                                <?php 
                                    if ($result['cat'] == $resultCat['id']) { 
                                    echo "selected='selected'";
                                } ?>

                                 value="<?php echo $resultCat['id']; ?>">
                                    <?php echo $resultCat['name']; ?>
                                </option>

                            <?php } } ?>
                            </select>
                            
                        </div>
                        
                        <div class="form-group">
                            <?php
                                if ($result['image']) {
                            ?>
                            <img src="<?php echo $result['image']; ?>" width="80px" alt="">
                            <?php }else{ echo "No Image On This Post..!"; } ?>

                            <label for="file">Upload Image:</label>
                            <input type="file" name="image" id="file" />
                        </div>

                        <div class="form-group">
                            <label>Content:</label>
                            <textarea name="body"><?php echo $result['body']; ?></textarea>
                        </div>

                        <div class="form-group">
                            <label for="tags">Tags:</label>
                            <input type="text" name="tags" value="<?php echo $result['tags']; ?>" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="author">Author:</label>
                            <input type="hidden" name="userid" value="<?php echo $result['userid']; ?>" />
                            <input type="text" name="author" id="author" value="<?php echo $result['author']; ?>" class="form-control" />
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
