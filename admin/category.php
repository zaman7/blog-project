<?php include "inc/header.php"; ?>
<div class="col-md-10">
    <div class="panel panel-default">
        <div class="panel-heading section-title">
            <h2>Category List</h2>
        </div>
        <div class="panel-body">
            <div class="block">
                <div class="catlist">
                    <?php
                    if (isset($_GET['delcatid'])){
                        $catId = $_GET['delcatid'];
                        $query = "DELETE FROM category_table WHERE id = '$catId'";
                        $result = $db->deleteData($query);
                        if ($result) {
                            echo "<div class='alert alert-success'>Category Deleted successfully.....!</div>";
                        }
                        else{
                            echo "<div class='alert alert-danger'>Category Not Deleted.....!</div>";
                        }
                    }
                    ?>
                    <table class="table table-striped datatable" id="example">
                        <thead>
                            <tr>
                                <th width="30%">Serial No.</th>
                                <th width="50%">Category Name</th>
                                <th class="text-center" width="20%">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php 
                                $query = "SELECT * FROM category_table ORDER BY name ASC";
                                $getCat = $db->readData($query);
                                if ($getCat) {
                                    $i= 0;
                                    while ($result = $getCat->fetch_assoc()) {
                                        $i++;
                            ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $result['name']; ?></td>
                                <td><a href="catedit.php?editcatid=<?php echo $result['id']; ?>">Edit</a> || <a href="category.php?delcatid=<?php echo $result['id']; ?>" onclick="return confirm('Are you sure delete?');">Delete</a></td>
                            </tr>
                            <?php } } else{ ?>

                            <tr>
                                <td>1</td>
                                <td>No Categories Avaliable In This Time.</td>
                                <td><a href="#">Edit</a> || <a href="#">Delete</a></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "inc/footer.php"; ?>
