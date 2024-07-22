<?php
require_once __DIR__."/../config/database.php";
require_once __DIR__."/../../theme/head.php";
require_once __DIR__."/../../theme/header.php";

if(!isset($_SESSION['user'])){
    header('location: /');
}

?>
<title>Nạp Auto TheSieure.com</title>



<div class="container">
  <div class="py-5"></div>


  <h3 class="text-center mb-2 text-light">
    <i class="fab fa-battle-net"></i>
    NẠP THESIEURE</h3>

  <center>
    <div style="width: 50px">
      <div class="bg-info mb-4" style="height: 3px;"></div>
    </div>
  </center>
  <div class="card">
    <div class="card-header text-center">
      <h5>NẠP THESIEURE TỰ ĐỘNG</h5>
    </div>
    <div class="card-body">
      <div class="form-group" style="border-style: solid;border-color: black;">
        <table class="table table-hover">
          <tbody>
            <tr>
              <td style="text-align: right;">STK: </td>
              <td style="text-align: left; color: #00cc99;">
                <b>
                  ndat83568@gmail.com
                </b>
              </td>
            </tr>
            <tr>
              <td style="text-align: right;">
                Chủ tài khoản: </td>
              <td style="text-align: left;">
                <b>Đạt Coder Code</b>
              </td>
            </tr>
            <tr>
              <td style="text-align: right;">
                Nội dung CK:
              </td>
              <td style="text-align: left;">
                <b id="content" style="color:red;">
                  naptien_<?php echo $_SESSION['user']; ?>
                </b>
                <a class="copy" data-clipboard-target="#content"><i class="fa fa-copy"></i></a>
              </td>
            </tr>
            <tr>
              <td colspan="2" class="text-center">
                <b>
                  Sau khi chuyển tiền, trong 5-10 giây nhận tiền ngay
                </b>
              </td>
              <tr>
                <td colspan="2" class="text-center">
                  <b>
                    Nhấn vào nội dung chuyển khoản sẽ tự copy
                  </b>
                </td>
              </tr>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="form-group">
        <label>Mã giao dịch:</label>
        <input id="transid" class="form-control" placeholder="Nhập mã giao dịch đã chuyển khoản vào đây">
      </div>
    </div>
    <div class="card-footer">
      <div class="form-group">
        <button id="submit" class="btn btn-danger btn-block">Xác Nhận Đã Chuyển Khoản</button>
      </div>
    </div>
  </div>
  <br>
  <div class="card">
    <div class="border border-primary">
      <div class="card-header">
        <h5>LỊCH SỬ NẠP THESIEURE CỦA <b><?=$_SESSION['user']; ?></b></h5>
      </div>
      <div class="card-body">
        <div class="table-responsive btn-sm">
          <table id="db" class="table table-striped table-bordered" style="width:100%">
            <thead>
              <tr>
                <th>#</th>
                <th>Mã Giao Dịch</th>
                <th>Số Tiền</th>
                
                <th>Thời gian thực hiện</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $result = mysqli_query($connect, "SELECT * FROM tsr WHERE username = '".$_SESSION['user']."' ORDER BY id DESC");
                        while($row = mysqli_fetch_assoc($result)){
                            $stt++;
              
                ?>
                <tr>
                  <td><b><?php echo $row['id']; ?></b></td>
                  <td><span class="badge bg-primary"><?=$row['transid']; ?></span></td>
                  
                  <td><?php echo number_format($row['amount']); ?></td>
                  <td><?=$row['time']; ?></td>
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
</div>
<script>
  new ClipboardJS('.copy');
  $("#submit").click(function() {
    var transid = $('#transid').val();
    $("#submit").prop('disabled', true).html("<i class=\"fa fa-spinner fa-spin\"></i> Đang Xử Lý");
    $.ajax({
      url: '/model/thesieure.php',
      type: 'POST',
      data: {
        transid: transid
      },
      success: function(result) {
        $("#submit").prop('disabled', false).html("Xác Nhận Đã Chuyển Khoản");
        var json = JSON.parse(result);

        if (json.status) {
          var type = 'success';
        } else {
          var type = 'error';
        }
        tb(type, 'Thông báo', json.msg);
      }
    });
  });
  function tb(status, title, msg) {
    Command: toastr[status](msg,
      title)
    toastr.options = {
      "closeButton": false,
      "debug": false,
      "progressBar": true,
      "positionClass": "toast-top-right",
      "onclick": null,
      "showDuration": "400",
      "hideDuration": "1000",
      "timeOut": "4000",
      "extendedTimeOut": "1000",
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "slideDown",
      "hideMethod": "slideUp"
    }
  }

</script>




<?php
require_once __DIR__."/../../theme/footer.php";

?>