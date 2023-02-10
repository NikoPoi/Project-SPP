<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include ('./components/head.php') 
    ?>
    <title>Sign Up | SPP</title>
</head>
<body style="overflow: hidden;">
    <section class="container-fluid" style="margin-top: 7vh;">
        <div class="card login m-5 shadow-lg" style="padding-bottom: 13vh;">
            <div class="row">
                <div class="col-lg-5">
                    <div class="login-title display-4 text-center fw-semibold" style="margin-top: 20vh;">
                        Welcome !!
                    </div>
                    <p class="text-muted m-4 text-center fw-normal" style="font-size: 17px;">
                        To keep connected with us please login <br> with your personal info
                    </p>
                    <div class="text-center mt-5">
                        <a class="btn btn-lg px-5 rounded-4 btn-primary mx-auto" href="">SIGN IN</a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="display-4 mt-5 text-center fw-semibold">
                        Create Account
                    </div>
                    <div class="icons text-center mt-4" style="font-size: 25px;">
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-google"></i>
                        <i class="fa-brands fa-twitter"></i>
                    </div>
                    <div class="signup-desc text-center text-muted mt-4">
                        or use email for registration
                    </div>
                    <div class="row justify-content-center mt-3">
                        <form class="col-9" action="">
                            <div class="form-group mb-2">
                                <input type="text" name="" id="" class="form-control" placeholder="Name" aria-describedby="helpId">
                            </div>
                            <div class="form-group mb-2">
                                <input type="text" name="" id="" class="form-control" placeholder="Email" aria-describedby="helpId">
                            </div>
                            <div class="form-group mb-2">
                                <input type="text" name="" id="" class="form-control" placeholder="Password" aria-describedby="helpId">
                            </div>
                        </form>
                    </div>
                    <div class="text-center">
                        <a class="btn btn-primary btn-lg px-5 rounded-4 mt-5" href="">SIGN UP</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <?php
            include('./components/foot.php')
        ?>
</body>
</html>