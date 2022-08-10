<?php
include "header.php";
include "slider.php";
include "class/color_class.php"
?>
<?php
$color = new color;
 $show_color = $color->show_color();

?>
<link rel="stylesheet" href="size.css">
    <script src="script.js"></script>
<div class="admin-content-right">
<div class="admin-content-right-category-list">
                <h1>Danh sách danh mục</h1>
                <table>
                    <tr>
                        <th>STT</th>
                        <th>ID</th>
                        <th>Tên danh mục</th>
                        <th>Tùy biến</th>
                    </tr>
                    <?php
                    if($show_color){$i=0;
                        while($result = $show_color->fetch_assoc()) {$i++;
                    ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $result['color_id']; ?></td>
                        <td style="text-transform: capitalize;"><?php echo $result['color_name']; ?></td>
                        <td><a href="coloredit.php?color_id=<?php echo $result['color_id'] ?>">Sửa</a> | <a href="colordelete.php?color_id=<?php echo $result['color_id'] ?>">Xóa</a></td>
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
