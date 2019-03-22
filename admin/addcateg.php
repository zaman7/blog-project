<?php include "inc/header.php"; ?>
<div class="col-md-10">
    <div class="panel panel-default">
        <div class="panel-heading section-title">
            <h2>Add New Category</h2>
        </div>
        <div class="panel-body">
            <div class="block">
                <div class="catblock">
                    <?php 
                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            $catName = $_POST['name'];
                            if (empty($catName)) {
                                echo "<div class='alert alert-danger'>Field must not be empty!</div>";
                            }
                            else{
                                $catName = mysqli_real_escape_string($db->link, $catName);
                                $query= "INSERT INTO category_table(name) VALUES('$catName')";
                                $insCat = $db->insertData($query);
                                if ($insCat) {
                                    echo "<div class='alert alert-success'><strong>".$catName."</strong> Category Inserted Successfully....</div>";
                                }else{
                                    echo "<div class='alert alert-danger'>Category Not Inserted.....!</div>";
                                }
                            }
                        }
                    ?>
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="category">Category:</label>
                            <input type="text" name="name" placeholder="Enter Category Name..." id="category" class="form-control">
                        </div>

                        <input type="submit" class="btn btn-success" name="submit" Value="Save" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "inc/footer.php"; ?>
