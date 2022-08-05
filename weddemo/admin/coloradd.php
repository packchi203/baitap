<?php
include "header.php";
include "slider.php";
include "class/brand_class.php"
?>

<?php
$brand = new brand;
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $color_name = $_POST['color_name'];
    $file_name = $_FILES['color_name_img']['name'];
      var_dump($file_name);
    // $file_temp = $_FILES['color_name']['tmp_name'];
    // $div = explode('.',$file_name);
    // $file_ext = strtolower(end($div));
    // $color_name_img = substr(md5(time()),0,10).'.'.$file_ext;
    // $upload_image = "uploads/".$color_name_img;
    // move_uploaded_file($file_temp,$upload_image)

    // $insert_color = $color->insert_color($color_name, $color_name);
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
    label{
        font-size: 18px;
        color: rgb(117, 117, 117);
        margin: 10px;
    }
   
</style>
<link rel="stylesheet" href="size.css">
    <script src="script.js"></script>
<div class="admin-content-right">
            <div class="admin-content-right-category-add">
                <h1>Thêm màu sắc</h1>
                    <br>
                <form action="" method="POST" enctype="multipart/form-data">

                  
                  <input required name="color_name" type="text" placeholder="Nhập tên tên màu sắc">

                  <br>
                  <br>
                  <label  for="">Vui lòng chọn ảnh màu sắc </label>
                  <br>
                   <input style="border: none;" required name="color_name_img" type="file" >
                   <br>
                    <button style=" margin-left: 100px;" type="submit">Thêm </button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
 