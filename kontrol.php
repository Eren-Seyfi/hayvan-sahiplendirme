<?php
session_start();
if(isset($_SESSION['user_role'])){
    if($_SESSION['user_role'] == "admin"){
        header('Location: /hayvan_sahiplendirme/admin.php');
    }
}
else{
    header("Location: /hayvan_sahiplendirme");
}