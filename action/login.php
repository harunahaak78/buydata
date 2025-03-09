<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title></title>
    <script src="../assets/js/sweetalert.min.js"></script>
</head>

<body>


<?php 
   
   require "../dbconn/conn.php";
   session_start();


   if(isset($_POST["login"])){
    $email = $_POST["email"];
    $password =$_POST["password"];

    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if($result->num_rows>0){
        $user = mysqli_fetch_assoc($result);

        if(password_verify($password, $user['password'])){
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['name'];
            $_SESSION['email'] = $user['email'];

            header("location:../index.php");
        
            // <!-- <script>
            //     // swal({
            //     //     titel:"Success",
            //     //     text:"Login Successfully",
            //     //     icon:"success",
            //     //     button:"login",
            //     // })
            //     // setTimeout(()=>{
            //     //     
            //     // },2000)
                
            // </script> -->


        }
        else{
            ?>
            <script>
                swal({
                    titel:"Error",
                    text:"Email or password incorrect",
                    icon:"error",
                    button:"try agian",
                })
                setTimeout(()=>{
                    location.href="../login.php";
                },2000)
                
            </script>

<?php
        }

    
    }


}