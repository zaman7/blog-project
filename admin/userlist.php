<?php include "inc/header.php"; ?>
<div class="col-md-10">
    <div class="panel panel-default">
        <div class="panel-heading section-title">
            <h2>User List</h2>
        </div>
        <div class="panel-body">
            <div class="block">
                <div class="catlist">
                    <?php 
                        if (isset($_GET['deluser'])) {
                            $deluser = $_GET['deluser'];
                            $query = "DELETE FROM user_table WHERE id = '$deluser'";
                            $result = $db->deleteData($query);
                            if ($result) {
                                echo "<div class='alert alert-success'><strong>Success! </strong>User Deleted.....!</div>";
                            }
                            else{
                                echo "<div class='alert alert-danger'><strong>Error! </strong>User Not Deleted.....!</div>";
                            }
                        }
                    ?>
                    <table class="table table-striped datatable" id="example">
                        <thead>
                            <tr>
                                <th width="5%">Serial No.</th>
                                <th width="20%">Name</th>
                                <th width="20%">Username</th>
                                <th width="15%">Email</th>
                                <th width="20%">Details</th>
                                <th width="10%">Role</th>
                                <th width="10%">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php 
                                $query = "SELECT * FROM user_table ORDER BY id DESC";
                                $getUserlist = $db->readData($query);
                                if ($getUserlist) {
                                    $i= 0;
                                    while ($result = $getUserlist->fetch_assoc()) {
                                        $i++;
                            ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $result['name']; ?></td>
                                <td><?php echo $result['username']; ?></td>
                                <td><?php echo $result['email']; ?></td>
                                <td><?php echo $result['details']; ?></td>
                                <td>
                                <?php
                                    if($result['role'] == "0"){
                                        echo "Admin";
                                    }elseif ($result['role'] == "1") {
                                        echo "Author";
                                    }elseif($result['role'] == "2"){
                                        echo "Editor";
                                    }else{
                                        echo "Admin";
                                    }
                                ?> 
                                </td>
                                <?php
                                    if (Session::get('userRole') == '0') {
                                
                                ?>
                                <td><a href="?deluser=<?php echo $result['id']; ?>" onclick="return confirm('Are you sure delete?')">Delete</a></td>
                                <?php } else{ ?>
                                <td>No Action</td>
                            </tr>
                            <?php } } } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "inc/footer.php"; ?>
