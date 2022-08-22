<?php
include "header.php";
include "slider.php";
include "class/product_class2.php"
?>
<?php
$product = new product;
$show_product  = $product-> show_product();

?>

<div class="admin-content-right">
<div class="admin-content-right-category-list">
                <h1>Danh sách danh mục</h1>
                <table>
                    <tr>
                        <th>STT</th>
                        <th>ID</th>
                        <th>Tên sản phẩm </th>
                        <th>Danh mục</th>
                        <th>Loại sản phẩm</th>
                        <th>Màu sắc </th>
                    
                        <th>Giá bán</th>
                        <th>Nội dung</th>
                        <th>Ảnh</th>
                        
                        <th>Tùy biến</th>
                    </tr>
                    <?php
                    if($show_product){$i=0;
                        while($result = $show_product->fetch_assoc()) {$i++;
                    ?>
                    <tr>
                        <style>
                            td{ text-transform: capitalize;}
                        </style>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $result['product_id']; ?></td>
                        <td ><?php echo $result['product_name']; ?></td>
                        <td ><?php echo $result['category_name']; ?></td>
                        <td ><?php echo $result['brand_name']; ?></td>
                        <td ><?php echo $result['color_name']; ?></td>
                        <td ><?php echo $result['product_price']; ?></td>
            
                        <td ><?php echo $result['product_desc']; ?></td>
                        <td ><?php echo $result['product_img']; ?></td>

                        <td><a href="productedit.php?product_id=<?php echo $result['product_id'] ?>">Sửa</a> | 
                        <a href="productdelete.php?product_id=<?php echo $result['product_id'] ?>">Xóa</a></td>
                    </tr>
                    <?php
                     }
                    }
                    ?> 
                </table>
            </div>
        </div>
    </section>
</body>
</html>