<?php include "inc/header.php";?>
<section class="contane-area">
    <div class="container container-bg">
        <div class="row">
            <div class="col-md-8">
                <div class="post-area container-inner-bg">
                    <!-- pagination -->
                    <?php
                        $par_page = 3;
                        if (isset($_GET['page'])) {
                            $page = $_GET['page'];
                        }
                        else{
                            $page = 1;
                        }
                        $start_page = ($page-1) * $par_page;
                    ?>
                    <!-- pagination -->
                    <?php 
                        $query = "SELECT * FROM post_table ORDER BY id DESC LIMIT $start_page, $par_page";
                        $post = $db->readData($query);
                        if ($post) {
                            while ($results = $post->fetch_assoc()) {                
                              
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

                <!-- Pagination)   -->
                    <div class="page_pagination">               
                    <?php 
                        $query = "SELECT * FROM post_table";
                        $results = $db->readData($query);
                        $total_rows = mysqli_num_rows($results);
                        $total_page = ceil($total_rows/$par_page);

                        echo "<div class='page'>";
                        echo "<a class='next-page' href='index.php?page=1'>Fast page</a>";
                        for ($i=1; $i <=$total_page; $i++) { 
                            echo "<a class='next-page' href='index.php?page=".$i."'>$i</a>";
                        }
                        echo "<a class='next-page' href='index.php?page=".$total_page."'>Last page</a>";
                        echo "</div>";
                    ?>
                    </div>
                <!-- Pagination)   -->

                    <?php } else{ echo "<div class='alert alert-warning'>No Post Avaliable In This Time....!!</div>"; } ?>
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
