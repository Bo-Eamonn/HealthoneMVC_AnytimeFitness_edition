<!DOCTYPE html>
<html>
<?php
    include_once('defaults/head.php');
    ?>

<body>
    <div class="container">
        <?php
            include_once ('defaults/header.php');
            include_once ('defaults/menu.php');
            include_once ('defaults/pictures.php');


            // $msg = "";
            if(isset($_POST['inloggen'])){
            $Username = isset($_POST['uname']) ? $_POST['uname'] : '';
            $Password = isset($_POST['psswrd']) ? $_POST['psswrd'] : '';
            
                if (isset($Username) &&  isset($Password)){
                    session_start();
                    $_SESSION['loggedin'] = true;
                    $_SESSION['username'] = $username;
                    $msg="<span style='color:green'>valid Login Details</span>";
                    header("location:home-admin");
                    
                    exit;
                } else {
                $msg="<span style='color:red'>Invalid Login Details</span>";
                }
            }

        ?>

        <section class="vh-100 gradient-custom">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="shadow-lg card bg-light text-dark border-warning" style="border-radius: 1rem;">
                            <div class="card-body p-5 text-center">

                                <div class="mb-md-5 mt-md-4 pb-5">


                                    <form action="" method="post">
                                    <?php 
                                    if(isset($msg)){
                                        echo <<<FORM
                                        <p class="text-center">{echo $msg}</p>
                                        FORM;
                                        }
                                    ?>
                                        <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                                        <p class="text-dark-50 mb-5">Vul uw gegevens in</p>

                                        <div class="form-outline form-dark mb-4">
                                            <input type="email" name="uname" class="form-control form-control-lg"
                                                placeholder="voorbeeld@domein.extentie" autocomplete="username" />
                                        </div>

                                        <div class="form-outline form-dark mb-4 input-group">
                                            <input type="password" class="form-control form-control-lg" name="psswrd"
                                                placeholder="Wachtwoord" autocomplete="current-password">
                                            <i class="fa fa-eye input-group-text" id="psswrdToggle"></i>

                                        </div>

                                        <p class="small mb-5 pb-lg-2"><a class="text-dark-50" href="#!">wachtwoord
                                                vergeten</a></p>

                                        <button class="btn btn-outline-dark btn-lg px-5" name="inloggen"
                                            type="submit">inloggen</button>
                                    </form>

                                    <div class="d-flex justify-content-center text-center mt-4 pt-1">
                                        <a href="#!" class="text-dark"><i class="fa fa-facebook-f fa-lg"></i></a>
                                        <a href="#!" class="text-dark"><i class="fa fa-twitter fa-lg mx-4 px-2"></i></a>
                                        <a href="#!" class="text-dark"><i class="fa fa-google fa-lg"></i></a>
                                    </div>

                                </div>

                                <div>
                                    <p class="mb-0">Heeft u nog geen acount? <a href="/registreren"
                                            class="text-dark-50 fw-bold">Registreren</a></p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php
            include_once ('defaults/footer.php');
            ?>
    </div>
</body>

</html>