
 <!-- Blog Search Well -->



                <!-- Categories Well -->
                <div class="well">
                <?php
$query = "SELECT * FROM categories";
$run_query_siddebar = mysqli_query(
	$con, $query);
?>
                    <h4>Categories</h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="list-unstyled">
                            <?php
while ($row = mysqli_fetch_assoc($run_query_siddebar)) {
	$cat_id = $row['cat_id'];
	$cat_title = $row['cat_title'];
	echo "<li><a href='category.php?cat_id={$cat_id}'>{$cat_title}</a>
                                </li>";
}
?>
                            </ul>
                        </div>

                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->

                <?php include 'widget.php';?>