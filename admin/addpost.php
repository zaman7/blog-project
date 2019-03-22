<?php include "inc/header.php"; ?>
<div class="col-md-10">
    <div class="panel panel-default">
        <div class="panel-heading section-title">
            <h2>Add New Post</h2>
        </div>
        <div class="panel-body">
            <div class="block">
                <div class="addpost">
                    <?php 

                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            
                            $cat    = $_POST['cat'];
                            $title  = $_POST['title'];
                            $body   = $_POST['body'];
                            $tags   = $_POST['tags'];
                            $author = $_POST['author'];
                            $userId = $_POST['userid'];

                            $image      = $_FILES['image']['name'];
                            $image_type = array('jpg','png', 'gif','jpeg' );
                            $file_size  = $_FILES['image']['size'];
                            $tmp_name   = $_FILES['image']['tmp_name'];

                            $div         = explode('.', $image);
                            $file_ext    = strtolower(end($div));
                            $unique_name = substr(md5(time()),0,10).'.'.$file_ext;
                            $upload_image = "uploads/posts/".$unique_name;

                            if (empty($cat) OR empty($title) OR empty($body) OR empty($tags) OR empty($author)) {
                                echo "<div class='alert alert-danger'>Field must not be empty!</div>";
                            }
                            else{
                                $cat    = mysqli_real_escape_string($db->link, $cat);
                                $title  = mysqli_real_escape_string($db->link, $title);
                                $body   = mysqli_real_escape_string($db->link, $body);
                                $tags   = mysqli_real_escape_string($db->link, $tags);
                                $author = mysqli_real_escape_string($db->link, $author);
                                $userId = mysqli_real_escape_string($db->link, $userId);

                                if (!empty($image)) {
                                    if (in_array($file_ext, $image_type) === false) {
                                        echo "<div class='alert alert-danger'>Please select any image file:-".implode(', ',$image_type)."</div>";
                                    }
                                    else{
                                        move_uploaded_file($tmp_name, $upload_image);
                                        
                                        $query= "INSERT INTO post_table(cat, title, body, image, tags, author, userid) VALUES('$cat', '$title', '$body', '$upload_image', '$tags', '$author', '$userId')";
                                        $insPost = $db->insertData($query);
                                        if ($insPost) {
                                            echo "<div class='alert alert-success'>Post Uploaded Successfully....</div>";
                                        }else{
                                            echo "<div class='alert alert-danger'>Post Not Uploaded.....!</div>";
                                        }
                                    }
                                }
                                else{

                                    $query= "INSERT INTO post_table(cat, title, body, tags, author) VALUES('$cat', '$title', '$body', '$tags', '$author')";
                                    $insPost = $db->insertData($query);
                                    if ($insPost) {
                                        echo "<div class='alert alert-success'>Post Uploaded Successfully....</div>";
                                    }else{
                                        echo "<div class='alert alert-danger'>Post Not Uploaded.....!</div>";
                                    }
                                }
                            }
                        }
                    ?>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="title">Title:</label>
                            <input type="text" name="title" placeholder="Enter Post Title..." id="title" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="category">Category:</label>
                            
                            <select id="select" name="cat">
                                <option selected="selected" value="">Select One</option>
                                <?php 
                                $query = "SELECT * FROM category_table ORDER BY name ASC";
                                $getCat = $db->readData($query);
                                if ($getCat) {
                                    $i= 0;
                                    while ($result = $getCat->fetch_assoc()) {
                                        $i++;
                            ?>
                                <option value="<?php echo $result['id']; ?>"><?php echo $result['name']; ?></option>
                            <?php } } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="file">Upload Image:</label>
                            <input type="file" name="image" id="file" />
                        </div>

                        <div class="form-group">
                            <label>Content:</label>
                            <textarea name="body" placeholder="Body Text"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="tags">Tags:</label>
                            <input type="text" name="tags" placeholder="Tags" id="tags" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="author">Author:</label>
                            <input type="hidden" name="userid" value="<?php echo Session::get('userId'); ?>" />
                            <input type="text" name="author" id="author" value="<?php echo Session::get('username'); ?>" class="form-control" />
                        </div>

                        <input type="submit" name="submit" Value="Save" class="btn btn-success" />

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "inc/footer.php"; ?>
