<?php
session_start();

if ( $_SESSION[ "uAdmin" ] == "" || $_SESSION[ "uAdmin" ] == NULL ) {
	header( 'Location:Login.php' );
}
$userid = $_SESSION[ "uAdmin" ];
?>
<?php include('LoginHead.php'); ?>

<?php
include( "database.php" );
?>


<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">Welcome <a href="SrchCourses"><?php echo "<span style='color:blue'>".$userid."</span>";?></a> </h3>

				<form action="" method="POST">
				<div class="form-group">
				<span> Dersleri Seçiniz: </span><br>


				<?php
				include( "database.php" );
				$getstud = $_GET[ 'StudentNo' ];
				$checked_array=array();

				$coursesql="Select * from studenttable where StudentNo=$getstud";
				$fetchCourses=mysqli_query($connect,$coursesql);

				if(mysqli_num_rows($fetchCourses)>0){
				$result=mysqli_fetch_assoc($fetchCourses);
				$checked_array = explode("-",$result['Courses']);
				}



				$courses_arr=array(
				" Türkçe"," Matematik"," Geometri"," Tarih"
				);

				foreach($courses_arr as $courses){
				$checked="";

				if(in_array($courses,$checked_array))
				{
				$checked="checked";
				}

				 echo '<input type="checkbox" name="course[]" value="'.$courses.'" '.$checked.' >'.$courses."<br>";


				}

				?>

				<input type="submit" value="Güncelle" name="update" class="btn btn-primary">
			</form>


	<?php
if(isset($_POST['update'])){
$getstud = $_GET[ 'StudentNo' ];
include( "database.php" );
$courses=implode("-",$_POST['course']);
$tmpsql="update studenttable set Courses='".$courses."' where StudentNo=$getstud";

	if ( mysqli_query( $connect, $tmpsql ) ) {
					echo "

<br><br>
<div class='alert alert-success fade in'>
<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
<strong>Başarılı!</strong> Kurs Bilgileri Güncellendi.
</div>

";
				} else {
					//below statement will print error if SQL query fail.
					echo "<br><Strong>Kurs Güncelleme Başarısız. Tekrar Deneyiniz.</strong><br> Hata Detayı: " . $sql . "<br>" . mysqli_error( $connect );
				}


	mysqli_close( $connect );

}

?>

		</div>
	</div>

	<?php include('foot.php'); ?>