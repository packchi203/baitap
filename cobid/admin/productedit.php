<?php
include "header.php";
include "slider.php";
include "class/product_class2.php" 
?>

<?php
$product = new product;
if($_SERVER['REQUEST_METHOD']=== 'POST'){
   //  var_dump($_POST,);
//  echo '<pre>';
//  echo print_r($_POST);
// echo print_r($_FILES['product_img_desc']);
//  echo '</pre>';
   $insert_product = $product->insert_product($_POST,$_FILES);
}  

?>
<style>
      
           
</style>
<link rel="stylesheet" href="size.css">
    <script src="script.js"></script>
<div class="admin-content-right">
<div class="admin-content-right-product-add">
                <h1>Thêm sản phẩm</h1>
                <br><br>
                
                <form action="" method="POST" enctype="multipart/form-data">
                    <label for="">Nhập tên sản phẩm: </label>
                    <input class="input" name="product_name" required type="text">
                    
                    <label for="">Chọn danh mục:</label>
                    <select name="category_id" style="text-transform: capitalize;"  id="category_id" required>
                        <option value="">Chọn </option>
                        <?php
                       $show_category = $product -> show_category();
                        if($show_category){while($result = $show_category -> fetch_assoc()){
                        ?>
                        <option value="<?php echo $result['category_id'];?>"><?php echo $result['category_name'];?></option>
                        <?php 
                           }}
                        ?>

                    </select>

                    <label for="">Chọn loại sản phẩm:</label>
                    <select name="brand_id" style="text-transform: capitalize;"  id="brand_id" required>
                    <option value="">Chọn </option>
                    </select>
          
                    <label for="">Chọn màu sản phẩm:</label>
                    <select name="color_id" style="text-transform: capitalize;"  id="color_id" required>
                        <option value="">Chọn </option>
                        <?php
                       $show_color = $product -> show_color();
                        if($show_color){while($result = $show_color -> fetch_assoc()){
                        ?>
                        <option value="<?php echo $result['color_id'];?>"><?php echo $result['color_name'];?></option>
                        <?php 
                           }}
                        ?>

                    </select>
                    
                   
                        <!-- PRICE -->

                    <label for="">Nhập giá sản phẩm:</label>
                    <input class="input" name="product_price" required type="text" >

                    <label for="">Nhập giá khuyến mãi:</label>
                    <input class="input" name="product_price_new" required type="text" >

                 

                    <!-- <label for="">Chọn Size sản phẩm</label> <br>
                    <div class="sanpham-size">
                    <p>S</p>    <input type="checkbox" name="sanpham-size[]" value="S"> 
                    <p>M</p>    <input type="checkbox" name="sanpham-size[]" value="M"> 
                    <p>L</p>    <input type="checkbox" name="sanpham-size[]" value="L">
                    <p>XL</p>   <input type="checkbox" name="sanpham-size[]" value="XL">  
                    <p>XXL</p>  <input type="checkbox" name="sanpham-size[]" value="XXL">  
                    </div> -->

                    <label for="">Nhập Mô tả sản phẩm:</label>

                    <textarea name="product_desc" required  id="" cols="30" rows="10" ></textarea>
                  

                    <label  for="">Ảnh chính sản phẩm:</label>
                    <span style=" color:red;">  <?php //if(isset($insert_product)){ echo ($insert_product);} ?></span>
                    <input class="input" style="border: none;" name="product_img" required type="file">

                    <label for="">Ảnh mô tả sản phẩm:</label>
                    <input class="input" style="border: none;" name="product_img_desc[]" multiple required type="file">
                    
                    <button type="submit">Thêm </button>
                </form>
            </div>
        </div>
    </section>
</body>

<script>
    $(document).ready(function(){
        $("#category_id").change(function(){
           // alert($(this).val())
           var x = $(this).val()
           $.get("productadd_ajax.php",{ category_id:x},function(data){
            $("#brand_id").html(data);
           })
        })
    })
   
</script>

</html>
