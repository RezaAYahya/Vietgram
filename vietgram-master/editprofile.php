<?php
session_start();
include('koneksi.php');
    $query = mysqli_query($conn, "UPDATE profile SET name = '".$_POST["nama"]."', website = '".$_POST["website"]."', bio = '".$_POST["bio"]."', email = '".$_POST["email"]."', phone_number = '".$_POST["phone"]."', gender = '".$_POST["gender"]."' WHERE username = '".$_SESSION["username"]."'");
    
    if($query)
    {
        $_SESSION["name"] = $_POST["nama"];
        $_SESSION["website"] = $_POST["website"];
        $_SESSION["bio"] = $_POST["bio"];
        $_SESSION["email"] = $_POST["email"];
        $_SESSION["phone_number"] = $_POST["phone"];
        $_SESSION["gender"] =$_POST["gender"];
        header("location:profile.php");
    }else {
        header("location:edit-profile.php");
    }
?>