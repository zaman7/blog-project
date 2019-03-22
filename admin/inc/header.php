<?php
    include "../lib/Session.php";
    Session::init();
    Session::checkSession();
?>
<?php include "../lib/config.php";?>
<?php include "../lib/Database.php";?>
<?php include "../lib/Helpers.php";?>

<?php 
    $db = new Database();
    $Helpers = new Helpers();
?>

<?php 

    if (isset($_GET['action']) && $_GET['action'] == 'logout') {
       Session::destroy();
       header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home || Admin</title>
    <meta name="description" content="">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Extranal CSS Files Link -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="screen">
    <link rel="stylesheet" type="text/css" href="style.css" media="screen">

</head>

<body>
    <!-- Mark up your html code-->
    <section class="header01">
        <div class="container-fluid">
            <div class="header-top">
                <div class="row">
                    <div class="col-md-4">
                        <div class="logo">
                            <a href="index.php"><img src="img/logo.png" alt=""></a>
                            <a href="index.php">
                                <h2>Blog Project Admin Panel</h2>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <nav class="header-menu">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                               <span class="icon-bar"></span>
                               <span class="icon-bar"></span>
                               <span class="icon-bar"></span>
                            </button>
                            </div>
                            <div class="navbar-collapse collapse">
                                <ul class="nav navbar-nav pull-right">
                                    <?php 
                                    $username = Session::get("username");
                                    if (isset($username)) {
                                        
                                    ?>
                                    <li><a class="admin-ic" href="index.php">Hello <?php echo $username; ?> |</a></li>
                                    <?php } ?>
                                    <li><a href="#">Config |</a></li>
                                    <li><a href="?action=logout">Logout</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end nav-->

    <section class="header02">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <nav class="middle-header">
                        <ul class="nav navbar-nav">
                            <li><a class="ic-dashboard" href="index.php">Dashboard</a></li>
                            <li><a class="ic-theme" href="theme.php">Theme</a></li>
                            <li><a class="ic-profile" href="profile.php">User Profile</a></li>
                            <li><a class="ic-pass" href="password.php">Change Password</a></li>
                            <li><a class="ic-inbox" href="inbox.php">Inbox
                            <?php 
                                $query = "SELECT * FROM contact_table WHERE status= '0' ORDER BY id DESC";
                                $msg = $db->readData($query);
                                if ($msg) {
                                    $count = mysqli_num_rows($msg);
                                    echo "(".$count.")";
                                }else {
                                    echo "(0)";
                                }           

                            ?>
                            </a></li>
                            <?php if (Session::get('userRole') == '0') {
                                
                            ?>
                            <li><a class="ic-visitor" href="adduser.php">Add User</a></li>
                            <?php } ?>
                            <li><a class="ic-visitor" href="userlist.php">User List</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- end nav-->

    <section class="sidebar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                    <div class="panel panel-default">
                        <div class="panel-heading section-title">
                            <h2>Site Option</h2>
                        </div>
                        <div class="panel-body sidebar">
                            <div class="block">
                                <ul class="section menu">
                                    <li><a class="menuitem">Site Option</a>
                                        <ul class="submenu">
                                            <li><a href="desctitle.php">Title & Slogan</a></li>
                                            <li><a href="social.php">Social Media</a></li>
                                            <li><a href="copyright.php">Copyright</a></li>
                                        </ul>
                                    </li>

                                    <li><a class="menuitem">Pages Option</a>
                                        <ul class="submenu">
                                            <li><a href="addpage.php">Add New Page</a></li>
                                            <?php 
                                                $query = "SELECT * FROM page_table";
                                                $page = $db->readData($query);
                                                if ($page) {
                                                    while ($result = $page->fetch_assoc()) {                
                                                      
                                            ?>
                                            <li><a href="pageedit.php?pageid=<?php echo $result['id']; ?>"><?php echo $result['name']; ?></a></li>
                                            <?php } } ?>
                                        </ul>
                                    </li>

                                    <li><a class="menuitem">Category Option</a>
                                        <ul class="submenu">
                                            <li><a href="addcateg.php">Add Category</a></li>
                                            <li><a href="category.php">Category List</a></li>
                                        </ul>
                                    </li>

                                    <li><a class="menuitem">Posts Option</a>
                                        <ul class="submenu">
                                            <li><a href="addpost.php">Add Posts</a></li>
                                            <li><a href="postlist.php">All Posts</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
