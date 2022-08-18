<?php include "doctype.php";?>
<body>
<?php include "header.php";?>
  <!-----------------DELIVERY------------------->
<section class="delivery">
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
                   <a href="payment.php"> <button><p style="font-weight: bold;">THANH TOÁN</p></button></a>
                </div>
               
            </div>
            <div class="delivery-content-right">
                <table>
                    <tr>
                        <th>Tên sản phẩm </th>
                        <th>Giảm giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền </th>
                    </tr>
                    <tr>
                       <td>Chân Váy Xòe Phối Hạt</td>
                       <td>-10%</td>    
                       <td>2</td>
                       <td><p>763.000 <sup>đ</sup></p></td>
                    </tr>
                    <tr>
                        <td>Chân Váy Xòe Phối Hạt</td>
                        <td>-10%</td>
                        <td>2</td>
                        <td><p>763.000 <sup>đ</sup></p></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;" colspan="3">Tổng</td>
                        <td style="font-weight: bold;"><p>763.000 <sup>đ</sup></p></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;" colspan="3">Thuế VAT</td>
                        <td style="font-weight: bold;"><p>76.000 <sup>đ</sup></p></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;" colspan="3">Tổng tiền hàng</td>
                        <td style="font-weight: bold;"><p>859.000 <sup>đ</sup></p></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>

  <!-----------------FOOTER------------------->
 <?php include "footer.php" ?>
  </body>

  <script src="js/product.js" >
  </script>
</html>



