<?php
include "header.php";
include "slider.php";
include "class/brand_class.php"
?>

<?php
    $brand = new brand;
    if(!isset($_GET['brand_id']) || $_GET['brand_id']== NULL){
      echo "<script>window.location = 'brandlist.php'</script>";
    } else{
        $brand_id = $_GET['brand_id'];
    }
    $get_brand = $brand -> get_brand($brand_id);
    if($get_brand){
        $resultA = $get_brand -> fetch_assoc();
    }


    if($_SERVER['REQUEST_METHOD']=== 'POST'){
        $category_id = $_POST['category_id'];
        $brand_name = $_POST['brand_name'];
        $update_brand = $brand->update_brand($category_id, $brand_name,$brand_id);
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
        text-transform: capitalize;
    }
   
</style>
<div class="admin-content-right">
            <div class="admin-content-right-category-add">
                <h1>Thêm loại sản phẩm</h1>
                    <br>
                <form action="" method="POST">
                   <select name="category_id" id="">
                    <option value="#">Chọn danh mục</option>
                    <?php
                    $show_category = $brand -> show_category();
                    if($show_category){
                        while($result = $show_category -> fetch_assoc()){

                     ?>
                    <option <?php if($resultA['category_id']==$result['category_id']) {echo " SELECTED";} ?>
                     value="<?php echo $result['category_id'] ?>"><?php echo $result['category_name']; ?></option>
                   <?php 
                     }}
                       ?>
                   </select>
                   <br>
                   <input required name="brand_name" type="text" placeholder="Nhập tên loại sản phẩm"
                   value="<?php echo $resultA['brand_name'];  ?>">
                   <br>
                    <button style=" margin-left: 100px;" type="submit">Sửa</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
