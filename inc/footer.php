        <section class="footer-area">
            <div class="container footer-bg">
                <div class="row">
                    <div class="col-md-5 col-md-offset-3">
                        <div class="footer-text">
                            <?php
                                $query = "SELECT * FROM footer_table";
                                $copyright = $db->readData($query);
                                if ($copyright) {
                                    while ($result = $copyright->fetch_assoc()) {                
                                      
                            ?>
                            <p>&copy; <?php echo $result['note']; ?></p>
                            <?php } } ?>
                        </div>
                    </div>
                    <div class="col-md-4">


                        <?php
                            $query = "SELECT * FROM social_table";
                            $sociallink = $db->readData($query);
                            if ($sociallink) {
                                while ($result = $sociallink->fetch_assoc()) {                
                                  
                        ?>
                        <div class="footer-social text-center">
                            <a href="<?php echo $result['facebook']; ?>" id="social-link" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="<?php echo $result['twitter']; ?>" id="social-link" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="<?php echo $result['linkedin']; ?>" id="social-link" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            <a href="<?php echo $result['google']; ?>" id="social-link" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                        </div>
                        <?php } } ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- end footer section -->

        <div class="scroll-top">
            <a class="smooth-scroll" href="#scroll-top"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i></a>
        </div>
        <script src="assets/js/bootstrap.js" type="text/javascript"></script>
    </body>

</html>
