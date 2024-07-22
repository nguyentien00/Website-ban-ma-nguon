<?php
					if(isset($_POST['dangky'])){
						if( !empty($_POST['email']) && !empty($_POST['taikhoan']) && !empty($_POST['matkhau']) && !empty($_POST['matkhau2']) ){
							$email = ansuzhi_format($_POST['email']);
							$taikhoan = ansuzhi_format($_POST['taikhoan']);
							$matkhau = ansuzhi_format($_POST['matkhau']);
							$matkhau2 = ansuzhi_format($_POST['matkhau2']);


								//kiểm tra tài khoản đã tồn tại chưa
							$kiemtra1 = mysqli_num_rows(mysqli_query($connect, "SELECT * FROM user WHERE email = '$email'"));
							if($kiemtra1 <= 0){

							$kiemtra = mysqli_num_rows(mysqli_query($connect, "SELECT * FROM user WHERE taikhoan = '$taikhoan'"));
							if($kiemtra <= 0){
							
									//nếu chưa tồn tại

								//kiểm tra pass khớp chưa
								if($matkhau == $matkhau2){
									//khớp rồi

									$save = mysqli_query($connect,
									"INSERT INTO `user` (`id`, `taikhoan`, `matkhau`, `tien`, `chucvu`, `email`, `time`, `avatar`) VALUES (NULL, '$taikhoan', '$matkhau', '0', '1', '$email', '$time', '/public/images/avatar.png')");
									$save= mysqli_query($connect,"INSERT INTO `hoatdong` (`id`, `taikhoan`, `hoatdong`, `time`) VALUES (Null, '$taikhoan', 'Đăng Ký Thành Công!', '$time')");

									if($save){
								
try {
    // Địa chỉ nhận
    $mail->setFrom('sourcegiare@gmail.com', 'Hỗ trợ trực tuyến');
    $mail->addAddress($email);     // Địa chỉ thư nhận
    $mail->addReplyTo('hahahaaza1@gmail.com', 'Hỗ trợ trực tuyến'); // Địa chỉ khách có thể phản hồi

    //Nội dung
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Bạn Vừa Tạo Tài Khoản Trên Sourcegiare.com';
    $mail->Body    = 'Bạn vừa tạo tài khoản tại website sourcegiare.com<br>
    Email: '.$email.' <br> 
    Tài Khoản: '.$taikhoan.' <br>
    Mật Khẩu:'.$matkhau.' ';
    $mail->AltBody = 'Bạn không thể trả lời thư này.';

    if(!$mail->send()) {
  echo "Error while sending Email.";
  var_dump($mail);
} else {
  
}
} catch (Exception $e) {
  
}
										?>
										
										<script type="text/javascript">
											Swal.fire("Thông báo", "Đăng ký thành công!", "success");
										</script>
										<meta http-equiv="refresh" content="1;url=home">
										<?php
										$_SESSION['user'] = $taikhoan;
									} else {
										?>
										<script type="text/javascript">
											Swal.fire("Thông báo", "Có lỗi xãy ra", "error");
										</script>
										<meta http-equiv="refresh" content="1">
										<?php
									}

								} else {
									//không khớp
									?>
									<script type="text/javascript">
										Swal.fire("Thông báo", "Mật khẩu bạn nhập không khớp nhau!", "error");
									</script>
									<meta http-equiv="refresh" content="1">
									<?php
								}

							} else {
									//nếu tồn tại rồi
								?>
								<script type="text/javascript">
									Swal.fire("Thông báo", "Tài khoản đã tồn tại!", "error");
								</script>
								<meta http-equiv="refresh" content="1">
								<?php
							}
						}else{

							?>
							<script type="text/javascript">
								Swal.fire("Thông Báo", "Email Đã Tồn Tại Trên HỆ THống!", "error");
							</script>
							<?php
						}

							


								//echo $taikhoan;
						} else {
							?>
							<script type="text/javascript">
								Swal.fire("Thông báo", "Vui lòng nhập đầy đủ thông tin!", "error");
							</script>
							<meta http-equiv="refresh" content="1">
							<?php
						}
					}
					?>