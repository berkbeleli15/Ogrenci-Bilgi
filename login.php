<?php include('head.php'); ?>
<div class="container">

<div class="row">
	</div>
	<div class="row">
		<div class="col-md-5">
			<fieldset>
				<legend>
					<h3 style="padding-top: 25px;"><span class="glyphicon glyphicon-lock"></span>&nbsp;Admin Giriş</h3>
				</legend>
				<form name="adminlogin" action="loglink" method="POST">
					<div class="control-group form-group">
						<div class="controls">
							<label>Kullanıcı Adı:</label>
							<input type="text" class="form-control" name="admin_id">
							<p class="help-block"></p>
						</div>
					</div>
					<div class="control-group form-group">
						<div class="controls">
							<label>Şifre:</label>
							<input type="password" class="form-control" name="admin_pass">
							<p class="help-block"></p>
						</div>
					</div>
					<center>
						<button type="submit" name="login" class="btn btn-primary">Giriş</button>
						<button type="reset" class="btn btn-primary" style="
    background-color: #E52727;
    border-color: #D21B1B;">Temizle</button>
					</center>
			</fieldset>
			</form>
		</div>
	</div>
	<?php include('foot.php'); ?>