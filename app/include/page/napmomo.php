
<title>Nạp MOMO</title>
<div class="container"><div class="bg-dark py-5 rounded">
	<div class="row">
		<div class="bg-menu py-4 rounded mb-5">

	<div class="text-left container-fluid">

		<center>
		<h3 class="text-light">Nạp Auto Momo</h3>
</div>

<hr class="fix-hr rounded-pill"><div class="py-2"></div><div class="row">	
		<div class="col-12 col-md-4 mb-5">

			<p>
                        </p>
			<p><h5 class="text-light"><b class="text-danger">Số tài khoản</b>: <b  class="text-success ">0354485582</p></b></h5>
			<p><h6 class="text-light"><b class="text-danger">Nội dung chuyển</b>: <b id="post-shortlink" class="text-success">naptien <?=$user['taikhoan'];?><button class="text-light btn btn-info" id="copy-button" data-clipboard-target="#post-shortlink">Copy</button></p></b></h5>
			<p></p>
                        <p><b class="text-danger">Lưu ý</b>: Nhập đúng nội dung chuyển tiền. 
                            nếu nhập sai thì bạn sẽ bị mất tiền và bên hệ thống sẽ không chịu trách nhiệm!
                        </p>
        </div>
        <script>
  (function(){
    new Clipboard('#copy-button');
  })();
</script>
<script>
  var clipboard = new Clipboard('#copy-button');

  clipboard.on('success', function(e) {
    Swal.fire("Thông Báo", "Đã Sao Chép Thành Công", "success")
  });

  clipboard.on('error', function(e) {
   Swal.fire("Thông Báo", "Có Lỗi Xảy Ra", "error")
  });
</script>

				<div class="col-12 col-md-8 mb-5">
					<div class="container">
						<div class="table-responsive">
							<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css"> 
    <table id="myTable" class="table table-striped table-bordered">
								<thead>
									<tr>
							<th class="text-light" scope="col">ID</th>             
							<th class="text-light" scope="col">Người chuyển</th>
							<th class="text-light" scope="col">Số tiền</th>		
							<th class="text-light" scope="col"> Time</th>
							<th class="text-light" scope="col">Trang thái</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$stt = 0;

						$result = mysqli_query($connect, "SELECT * FROM automomo WHERE uid = '".$user['taikhoan']."' ORDER BY id DESC");
						while($row = mysqli_fetch_assoc($result)){
							$stt++;
							?>
							<tr>
								<td class="text-light" ><?php echo $stt; ?></td>                      
								<td class="text-light">
									<?php echo $row['uid']; ?>
								</td>
								<td class="text-light"><?php echo number_format($row['sotien']); ?>đ</td>      
								     
								<td class="text-light"><?php echo $row['time']; ?></td>
								<td class="text-light"><button class="text-light btn btn-success">Thành Công</button></td>                              
							</tr>
							<?php
						}
						?>





					</tbody>
				</table>



			</div>
		</div>

	</div>
</div>
<div class="py-4"></div>
