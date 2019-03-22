<?php include "inc/header.php"; ?>
<div class="col-md-10">
    <div class="panel panel-default">
        <div class="panel-heading section-title">
            <h2>Update Old Page</h2>
        </div>
        <div class="panel-body">
            <div class="block">
                <div class="addpost">
                    <?php
                    if (isset($_GET['delpage'])){
                        $delPage = $_GET['delpage'];
                        $query = "DELETE FROM page_table WHERE id = '$delPage'";
                        $result = $db->deleteData($query);
                        if ($result) {
                            echo "<div class='alert alert-success'>Page Deleted successfully.....!</div>";
                        }
                        else{
                            echo "<div class='alert alert-danger'>Page Not Deleted.....!</div>";
                        }
                    }
                    ?>


                    <?php
                        if (!isset($_GET['pageid']) OR $_GET['pageid'] == NULL ) {
                                header("Location: addpage.php");
                        }
                        else{
                            $pageId = $_GET['pageid'];
                        }
                    ?>

                    <?php 

                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            
                            $name  = $_POST['name'];
                            $body   = $_POST['body'];

                            if (empty($name) OR empty($body)) {
                                echo "<div class='alert alert-danger'>Field must not be empty!</div>";
                            }
                            else{
                                $name  = mysqli_real_escape_string($db->link, $name);
                                $body   = mysqli_real_escape_string($db->link, $body);

                                $query= "UPDATE page_table SET name= '$name', pagebody='$body' WHERE id= '$pageId'";
                                $upPost = $db->updateData($query);
                                if ($upPost) {
                                    echo "<div class='alert alert-success'>Page Uploaded Successfully....</div>";
                                }else{
                                    echo "<div class='alert alert-danger'>Page Not Uploaded.....!</div>";

                                }    
                            }
                        }
                    ?>

                    <?php 
                        $query = "SELECT * FROM page_table WHERE id = '$pageId'";
                        $getPage = $db->readData($query);
                            if ($getPage) {
                                while ($result = $getPage->fetch_assoc()) {
                    ?>
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="title">Page Title:</label>
                            <input type="text" name="name" value="<?php echo $result['name']; ?>" id="title" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label>Content:</label>
                            <textarea name="body"><?php echo $result['pagebody']; ?></textarea>
                        </div>

                        <input type="submit" name="submit" Value="Update" class="btn btn-success" />

                    </form>
                    <a href="pageedit.php?delpage=<?php echo $result['id']; ?>" onclick="return confirm('Are you sure delete?');" class="btn btn-danger" style="margin-top: 20px;">Delete</a>
                    <?php } } ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php include "inc/footer.php"; ?>
