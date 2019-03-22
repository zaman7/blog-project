<div class="col-md-4">
    <div class="sideber-area container-inner-bg">
        <div class="blog-post">
            <div class="sidebar-p">
                <h1 class="section-title">Categories</h1>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="articles-post">
                            <?php 
                                $query = "SELECT * FROM category_table ORDER BY name ASC";
                                $categories = $db->readData($query);
                                if ($categories) {
                                    while ($results = $categories->fetch_assoc()) {

                            ?>
                            <ul class="articles-link">
                                <li><a href="posts.php?categories=<?php echo $results['id']; ?>"><?php echo $results['name']; ?><span class="floatright">(65)</span></a></li>
                            </ul>
                            <?php } } else{ ?>

                            <ul class="articles-link">
                                <li><div class="alert alert-warning">No Categories</div></li>
                            </ul>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="sidebar-p">
                <h1 class="section-title">Recent Post</h1>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <?php 
                        $query = "SELECT * FROM post_table ORDER BY id DESC LIMIT 3 ";
                        $recentpost = $db->readData($query);
                            if ($recentpost) {
                                while ($results = $recentpost->fetch_assoc()) {                
                                  
                        ?>
                        <div class="recent-articles">
                            <h3><a href="readpost.php?postid=<?php echo $results['id']; ?>"><?php echo $results['title']; ?></a></h3>
                            <?php 
                                if($results['image']) {
                            ?>
                            <a href="readpost.php?postid=<?php echo $results['id']; ?>">
                                <img src="admin/<?php echo $results['image']; ?>" alt="post image"/>
                            </a>
                            <?php } ?>
                            
                            <p><?php echo $Helpers->textShorten($results['body'], 120); ?></p>
                        </div>
                        <?php } }else{ echo "<div class='alert alert-warning'>No Post Avaliable In This Time....!!</div>"; } ?>
                    </div>
                </div>
            </div>

            <div class="sidebar-p">
                <h1 class="section-title">Tag</h1>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="tag-section">
                            <a href="" class="tag-link">Business</a>
                            <a href="" class="tag-link">corporate</a>
                            <a href="" class="tag-link">web</a>
                            <a href="" class="tag-link">onepage</a>
                            <a href="" class="tag-link">agency</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>