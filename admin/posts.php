<?php include 'includes/admin_header.php';



?>
    <div id="wrapper">
<?php ?>
        <!-- Navigation -->
       <?php include 'includes/admin_navbar.php';?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to News Page
                            <small>News Content</small>
                        </h1>


<?php
if (isset($_GET['source'])) {
	$source = $_GET['source'];
} else {
	$source = '';
}
switch ($source) {

case 'add_post':
	include 'includes/admin_add_post.php';
	break;
case 'edit_post':
	include 'includes/admin_edit_post.php';
	break;
case '02':
	echo "Source o2";
	break;
case '94':
	echo "Exploring";
	break;

default:
	include 'includes/admin_view_all_posts.php';
	break;
}

?>





                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
<!--
   <?php 'includes/admin_footer.php';?> -->
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
