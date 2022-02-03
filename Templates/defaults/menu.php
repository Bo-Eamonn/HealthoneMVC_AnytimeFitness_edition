<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/home">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbar" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/categories">sportapparaten</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">contact</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
            <?php session_start(); /* Starts the session */
            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
                echo <<<LOGOUT
                <li class="nav-item">
                    <a class="nav-link" onclick="location.href='/logout'">uitloggen</a>
                </li>
                LOGOUT;
            
            }else {
                echo <<<LOGIN
                <li class="nav-item">
                    <a class="nav-link" href="/login">inloggen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="/registreren">registreren</a>
                </li>
            LOGIN;
            }
            ?>
            </ul>
            
        </div>
    </div>
</nav>
