<?php

include "connection.php";

?>

<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>MobStore</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />

    <link rel="icon" href="resources/logo.png" />


</head>

<body class="main-body">
    <div class="main-body-layer">

        <div class="container-fluid vh-100 d-flex justify-content-center">
            <div class="row align-content-center">



                <!-- content -->

                <div class="col-12 p-3 ">
                    <div class="row">

                        <div class="col-6 d-none d-lg-block "></div>
                        <!-- signupbox -->

                        <div class="col-12" id="signUpBox">
                            <div class=" blurbox">
                                <!-- header -->

                                <div class="col-12">
                                    <div class="row">

                                        <div class="col-12">
                                            <p class="text-center title1">Welcome to mobstore!!</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- header -->
                                <div class="row g-2 ">

                                    <div class="col-12 ">

                                        <p class="title02 fw-bold">Register Your Account</p>
                                    </div>

                                    <div class="col-12 d-none" id="msgdiv">
                                        <div class="alert alert-dark" role="alert" id="msg">

                                        </div>
                                    </div>

                                    <div class="col-6 ">
                                        <label class="form-label">First Name</label>
                                        <input type="text" class="form-control" placeholder="ex:- John" id="fname" />
                                    </div>

                                    <div class="col-6 ">
                                        <label class="form-label">Last Name</label>
                                        <input type="text" class="form-control" placeholder="ex:- Doe" id="lname" />
                                    </div>

                                    <div class="col-12">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control" placeholder="ex:- john@gmail.com" id="email" />
                                    </div>

                                    <div class="col-12 mb-2">
                                        <label class="form-label">Password</label>
                                        <input type="password" class="form-control" placeholder="ex:- **********" id="password" />
                                    </div>

                                

                                    <div class="col-6 mb-2">
                                        <label class="form-label">Gender</label>
                                        <select class="form-control" id="gender">

                                            <?php

                                            $rs = Database::search("SELECT * FROM `gender`");
                                            $num = $rs->num_rows;

                                            for ($x = 0; $x < $num; $x++) {
                                                $data = $rs->fetch_assoc();
                                            ?>

                                                <option value="<?php echo $data["gender_id"]; ?>">
                                                    <?php echo $data["gender_name"]; ?>
                                                </option>

                                            <?php
                                            }

                                            ?>

                                        </select>
                                    </div>

                                    <div class="col-6 mb-2 ">
                                        
                                        <label for="form-label">Mobile Phone</label>
                                        <input type="text" class="form-control" placeholder=" Ex : 0777456856">
                                    </div>

                                    <div class="col-12 col-lg-6  d-grid">
                                        <button class="btn btn-warning" onclick="signup();">Sign Up</button>
                                    </div>

                                    <div class="col-12 col-lg-6 d-grid">
                                        <button class="btn btn-dark" onclick="changeView();">Already have an account? Sign In</button>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- signupbox -->

                        <!-- signinbox -->

                        <div class="col-12 col-lg-6 d-none" id="signInBox">
                            <div class="blurbox1">
                                <div class="row g-2">
                                    <div class="col-12">
                                        <p class=" text-center title02">Sign In</p>
                                    </div>

                                    <div class="col-12 d-none" id="msgdiv1">
                                        <div class="alert alert-warning" role="alert" id="msg1">

                                        </div>
                                    </div>

                                    <?php
                                    $email = "";
                                    $password = "";

                                    if (isset($_COOKIE["email"])) {
                                        $email = $_COOKIE["email"];
                                    }

                                    if (isset($_COOKIE["password"])) {
                                        $password = $_COOKIE["password"];
                                    }
                                    ?>

                                    <div class="col-10 ">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email2" value="<?php echo $email; ?>" />
                                    </div>

                                    <div class="col-10">
                                        <label class="form-label"> Password</label>
                                        <div class="input-group mb-3">
                                            <input type="password" class="form-control" id="password2" value="<?php echo $password; ?>" />
                                            <button id="b" class="btn btn-outline-secondary" type="button" onclick="showPassword();">Show</button>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="rememberme" />
                                            <label class="form-check-label">Remember Me</label>
                                        </div>
                                    </div>
                                    <div class="col-6 ">
                                        <a href="#" class="link-primary" onclick="forgotPassword();">Forgot Password?</a>
                                    </div>
                                    <div class="col-6 col-lg-6 d-grid">
                                        <button class="btn btn-primary" onclick="signin();">Sign In</button>
                                    </div>
                                    <div class="col-6 col-lg-6 d-grid">
                                        <button class="btn btn-danger" onclick="changeView();">New to eShop? Join Now</button>
                                    </div>
                                </div>
                            </div>

                            <!-- signinbox -->
                        </div>
                    </div>
                </div>

                <!-- content -->

                <!-- modal -->

                <div class="modal" tabindex="-1" id="fpmodal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Forgot Password</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <div class="row g-3">

                                    <div class="col-6">
                                        <label class="form-label">New Password</label>
                                        <div class="input-group mb-3">
                                            <input type="password" class="form-control" id="np" />
                                            <button id="npb" class="btn btn-outline-secondary" type="button" onclick="showPassword1();">Show</button>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <label class="form-label">Re-type Password</label>
                                        <div class="input-group mb-3">
                                            <input type="password" class="form-control" id="rnp" />
                                            <button id="rnpb" class="btn btn-outline-secondary" type="button" onclick="showPassword2();">Show</button>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label class="form-label">Verification Code</label>
                                        <input type="text" class="form-control" id="vcode" />
                                    </div>

                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" onclick="resetPassword();">Reset</button>
                            </div>
                        </div>
                    </div>
                </div>





                <!-- modal -->

                <!-- footer -->
                <div class="col-12 fixed-bottom d-none d-lg-block">
                    <p class="text-center">&copy; 2023 mobstore.lk || All Rights Reserved</p>
                </div>
                <!-- footer -->

            </div>

        </div>

    </div>
    <script src="script.js"></script>
    <script src="bootstrap.js"></script>
</body>

</html>