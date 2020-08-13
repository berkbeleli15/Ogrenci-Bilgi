<?php
session_start();

if ( $_SESSION[ "uAdmin" ] == "" || $_SESSION[ "uAdmin" ] == NULL ) {
	header( 'Location:Login.php' );
}

$userid = $_SESSION[ "uAdmin" ];
?>
<?php include('LoginHead.php'); ?>

<div class="container">

	<div class="row">
		<?php
		include( "database.php" );
		if ( isset( $_POST[ 'addnew' ] ) ) {
			$tmpname = $_POST[ 'name' ];
			$tmpsrname = $_POST[ 'surname' ];
			$tmpage = (int)$_POST[ 'age' ];
			$tmpdate = date('Y-m-d');
			$sql = "Insert into studenttable (Name, SurName, Age, Date) values ('$tmpname', '$tmpsrname', $tmpage, '$tmpdate')";
			if ( mysqli_query( $connect, $sql ) ) {
				echo "<center><div class='alert alert-success fade in __web-inspector-hide-shortcut__'' style='margin-top:10px;'><a href='#' class='close' data-dismiss='alert' aria-label='close' title='close'>&times;</a>
				<h3 style='margin-top: 10px; margin-bottom: 10px;'>Kayıt Başarılı.! Öğrenci Numarası : <span style='color:black'><strong>" . mysqli_insert_id( $connect ) . "</strong></span></h4></div></center>
				";
			} else {
				//error message if SQL query fails
				echo "<br><Strong>Kayıt Başarısız! Yeniden deneyiniz....</strong><br> Hata Detayı: " . $sql . "<br>" . mysqli_error( $connect );
			}
			//close the connection
			mysqli_close( $connect );
		}
		?>
	</div>
	<div class="row">
		<div class="col-md-4">
			<h3 class="page-header">Welcome <a href="AdminEnter.php"><?php echo "<span style='color:blue'>".$userid."</span>";?></a> </h3>
			<h4 class="page-header">Yeni Öğrenci Bilgileri</h4>
			<form action="" method="POST" name="updateform">
				<div class="form-group">
					<label for="Name">İsim : </label>
					<input type="text" class="form-control" id="name" name="name" required>
				</div>

				<div class="form-group">
					<label for="SurName">Soyisim : </label>
					<input type="text" class="form-control" id="surname" name="surname" required>
				</div>

				<div class="form-group">
					<label for="Age">Yaş : </label>
					<input type="text" class="form-control" id="age" name="age" required>
				</div>
							

				<div class="form-group">
					<input type="submit" value="Öğrenci Kayıt!" name="addnew" class="btn btn-primary">
				</div>
			</form>
		</div>
	</div>
	<?php include('foot.php'); ?>