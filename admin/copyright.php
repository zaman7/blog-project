<?php include "inc/header.php"; ?>
<div class="col-md-10">
    <div class="panel panel-default">
        <div class="panel-heading section-title">
            <h2>Update Copyright Text</h2>
        </div>
        <div class="panel-body">
            <div class="block">
                <div class="copyblock">
                    <?php 

                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                            $footerNote = $Helpers->validation($_POST['note']);

                            

                            if (empty($footerNote)) {
                                echo "<div class='alert alert-danger'><strong>Error! </strong>Field must not be empty!</div>";
                            }
                            else{
                                $footerNote = mysqli_real_escape_string($db->link, $footerNote);

                                $query= "UPDATE footer_table SET note='$footerNote' WHERE id = '1'";

                                $upPost = $db->updateData($query);
                                if ($upPost) {
                                    echo "<div class='alert alert-success'><strong>Success! </strong>Copyright Text Updated Successfully!</div>";
                                }else{
                                    echo "<div class='alert alert-danger'><strong>Error! </strong>Copyright Text Not Updated.....!</div>";
                                }
                            }  
                        }
                    ?>
                    <?php
                        $query = "SELECT * FROM footer_table WHERE id = '1'";
                        $copyright = $db->readData($query);
                        if ($copyright) {
                            while ($result = $copyright->fetch_assoc()) {                
                              
                    ?>
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="copyright">Copyright:</label>
                            <input type="text" name="note" value="<?php echo $result['note'];?>" id="copyright" class="form-control">
                        </div>
                        
                        <input type="submit" name="submit" Value="Update" class="btn btn-success"/>
                    </form>
                    <?php } } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "inc/footer.php"; ?>
