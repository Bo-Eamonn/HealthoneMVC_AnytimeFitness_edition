<?php
//require '../Modules/Categories.php';
//require '../Modules/Products.php';
// require '../Modules/Database.php';

$request = $_SERVER['REQUEST_URI'];
$params = explode("/", $request);
$title = "Anytime Fitness";
$titleSuffix = "";



switch ($params[1]) {
    case 'home':
        $titleSuffix = ' | Home';
        include_once "../Templates/home.php";
        break;
    case 'categories':
        $titleSuffix = ' | Categories';
        include_once "../Templates/categories.php";
        break;
    case 'roeitrainers':
        $titleSuffix = ' | Roeitrainers';
        include_once "../Templates/categories/roeitrainers.php";
        break;
    case 'crosstrainers':
        $titleSuffix = ' | Crosstrainers';
        include_once "../Templates/categories/crosstrainers.php";
        break;
    case 'fox3':
        $titleSuffix = ' | Focus Fitness Fox 3';
        include_once "../Templates/categories/crosstrainers/fox3.php";
        break;
    case 'hometrainers':
        $titleSuffix = ' | Hometrainers';
        include_once "../Templates/categories/hometrainers.php";
        break;
    case 'loopbanden':
        $titleSuffix = ' | Loopbanden';
        include_once "../Templates/categories/loopbanden.php";
        break;
    case 'registreren':
        $titleSuffix = ' | Registreren';
        include_once "../Templates/registreren.php";
        break;
    case 'login':
        $titleSuffix = ' | Inloggen';
        include_once "../Templates/login.php";
        break;
    case 'logout':
        include_once "../Templates/logout.php";
        break;
    case 'contact':
        $titleSuffix = ' | Contact';
        include_once "../Templates/contact.php";
        break;
    case 'home-admin':
        $titleSuffix = ' | Admin Panel';
        include_once "../Templates/home-admin.php";
        break;
    case 'admin-sportapparaten':
        $titleSuffix = ' | Admin Sportapparaten';
        include_once "../Templates/admin/admin-sportapparaten.php";
        break;
    default:
        $titleSuffix = ' | Home';
        include_once "../Templates/home.php";
}

function getTitle() {
    global $title, $titleSuffix;
    return $title . $titleSuffix;
}
function getPageTitle() {
    global $titleSuffix;
    return  $titleSuffix;
}
