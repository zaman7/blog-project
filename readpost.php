<?php include "inc/header.php";?>

<section class="contane-area">
    <div class="container container-bg">
        <div class="row">
            <div class="col-md-8">
                <div class="post-area container-inner-bg">
                    <?php 
                        if (!isset($_GET['postid']) OR $_GET['postid'] == NULL) {
                            header("Location: index.php");
                        }else{
                            $id = $_GET['postid'];
                        }
                    ?>

                    <?php 
                        $query = "SELECT * FROM post_table WHERE id= '$id'";
                        $post = $db->readData($query);
                        if ($post) {
                            while ($results = $post->fetch_assoc()) {                
                              
                    ?>
                    <div class="post">
                        <h2><?php echo $results['title']; ?></h2>
                        <h4><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $Helpers->FormatDate($results['date']); ?>, By <a href="#"><i class="fa fa-user" aria-hidden="true"></i> <?php echo $results['author']; ?></a></h4>

                        <?php 
                            if($results['image']) {
                        ?>
                        <a href="admin/<?php echo $results['image']; ?>">
                            <img src="admin/<?php echo $results['image']; ?>" alt="post image"/>
                        </a>
                        <?php } ?>
                        
                        <p>
                            <?php echo $results['body']; ?>
                        </p>
                    </div>
                    
                    <div class="related-post">
                        <h2>Related Post...</h2>
                        <?php
                            $catid = $results['cat'];
                            $querycat = "SELECT * FROM post_table WHERE cat = '$catid' order by rand() LIMIT 3";
                            $postcat = $db->readData($querycat);
                            if ($postcat) {
                                while ($rresults = $postcat->fetch_assoc()) {

                        ?>
                        <div class="rel-post col-md-4">

                            <?php 
                                if($rresults['image']) {
                            ?>
                            <a href="readpost.php?postid=<?php echo $rresults['id']; ?>">
                                <img src="admin/<?php echo $rresults['image']; ?>" alt="post image"/>
                            </a>
                            <?php }else{echo "No Related Post...";} ?>

                        </div>
                        <?php } }else{ echo "<div class='alert alert-warning'>Related post are not available</div>";} ?>
                        <?php } }else{ header("Location: index.php"); } ?>

                    </div>
                </div>
            </div>
            <?php include "inc/sidebar.php"; ?>
        </div>
    </div>
</section>
<?php include "inc/footer.php"; ?>
