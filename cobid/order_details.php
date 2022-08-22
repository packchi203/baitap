<?php include "doctype.php";?>
<body>
<?php include "header.php";?>

    <!-----------------CART------------------->
<style>
    .cart-content-left2{
    flex: 2;
    padding-right: 12px;

}
.cart-content-left2 table{
    width: 100%;
    text-align: center;

}
.cart-content-left2 table th{
    padding-bottom: 30px;
    font-family: var(--main-text-font);
    font-size: 14px;
    text-transform: uppercase;
    color: #333;
    border-collapse: collapse;
    border-bottom: 2px solid #ddd;

}
.cart-content-left2 table p {
    font-family: var(--main-text-font);
    font-size: 14px;
    text-transform: uppercase;
    color: #333;
}
.cart-content-left2 table input{
    width: 30px;

}
.cart-content-left2 table i{
    cursor: pointer;
}
.cart-content-left2 td:first-child img{
    width: 130px;
}
.cart-content-left2 table  td{
    padding: 20px 0;
    border-bottom: 2px solid #ddd;

}
.cart-content-left2 td:nth-child(2){
    max-width: 130px;

}
.cart-content-left2 td:nth-child(3) img{
 width: 30px;
 height: 30px;
 border-radius: 40%;
}
.cart-content-right2{
    flex: 1;
    padding-left: 13px;
    border-left: 2px solid #ddd;


}
.cart-content-right2 table{
    width: 100%;

}
.cart-content-right2 table th{
    padding-bottom: 30px;
    font-family: var(--main-text-font);
    color: #333;
    font-size: 14px;
    border-collapse: collapse;
    border-bottom: 2px solid #ddd;

}
.cart-content-right2 table td{
    font-family: var(--main-text-font);
    color: #333;
    font-size: 14px;
    padding: 6px 0 ;
}
.cart-content-right2 tr:nth-child(4) td{
    border-bottom: 2px solid #ddd;
    
}
.cart-content-right2 tr td:last-child{
    text-align: right;
}
.cart-content-right2-text{
    margin: 20px 0;
    text-align: center;

}
.cart-content-right2-text p{
    font-family: var(--main-text-font);
    color: #333;
    font-size: 14px;
}
.cart-content-right2-button{
    text-align: center;
    align-items: center;
}
.cart-content-right2-button button { 
    padding: 0 18px;
    height: 40px;
    width: 80%;
    cursor: pointer;
    border-radius: 3px;
    background-color: black;
    color: white;
    margin-right: 20px;
    border: none;
    font-size: 17px;
  text-transform: uppercase;
}

.cart-content-right2-button button:hover{
    background-color: white;
    color: black;
    border: 2px solid black;
    text-decoration: underline;

}

.cart-content-right2-dangnhap{
    margin-top: 20px;
    
}
.cart-content-right2-dangnhap P{
    font-family: var(--main-text-font);
    color: #333;
    font-size: 14px;
   
   
}
e{
    border: 1px solid #00ffff;
    background-color: #00ffff;
    border-radius: 20px;
    padding: 5px 10px;

}
</style>
    <section class="cart">
   
        <div class="container">
            
            <p style="font-size: 20px;  font-weight:bold ;">Chi tiết đơn hàng  <u style="color:green">#1239587345</u> <e> Đang giao hàng </e> </p>
            <br>
            <table>

                      <tr>
                        <td><strong>Họ và tên:</strong></td>
                        <td>Nguyễn Văn A</td>
                      </tr>
                      <tr>
                        <td><strong>Số điện thoại:</strong></td>
                        <td>0123 3274 123</td>
                      </tr>
                      <tr>
                        <td><strong>Địa chỉ:</strong></td>
                        <td>103 Khâm Thiên ,Phường Khâm Thiên ,Quận Đống Đa , Hà Nội </td>
                      </tr>
                      <tr>
                        <td><strong>Ngày mua hàng: </strong></td>
                        <td>2022-08-14 16:41:44</td>
                      </tr>
                      <tr>
                        <td><strong>Phương thức thanh toán: </strong></td>
                        <td> Thanh toán khi nhận hàng</td>
                      </tr>

            </table>
                    <br><br>
            <div class="cart-content row ">
                <div class="cart-content-left2">
                    <table>
                        <tr>
                            <th>Sản phẩm</th>
                            <th>Tên sản phẩm</th>
                            <th>Màu</th>
                            <th>Size</th>
                            <th>Số lượng </th>
                            <th>Thành tiền</th>
                           
                        </tr>
                        <tr>
                            <td><img src="images/sp2.jpeg"></td>
                            <td><p>Chân Váy Xòe Phối Hạt</p></td>
                            <td> <img src="images/color/Black.jpeg"></td>
                            <td><p>XL</p></td>
                            
                            <td><p>1</p></td>
                            <td><p>763.000 <sup>đ</sup></p></td>
                           
                        </tr>
                        <tr>
                            <td><img src="images/sp3.jpeg"></td>
                            <td><p>Chân Váy Xòe Phối Hạt</p></td>
                            <td> <img src="images/color/Black.jpeg"></td>
                            <td><p>L</p></td>
                            <td><p>1</p></td>
                            <td><p>763.000 <sup>đ</sup></p></td>
                           
                        </tr>
                    </table>
                </div>

                <div class="cart-content-right2">
                    <table>
                        <tr>
                            <td style="font-weight: bold;" >HOÁ ĐƠN</td>
                        </tr>
                        <tr>
                            <td>Tổng sản phẩm</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Tiền hàng</td>
                            <td><p>763.000 <sup>đ</sup></p></td>
                        </tr>
                        <tr>
                            <td>Phí Ship </td>
                            <td><p >30.000 <sup>đ</sup></p></td>
                        </tr>
                        <tr>
                            <td>Tổng tiền </td>
                            <td><p style="color: Black; font-weight: bold;">800.000 <sup>đ</sup></p></td>
                        </tr>
                      
                    </table>
                    <br><br><br><br>
                   
                    
                </div>
               
            </div>
          
            <div class="cart-next">
            <a style="color: black;" href="last.php"> <button> &#8592; Quay Lai</button></a>
                <style> 
               .cart-next button:hover{
                    text-decoration: underline;
                    background-color: black;
                    color: white;
                }
            </style>
            </div>
        </div>
    </section>





  <!-----------------FOOTER------------------->
  <?php   include "footer.php"?>

  <script src="js/product.js" >
  </script>
</html>





