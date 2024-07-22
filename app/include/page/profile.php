
<title>Trang Cá Nhân</title>
<div class="container mb-5">
    <div class="bg-main rounded">
        <div class="cover">
            <img src="/images/cover.d81d7c7c.png" class="w-100pt"></div>
            <div class="text-center">
                <img src="<?php echo $user['avatar']; ?>" class="avatar rounded-circle img-thumbnail border shadow"></div>
                <h3 class="text-center text-bold upcase text-avatar mb-5">
                    <span class="px-2 text-light">
    <?php echo $user['taikhoan']; ?> (<?php echo number_format($user['tien']); ?>đ)<br><br>
    <h5><a href="change-avatar"><font color="red"> Thay Đổi avatar</font></a></h5>

</h3>
    


<div class="py-3">
    <div class="row">
        <div class="col-12 col-md-4 mb-3">
            <div class="container">
                <a href="/profile/lich-su-tao-web">
                    <button class="btn btn-danger w-100pt mb-3">TRANG WEB ĐÃ TẠO</button></a>
                    <a href="/profile/lich-su-mua-source-code">
                        <button class="btn text-light btn-info w-100pt mb-3">SOURCE CODE ĐÃ MUA</button></a>
                        <a href="/profile/lich-su-mua-mien">
                            <button class="btn btn-warning text-light w-100pt mb-3">TÊN MIỀN ĐÃ MUA</button></a></div>
                        </div>
                        <div class="col-12 col-md-8 mb-3">
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <th scope="row">ID của bạn:</th>
                <th><span class="c-font-uppercase" data-toggle="tooltip" data-placement="top" title="" data-original-title="Đây là ID tài khoản của bạn không phải mã giới thiệu"><?php echo $user['id']; ?></span></th>
            </tr>
            <tr>
                <th scope="row">User:</th>
                <th class="text-uppercase"><?php echo $user['taikhoan']; ?></th>
            </tr>
            <tr>
                <th scope="row">Số dư tài khoản:</th>
                <td><b class="text-danger"><?php echo number_format($user['tien']); ?>đ</b></td>
            </tr>
            <tr>
                <th scope="row">Nhóm tài khoản:</th>
                <td><font><?php echo chucvu($user['chucvu']); ?></font></td>
            </tr>
            <tr>
                <th scope="row">Ngày tham gia:</th>
                <td><font><?php echo $user['time']; ?></font></td>
            </tr>
            <tr>
                <th scope="row">Mật Khẩu: </th>
                <td><a href="/profile/doi-mat-khau"><b><i class="text-danger">****** (Đổi mật khẩu)</font></i></a></td>
                
            </tr>
            <tr>
                <th scope="row">Email: </th>
                <td><a href="/them-email"><b><i class="text-danger"><?php echo $user['email'];?> (Đổi Ngay)</font></i></a></td>
                
            </tr>
        </tbody>
    </table>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css"> 
    <table id="myTable" class="table table-striped table-bordered">
        
                                <thead>
                                    <tr><h5>Hoạt Động Gần Đây</h5></tr>
                                    <tr>
                            <th class="text-dark" scope="col">ID</th>             
                            
                            <th class="text-dark" scope="col">Hoạt Động</th>    
                            <th class="text-dark" scope="col">Thời Gian</th>                          
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $stt = 0;

                        $result = mysqli_query($connect, "SELECT * FROM hoatdong WHERE taikhoan = '".$user['taikhoan']."' ORDER BY id DESC");
                        while($row = mysqli_fetch_assoc($result)){
                            $stt++;
                            ?>
                            <tr>
                                <td class="text" ><?php echo $stt; ?></td>                      
                                <td class="text"><button class="text-light btn btn-danger">
                                    <?php echo $row['hoatdong']; ?>
                                </button></td>
                                <td class="text"><?php echo ($row['time']); ?></td>      
                                
                            </tr>
                            <?php
                        }
                        ?>


</div>

</div>

</div>



</div>
<div class="py-3"></div>
<?php
require_once __DIR__."/../../theme/footer.php";
?>