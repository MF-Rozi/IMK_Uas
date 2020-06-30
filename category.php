
<?php include 'includes/header.php';?>
        <!-- Navigation Bar -->
   <?php include 'includes/navbar.php';?>
        <!-- Navigation Bar -->


            <?php
if (isset($_GET['cat_id'])) {
	$category = $_GET['cat_id'];
}
mysqli_real_escape_string($con,$category);
$query = "SELECT * FROM posts WHERE post_category_id=$category";
$run_query = mysqli_query($con, $query);
$count = mysqli_num_rows($run_query);
if ($count == 0) {
	echo "<h1>No Post in this Category</h1>";
} else {
	$cat_query = "SELECT * FROM `categories` WHERE `cat_id` = '$category'";
	$cat_run = $con -> query($cat_query);
	$cat_get = $cat_run -> fetch_assoc();

	?>
	<div class="container">
        <div class="row">
	        <!-- Page Content -->
	        <div class="col-md-8">
						<h1 class="page-header"><?php echo"$cat_get[cat_title]" ?></h1>
						<?php
	while ($row = mysqli_fetch_assoc($run_query)) {
		$post_title = $row['post_title'];
		$post_id = $row['post_id'];
		$post_category_id = $row['post_category_id'];
		$post_author = $row['post_author'];
		$post_date = $row['post_date'];
		$post_image = $row['post_image'];
		$post_content = $row['post_content'];
		$post_tags = $row['post_tags'];
		$post_comment_count = $row['post_comment_count'];
		$post_status = $row['post_status'];

		?>
	        	<!-- Post Area-->

	        	<p><h2><a href="post.php?post=<?php echo $post_id; ?>"><?php echo $post_title; ?></a></h2></p>
	        	<p><h3>by <a href="#"><?php echo $post_author; ?></a></h3></p>
	        	<p><span class="glyphicon glyphicon-time"></span>Posted on <?php echo $post_date; ?></p>
	        	<hr>
	        	<img class="img-responsive img-rounded" src="img/<?php echo $post_image; ?>" alt="900 * 300">
	        	<hr>
	        	<p><?php echo substr($post_content, 0, 300) . '.........'; ?></p>
	        	<a href="post.php?post=<?php echo $post_id; ?>"><button type="button" class="btn btn-primary">Read More<span class="glyphicon glyphicon-chevron-right"></span></button></a>
	        	<hr>
	        	<!-- Post Area -->
	        	<?php }}?>


	        </div>
	        <!-- Page Content -->
	        <!-- Side Content -->
	        <div class="col-md-4">

               <?php include 'includes/sidebar.php';
?>

	        </div>
	        <!-- Sde Content -->
        </div>


		</div>
		<!-- Footer -->
      <?php include 'includes/footer.php';?>
    <!-- Footer -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>

</body>
</html>
