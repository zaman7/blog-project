<?php include "inc/header.php"; ?>
<div class="col-md-10">
    <div class="panel panel-default">
        <div class="panel-heading section-title">
            <h2>Password change</h2>
        </div>
        <div class="panel-body">
            <div class="block">
                <div class="passchange">
                    <form>
                        <div class="form-group">
                            <label for="password">Old Password:</label>
                            <input type="text" placeholder="Enter Old Password..." id="password" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="o-password">New Password:</label>
                            <input type="text" placeholder="Enter New Password..." id="o-password" class="form-control">
                        </div>
                        <input type="submit" name="submit" Value="Update" class="btn btn-success" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "inc/footer.php"; ?>
