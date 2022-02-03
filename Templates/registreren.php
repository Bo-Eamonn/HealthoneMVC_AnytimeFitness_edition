<!DOCTYPE html>
<html>
<?php
    include_once('defaults/head.php');
    ?>

<body>
    <div class="container bg-white">
        <?php
            include_once ('defaults/header.php');
            include_once ('defaults/menu.php');
            include_once ('defaults/pictures.php');
            ?>

        <section class="vh-100 gradient-custom mb-5">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="shadow-lg card bg-white text-dark border-warning" style="border-radius: 1rem;">
                            <div class="card-body p-5 text-center">
                                <div class="mb-md-5 mt-md-4 pb-5">
                                    <h2 class="fw-bold mb-2 text-uppercase">Registeren</h2>
                                    <form class="mx-1 mx-md-4">
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fa fa-user fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" id="form3Example1c" class="form-control" />
                                                <label class="form-label" for="form3Example1c">Naam</label>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fa fa-envelope fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="email" id="form3Example3c" class="form-control" />
                                                <label class="form-label" for="form3Example3c">Email</label>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fa fa-phone fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="email" id="form3Example3c" class="form-control" />
                                                <label class="form-label" for="form3Example3c">Telefoon</label>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fa fa-lock fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="password" id="form3Example4c" class="form-control" />
                                                <label class="form-label" for="form3Example4c">Wachtwoord</label>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fa fa-key fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="password" id="form3Example4cd" class="form-control" />
                                                <label class="form-label" for="form3Example4cd">Herhaal
                                                    wachtwoord</label>
                                            </div>
                                        </div>
                                        <div class="form-check d-flex justify-content-center mb-5">
                                            <input class="form-check-input me-2" type="checkbox" value=""
                                                id="form2Example3c" />
                                            <label class="form-check-label" for="form2Example3">
                                                Ik ga akkoord met de <a href="#!">algemene voorwaarden</a>
                                            </label>
                                        </div>
                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <button type="button" class="btn btn-primary btn-lg">registeren</button>
                                        </div>
                                    </form>
                                </div>
                                <div>
                                    <p class="mb-0">Heeft u al een acount? <a href="login" class="text-dark-50 fw-bold">log in</a></p>
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