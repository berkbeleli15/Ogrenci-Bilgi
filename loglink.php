<?php
session_start();
?>
<?php
$x = $_POST[ "admin_id" ];
$y = $_POST[ "admin_pass" ];

include( "database.php" );

$sql = "select * from admin where Adminid='" . $x . "' and Adminpass='" . $y . "'";

$result = mysqli_query( $connect, $sql );

if ( $result->num_rows > 0 ) {
	if ( $row = $result->fetch_assoc() ) {
		$_SESSION[ "uAdmin" ] = $row[ "Adminid" ];

	}

	header( 'Location:AdminEnter.php' );
} else {

	echo "<h3><span style='color:red; '>Geçersiz AdminID veya Şifre. 3 sn sonra giriş sayfasına yönlendirileceksiniz! </span></h3>";
	header( "refresh:3;url=login.php" );

}
$connect->close();
?>