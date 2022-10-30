<?php

require('../controllers/product_controller.php');

// check if theres a POST variable with the name 'addcat'
if(isset($_POST['addcat'])){
    // retrieve the category name from the form 
    $name = $_POST['catname'];
   
    // call the add_category_controller function 
    $result = add_category_ctr($name);

    if($result === true) 
    
    echo "category added Successfullly";
    else 
    echo "Insertion Failed";  

}

//delete category
if(isset($_GET['deletecatID'])){

    $id = $_GET['deletecatID'];

    // call the function
    $result = delete_category_ctr($id);

    if($result === true) {
        header("Location: ../admin/add_category.php");
    }
    else echo "deletion failed";
}

// Update category
if(isset($_POST['edit_cat'])){
    // retrieve the category name from the form submission
    $name = $_POST['name'];
    $id = $_POST['id'];

    // call the edit_category_controller function 
    $result = edit_category_ctr($id, $name); 

    if($result === true){
        header("Location: ../admin/add_category.php");
    }
    else echo "update failed";

}

?>