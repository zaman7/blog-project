<?php include "inc/header.php"; ?>
<div class="col-md-10">
    <div class="panel panel-default">
        <div class="panel-heading section-title">
            <h2>Add New Page</h2>
        </div>
        <div class="panel-body">
            <div class="block">
                <div class="addpost">
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

                                $query= "INSERT INTO page_table(name, pagebody) VALUES('$name', '$body')";
                                $insPost = $db->insertData($query);
                                if ($insPost) {
                                    echo "<div class='alert alert-success'>Page Uploaded Successfully....</div>";
                                }else{
                                    echo "<div class='alert alert-danger'>Page Not Uploaded.....!</div>";

                                }    
                            }
                        }
                    ?>
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="title">Page Title:</label>
                            <input type="text" name="name" placeholder="Enter Page Title..." id="title" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label>Content:</label>
                            <textarea name="body" placeholder="Body Text"></textarea>
                        </div>

                        <input type="submit" name="submit" Value="Save" class="btn btn-success" />

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "inc/footer.php"; ?>
