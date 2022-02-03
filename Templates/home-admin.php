<?php
    if (isset($_SESSION['loggedin'])){
        header('location: /login');
    }
?>
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
            ?>

        <div class="container-lg bg-c-gradient rounded ">
            <div id="" class="container my-5">
                <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
                    <div class="col-lg p-3 p-lg-5 pt-lg-3">
                        <h1 class="display-4 fw-bold lh-1">Welkom <?php echo $_SESSION['username']?></h1>
                        <p>
                            Op deze pagina kunt u gebruik maken van uw admin rechten. Dit is een belangrijke pagina die
                            u niet zomaar achter moet laten! Houd hier rekening mee!
                        </p>
                    </div>
                </div>
            </div>

            <div id="" class="container my-5">
                <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
                    <div class="col-lg p-3 p-lg-5 pt-lg-3">
                        <h1 class="display-4 fw-bold lh-1 text-center">Tools</h1>
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="card border-dark border-3" style="min-height: 250px;">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Admin Sportapparaten</h5>
                                        <p class="card-text">Verwijder, bewerk, voeg nieuw toe. Een verandering in sportapparaat is zo gedaan!</p>
                                        <a href="admin-sportapparaten" class="btn btn-outline-info card-link">Link To admin page</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="card border-dark border-3" style="min-height: 250px;">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Admin Reviews</h5>
                                        <p class="card-text">Alle reviews bekijken, verwijderen, of inzien wie het geplaatst heeft.</p>
                                        <a href="admin-review" class="btn btn-outline-info card-link">Link To admin page</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="card border-dark border-3" style="min-height: 250px;">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Admin Contact</h5>
                                        <p class="card-text">Aangepaste openingstijd nodig wijziging in contact gegevens? Dat kan via hier is het aan te passen</p>
                                        <a href="admin-contact" class="btn btn-outline-info card-link">Link To admin page</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="card border-dark border-3" style="min-height: 250px;">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Admin Banner</h5>
                                        <p class="card-text">Bewerk, stel nieuw aan of verwijder huidige nieuws items die op de homepage te vinden zijn.</p>
                                        <a href="admin-banner" class="btn btn-outline-info card-link">Link To admin page</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <?php
            include_once ('defaults/footer.php');
            ?>
    </div>
</body>

</html>