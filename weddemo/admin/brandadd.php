<?php
include "header.php";
include "slider.php";
include "class/category_class.php"
?>

<?php
$category = new category;
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $category_name = $_POST['category_name'];
    $insert_category = $category->insert_category($category_name);
}  

?>
<style>
    select{
        height: 40px;
        width: 300px;
        font-size: 18px;
        padding-left: 12px;
        margin-top: 20px;
        border-radius: 3px;
        border: 1px solid #ddd;
        color: rgb(117, 117, 117);
    }
   
</style>
<div class="admin-content-right">
            <div class="admin-content-right-category-add">
                <h1>Thêm loại sản phẩm</h1>
                    <br>
                <form action="" method="POST">
                   <select name="" id="">
                    <option value="#">Chọn danh mục</option>
                    <option value="">Nam</option>
                    <option value="">Nữ</option>
                   </select>
                   <br>
                   <input required name="brand_name" type="text" placeholder="Nhập tên loại sản phẩm">
                    <button type="submit">Thêm </button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
