
<?php

$danhsach_giahan = [
	'taoweb' => 'taoweb'
];

if( isset($get_data[0]) && isset($get_data[1]) ){
	$loai = ansuzhi_format($get_data[0]);
	$id_giahan = (int)$get_data[1];

	if(!isset($danhsach_giahan[$loai])){
		header('location: /');
	} else {


		if($loai == 'taoweb'){
			if( mysqli_num_rows(mysqli_query($connect, "SELECT * FROM taoweb WHERE id = '$id_giahan' AND uid = '".$user['id']."' LIMIT 1")) < 1 ){
				header('location: /');
			} else {
				$info_donhang = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM taoweb WHERE id = '$id_giahan' AND uid = '".$user['id']."' LIMIT 1"));

				

				?>
                <?php
							if(isset($_POST['giahan'])){
								echo '<meta http-equiv="refresh" content="1;url=">';

								$thanhtoans = [
									'1' => 1,
									'2' => 3,
									'3' => 6,
									'4' => 12,
									'5' => 24,
									'6' => 36,
								];

								if( !empty($_POST['thanhtoan']) ){
									$tt = $_POST['thanhtoan'];
									$thanhtoan = $thanhtoans[$tt];

									if(isset($thanhtoans[$tt])){



										$info_code = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM danhsachcode WHERE id = '".$info_donhang['id_code']."' LIMIT 1"));

										$tienphaitra = $info_code['gia'] * $thanhtoan;

										if($user['tien'] >= $tienphaitra){											
											mysqli_query($connect, "UPDATE user SET tien = tien - $tienphaitra WHERE id = '".$user['id']."'");
											mysqli_query($connect, "UPDATE taoweb SET thanhtoan = thanhtoan  + $thanhtoan WHERE id = '$id_giahan'");
											mysqli_query($connect, "INSERT INTO `giahan_web` (`id`, `domain`, `giahan`, trangthai) VALUES (NULL, '".$info_donhang['domain']."', '".$thanhtoan."', 0)");

											$err = 'Tạo website thành công!';
											echo '<script>Swal.fire("Thông báo", "'.$err.'", "success");</script>';
										} else {
											$err = 'Bạn không đủ tiền!';
											echo '<script>Swal.fire("Thông báo", "'.$err.'", "error");</script>';
										}





									}

								} else {
									$err = 'Vui lòng nhập đầy đủ thông tin!';
									echo '<script>Swal.fire("Thông báo", "'.$err.'", "error");</script>';
								}

							}
							?>
                            	<?php


}
}


}

} else {
header('location: /');
}
?>