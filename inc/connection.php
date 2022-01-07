<?php
require __DIR__ . '/../vendor/autoload.php';

$session = new \Symfony\Component\HttpFoundation\Session\Session();
$session->start();

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$db;

try{
    $db = new PDO("mysql:host=127.0.0.1;dbName=netmatters", "root", "");
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    return $db;
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
    $response = '<div class="validation-text validation-alert">';
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
