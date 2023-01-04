<?php
session_start();
include "conn.php";

        $username = $_POST['username'];
        $password = $_POST['password'];
        $qry = mysqli_query($conn,"SELECT * FROM tbl_user WHERE username = '$username' AND password = '$password'");
        $cek = mysqli_num_rows($qry);
        if ($cek==1){
            $_SESSION['user']=$username;
            header ("location:admin/indexadmin.html");
            exit;
        }
        else{
            echo "Username dan Password Salah";
        }
    
    ?>
