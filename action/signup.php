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
  require ('../dbconn/conn.php');

  if(isset($_POST["signup"])){
    $username = $_POST["UserName"];
    $email  = $_POST["email"];
    $phone = $_POST["phone"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    // $conpassword = password_hash($_POST["conpassword"], PASSWORD_DEFAULT);

    // //   encrypt password
    // $enc_password = md5($password);
    // $enc_conpassword = md5($conpassword);

    if($password == " "){
        ?>

        <script>
              swal({
                title: "Opps! Error",
                text: " Enter Password, try again!",
                icon:"error",
                button:"Try again",

            })
            setTimeout(()=>{
                    //redirct users to login paga
                    location.href='../signup.php';

                   }, 3000);
        </script>
<?php
    }

    else{

        $query = "INSERT INTO `users`( `name`, `email`, `phone`, `password`) 
        VALUES ( '$username', '$email','$phone','$password')";

        $exec = mysqli_query($conn, $query);

        if($exec == TRUE){
            ?>
            <script>
                swal({
                 title:"Sign Up",
                 text:"Congrats, New account created",
                 icon: "success",
                 button:"Okey, Login now"
                })
                //wait for some sec and redirect 
                setTimeout(()=>{
                 //redirct users to login paga
                 location.href='../login.php';

                }, 3000);
            </script>
 <?php
         }
         else{
             ?>
             <script>
                swal({
                 title:"Sign Up",
                 text:"Sorry, Failed to create an account",
                 icon: "error",
                 button:"Okey, try again"
                })

                setTimeout(() =>{

                    location.href='../signup.php';

                }, 4000);
            </script>
         <?php
            
         }
    }
  }