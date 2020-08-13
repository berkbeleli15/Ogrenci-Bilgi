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
		<div class="col-md-12">
			<h3 class="page-header">Welcome <a href="StudentDet"><?php echo "<span style='color:blue'>".$userid."</span>";?></a> </h3>
			<?php
			include( "database.php" );
			$getstud = $_GET[ 'StudentNo' ];
			//below query will print the existing record of student
			$sql = "select * from  studenttable where StudentNo=$getstud";
			$result = mysqli_query( $connect, $sql );

			while ( $row = mysqli_fetch_array( $result ) ) {
				?>
			<form action="" method="POST" name="update">
			<table class='table table-striped' >
			<tr>
				<div class="form-group">
				<td>	Öğrenci Numarası : </td><td> <input type="text" name="studno" value="<?php echo $row['StudentNo']; ?>" readonly></td>
				</div>
			</tr>
			<tr>
				<div class="form-group">
				<td>	İsim : </td><td> <input type="text" name="name" value="<?php echo $row['Name']; ?>"></td>
				</div>
			</tr>
			<tr>
				<div class="form-group">
				<td>	Soyisim :</td><td> <input type="text" name="surnme" value="<?php echo $row['SurName']; ?>"><br> </td>
				</div>

			</tr>
			<tr>
				<div class="form-group">
				<td>	Yaş : </td><td> <input type="text" name="age" value="<?PHP echo $row['Age'];?>"><br> </td>
				</div>

			</tr>
			<tr>

				<div class="form-group">
				<td>	Tarih : </td><td>  <input type="text" name="dte" value="<?PHP echo $row['Date'];?>"> </td>
				</div>

			</tr>
			<tr>
				<div class="form-group">


				<td>	<input type="submit" value="Update!" name="update" class="btn btn-primary"></td>
				</div>
				</table>
			</form>
			<?php
			}
			?>

			<?php

			if ( isset( $_POST[ 'update' ] ) ) {
				$tmpstdno = $_POST[ 'studno' ];
				$tmpname = $_POST[ 'name' ];
				$tmpsrname = $_POST[ 'surnme' ];
				$tmpage = $_POST[ 'age' ];
				$tmpdte = $_POST[ 'dte' ];
				//below query will update the existing record of student
				$sql = "UPDATE `studenttable` SET StudentNo='$tmpstdno', Name='$tmpname', Surname='$tmpsrname', Age='$tmpage', Date='$tmpdte' WHERE StudentNo=$getstud";


				if ( mysqli_query( $connect, $sql ) ) {
					echo "

<br><br>
<div class='alert alert-success fade in'>
<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
<strong>Başarılı!</strong> Öğrenci Bilgileri Güncellendi.
</div>

";
				} else {
					//below statement will print error if SQL query fail.
					echo "<br><Strong>Öğrenci Güncelleme Başarısız. Tekrar Deneyiniz.</strong><br> Hata Detayı: " . $sql . "<br>" . mysqli_error( $connect );
				}
				//for close connection
				mysqli_close( $connect );

			}
			?>
		</div>
	</div>
	<?php include('foot.php'); ?>