<?php
session_start();

if ( $_SESSION[ "uAdmin" ] == "" || $_SESSION[ "uAdmin" ] == NULL ) {
	header( 'Location:Login.php' );
}
$userid = $_SESSION[ "uAdmin" ];

?>
<!DOCTYPE  HTML>
<?php include('LoginHead.php'); ?>

<div class="container">
	<div class="row">
		<div class="col-md-8">
			<!--Welcome page for admin-->
			<h3> Welcome <a href="AdminEnter"><?php echo "<span style='color:blue'>".$userid."</span>";?></a></h3>

			<a href="StudentDet"><button  href="" type="submit" class="btn btn-primary">Öğrenci Detayları / Ekleme / Silme</button></a>

			<a href="SrchCourses"><button  href="" type="submit" class="btn btn-primary">Öğrencinin kayıtlı derslerini Gör / Çıkart</button></a>

		</div>
	</div>
	<?php include('foot.php'); ?>