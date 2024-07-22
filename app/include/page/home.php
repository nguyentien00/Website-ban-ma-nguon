<?php 
$setting = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM thongtin "));
$tonguser = mysqli_num_rows(mysqli_query($connect, "SELECT * FROM user"));
?>
<div class="row">

    <div class="col-md-6 ml-auto mr-auto text-center">
        <h2 class="title">Lý Do Nên Sử Dụng Dịch Vụ Của Chúng Tôi</h2>

        <a href="#pablo" class="btn btn-success btn-round">Giao dịch tự động</a> <a href="#pablo"
            class="btn btn-info btn-round">Giá rẻ uy tín</a> <a href="#pablo"
            class="btn btn-primary btn-round"><?php echo number_format($tonguser); ?> khách hàng đã sử dụng</a>
        </br>
    </div>
</div>
</div>
<title>Trang Chủ</title>
<div class="container mb-5">





    <font>
        <marquee direction="left" style="background:white">•Thành Right : Trang Web Uy Tín Nha, Tôi Vừa Tạo 1 Shop Game
            Quá Đẹp •ViệtPc : Vừa Tạo Thành Công Shop Bán Acc Giá 50k •Hưng Nè : Vừa Tạo Thành Công 1 Shop 200k
            •khanh123 : Vừa Tạo Thành Công Shop Bán Acc Giá 300k</marquee>


        <div style="background-color:rgba(23, 10, 7, 0.60); " class="bg-main py-4 rounded container">

            <script src="app.js"></script>
            <script src="/js/snow.js"></script>
            <div class="bg-menu py-4 rounded mb-5">

                <div class="text-left container-fluid">

                    <center>
                        <h3 class="text-light">DỊCH VỤ WEB</h3>
                </div>
                <center>
                    <hr class="fix-hr rounded-pill">
                    <div class="py-2">
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="container mb-3">
                                <div class="container">
                                    <a class="thea" href="/danh-muc">
                                        <div class="py-3 rounded border text-light shadow metab">
                                            <img src="<?php echo $setting['danhmuc1']; ?>" class="thumb-1 rounded mb-4">
                                            <h4>TẠO TRANG WEB</h4>
                                            <p class="text-light">Tạo trang web chỉ trong vài bước.</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="container mb-3">
                                <div class="container">
                                    <a class="thea" href="/source-code">
                                        <div class="py-3 rounded border text-light shadow metab">
                                            <img src="<?php echo $setting['danhmuc2']; ?>" class="thumb-1 rounded mb-4">
                                            <h4>MUA SOURCE CODE</h4>
                                            <p class="text-light">Mua 1 source cực dễ và nhanh chóng.</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="container mb-3">
                                <div class="container">
                                    <a class="thea" href="/mua-mien">
                                        <div class="py-3 rounded border text-light shadow metab">
                                            <img src="<?php echo $setting['danhmuc3']; ?>" class="thumb-1 rounded mb-4">
                                            <h4>MUA TÊN MIỀN</h4>
                                            <p class="text-light">Mua miền giá rẽ và nhanh chóng.</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="container mb-5">
                            <div class="bg-main py-4 rounded container">

                                <div class="row">
                                    <center>
                                        <p>
                                        <h3><strong color="red">
                                                <font color="red"> Về Chúng Tôi </font>
                                            </strong></h3>
                                        </p>
                                    </center>
                                    <strong>
                                        <style type="text/css">
                                        .text p {
                                            color: red;
                                            font-size: 15px;
                                        }
                                        </style>

                                        <script type="text/javascript">
                                        var TxtType = function(el, toRotate, period) {
                                            this.toRotate = toRotate;
                                            this.el = el;
                                            this.loopNum = 0;
                                            this.period = parseInt(period, 10) || 2000;
                                            this.txt = '';
                                            this.tick();
                                            this.isDeleting = false;
                                        };

                                        TxtType.prototype.tick = function() {
                                            var i = this.loopNum % this.toRotate.length;
                                            var fullTxt = this.toRotate[i];

                                            if (this.isDeleting) {
                                                this.txt = fullTxt.substring(0, this.txt.length - 1);
                                            } else {
                                                this.txt = fullTxt.substring(0, this.txt.length + 1);
                                            }

                                            this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

                                            var that = this;
                                            var delta = 200 - Math.random() * 100;

                                            if (this.isDeleting) {
                                                delta /= 2;
                                            }

                                            if (!this.isDeleting && this.txt === fullTxt) {
                                                delta = this.period;
                                                this.isDeleting = true;
                                            } else if (this.isDeleting && this.txt === '') {
                                                this.isDeleting = false;
                                                this.loopNum++;
                                                delta = 500;
                                            }

                                            setTimeout(function() {
                                                that.tick();
                                            }, delta);
                                        };

                                        window.onload = function() {
                                            var elements = document.getElementsByClassName('typewrite');
                                            for (var i = 0; i < elements.length; i++) {
                                                var toRotate = elements[i].getAttribute('data-type');
                                                var period = elements[i].getAttribute('data-period');
                                                if (toRotate) {
                                                    new TxtType(elements[i], JSON.parse(toRotate), period);
                                                }
                                            }
                                            // INJECT CSS
                                            var css = document.createElement("style");
                                            css.type = "text/css";
                                            css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
                                            document.body.appendChild(css);
                                        };
                                        </script>


                                        <h3 class="text">
                                            <p class="typewrite" data-period="2000"
                                                data-type='["Vì Sao Nên Chọn TaoShopFF.Com Câu Trả Lời Chính Là Vì Dịch Vụ Của Chúng Tôi Luôn Luôn Làm Bạn Đặt Niềm Tin Vào Chúng Tôi, Giá Rẻ Chất Lượng Được Nhiều Youtube Đặt Niềm Tin Tạo Shop Ở Dịch Vụ Của Chúng Tôi"]'>
                                                <span class="wrap"></span>
                                            </p>
                                        </h3>
                                    </strong>
                                    <center>
                                        <p>
                                        <h3><strong color="blue">
                                                <font color="blue"> Dịch Vụ Của Chúng Tôi </font>
                                            </strong></h3>
                                        </p>
                                    </center>
                                    <strong> Tạo Shop Game Giá Chỉ Từ 50k - 300k Nhé , Mua Source Code Giá Chỉ Từ 80k
                                        Đến 500k Nhé , Mua Tên Miền Giá Rẻ Chỉ Từ 70k Cam Kết Không Die Giữa Chừng Như
                                        Các Nhà Cung Cấp Khác Quản Lý Qua cloudflare</strong>

                                    <div class="col-12 col-md-6 mb-3 border-right border-dark">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <script type="text/javascript">
                        Swal.fire("Thông Báo",
                            "☞ Khuyến mãi:Nạp 50k cộng 20k|Nạp 100k cộng 50k|Nạp 150k cộng 50k| Nạp 200k cộng 60k| Nạp 250k cộng 70k| Nạp 300k cộng 100k!"
                        )
                        </script>
                    </div>
            </div>
        </div>
</div>
</div>