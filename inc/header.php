<?php include "lib/config.php";?>
<?php include "lib/Database.php";?>
<?php include "lib/Helpers.php";?>

<?php 
    $db = new Database();
    $Helpers = new Helpers();
?>
<?php
    //set headers to NOT cache a page
    header("Cache-Control: no-cache, must-revalidate"); //HTTP 1.1
    header("Pragma: no-cache"); //HTTP 1.0
    header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); 
    // Date in the past
    //or, if you DO want a file to cache, use:
    header("Cache-Control: max-age=2592000"); 
    //30days (60sec * 60min * 24hours * 30days)
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <?php 
        if (isset($_GET['page'])) {
            $id = $_GET['page'];

            $query = "SELECT * FROM page_table WHERE id= '$id'";
            $pagetitle = $db->readData($query);
            if ($pagetitle) {
                while ($result = $pagetitle->fetch_assoc()) {
    ?>
    <title>
        <?php echo $result['name']; ?> ::
        <?php echo TITLE; ?>
    </title>
    <?php } } }
        elseif(isset($_GET['postid'])) {
            $id = $_GET['postid'];
            $query = "SELECT * FROM post_table WHERE id= '$id'";
            $pagetitle = $db->readData($query);
            if ($pagetitle) {
                while ($result = $pagetitle->fetch_assoc()) {
    ?>
    <title>
        <?php echo $result['title']; ?> ::
        <?php echo TITLE; ?>
    </title>
    <?php } } }
        elseif(isset($_GET['categories'])) {
            $id = $_GET['categories'];
            $query = "SELECT * FROM category_table WHERE id= '$id'";
            $pagetitle = $db->readData($query);
            if ($pagetitle) {
                while ($result = $pagetitle->fetch_assoc()) {
    ?>
    <title>
        <?php echo $result['name']; ?> ::
        <?php echo TITLE; ?>
    </title>
    <?php } } }
        else{ ?>
    <title>
        <?php echo $Helpers->title(); ?> ::
        <?php echo TITLE; ?>
    </title>
    <?php } ?>
    <meta name="description" content="">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="assets/js/vendor/jquery-3.2.1.min.js"></script>


    <!-- Extranal CSS Files Link -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="style.css">
    <?php 
        $query = "SELECT * FROM theme_table WHERE id = '1'";
        $theme = $db->readData($query);
        if ($theme) {
            $result = $theme->fetch_assoc();
            if ($result['name'] == 'Teal') {
    ?>
    <link rel="stylesheet" href="assets/theme/teal.css">
    <?php }elseif($result['name'] == 'Green'){ ?>
    <link rel="stylesheet" href="assets/theme/green.css">
    <?php }elseif($result['name'] == 'Brown'){?>
    <link rel="stylesheet" href="assets/theme/brown.css">
    <?php } }else{ ?>
    <link rel="stylesheet" href="style.css">
    <?php } ?>
    <link rel="stylesheet" href="assets/css/responsive.css">

    <!--[if lt IE 9]>
            <script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body>
    <!-- Mark up your html code-->
    <div id="scroll-top"></div>
    <section class="header-area">
        <div class="container header-bg">
            <div class="row">
                <?php 
                    $query = "SELECT * FROM sitetitle_table";
                    $siteinfo = $db->readData($query);
                    if ($siteinfo) {
                        while ($result = $siteinfo->fetch_assoc()) {                
                          
                ?>
                <div class="col-md-1">
                    <div class="logo-img">
                        <a href="index.php"><img src="admin/<?php echo $result['logo'] ?>" alt="logo"></a>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="site-title">
                        <h2>
                            <?php echo $result['title'] ?>
                        </h2>
                        <p>&copy;
                            <?php echo $result['slogan'] ?>
                        </p>
                    </div>

                </div>
                <?php } } ?>
                <div class="col-md-3">
                    <?php
                        $query = "SELECT * FROM social_table";
                        $sociallink = $db->readData($query);
                        if ($sociallink) {
                            while ($result = $sociallink->fetch_assoc()) {                

                    ?>
                    <div class="social-icon text-center">
                        <a href="<?php echo $result['facebook']; ?>" id="social-link" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="<?php echo $result['twitter']; ?>" id="social-link" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="<?php echo $result['linkedin']; ?>" id="social-link" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        <a href="<?php echo $result['google']; ?>" id="social-link" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                    </div>
                   <?php } } ?>
                </div>
                <div class="col-md-3">
                    <div class="searchbtn">
                        <form action="search.php" method="GET">
                            <div class="ipsearch">
                                <input type="text" name="search" placeholder="Search keyword...">
                            </div>
                            <div class="ipsubmit">
                                <input type="submit" name="submit" value="Search">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End header section -->

    <section class="slider-area">
        <div class="container">
            <div class="row">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="banner-area slider-bg1">
                                <div class="slider-text text-center">
                                    <h2>SLIDER 1</h2>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="banner-area slider-bg2">
                                <div class="slider-text text-center">
                                    <h2>SLIDER 2</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="left slider-control" href="#slider-carousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                    <a class="right slider-control" href="#slider-carousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner area -->

    <section class="menu-area">
        <div class="container menu-bg">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-manu">
                        <ul class="nav navbar-nav">
                            <?php 
                                $path = $_SERVER['SCRIPT_FILENAME'];
                                $cpage = basename($path, '.php');
                            ?>
                            <li <?php if ($cpage=='index' ){ echo "class='active'"; } ?> ><a href="index.php">home</a></li>
                            <?php 
                                $query = "SELECT * FROM page_table";
                                $page = $db->readData($query);
                                if ($page) {
                                    while ($result = $page->fetch_assoc()) {                

                            ?>
                            <li <?php if (isset($_GET[ 'page']) && $_GET[ 'page'] == $result[ 'id']) { echo "class='active'"; } ?>
                                >
                                <a href="page.php?page=<?php echo $result['id']; ?>">
                                    <?php echo $result['name']; ?>
                                </a>
                            </li>
                            <?php } } ?>
                            <li <?php if ($cpage=='contact' ){ echo "class='active'"; } ?> ><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end menu section -->
