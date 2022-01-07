<?php
include 'connection.php';

//connect to db
global $success;

$timestamp = date('Y-m-d H:i:s');
$name = $email = $telephone = $subject = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = test_input($_POST["name"]);
$email = test_input($_POST["email"]);
$telephone = test_input($_POST["telephone"]);
$subject = test_input($_POST["subject"]);
$message = test_input($_POST["message"]);
}

function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}

//test for user errors

if(empty($name)){
    $session->getFlashBag()->add('error', 'Please enter your name');
    header('Location: /contact.php');
    exit();
}
if(empty($email)){
    $session->getFlashBag()->add('error', 'Please enter your email');
    header('Location:/contact.php');
    exit();
}
if(empty($telephone)){
    $session->getFlashBag()->add('error', 'Please enter your phone number');
    header('Location:/contact.php');
    exit();
}

if(empty($subject)){
    $session->getFlashBag()->add('error', 'Please enter a message subject');
    header('Location:/contact.php');
    exit();
}

if(empty($message)){
    $session->getFlashBag()->add('error', 'Please enter your message to us');
    header('Location:/contact.php');
    exit();
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $session->getFlashBag()->add('error', 'Invalid email');
    header('Location:/contact.php');
    exit();
}
if(!filter_var($telephone, FILTER_VALIDATE_INT)){
    $session->getFlashBag()->add('error', 'Invalid phone number');
    header('Location:/contact.php');
    exit();
}



//attempt insertion
try{
    $query = $db->query("INSERT INTO netmatters.contactform_data (`name`, `email`, `telephone`, `subject`, `message`, `timestamp`) VALUES ('$name', '$email', '$telephone', '$subject', '$message', '$timestamp')");
    if($query){
        $session->getFlashBag()->add("success", "Submission successful! We'll process your enquiry within 2 working days.");
        header('Location:/contact.php');
    }
}catch(Exception $e){
    throw $e;
}
?>
