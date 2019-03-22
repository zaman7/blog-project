<?php include "inc/header.php"; ?>
<div class="col-md-10">
    <div class="panel panel-default">
        <?php
            if (isset($_GET['viewmsg'])) {
                $msgId = $_GET['viewmsg'];
        ?>
        <div class="panel-heading section-title">
            <h2>View Message</h2>
        </div>
        <div class="panel-body">
            <div class="block">

                <div class="inbox table">
                    <?php
                        $query = "SELECT * FROM contact_table WHERE id = '$msgId'";
                        $inboxMsg = $db->readData($query);
                        if ($inboxMsg) {
                            $i = 0;
                            while ($result = $inboxMsg->fetch_assoc()) {                
                                $i++;
                    ?>
                    <table class="table table-striped datatable" id="example">
                        <tr>
                            <th>Name:</th>
                            <td><?php echo $result['name']; ?></td>
                        </tr>

                        <tr>
                            <th>Email:</th>
                            <td><?php echo $result['email']; ?></td>
                        </tr>

                        <tr>
                            <th>Date:</th>
                            <td><?php echo $result['date']; ?></td>
                        </tr>
                    </table>
                    <div class="messagebody">
                        <h2>Message:</h2>
                        <p><?php echo $result['message']; ?></p>
                    </div>
                    <?php } } ?>
                    <a class="btn btn-success" href="inbox.php">Ok</a>
                </div>
            </div>
        </div>
    <?php }elseif(isset($_GET['replaymsg'])){
        $repId = $_GET['replaymsg'];
    ?>

        <div class="panel-heading section-title">
            <h2>Replay Message</h2>
        </div>
        <div class="panel-body">
            <div class="block">
                <div class="inbox replay">

                <?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $toEmail = $Helpers->validation($_POST['toemail']);
                        $formEmail = $Helpers->validation($_POST['formemail']);
                        $subject = $Helpers->validation($_POST['subject']);
                        $message = $Helpers->validation($_POST['message']);
                        
                        if (empty($toEmail) OR empty($formEmail) OR empty($subject) OR empty($message)) {
                            echo "<div class='alert alert-danger'>Please Fill Out All Field!</div>";
                        }elseif (!filter_var($formEmail, FILTER_VALIDATE_EMAIL)) {
                            echo "<div class='alert alert-danger'>Invalid email address!</div>";
                        }
                        else{
                            $sendMsg = mail($toEmail, $subject, $message, $formEmail);
                            if ($sendMsg) {
                                echo "<div class='alert alert-success'>Message Replay Successfully</div>";
                            }else{
                                echo "<div class='alert alert-danger'>Message Not Replay.....!</div>";
                            }
                        }
                    }
                ?>

                <?php
                    $query = "SELECT * FROM contact_table WHERE id = '$repId'";
                    $inboxMsg = $db->readData($query);
                        if ($inboxMsg) {
                        while ($result = $inboxMsg->fetch_assoc()) {                
                ?>
                    <form action="" method="POST">
                        <div class="form-group">
                            <label>To:</label>
                            <input type="text" name="toemail" class="form-control" value="<?php echo $result['email']; ?>">
                        </div>

                        <div class="form-group">
                            <label>Form:</label>
                            <input type="text" name="formemail" class="form-control" placeholder="Enter Email Address">
                        </div>

                        <div class="form-group">
                            <label>Subject:</label>
                            <input type="text" name="subject" class="form-control" placeholder="Subject">
                        </div>

                        <div class="textarea">
                            <label>Messages:</label>
                            <textarea name="message" placeholder="Messages"></textarea>
                        </div>
                        <input type="submit" class="btn btn-success" value="Replay">
                    </form>
                <?php } } ?>
                </div>
            </div>
        </div>

    <?php }else{ ?>
        <div class="panel-heading section-title">
            <h2>Inbox</h2>
        </div>
        <div class="panel-body">
            <div class="block">
                <div class="inbox">
                    <?php 
                        if (isset($_GET['seenmsg'])) {
                            $seenId = $_GET['seenmsg'];
                            $query= "UPDATE contact_table SET status ='1' WHERE id= '$seenId'";
                            $sendSeenBox = $db->updateData($query);
                            if ($sendSeenBox) {
                                echo "<div class='alert alert-success'>Send Message Successfully....</div>";
                            }else{
                                echo "<div class='alert alert-danger'>Not Send Message.....!</div>";
                            }
                        }

                    ?>
                    <table class="table table-striped datatable" id="example">
                        <thead>
                            <tr>
                                <th width="5%">No.</th>
                                <th width="15%">Name</th>
                                <th width="15%">Email</th>
                                <th width="30%">Message</th>
                                <th width="20%">Date</th>
                                <th class="text-center" width="15%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $query = "SELECT * FROM contact_table WHERE status= '0' ORDER BY id DESC";
                                $inboxMsg = $db->readData($query);
                                if ($inboxMsg) {
                                    $i = 0;
                                    while ($result = $inboxMsg->fetch_assoc()) {                
                                        $i++;
                            ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $result['name']; ?></td>
                                <td><?php echo $result['email']; ?></td>
                                <td><?php echo $Helpers->textShorten($result['message'], 50); ?></td>
                                <td><?php echo $Helpers->FormatDate($result['date']); ?></td>
                                <td><a href="inbox.php?viewmsg=<?php echo $result['id']; ?>">View</a> || <a href="inbox.php?replaymsg=<?php echo $result['id']; ?>">Replay</a> || <a href="inbox.php?seenmsg=<?php echo $result['id']; ?>">Seen</a></td>
                            </tr>
                            <?php } }else{echo "<div class='alert alert-danger'>All Messages Seen!</div>";} ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="panel-heading section-title">
            <h2>Seen Message</h2>
        </div>
        <div class="panel-body">
            <div class="block">
                <div class="inbox">
                    <?php 
                        if (isset($_GET['unseenmsg'])) {
                            $unseenId = $_GET['unseenmsg'];
                            $query= "UPDATE contact_table SET status ='0' WHERE id= '$unseenId'";
                            $sendUnSeenBox = $db->updateData($query);
                            if ($sendUnSeenBox) {
                                echo "<div class='alert alert-success'>Send Message Successfully....</div>";
                            }else{
                                echo "<div class='alert alert-danger'>Not Send Message.....!</div>";
                            }
                        }
                        elseif (isset($_GET['delmsg'])){
                            $delmsgId = $_GET['delmsg'];
                            $query = "DELETE FROM contact_table WHERE id = '$delmsgId'";
                            $result = $db->deleteData($query);
                            if ($result) {
                                echo "<div class='alert alert-success'>Message Deleted successfully.....!</div>";
                            }
                            else{
                                echo "<div class='alert alert-danger'>Message Not Deleted.....!</div>";
                            }
                        }
                    ?>

                    <table class="table table-striped datatable" id="example">
                        <thead>
                            <tr>
                                <th width="5%">No.</th>
                                <th width="15%">Name</th>
                                <th width="15%">Email</th>
                                <th width="30%">Message</th>
                                <th width="20%">Date</th>
                                <th class="text-center" width="15%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $query = "SELECT * FROM contact_table WHERE status= '1' ORDER BY id DESC";
                                $inboxMsg = $db->readData($query);
                                if ($inboxMsg) {
                                    $i = 0;
                                    while ($result = $inboxMsg->fetch_assoc()) {                
                                        $i++;
                            ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $result['name']; ?></td>
                                <td><?php echo $result['email']; ?></td>
                                <td><?php echo $Helpers->textShorten($result['message'], 50); ?></td>
                                <td><?php echo $Helpers->FormatDate($result['date']); ?></td>
                                <td><a href="inbox.php?unseenmsg=<?php echo $result['id']; ?>">Unseen</a> || <a href="inbox.php?delmsg=<?php echo $result['id']; ?>">Delete</a></td>
                            </tr>
                            <?php } }else{echo "<div class='alert alert-danger'>No Messages!</div>";} ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <?php } ?>
    </div>
</div>
<?php include "inc/footer.php"; ?>
