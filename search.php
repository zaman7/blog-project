<?php include "inc/header.php";?>

<section class="contane-area">
    <div class="container container-bg">
        <div class="row">
            <div class="col-md-8">
                <div class="post-area container-inner-bg">
                    <?php 
                        if (!isset($_GET['search']) OR $_GET['search'] == NULL) {
                            echo "<div class='alert alert-warning'>Please wirte somthing search box..!!</div>";
                        }
                        else{
                            $search = $_GET['search'];


                        $query = "SELECT * FROM post_table WHERE title LIKE '%$search%' OR body LIKE '%$search%'";
                        $searchpost = $db->readData($query);
                        if ($searchpost) {
                            while ($results = $searchpost->fetch_assoc()) {                
                              
                    ?>
                    <div class="main-post">
                        <h2><a href="readpost.php?postid=<?php echo $results['id']; ?>"><?php echo $results['title']; ?></a></h2>
                        <h4><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $Helpers->FormatDate($results['date']); ?>, By <a href="#"><i class="fa fa-user" aria-hidden="true"></i> <?php echo $results['author']; ?></a></h4>

                        <?php 
                            if($results['image']) {
                        ?>
                        <a href="readpost.php?postid=<?php echo $results['id']; ?>">
                            <img src="admin/<?php echo $results['image']; ?>" alt="post image"/>
                        </a>
                        <?php } ?>
                        
                        <p>
                            <?php echo $Helpers->textShorten($results['body'], 350); ?>
                        </p>
                        <div class="readmore">
                            <a class="read-more" href="readpost.php?postid=<?php echo $results['id']; ?>">Read More</a>
                        </div>
                    </div>
                    <?php } ?>

                    <?php }else{ echo "<div class='alert alert-warning'><strong>".$search."</strong>search not found!!</div>"; } } ?>
                </div>
            </div>
            <?php include "inc/sidebar.php"; ?>
        </div>
    </div>
</section>
<!-- end sidbar section -->
<?php include "inc/footer.php";?>
