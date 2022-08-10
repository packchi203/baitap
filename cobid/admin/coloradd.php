<?php
include "header.php";
include "slider.php";
include "class/color_class.php"
?>

<?php
$color = new color;
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $color_name = $_POST['color_name'];
    $insert_color = $color->insert_color($color_name);
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
                <h1>Tên danh mục</h1>
                <form action="" method="POST">
                    <input required name="color_name" type="text" placeholder="Nhập tên mau sac">
                    <button type="submit">Thêm </button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
 