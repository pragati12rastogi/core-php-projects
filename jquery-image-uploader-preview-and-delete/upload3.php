<?php
if(isset($_FILES) && !empty($_FILES)) {
    
  $remove_products_ids = array();
  if(isset($_POST['remove_products_ids']) && !empty($_POST['remove_products_ids'])) {
    $remove_products_ids = explode(",", $_POST['remove_products_ids']);
  }
  for($i=0; $i<sizeof($_FILES['products_uploaded']['name']); $i++) {
    if(!in_array($i, $remove_products_ids)) {
      if($_FILES['products_uploaded']['name'][$i] != "") {
        $path = "uploaded-contents/".$_FILES['products_uploaded']['name'][$i];
        copy($_FILES['products_uploaded']['tmp_name'][$i], $path); 
      }
    }
  }
}
?>