<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>sign Up</title>
</head>
<body>
<section class="bg-light p-3 p-md-4 p-xl-5">
            <div class="container">
                <div class="row justify-content-center">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6 col-xxl-5">
                    <div class="card border border-light-subtle rounded-4">
                    <div class="card-body p-3 p-md-4 p-xl-5">
                        <div class="row">
                        <div class="col-12">
                            <div class="mb-5">
                            <h2 class="h4 text-center">Registration</h2>
                            <h3 class="fs-6 fw-normal text-secondary text-center m-0">Enter your details to register</h3>
                            </div>
                        </div>
                        </div>
                        <form action="action/signup.php" method="POST" >
                        <div class="row gy-3 overflow-hidden">
                        <div class="col-12">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="UserName" id="UserName" placeholder="User Name" required/>
                                <label for="firstName" class="form-label">UserName</label>
                            </div>
                            </div>
                            <div class="col-12">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required/>
                                <label for="email" class="form-label">Email</label>
                            </div>
                            </div>
                            <div class="col-12">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="phone" id="lastName" placeholder="First Name" required/>
                                <label for="lastName" class="form-label">Phone</label>
                            </div>
                            </div>
                            <div class="col-12">
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" name="password" id="password" value="" placeholder="Password" required/>
                                <label for="password" class="form-label">Password</label>
                            </div>
                            </div>
                            <div class="col-12">
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" name="conpassword" id="conpassword" value="" placeholder="Password" required/>
                                <label for="password" class="form-label"> confirm Password</label>
                            </div>
                            </div>
                            <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" name="iAgree" id="iAgree" required/>
                                <label class="form-check-label text-secondary" for="iAgree">
                                I agree to the <a href="#!" class="link-primary text-decoration-none">terms and conditions</a>
                                </label>
                            </div>
                            </div>
                            <div class="col-12">
                            <div class="d-grid">
                                <button class="btn bsb-btn-xl btn-primary" onClick="success()" type="submit" name="signup" >Sign up</button>
                            </div>
                            </div>
                        </div>
                        </form>
                        <div class="row">
                        <div class="col-12">
                            <hr class="mt-5 mb-4 border-secondary-subtle"/>
                            <p class="m-0 text-secondary text-center">Already have an account? <a href="login.php" class="link-primary text-decoration-none">log in</a></p>
                        </div>
                        </div>
                </div>
                </div>
            </div>
        </section>


</body>
</html>