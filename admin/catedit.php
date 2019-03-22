<?php include "inc/header.php"; ?>
<div class="col-md-10">
    <div class="panel panel-default">
        <div class="panel-heading section-title">
            <h2>Update Category</h2>
        </div>
        <div class="panel-body">
            <div class="block">
                <div class="catblock">
                    <?php
                        if (!isset($_GET['editcatid']) OR $_GET['editcatid'] == NULL ) {
                            header("Location: category.php");
                        }
                        else{
                            $catId = $_GET['editcatid'];
                        }
                    ?>

                    <?php 
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        if (isset($_POST['update'])) {
                            $catName = $_POST['name'];
                            if (empty($catName)) {
                                echo "<div class='alert alert-danger'>Field must not be empty!</div>";
                            }
                            else{
                                $catName = mysqli_real_escape_string($db->link, $catName);
                                $query= "UPDATE category_table SET name ='$catName' WHERE id= '$catId'";
                                $upCat = $db->updateData($query);
                                if ($upCat) {
                                    echo "<div class='alert alert-success'><strong>".$catName."</strong> Category Updated Successfully....</div>";
                                }else{
                                    echo "<div class='alert alert-danger'>Category Not Updated.....!</div>";
                                }
                            }
                        }
                    }
                    ?>

                    <?php 
                        $query = "SELECT * FROM category_table WHERE id = '$catId'";
                        $getCat = $db->readData($query);
                            if ($getCat) {
                                while ($result = $getCat->fetch_assoc()) {
                    ?>
                    
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="category">Category:</label>
                            <input type="text" name="name" value="<?php echo $result['name']; ?>" id="category" class="form-control">
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