<?php
$url = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM thongtin "));
?>
<body>


	<nav class="navbar navbar-expand-lg navbar-light bg-light mb-3 shadow-lg p-2 fixed-top">
		<div class="container">
			<a class="navbar-brand" href="/">
				<img src="<?php echo $url['logo']; ?>" style="width: 200px; height: 50px">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse text-uppercase font-weight-light" id="navbarSupportedContent">

				
				
					<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="/">Trang chủ <span class="sr-only">(current)</span></a>
					</li>

					<a class="nav-link" href="/nap-the">Nạp tiền</a></li>
					<a class="nav-link" href="/thong-tin-web">Bài Viết</a></liv>
					<a class="nav-link" href="/rut-tien">Rút tiền</a></li>
					</ul>


				
					<?php
					if(isset($_SESSION['user'])){
						?>

						

						<div class="float-right"><div><a href="/profile"><button class="btn btn-danger"><span class="upcase text-bold"><?php echo $_SESSION['user']; ?> - <?php echo number_format($user['tien']); ?> VNĐ
							
						</span>
					</button>
				</a>
				<span class="px-1"></span>
				<a href="/dang-xuat">
				<button class="custom-btn btn-13">
					<span>Đăng xuất</span></button></a>
				<?php
									if($user['chucvu'] == 9){
										?>
										<a  href="/admin_cp"><span class="upcase text-bold"><button class="btn btn-danger">Admin Cpanel</span>
					</button>
				
				

										<?php
									}
								
									?>
										<?php
									if($user['chucvu'] == 6){
										?>
										<a  href="/admin"><span class="upcase text-bold"><button class="btn btn-danger">Panel CTV</span></button></span></a>
				
				<span class="px-1"></span>
				<?php } ?>
								</div></div></div></div></nav></div>
								
									
										


									
									
								
							</li>

						


						</ul>
					
					


						<?php
					} else {
						?>
						<a href="/dang-ky"><button class="custom-btn btn-8"><span>Đăng ký</span></button>
						</a>
						<span class="px-1"></span>
						<a href="/dang-nhap"><button class="custom-btn btn-13" style="width: 150px">Đăng nhập</button></a>

						<?php
					}
					?>

				</div>

			</div>

		</div>
	</a>
</div>
</div>
</span>
</a>
</div>

	</nav>
	<style type="text/css">
        body{
        background-image: url(https://ben.com.vn/tin-tuc/wp-content/uploads/2020/09/hinh-nen-anime-dep-cho-may-tinh-min.jpg), url(https://ben.com.vn/tin-tuc/wp-content/uploads/2020/09/hinh-nen-anime-dep-cho-may-tinh-min.jpg);
    }
    </style>
</body>
</br>
</br>
</br>
</br>
</br>
