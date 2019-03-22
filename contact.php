<?php include "inc/header.php";?>

<section class="contane-area">
    <div class="container container-bg">
        <div class="row">
            <div class="col-md-8">
                <div class="contact-area container-inner-bg">
                	<div class="contact-form">
	                	<?php
			                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			                    $name = $Helpers->validation($_POST['name']);
			                    $email = $Helpers->validation($_POST['email']);
			                    $message = $Helpers->validation($_POST['message']);

			                    $name = mysqli_real_escape_string($db->link, $name);
			                    $email = mysqli_real_escape_string($db->link, $email);
			                    $message = mysqli_real_escape_string($db->link, $message);
			                    
			                    if (empty($name) OR empty($email) OR empty($message)) {
			                    	echo "<div class='alert alert-danger'>Please Fill Out All Field!</div>";
			                    }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			                    	echo "<div class='alert alert-danger'>Invalid email address!</div>";
			                    }
			                    else{
			                    	$query= "INSERT INTO contact_table(name, email, message) VALUES('$name','$email', '$message')";
	                                $sendMsg = $db->insertData($query);
	                                if ($sendMsg) {
	                                    echo "<div class='alert alert-success'>Message send Successfully</div>";
	                                }else{
	                                    echo "<div class='alert alert-danger'>Message Not send.....!</div>";
	                                }
			                    }
			                }
			            ?>
	                    <form action="" method="POST">

	                        <div class="form-group">
	                            <label for="name">Name:</label>
	                            <input type="text" name="name" id="name" class="form-control" placeholder="Name*">
	                        </div>


	                        <div class="form-group">
	                            <label for="email">Email:</label>
	                            <input type="text" name="email" id="email" class="form-control" placeholder="Your Email Address*">
	                        </div>
							<div class="textarea">
								<label>Messages:</label>
								<textarea name="message" placeholder="Messages"></textarea>
							</div>
	                        <input type="submit" class="signupbtn" value="Send">
	                    </form>
	                </div>
                </div>
            </div>
            <?php include "inc/sidebar.php"; ?>
        </div>
    </div>
</section>
<!-- end sidbar section -->
<?php include "inc/footer.php"; ?>
