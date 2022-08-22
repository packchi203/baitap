
<?php include "doctype.php";?>

<body>
<?php include "header.php";?>

    <section id="Slider">
        <div class="aspect-ratio-169 ">
            <img src="images/slide1.jpeg" >
            <img src="images/slide2.jpeg" >
            <img src="images/slide5.jpeg" >
            <img width="100%" src="images/slider4.jpeg" >
        </div>
        <div class="dot-container">
            <div class="dot active"></div>
            <div class="dot"></div>
            <div class="dot"></div>
             <div class="dot"></div>

           
        </div>
    </section>




<!-- product -->
<br><br><br>
<section class="product-related container">
  <div class="">
    <div class="product-related-title2">
        <p>Sản phẩm liên quan</p>

    </div>
    <div class="product-content row">
        <div class="product-related-item">
            <img src="images/sp4.jpeg " >
            <h1>Áo Thun Dập Vân Mờ</h1>
             <p>890.000 <sup>đ</sup></p>
        </div>
        <div class="product-related-item">
            <img src="images/sp5.1.jpeg">
            <h1>Áo Thun Good Vibes Good Life</h1>
            <p>590.000 <sup>đ</sup></p>
        </div>
        <div class="product-related-item">
            <img src="images/sp6.jpeg">
            <h1>Áo Thun The Great</h1>
            <p>1.890.000 <sup>đ</sup></p>
        </div>
        <div class="product-related-item">
            <img src="images/sp7.jpeg">
            <h1>Đầm Maxi Eo Out-Cut</h1>
            <p>1.590.000 <sup>đ</sup></p>
        </div>
        <div class="product-related-item">
        <img src="images/sp8.jpeg">
        <h1>Áo Thun In Chữ</h1>
        <p>590.000 <sup>đ</sup></p>
    </div>
   
  </div>
</section>

  <!-----------------recomment------------------->
  <section class="product-related container">
  <div class="">
  <div class="product-related-title2">
        <p>Sản phẩm bán chạy</p>

    </div>
    <div class="product-content row">
        <div class="product-related-item">
            <img src="images/sp1.jpeg " >
            <h1>Áo Thun Dập Vân Mờ</h1>
             <p>890.000 <sup>đ</sup></p>
        </div>
        <div class="product-related-item">
            <img src="images/sp2.jpeg">
            <h1>Áo Thun Good Vibes Good Life</h1>
            <p>590.000 <sup>đ</sup></p>
        </div>
        <div class="product-related-item">
            <img src="images/sp3.jpeg">
            <h1>Áo Thun The Great</h1>
            <p>1.890.000 <sup>đ</sup></p>
        </div>
        <div class="product-related-item">
            <img src="images/sp4.jpeg">
            <h1>Đầm Maxi Eo Out-Cut</h1>
            <p>1.590.000 <sup>đ</sup></p>
        </div>
        <div class="product-related-item">
        <img src="images/sp8.jpeg">
        <h1>Áo Thun In Chữ</h1>
        <p>590.000 <sup>đ</sup></p>
    </div>
   
  </div>
</section>

<!-- app -->

<!--footer-->
<?php   include "footer.php"?>




<script>
    const imgPosition = document.querySelectorAll(".aspect-ratio-169 img")
    const imgContainer = document.querySelector(".aspect-ratio-169")
    const dotItem = document.querySelectorAll(".dot")
    let imgNumber = imgPosition.length
    let index  = 0
    //console.log(imgPosition)
    imgPosition.forEach(function(image, index){
       image.style.left = index*100 + "%"
       dotItem[index].addEventListener("click", function(){
        slider(index)
       })
    })
    function imgSlide(){
        index++;
        console.log(index )
        if(index>= imgNumber){index = 0}
        slider(index)
    }
    function slider(index) {
        imgContainer.style.left = "-" + index*100 + "%"
        const dotActive = document.querySelector('.active')
        dotActive.classList.remove("active")
        dotItem[index].classList.add("active")
    }
    setInterval(imgSlide,5000) 

</script>
<script  ></script>
</html>