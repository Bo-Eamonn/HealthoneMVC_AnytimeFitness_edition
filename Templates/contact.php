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

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/home">Home</a></li>
                <li class="breadcrumb-item" aria-current="page">Contact</li>
            </ol>
        </nav>
        <div class="container-lg bg-c-gradient rounded ">

            <div class="row m-3">
                <div class="col-lg-6">
                    <div class="shadow-lg rounded rounded-3 border border-light border-2 p-5 m-1">
                        <h3>We verwelkomen je graag op:</h3>
                        <p>
                            <address>
                                <strong>Anytime Fitness</strong><br>
                                Zuidhoornseweg 6a<br>
                                DJ 2635, Den Hoorn<br>
                            </address>
                        </p>
                        <ul class="list-group">
                            <li class="">Maandag: 07:00 - 22:00 uur</li>
                            <li class="">Dinsdag: 08:00 - 22:00 uur</li>
                            <li class="">Woensdag: 07:00 - 22:00 uur</li>
                            <li class="">Donderdag: 08:00 - 22:00 uur</li>
                            <li class="">Vrijdag: 07:00 - 21:30 uur</li>
                            <li class="">Zaterdag: 08:00 - 15:00 uur</li>
                            <li class="">Zondag: 08:00 - 15:00 uur</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="shadow-lg rounded rounded-3 border border-light border-2 p-5 m-1">
                        <form GET>
                            <h3>Stuur ons een mail</h3>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Naam</label>
                                <input class="form-control" id="name" required type="text" name="name" id="name"
                                    autocomplete="name" placeholder="Naam">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">telefoon</label>
                                <input class="form-control" required type="tel" name="tel" id="tel" autocomplete="tel"
                                    placeholder="Telefoonnummer">
                            </div>
                            <div class="mb-3">
                                <label for="comment">Bericht </label>
                                <textarea class="form-control" required name="comment" id="comment" rows="3"
                                    placeholder="Bericht"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Verzenden</button>
                        </form>
                    </div>
                </div>
                <div class="container col-12 m-3 ratio ratio-21x9">
                    <h2>Kom langs!</h2>
                    <iframe class="rounded shadow-lg border border-dark"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3065.068805538481!2d4.330035515970721!3d51.995251182736226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5b452778b930f%3A0xf49ae0a67ec18cd6!2sSportcenter%20Allround!5e1!3m2!1sen!2snl!4v1634219540867!5m2!1sen!2snl"
                        width="auto" height="auto" style="border:0;" allowfullscreen="" loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>
        <?php
            include_once ('defaults/footer.php');
            ?>
    </div>
</body>

</html>