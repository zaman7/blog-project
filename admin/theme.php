<?php include "inc/header.php"; ?>
<div class="col-md-10">
    <div class="panel panel-default">
        <div class="panel-heading section-title">
            <h2>Theme</h2>
        </div>
        <div class="panel-body">
            <div class="block">
                <div class="catblock">
                    <?php 
                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            $theme = $_POST['theme'];
                            if (empty($theme)) {
                                echo "<div class='alert alert-danger'>Field must not be empty!</div>";
                            }
                            else{
                                $theme = mysqli_real_escape_string($db->link, $theme);
                                $query= "UPDATE theme_table SET name='$theme' WHERE id ='1'";
                                $upTheme = $db->updateData($query);
                                if ($upTheme) {
                                    echo "<div class='alert alert-success'><strong>Success! </strong>".$theme." Theme Activeted.</div>";
                                }else{
                                    echo "<div class='alert alert-danger'>Theme Not Activeted.....!</div>";
                                }
                            }
                        }
                    ?>

                    <?php
                        $query = "SELECT * FROM theme_table WHERE id = '1'";
                        $getTheme = $db->readData($query);
                        if ($getTheme) {
                            $result = $getTheme->fetch_assoc();
                    ?>
                    <form action="" method="POST">
                        <fieldset>
                            <legend>Theme</legend>
                            <table>
                                <caption>Theme List</caption>
                                <tr>
                                    <td><input type="radio" <?php if ($result['name'] == "Default") {
                                        echo "checked";
                                    } ?> name="theme" value="Default" id="default"> <label for="default">Default</label> </td>
                                </tr>

                                <tr>
                                    <td><input type="radio" <?php if ($result['name'] == "Teal") {
                                        echo "checked";
                                    } ?> name="theme" value="Teal" id="teal"> <label for="teal">Teal</label></td>
                                </tr>

                                <tr>
                                    <td><input type="radio" <?php if ($result['name'] == "Green") {
                                        echo "checked";
                                    } ?> name="theme" value="Green" id="green"> <label for="green">Green</label></td>
                                </tr>

                                <tr>
                                    <td><input type="radio" <?php if ($result['name'] == "Brown") {
                                        echo "checked";
                                    } ?> name="theme" value="Brown" id="cadetblue"> <label for="cadetblue">Brown</label></td>
                                </tr>
                            </table>
                            <input type="submit" class="btn btn-success" name="submit" Value="Active Theme" />
                        </fieldset>
                    </form>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "inc/footer.php"; ?>
