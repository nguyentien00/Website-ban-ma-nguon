
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="/public/asset/css/bootstrap.min.css">
	<link rel="stylesheet" href="/public/asset/css/style.css">
	<link rel="stylesheet" href="/public/asset/css/giaodien.css">
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" id="theme-styles">
	
	<link rel="shortcut icon" type="image/png" href="/public/images/favicon.png"/>
	<script src="https://cdn.jsdelivr.net/clipboard.js/1.5.12/clipboard.min.js"></script>
	
	<?php
		$result = mysqli_query($connect, "SELECT * FROM thongtin");
		while($row = mysqli_fetch_assoc($result)){
			?>
	<title><?php echo $row['title']; ?></title>
	<meta name="description" content="<?php echo $row['noidung']; ?>" itemprop="description"/>
	<meta property="og:site_name" content="WebSite Tạo Shop Cho Các Youtuber Uy Tín Nhất VN"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="https://<?php echo $_SERVER['HTTP_HOST']; ?>"/>
<meta property="og:locale" content="vi_VN"/>
<meta property="og:locale:alternate" content="vi_VN" />
<meta property="og:title" content="<?php echo $row['title']; ?>"/>
<meta property="og:description" content="<?php echo $row['noidung']; ?>"/>
<meta property="og:image" content="<?php echo $row['logo']; ?>"/>
<meta name="google-site-verification" content="SlcqG8bznpAFcFFRYe1MTfd2fAgTgZckhcoCF-ieOgg" />
<meta name="keywords" content="<?php echo $row['noidung']; ?>">
<link rel="canonical" href="https://<?php echo $_SERVER['HTTP_HOST']; ?>">
	<?php
		}
		?>
</head>
	<script type="text/javascript">
			
			console.log("Code By Đạt Coder(I Am Bi)");

	</script>