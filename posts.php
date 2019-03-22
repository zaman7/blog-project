<?php include "inc/header.php";?>

<section class="contane-area">
    <div class="container container-bg">
        <div class="row">
            <div class="col-md-8">
                <div class="post-area container-inner-bg">

                    <?php 
                        if (!isset($_GET['categories']) OR $_GET['categories'] == NULL) {
                            header("Location: index.php");
                        }
                        else{
                            $id = $_GET['categories'];

                            $query = "SELECT * FROM post_table WHERE cat= '$id'";
                            $categories = $db->readData($query);
                            if ($categories) {
                                while ($results = $categories->fetch_assoc()) {                
                              
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
                    <?php } }else{ echo "<div class='alert alert-warning'>No Post Avaliable In This Category.</div>"; } } ?>
                </div>
            </div>
            <?php include "inc/sidebar.php"; ?>
        </div>
    </div>
</section>
<?php include "inc/footer.php"; ?>
