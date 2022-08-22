<?php include "doctype.php";?>
<body>
<?php include "header.php";?>
  <!-----------------DELIVERY------------------->
<section class="delivery">

<style>
                        .box{
                        color: #fff;
                       
                        display: none;
                        margin: 0w 0 10px;
                        }
                        .payment{
                            display: flex;
                            flex-direction: column;
                            font-size: 14px;
                            font-family: 'Montserrat',sans-serif;
                        }
                        
                        .green p{ 
                            color: black; 
                            background-color: none;
                            margin: 0 0 10px;
                           
                         }
                         
                        .blue{
                            margin: 0;
                         }
                    </style>
                    
    <div class="container">
        <div class="delivery-top-wrap">
            <div class="delivery-top">
                <div class="delivery-top-left">
                    <div class="delivery-top-cart delivery-top-item">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <div class="delivery-top-address delivery-top-item ">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                </div>
                <div class="delivery-top-right">
                    <div class="delivery-top-payment delivery-top-item">
                        <i class="fas fa-money-check-alt"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="delivery-content row">
            <div class="delivery-content-left">
                <p>Vui lòng điền địa chỉ giao hàng</p>
                <div class="delivery-content-left-dangnhap row">
                    <i class="fas fa-sign-in-alt"></i>
                    <p>Đăng nhập (Nếu bạn đã có tài khoản)</p>

                </div>
                <div class="delivery-content-left-khachle row">
                    <input checked name="loaikhach" type="radio" >
                    <p><span style="font-weight: bold;">Khách lẻ </span>(Nếu bạn không muốn lưu lại thông tin)</p>
                </div>
                <div class="delivery-content-left-dangky row">
                     <input  name="loaikhach" type="radio" >
                    <p><span style="font-weight: bold;">Đăng ký</span>(Tạo tài khooản với thông tin bên dưới)</p>
                </div>
                <div class="delivery-content-left-input-top row">
                    <div class="delivery-content-left-input-top-item">
                        <label for="">Họ và tên </label>
                        <input type="text">
                    </div>
                    <div class="delivery-content-left-input-top-item">
                        <label for=""> Số điện thoại </label>
                        <input type="text">
                    </div>
                    <div class="delivery-content-left-input-top-item">
                        <label for="">Thành phố/ Tỉnh</label>
                        <input type="text">
                    </div>

                    <div class="delivery-content-left-input-top-item">
                        <label for="">Quận / Huyện</label>
                        <input type="text">
                    </div>
                    <div class="delivery-content-left-input-top-item">
                        <label for="">Phường / xã </label>
                        <input type="text">
                    </div>
                    <div class="delivery-content-left-input-top-item">
                        <label for="">Email </label>
                        <input type="text">
                    </div>
                    
                </div>
                <div class="delivery-content-left-input-bottom">
                    <label for=""> Địa chỉ</label>
                    <input type="text">
                </div>
                <div class="delivery-content-left-button row">
                    <a style="color: black;" href="cart.php"><span> &#8592;</span> Quay lại rỏ hàng</a>
                   <a href="finish.php"> <button><p style="font-weight: bold;">ĐẶT HÀNG</p></button></a>
                </div>
               
            </div>
            <div class="delivery-content-right">
                <table>
                    <tr>
                        <th>Tên sản phẩm </th>
                        <th> </th>
                        <th>Số lượng</th>
                        <th>Thành tiền </th>
                    </tr>
                    <tr>
                       <td>Chân Váy Xòe Phối Hạt</td>
                       <td> </td>
                       <td>1</td>
                       <td><p>763.000 <sup>đ</sup></p></td>
                    </tr>
                    <tr>
                        <td>Chân Váy Xòe Phối Hạt</td>
                        <td> </td>
                        <td>1</td>
                        <td><p>763.000 <sup>đ</sup></p></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;" colspan="3">Tổng</td>
                        <td style="font-weight: bold;"><p>763.000 <sup>đ</sup></p></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;" colspan="3">Phí giao hàng</td>
                        <td style="font-weight: bold;"><p>37.000 <sup>đ</sup></p></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;" colspan="3">Tổng tiền hàng</td>
                        <td style="font-weight: bold;"><p>800.000 <sup>đ</sup></p></td>
                    </tr>
                </table>
                <div class="payment">
                    <p style="font-weight:bold ;">Phương thức thanh toán</p>
                        <label><input type="radio" name="colorCheckbox" value="red"> Thanh toán khi nhận hàng</label>
                        <label><input type="radio" name="colorCheckbox" value="green"> Chuyển khoản qua ngân hàng</label>
                    <div class="green box">
                        <p>Chuyển khoản trước khi ship hàng. Sau khi nhân viên check đã chuyển khoản và nhận tiền thành công, bên cửa hàng sẽ bắt đầu ship hàng <br>
                        Ngân hàng Vietcombank  <br>
                        Chủ tài khoản: NGUYEN VAN BACH<br> 
                        Số tài khoản: 1015321447 <br>
                        Nội dung: Họ & Tên + Số điện thoại</p>
                        </div>
                        <label><input type="radio" name="colorCheckbox" value="blue"> Thanh toán qua QR Pay</label>
                    <div class="blue box"><img style="width: 50%;" src="images/QRPayment.JPG" alt=""></div>

                    </div>
            </div>
            </div>

                   
        </div>
    </div>
</section>

  <!-----------------FOOTER------------------->
 <?php include "footer.php" ?>
  </body>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
$(document).ready(function(){
    $('input[type="radio"]').click(function(){
        var inputValue = $(this).attr("value");
        var targetBox = $("." + inputValue);
        $(".box").not(targetBox).hide();
        $(targetBox).show();
    });
});
</script>
  <script src="js/product.js" >
  </script>
</html>



