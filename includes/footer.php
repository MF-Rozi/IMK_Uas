
 <footer class="alert navbar-inverse">
            <a style="color:grey" href="index.php">Must Know</a> <br>
            <hr>
            <div class="row">

                <div class="col-lg-12" style="text-align:center; font-family: 'Monotype Corsiva'; font-size:17px;
                    color:white;">
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

						 <li><a href="about.php">Contact Us</a></li>
                 </ul>
                 <br><br>


                <!-- /.col-lg-12 -->
            </div>
            <p style="text-align:center;color:white;">  Website ini merupakan tugas Ujian Akhir Semester(UAS) Interaksi Manusia dan Komputer (IMK), tugasnya adalah membuat sebuah situs berita online </p>
                </div>
            <hr>
            <p style="text-align:center;color:white;"> Copyright &copy 2020 </p>
            <!-- /.row -->
   </footer>