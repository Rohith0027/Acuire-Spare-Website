<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FanSha</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <div class="intro">
        <h1 class="logo-header">
            <span class="log" style="font-size:6vw">Fan</span><span class="log" style="font-size:6vw">Sha</span>
        </h1>
        <h1 class="logo-header1">
            <span class="logo1" style="color: #fff; font-size:2vw;">Live</span> <span class="logo1" style="color:#fff; font-size:2vw;">Learn</span> <span class="logo1" style="color:#fff; font-size:2vw;">Love</span>
        </h1>
    </div>
    <main>
        <div class="box">
            <div class="inner-box">
                <div class="forms-wrap">
                    <form action="validate.php" autocomplete="off" class="sign-in-form" method="POST" enctype="multipart/form-data">
                        <div class="logo">
                            <img src="login.jpeg" alt="easyclass">
                            <h4>FanSha</h4>
                        </div>
                        <div class="heading">
                            <h2>Welcome Back</h2>
                            <h6>Not Registred yet?</h6>
                            <a href="#" class="toggle">Sign up</a>
                        </div>
                        <div class="actual-form">
                            <div class="input-wrap">
                                <input type="email" name="email" minlength="4" class="input-field" autocomplete="off" required/>
                                <label>Email</label>
                            </div>
                            <div class="input-wrap">
                                <input type="password" name="password" minlength="4" class="input-field" autocomplete="off" required/>
                                <label>Password</label>
                            </div>
                            <input type="submit" name="signin" value="sign in" class="sign-btn"/>
                            <p class="text">
                                Forgotten your password or your login details?
                                <a href="#">Reset</a>
                            </p>
                        </div>
                    </form>
                    <form action="validate.php" autocomplete="off" class="sign-up-form" method="POST" enctype="multipart/form-data">
                        <div class="logo">
                            <img src="login.jpeg">
                            <h4>FanSha</h4>
                        </div>
                        <div class="heading">
                            <h2>Getting Started</h2>
                            <h6>Already have an account?</h6>
                            <a href="#" class="toggle">Sign in</a>
                        </div>
                        <div class="actual-form">
                            <div class="input-wrap">
                                <input type="text" name="name" minlength="4" class="input-field" autocomplete="off" required/>
                                <label>Name</label>
                            </div>
                            <div class="input-wrap">
                                <input type="email" name="email" class="input-field" autocomplete="off" required/>
                                <label>Email</label>
                            </div>
                            <div class="input-wrap">
                                <input type="password" name="password" minlength="4" class="input-field" autocomplete="off" required/>
                                <label>Password</label>
                            </div>
                            <div class="select">
                                <select name="type" id="format" required>
                                    <option selected disabled>Choose an option</option>
                                    <option value="Customer">Customer</option>
                                    <option value="Merchant">Merchant</option>
                                </select>
                            </div>
                            <br>
                            <input type="submit" name="signup" value="sign up" class="sign-btn"/>
                        </div>
                    </form>
                </div>
                <div class="carousel">
                    <div class="images-wrapper">
                        <img src="signup.jpeg" class="image img-1 show" alt=""/>
                        <img src="signup.jpeg" class="image img-1" alt=""/>
                        <img src="signup.jpeg" class="image img-1" alt=""/>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="app.js"></script>
    <script src="intro.js"></script>
</body>
</html>