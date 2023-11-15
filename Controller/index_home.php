<?php
include "../Model/pdo.php";
include "../Model/action_categories.php";
include "../View/header.php";

if(isset($_GET['request']) && $_GET['request']){
    switch($_GET['request']){

    }
}else{
    include "../View/home.php";
}

include "../View/footer.php";
?>