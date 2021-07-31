<?php 

require_once '../model/model.php';

if (deleteProduct($_GET['Name'])) {
    header('Location: ../showAllProduct.php');
}

 ?>