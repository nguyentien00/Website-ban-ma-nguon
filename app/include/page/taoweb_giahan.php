

				<title>Mua SourceCode</title>

<div class="container mb-5"><div class="bg-dark py-5 rounded container">

	<div class="row">

		<div class="col-12 col-md-6 mb-3 ">


							<form action method="POST">
								<h2 class="mb-3 text-uppercase font-weight-light text-warning text-center">Gia hạn web</h2>
								<select class="form-control mb-3" name="thanhtoan">
									<option value="">Gia Hạn Shop <?php echo $info_donhang['domain']; ?>:</option>
									<option value="1">1 Tháng</option>
									<option value="2">3 Tháng</option>
									<option value="3">6 Tháng</option>
									<option value="4">12 Tháng</option>
									<option value="5">24 Tháng</option>
									<option value="6">36 Tháng</option>
								</select>
								<button type="submit" name="giahan" class="btn btn-warning mb-3" style="width: 100%">Gia hạn</button>
								
								<a href="/profile/lich-su-tao-web">
									<button type="button" class="btn btn-success mb-3" style="width: 100%">Trở về</button>
								</a>

							</form>

							


						</div>



						<div class="col-12 col-md-6">
							

							<div class="container py-5 border border-info">
								<h2 class="mb-4 text-uppercase font-weight-light text-info text-center">Info Trang Web</h2>

								<center>

									<div style="width: 80%">
										
										<ul class="text-left text-uppercase text-info">
											<li>ID: <?php echo $info_donhang['id']; ?></li>
											<li>Domain: <?php echo $info_donhang['domain']; ?></li>
											<li>Loại code: <?php echo $info_donhang['id_code']; ?></li>
											<li>Ngày tạo: <?php echo $info_donhang['time2']; ?></li>
											<li>Ngày hết hạn: <?php echo date('d/m/Y - H:i:s', $info_donhang['time1'] + (2592000 * $info_donhang['thanhtoan']) ); ?></li>
											<li>Thanh toán: <?php echo $info_donhang['thanhtoan']; ?> Tháng</li>
											<li>Trạng thái: <?php
											if( ( $info_donhang['time1'] + (2592000 * $info_donhang['thanhtoan']) ) >= time() ){
												echo trangthai_taoweb($info_donhang['trangthai']); 
											} else {
												echo 'Hết hạn';
											} 
											?></li>
										</ul>

									</div>

								</center>

							</div>

						</div>



					</div>
				</div>



			

