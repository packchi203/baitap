

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

<body>
    <style> 
            /* ------------------------------------------------------------------------------------------ */
            .dropdown-check-list {
  display: inline-block;
}

.dropdown-check-list .anchor {
    width: 500px;
    height: 40px;
    border-radius: 3px;
    position: relative;
    cursor: pointer;
    margin: 8px 0 ;
    display: inline-block;
    padding: 10px 50px 5px 10px;
    border: 1px solid #ccc;
}

.dropdown-check-list .anchor:after {
  position: absolute;
  content: "";
  border-left: 2px solid black;
  border-top: 2px solid black;
  padding: 5px;
  right: 10px;
  top: 20%;
  -moz-transform: rotate(-135deg);
  -ms-transform: rotate(-135deg);
  -o-transform: rotate(-135deg);
  -webkit-transform: rotate(-135deg);
  transform: rotate(-135deg);
}

.dropdown-check-list .anchor:active:after {
  right: 8px;
  top: 21%;
}

.dropdown-check-list ul.items {
  padding: 2px;
  display: none;
  margin: 0;
  border: 1px solid #ccc;
  border-top: none;
}

.dropdown-check-list ul.items li {
  list-style: none;
  margin: 5px 0;
}

.dropdown-check-list.visible .anchor {
  color: black;
  font-weight: bold;
}

.dropdown-check-list.visible .items {
  display: block;
}

input[type='checkbox']{
    margin: 0 5px 0 0 ;
}
            
            
            </style>



                      <div   id="list1" class="dropdown-check-list" tabindex="100">
                      <span class="anchor"> Chọn </span>
                      <ul  name="color_id" class="items">
                    
                        <?php
                       $show_color = $product -> show_color();
                        if($show_color){while($result = $show_color -> fetch_assoc()){
                        ?>
                         <li><input name="color_id"  value="<?php echo $result['color_id'];?>" type="checkbox" /><?php echo $result['color_name'];?> </li>
              
                        <?php 
                           }}
                        ?>
                         </ul>
                      </div>
                    

<br><br>


<script>


var checkList = document.getElementById('list1');
checkList.getElementsByClassName('anchor')[0].onclick = function(evt) {
  if (checkList.classList.contains('visible'))
    checkList.classList.remove('visible');
  else
    checkList.classList.add('visible');
}


//-------------------------------------------------------------------------------------------
  
</script>
</body>
</html>