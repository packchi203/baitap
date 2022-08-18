<?php
include "header.php";
include "slider.php";
include "class/brand_class.php"
?>

<?php
$brand = new brand;
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $category_id = $_POST['category_id'];
    $brand_name = $_POST['brand_name'];
    $insert_brand = $brand->insert_brand($category_id, $brand_name);
}  

?>
<style>
    select{
        height: 40px;
        width: 300px;
        font-size: 18px;
        padding-left: 12px;
        margin: 20px 0;
        border-radius: 3px;
        border: 1px solid #ddd;
        color: rgb(117, 117, 117);
        text-transform: capitalize;
    }
   
</style>
<link rel="stylesheet" href="size.css">
    <script src="script.js"></script>
<div class="admin-content-right">
            <div class="admin-content-right-category-add">
                <h1>Thêm loại sản phẩm</h1>
                    <br>
                <form action="" method="POST">
                   <select style="text-transform: capitalize;" name="category_id" id="">
                    <option value="#">Chọn danh mục</option>
                    <?php
                    $show_category = $brand -> show_category();
                    if($show_category){
                        while($result = $show_category -> fetch_assoc()){

                     ?>
                    <option  value="<?php echo $result['category_id'] ?>"><?php echo $result['category_name']; ?></option>
                   <?php 
                     }}
                       ?>
                   </select>
                   <br>
                   <input required name="brand_name" type="text" placeholder="Nhập tên loại sản phẩm">
                   <br>
                    <button style=" margin-left: 100px;" type="submit">Thêm </button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
