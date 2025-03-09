<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Home</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Date faces</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav ms-auto my-2 my-lg-0 fw-bold navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                    </li>
                    <?php if(isset($_SESSION["user_id"])){ ?>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                       <?php echo $_SESSION["username"]; ?> 
                     </a>
                      <ul class="dropdown-menu" aria-labelledby="userDropdown">
                            <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-danger" href="logout.php">Logout</a></li>
                      </ul>
                   </li>
                   <?php } else { ?>
                    <li class="nav-item ">
                    <a class="nav-link" href="login.php">login</a>
                    </li>
                    <li class="nav-item signup-section">
                    <a class="nav-link text-light" href="signup.php">signup</a>
                    </li>
                    <?php }?>
                </ul>
            </div>
        </div>
    </nav>
    <div class="row justify-content-center mt-3">
        <div class="col-12 col-md-3 ms-2 me-2 mb-2  date_container">
            <a href="#">
               <img src="assets/img/airteltigo.png" class="w-100 h-100 rounded-2 date-img" alt="airteltigo">
            </a>
        </div>
        <div class="col-12 col-md-3 ms-2 me-2 mb-2  date_container">
            <a href="buypakage.php">
               <img src="assets/img/mtn-new-logo.svg" class="w-100 h-100 rounded-2 date-img" alt="MTN">
            </a>
        </div>
        <div class="col-12 col-md-3 ms-2 me-2 mb-2 date_container">
            <a href="#">
                <img src="assets/img/telecel.jpeg" class="w-100 h-100 rounded-2 date-img" alt="Telecel">
            </a> 
        </div>
    </div>

    <footer class="footer-section mt-lg-5">


    </footer>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>