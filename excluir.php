<?php
require 'config.php';

if(isset($_GET['id']) && empty($_GET['id']) == FALSE){
    
} else {
    header("Location: index.php");
}
?>