<?php include "inc/header.php";?>

<section class="contane-area">
    <div class="container container-bg">
        <div class="row">
            <div class="col-md-8">
                <div class="post-area container-inner-bg">

                    <?php 
                        if (!isset($_GET['page']) OR $_GET['page'] == NULL) {
                            header("Location: index.php");
                        }
                        else{
                            $id = $_GET['page'];

                            $query = "SELECT * FROM page_table WHERE id= '$id'";
                            $categories = $db->readData($query);
                            if ($categories) {
                                while ($results = $categories->fetch_assoc()) {                
                              
                    ?>

                    <div class="main-post">
                        <h2><?php echo $results['name']; ?></h2>
                        <p><?php echo $results['pagebody']; ?></p>
                    </div>
                    <?php } } } ?>

                </div>

                <div class="related-post container-inner-bg">
                    <h2>Recent Post...</h2>
                    <?php 
                        $query = "SELECT * FROM post_table ORDER BY id DESC LIMIT 4";
                        $post = $db->readData($query);
                        if ($post) {
                            while ($results = $post->fetch_assoc()) {
                              
                    ?>
                    <div class="rel-post col-md-3">
                        <?php 
                            if($results['image']) {
                        ?>
                        <a href="readpost.php?postid=<?php echo $results['id']; ?>">
                            <img src="admin/<?php echo $results['image']; ?>" alt="post image"/>
                        </a>
                        <?php }else{ ?>
                        
                        <div class="post-contane">
                            <a href="readpost.php?postid=<?php echo $results['id']; ?>">
                                <p>
                                    <?php echo $Helpers->textShorten($results['body'], 30); ?>
                                </p>
                            </a>
                        </div>
                        <?php } ?>
                        <div class="post-contane">
                            <p>
                                <?php echo $Helpers->textShorten($results['body'], 132); ?>
                            </p>
                        </div>
                    </div>
                    <?php } }else{ echo "<div class='alert alert-warning'>No Post Avaliable In This Time....!!</div>"; } ?>
                </div>
            </div>
            <!-- end post -->
            <!-- start sidebar -->
            <?php include "inc/sidebar.php"; ?>
            <!-- end sidebar -->
        </div>
    </div>
</section>
<!-- end sidbar section -->
<?php include "inc/footer.php";?>
