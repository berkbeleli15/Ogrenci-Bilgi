<?php include('head.php'); ?>

<header id="myCarousel" class="carousel slide">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
	</ol>
	
	<div class="carousel-inner">
		<div class="item active">
			<div class="fill" style="background-image:url('images/photo1.jpg');"></div>
			<div class="carousel-caption">
				<a href="login"><h2 style="color: white;">Öğrenci Kaydet</h2></a>
			</div>
		</div>
		
		<div class="item">
			<div class="fill" style="background-image:url('images/photo2.jpg');"></div>
			<div class="carousel-caption">
				<a href="login"><h2 style="color: white;">Ders Ekle/Çıkart</h2></a>
			</div>
		</div>
		
		<div class="item">
			<div class="fill" style="background-image:url('images/photo3.jpg');"></div>
			<div class="carousel-caption">
				<a href="login"><h2 style="color: white; ">Öğrenci Sil</h2>
                </div>
            </div>
        </div>
        
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
			
</header>

<div class="container" style="max-width: 1200px;">

	<!-- Marketing Icons Section -->
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">
                    Öğrenci Kayit Sistemine Hoş Geldiniz!!!
                </h1>
		
		</div>
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4><i class="fa fa-fw fa-check"></i> Hakkımızda</h4>
				</div>
				<div class="panel-body">
					<ul style="list-style-type:disc">
					<li><p>Öğrenci Kayıt Sistemi Web sitesi öğrencilerin, öğretmenlerin ve fakülte üyelerinin girebileceği ve ders ekleme çıkarma, öğrenci ekleyip çıkartma işlemlerinin yapılabildiği bir websitesidir.</p></li>
					
					</ul>
						
				</div>
			</div>
		</div>
		
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4><i class="fa fa-fw fa-gift"></i> Amaçlar</h4>
				</div>
				<div class="panel-body">
					<p>
					<ul style="list-style-type:disc">
						<li>Bütün Öğrencilerin Kaydını tutma.</li>
						<li>Kağıda olan ihtiyacı azaltmak</li>
						<li>Her şeyi bir noktadan yönetmek</li>
						<li>Öğrenci ekleyip çıkarabilmek</li>
						<li>Ders ekleyip çıkartabilmek.<br></li>
						
					</ul>
					 </p>
				</div>
			</div>
		</div>
		
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4><i class="fa fa-fw fa-compass"></i> Kullanılan Teknolojiler</h4>
				</div>
				<div class="panel-body">
					<p>
					<ul style="list-style-type:disc">
					<li>RDBMS</li>
					<li>BOOTSTRAP</li>
					<li>APACHE SERVER</li>
					<li>PHP</li>
					<li>MYSQL</li>
					</ul>
					</p>
				</div>
			</div>
		</div>
	</div>
	
	<?php include('foot.php'); ?>