<?php
    include "config.php";
    if($_SESSION['user_role'] == '0'){    
        header("Location: {$hostname}/admin/post.php");
    }

    $cid = $_GET['id'];
    $sql = "DELETE FROM category WHERE category_id = {$cid}";

    if(mysqli_query($conn, $sql)){
        header("Location: {$hostname}/admin/category.php");

    }else{
        echo "<P style='color:red; margin: 10px;'>Can\'t Delete the User Record.</P>";
    }

    mysqli_close($conn);
?>