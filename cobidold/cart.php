<?php include "doctype.php";?>
<body>
<?php include "header.php";?>

    <!-----------------CART------------------->

    <section class="cart">
        <div class="container">
            <div class="cart-top-wrap">
                <div class="cart-top">
                    <div class="cart-top-cart cart-top-item">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <div class="cart-top-address cart-top-item ">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="cart-top-payment cart-top-item">
                        <i class="fas fa-money-check-alt"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="cart-content row">
                <div class="cart-content-left">
                    <table>
                        <tr>
                            <th>Sản phẩm</th>
                            <th>Tên sản phẩm</th>
                            <th>Màu</th>
                            <th>Size</th>
                            <th>Số lượng </th>
                            <th>Thành tiền</th>
                            <th>Xóa</th>
                        </tr>
                        <tr>
                            <td><img src="images/sp2.jpeg"></td>
                            <td><p>Chân Váy Xòe Phối Hạt</p></td>
                            <td> <img src="images/color/Black.jpeg"></td>
                            <td><p>XL</p></td>
                            <td><input type="number" value="1" min="1"></td>
                            <td><p>763.000 <sup>đ</sup></p></td>
                            <td><i class="fas fa-trash"></i></td>
                        </tr>
                        <tr>
                            <td><img src="images/sp3.jpeg"></td>
                            <td><p>Chân Váy Xòe Phối Hạt</p></td>
                            <td> <img src="images/color/Black.jpeg"></td>
                            <td><p>L</p></td>
                            <td><input type="number" value="1" min="1"></td>
                            <td><p>763.000 <sup>đ</sup></p></td>
                            <td><i class="fas fa-trash"></i></td>
                        </tr>
                    </table>
                </div>

                <div class="cart-content-right">
                    <table>
                        <tr>
                            <th colspan="2">Tổng tiền giỏ hàng</th>
                        </tr>
                        <tr>
                            <td>Tổng sản phẩm</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>Tổng tiền hàng</td>
                            <td><p>763.000 <sup>đ</sup></p></td>
                        </tr>
                        <tr>
                            <td>Tạm tính</td>
                            <td><p style="color: Black; font-weight: bold;">763.000 <sup>đ</sup></p></td>
                        </tr>
                    </table>
                    <div class="cart-content-right-text">
                        <p>Đơn hàng trên 2.000.000 vnđ sẽ đuọc miễn phí ship</p>
                    </div>
                    <div class="cart-content-right-button">
                    
                            <a href="delivery.php"><button>Đặt Hàng</button></a>
                        
                    </div>
                    <div class="cart-content-right-dangnhap">
                        <p>Tài khoản</p><br>
                        <p>Hãy <a href="">Đăng nhập</a> vào tài khoản để tích điểm thành viên</p>
                    </div>
                </div>
            </div>
            <div class="cart-next">
                <button> &#8592; Tiếp tục mua sắm</button>
            </div>
        </div>
    </section>





  <!-----------------FOOTER------------------->
  <?php   include "footer.php"?>

  <script src="js/product.js" >
  </script>
</html>




