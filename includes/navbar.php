
<?php session_start();?>
     <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation"">
			<div class="container">


				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle Navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php">Must Know</a>
				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                    	<?php
$query = "SELECT * FROM categories";
$run_query = mysqli_query(
	$con, $query);
while ($row = mysqli_fetch_assoc($run_query)) {
	$cat_title = $row['cat_title'];
	$cat_ids = $row['cat_id'];
	echo "<li><a href='category.php?cat_id={$cat_ids}'>{$cat_title}</a></li>";
}
?>



<!--
						<li><a href="#">Category</a></li>
						 -->
					</ul>

<ul class="nav navbar-nav navbar-right">
	<li><form class="navbar-form" method="POST" action="search.php">
                    <div class="input-group">
                        <input name="search" type="text" class="form-control">
                        <span class="input-group-btn">
                            <button name="submit" class="btn btn-default" type="submit">
                                <span class="glyphicon glyphicon-search"></span> Search
                        </button>
                        </span>
                    </div>
                    </form></li>
	<?php
if (isset($_SESSION['role'])) {
	$username = $_SESSION['username'];
	echo "<li><a href='admin'>Control Panel</a></li>";
	echo "<li><a href='admin/profile.php?section=$username'>$username <span class='glyphicon glyphicon-user'></span></a></li>";
	if($_SESSION['role']!= 1){
		if (isset($_GET['post'])) {
		$page_id = $_GET['post'];
		echo "<li><a href='admin/posts.php?source=edit_post&p_id={$page_id}'>Edit Post</a></li>

		";
	}
	}
}else{
	echo '<li><a href="login_page.php">Login <span class="glyphicon glyphicon-log-in"></span> </a></li>';
}

?>

	<li></li>
</ul>


                    <!-- /.input-group -->

				</div>

			</div>
	    </nav>