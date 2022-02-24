<?php
require __DIR__ . '/../vendor/autoload.php';

$session = new \Symfony\Component\HttpFoundation\Session\Session();
$session->start();

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$db = $_ENV['DB_DATABASE'];
$host = $_ENV['DB_HOST'];
$username = $_ENV['DB_USERNAME'];
$password = $_ENV['DB_PASSWORD'];

$conn;

try{
    // $conn = new PDO("mysql:host=$host;dbName=$db", "remonjan_admin", "UL1U?pDt;Q7="); //Live environment
    // $conn = new PDO("mysql:host=$host;dbName=$db", $username, $passwword); //Live environment
    $conn = new PDO("mysql:host=$host;dbname=$db", $username, $password); //Local environment
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    return $conn;
} catch (Exception $e) {
    echo "Error!: " . $e->getMessage() . "<br/>";
    exit;
}

function display_errors(){
    global $session;
    if(!$session->getFlashBag()->has('error')){
        return;
    }
    $messages = $session->getFlashBag()->get('error');
    $response = '<div style="display:flex;" class="validation-text validation-alert">';
    foreach($messages as $message){
        $response .= "{$message}<br />";
    }
    $response .= '</div>';

    return $response;
}

//load submission success confirmation
function display_notice(){
    global $session;
    if(!$session->getFlashBag()->has('success')){
        return;
    }
    $messages = $session->getFlashBag()->get('success');
    $response = '<div class="validation-text validation-notice">';
    foreach($messages as $message){
        $response .= "{$message}<br />";
    }
    $response .= '</div>';

    return $response;
}
