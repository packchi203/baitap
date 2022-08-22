<?php include "doctype.php";?>
<body>
<?php include "header.php";?>
<style>
    a:hover{
        text-decoration:none!important;
      
    }
</style>
    <!-----------------CATEGORY------------------->
    <section class="category">

    <div class="container">
        <div class="category-top row">
            <p>Trang chủ</p> <span>&#10230;</span> <p>Nữ</p> <span>&#10230;</span> <p>Hàng mới về</p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="category-left"> 
                <ul>
                    <li class="category-left-li "><a href="#">Nữ</a>
                        <ul>
                        <li><a href="">Hàng nữ mới về</a></li>
                        <li><a href="">Áo</a></li>
                        <li><a href="">Jeans</a></li>
                        <li><a href="">Váy</a></li>
                        </ul>
                     </li>
                    <li class="category-left-li"><a href="#">Nam</a>
                        <ul>
                        <li><a href="">Hàng nam mới về</a></li>
                        <li><a href="">Áo</a></li>
                        <li><a href="">Vest</a></li>
                        <li><a href="">Sơmi</a></li></li>
                        </ul>
                    <li class="category-left-li"><a href="#">Trẻ Em</a>
                        <ul>
                            <li><a href="">Sơ sinh</a></li>
                        <li><a href="">Áo</a></li>
                        <li><a href="">Quần</a></li>
                        <li><a href="">Váy</a></li>
                        </ul>
                    </li>
                    <li class="category-left-li"><a href="#">Bộ Sưu Tâp</a></li>
                    <li class="category-left-li"><a href="#">Sale</a></li>
                </ul>

            </div> 
            <div class="category-right row">
                <div class="category-right-top-item">
                   
                    <p>HÀNG NỮ MỚI VỀ</p>
                </div>
                <div class="category-right-top-item">
                   
                  <button><span>Bộ lọc</span> <i class="fas fa-sort-down"></i></button>
                </div>
                <div class="category-right-top-item">
                    <select name="" id="">
                        <option value="">Sắp xếp</option>
                        <option value="">Giá cao đến thấp</option>
                        <option value="">Giá thấp đến cao</option>
                        <option value="">Bán Chạy</option>
                    </select>
                </div>
                <div class="category-right-content row">

                    <div class="category-right-content-item">
                        <img src="images/sp1.jpeg">
                        <h1>Đầm Cut-Out Phối Ren</h1>
                        <p>1.890.000 <sup>đ</sup></p>
                    </div>
                    <div class="category-right-content-item">
                        <a href="product.php">
                            <img src="images/sp2.jpeg">
                            <h1>Chân Váy Xòe Phối Hạt</h1>
                            <p>763.000 <sup>đ</sup></p>
                        </a>
                      
                    </div>
                    <div class="category-right-content-item">
                        <img src="images/sp3.jpeg">
                        <h1>Chân Váy Lụa Đuôi cá</h1>
                        <p>553.000 <sup>đ</sup></p>
                    </div>
                    <div class="category-right-content-item">
                        <img src="images/sp4.jpeg">
                        <h1>Áo Thun Dập Vân Mờ</h1>
                        <p>890.000 <sup>đ</sup></p>
                    </div>
                    <div class="category-right-content-item">
                        <img src="images/sp5.1.jpeg">
                        <h1>Áo Thun Good Vibes Good Life</h1>
                        <p>590.000 <sup>đ</sup></p>
                    </div>
                    <div class="category-right-content-item">
                        <img src="images/sp6.jpeg">
                        <h1>Áo Thun The Great</h1>
                        <p>1.890.000 <sup>đ</sup></p>
                    </div>
                    <div class="category-right-content-item">
                        <img src="images/sp7.jpeg">
                        <h1>Đầm Maxi Eo Out-Cut</h1>
                        <p>1.590.000 <sup>đ</sup></p>
                    </div>
                    <div class="category-right-content-item">
                        <img src="images/sp8.jpeg">
                        <h1>Áo Thun In Chữ</h1>
                        <p>590.000 <sup>đ</sup></p>
                    </div>
                </div>
                <div class="category-right-bottom row">
                    <div class="category-right-bottom-items">
                        <p>Hiển thị 2<span> | </span>4 sản phẩm</p>
                    </div>
                    <div class="category-right-bottom-items">
                        <p><span>&#171;</span>1 2 3 4 5 <span>&#187;</span>Trang cuối</p>
                    </div>

                </div>



            </div> 
            
        </div>
    </div>
    </section>

     
  <!-----------------FOOTER------------------->
<?php include "footer.php" ?>
    </body>

    <script src="js/category.js" >
    </script>
</html>