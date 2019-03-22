<?php include "inc/header.php"; ?>
<div class="col-md-10">
    <div class="panel panel-default">
        <div class="panel-heading section-title">
            <h2>Post list</h2>
        </div>
        <div class="panel-body">
            <div class="block">
                <div class="postlist">
                    <?php 
                        if (isset($_GET['delpost'])) {
                            $deltId = $_GET['delpost'];
                            $query = "SELECT * FROM post_table WHERE id = '$deltId'";
                            $getpostImg = $db->readData($query);
                            if ($getpostImg) {
                                while ($delImg = $getpostImg->fetch_assoc()) {
                                    $unlinkImg = $delImg['image'];
                                    if ($unlinkImg) {
                                       unlink($unlinkImg);
                                    }
                                }
                            }
                            $query = "DELETE FROM post_table WHERE id = '$deltId'";
                            $result = $db->deleteData($query);
                            if ($result) {
                                echo "<div class='alert alert-success'><strong>Success! </strong>Post Deleted successfully.....!</div>";
                            }
                            else{
                                echo "<div class='alert alert-danger'><strong>Error! </strong>Post Not Deleted.....!</div>";
                            }
                        }
                    ?>
                    <table class="table table-striped datatable" id="example">
                        <thead>
                            <tr>
                                <th width="5%">No.</th>
                                <th width="10%">Category</th>
                                <th width="15%">Post Title</th>
                                <th width="20%">Body</th>
                                <th class="text-center" width="10%">Images</th>
                                <th width="10%">Author</th>
                                <th width="10%">Tags</th>
                                <th width="10%">Date</th>
                                <th class="text-center" width="10%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $query = "SELECT post_table.*, category_table.name FROM post_table INNER JOIN category_table ON post_table.cat = category_table.id ORDER BY post_table.id DESC";
                                $getPost = $db->readData($query);
                                if ($getPost) {
                                    $i= 0;
                                    while ($postlist = $getPost->fetch_assoc()) { 
                                        $i++;
                            ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $postlist['name']; ?></td>
                                <td><?php echo $postlist['title']; ?></td>
                                <td><?php echo $Helpers->textShorten($postlist['body'], 100); ?></td>
                                <td>
                                    <?php
                                        if ($postlist['image']) {
                                    ?>
                                    <img src="<?php echo $postlist['image']; ?>" width="80px" alt="">
                                    <?php }else{echo "No Image";} ?>
                                </td>
                                <td><?php echo $postlist['author']; ?></td>
                                <td><?php echo $postlist['tags']; ?></td>
                                <td><?php echo $postlist['date']; ?></td>
                                <td class="text-center">
                                <?php 
                                    if (Session::get('userId') == $postlist['userid'] OR Session::get('userRole') == '0') {
                                        
                                ?> 
                                <a href="view.php?viewpost=<?php echo $postlist['id']; ?>">View</a> || <a href="postedit.php?editpost=<?php echo $postlist['id']; ?>">Edit</a><br><a href="postlist.php?delpost=<?php echo $postlist['id']; ?>" onclick="return confirm('Are you sure delete?');">Delete</a>
                                <?php }else{ ?>
                                <a href="view.php?viewpost=<?php echo $postlist['id']; ?>">View</a>
                                <?php } ?>
                                </td>
                            </tr>
                            <?php } }else{ echo "<div class='alert alert-warning'>No Post Avaliable In This Time.</div>";} ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "inc/footer.php"; ?>
