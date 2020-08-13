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
		if ( isset( $_REQUEST[ 'deleteid' ] ) ) {
			$deleteid = $_GET[ 'deleteid' ];
			
			$sql = "DELETE FROM `studenttable` WHERE StudentNo = $deleteid";
			if ( mysqli_query( $connect, $sql ) ) {
				echo "
<br><br>
<div class='alert alert-success fade in'>
<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
<strong>Başarılı!</strong> Öğrenci Bilgileri Silindi.
</div>
";
			} else {
				echo "<br><Strong>İşlem Başarısız. Tekrar Deneyiniz.</strong><br> Hata Detayı:: " . $sql . "<br>" . mysqli_error( $connect );
			}
		}
		mysqli_close( $connect );
		?>
	</div>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">Welcome <a href="AdminEnter"><?php echo "<span style='color:blue'>".$userid."</span>";?></a> </h3>

			<div class="col-md-5">
			<fieldset>
				<form name="adminlogin" action="" method="POST">
					<div class="control-group form-group">
						<div class="controls">
						<table class='table table-striped' >
						<tr>
						<td>
							<input type="text" class="form-control" name="ogrenci_id" placeholder="Öğrenci Numarası">
							</td>
							<p class="help-block"></p>
							<td>
							<button type="submit" name="search" class="btn btn-primary">Ara</button>
							</td>
							</tr>
							</table>
						</div>
					</div>
			</fieldset>
			</form>
		</div>
</div>

			</form>


			<?php
			include( "database.php" );

			if(isset($_POST['search']))
			{
				$id=$_POST['ogrenci_id'];
				$sql = "select * from studenttable where StudentNo='$id'";
				$tmpresult = mysqli_query( $connect, $sql );
				if(mysqli_num_rows($tmpresult)==0)
				{
						$sql = "select * from  studenttable";
				}
            }
            else
            {
            			$sql = "select * from  studenttable";
            }

			$result = mysqli_query( $connect, $sql );
			echo "<h2 class='page-header'>Öğrenci Detayları</h2>";
			echo "<table class='table table-striped' >
            <tr>
            <th>Öğrenci Numarası</th>
            <th>İsim</th>
            <th>Soyisim</th>
            <th>Yaş</th>
            <th>Tarih</th>
            <th>Düzenle</th>
            <th>Sil</th>
            </tr>";
			while ( $row = mysqli_fetch_array( $result ) ) {
				?>

			<tr>
				<td>
					<?PHP echo $row['StudentNo'];?>
				</td>
				<td>
					<?PHP echo $row['Name'];?>
				</td>
				<td>
					<?PHP echo $row['SurName'];?>
				</td>
				<td>
					<?PHP echo $row['Age'];?>
				</td>
				<td>
					<?PHP echo $row['Date'];?>
				</td>
				<td><a href="StudUpd.php?StudentNo=<?php echo $row['StudentNo']; ?>"><input type="button" Value="Düzenle" class="btn btn-info btn-sm"></a>
				</td>
				<td><a href="StudentDet.php?deleteid=<?php echo $row['StudentNo']; ?>"><input type="submit" Value="Sil" name="delete" class="btn btn-danger"></a>
				</td>
			</tr>
			<?php } ?>
			</table>
			<a href="NewStud.php"><button type="button" value="AddNewStudent" class="btn btn-info btn-sm">Yeni Öğrenci Ekle</button></a>
		</div>
	</div>
	<?php include('foot.php'); ?>