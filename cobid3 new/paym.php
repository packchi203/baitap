
<?php include "doctype.php";?>
<body>
<?php include "header.php";?>

  <!-----------------PAYMENT------------------->

  <section class="payment">
      <div class="container"> 
        <div class="payment-top-wrap">
            <div class="payment-top">
                <div class="payment-top-cart payment-top-item">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <div class="payment-top-address payment-top-item ">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="payment-top-payment payment-top-item">
                    <i class="fas fa-money-check-alt"></i>
                </div>
            </div>
        </div>
      </div>
      <div class="container">
          <div class="payment-content row">
              <div class="payment-content-left">
                  <div class="payment-content-left-method-delivery">
                      <!-- <p style="font-weight: bold;">Phương thức giao hàng</p>
                      <div class="payment-content-left-method-delivery-item">
                          <input checked type="radio" >
                          <label checked for="">Giao hàng chuyển phát nhanh</label>
                          
                      </div>
                  </div>
                  <div class="payment-content-left-method-payment">
                    <p style="font-weight: bold;">Phương thức thanh toán</p>
                    <label>Mọi giao dịch sẽ được bảo mật và mã hóa. Thông tin thẻ ứng dụng sẽ không bao giờ đuọc lưu lại</;>
                    <div class="payment-content-left-method-delivery-item">
                        <input name="method-payment"  type="radio" >
                        <label for="">Thanh toán bằng thẻ tín dụng</label>
                    </div>
                    <div class="payment-content-left-method-delivery-item-img">
                        <img style="width:30% ;" src="images/visa.png">
                    </div>
                    <div class="payment-content-left-method-delivery-item">
                        <input name="method-payment"  type="radio" >
                        <label for="">Thanh toán bằng thẻ ATM</label>
                    </div>
                    <div class="payment-content-left-method-delivery-item-img">
                        <img src="images/atm.png">
                    </div>
                    <div class="payment-content-left-method-delivery-item">
                        <input checked name="method-payment" type="radio" >
                        <label for="">Thanh toán khi nhận hàng</label>
                    </div> -->
                    <style>
                                        
                    .box{
                        color: #fff;
                        padding: 20px;
                        display: none;
                        margin-top: 20px;
                    }
                    .red{ background: #ff0000; }
                    .green{ background: #228B22; }
                    .blue{ background: #0000ff; }
                    </style>
                    

                    <div >
        <label><input type="checkbox" name="colorCheckbox" value="red"> red</label>
        <label><input type="checkbox" name="colorCheckbox" value="green"> green</label>
        <label><input type="checkbox" name="colorCheckbox" value="blue"> blue</label>
    </div>
    <div class="red box">You have selected <strong>red checkbox</strong> so i am here</div>
    <div class="green box">You have selected <strong>green checkbox</strong> so i am here</div>
    <div class="blue box">You have selected <strong>blue checkbox</strong> so i am here</div>
                </div>

              </div>
              <div class="payment-content-right">
                <div class="payment-content-right-button">
                    <input type="text" placeholder="Mã giảm giá">
                    <button><i class="fas fa-check"></i></button>
                </div>
                <div class="payment-content-right-button dashed">
                    <input type="text" placeholder="Mã mã cộng tác viên">
                    <button><i class="fas fa-check"></i></button>
                </div>
                <div class="payment-content-right-payment">
                    <button>Xác nhận và giao hàng</button>
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
    $('input[type="checkbox"]').click(function(){
        var inputValue = $(this).attr("value");
        $("." + inputValue).toggle();
    });
});
</script>
  <script src="js/product.js" >
  </script>
</html>



