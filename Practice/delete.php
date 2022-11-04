<?php
    $conn = mysqli_connect("localhost:3307","root", "","practice") or die("connection failed: ". mysqli_connect_error());
    
    $userid = $_GET['id'];

    $sql = "DELETE FROM user WHERE user_id = {$userid}";

    if(mysqli_query($conn, $sql)){
        header("Location: http://localhost/news-site/practice/read.php");

    }else{
        echo "<P style='color:red; margin: 10px;'>Can\'t Delete the User Record.</P>";
    }

    mysqli_close($conn);
?>