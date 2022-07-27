<?php
include "header.php";
include "slider.php";
include "class/product_class.php" 
?>

<?php
$product = new product;
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    //  var_dump($_POST,$_FILES);
//  echo '<pre>';
//  echo print_r($_POST);
// echo print_r($_FILES['product_img_desc']);
//  echo '</pre>';
   $insert_product = $product->insert_product($_POST,$_FILES);
}  

?>

<div class="admin-content-right">
<div class="admin-content-right-product-add">
                <h1>Thêm sản phẩm</h1>
                <br><br>
                <form action="" method="POST" enctype="multipart/form-data">
                    <label for="">Nhập tên sản phẩm: </label>
                    <input name="product_name" required type="text">
                    
                    <label for="">Chọn danh mục:</label>
                    <select name="category_id" style="text-transform: capitalize;" name="" id="" required>
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
                    <select name="brand_id" style="text-transform: capitalize;" name="" id="" required>
                        <option value="">Chọn </option>
                            <?php
                        $show_brand = $product -> show_brand();
                            if($show_brand){while($result = $show_brand -> fetch_assoc()){
                            ?>
                            <option value="<?php echo $result['brand_id'];?>"><?php echo $result['brand_name'];?></option>
                                <?php 
                            }}
                                ?>


                    </select>

                    <label for="">Nhập giá sản phẩm:</label>
                    <input name="product_price" required type="text" >

                    <label for="">Nhập giá khuyến mãi:</label>
                    <input name="product_price_new" required type="text" >

                    <label for="">Nhập Mô tả sản phẩm:</label>
                    <textarea name="product_desc" required name="" id="" cols="30" rows="10" ></textarea>
                  <div class="img">

                    <label  for="">Ảnh chính sản phẩm:</label>
                    <input name="product_img" required type="file">

                    <label for="">Ảnh mô tả sản phẩm:</label>
                    <input name="product_img_desc[]" multiple required type="file">

                  </div>
                    <button type="submit">Thêm </button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
