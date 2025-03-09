<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Login</title>
</head>
<body>
<section class="bg-light p-3 p-md-4 p-xl-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-9 col-lg-7 col-xl-6 col-xxl-5">
                <div class="card border border-light-subtle rounded-4">
                    <div class="card-body p-3 p-md-4 p-xl-5">
                        <h2 class="h4 text-center">Log In</h2>
                        <h3 class="fs-6 fw-normal text-secondary text-center">Enter your details to Log In</h3>

                        <form action="action/login.php" method="POST">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required/>
                                <label for="email">Email</label>
                            </div>
                            
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password" required/>
                                <label for="password">Password</label>
                            </div>

                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="iAgree" required/>
                                <label class="form-check-label text-secondary" for="iAgree">
                                    I agree to the <a href="#" class="link-primary text-decoration-none">terms and conditions</a>
                                </label>
                            </div>

                            <div class="d-grid">
                                <button class="btn btn-primary" type="submit" name="login">Login</button>
                            </div>
                        </form>

                        <hr class="mt-5 mb-4 border-secondary-subtle"/>
                        <p class="text-secondary text-center">
                            Don't have an account? <a href="signup.php" class="link-primary text-decoration-none">Sign Up</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</body>
</html>