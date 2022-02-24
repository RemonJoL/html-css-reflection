<?php
include 'connection.php';

//connect to db
global $success;

$timestamp = date('Y-m-d H:i:s');
$name = $email = $telephone = $subject = $message = "";
$returnLocation = 'Location: /../contact.php#contact-form';

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
// $name = $_POST["name"];
// $email = $_POST["email"];
// $telephone = $_POST["telephone"];
// $subject = $_POST["subject"];
// $message = $_POST["message"];
// }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = test_input($_POST["name"]);
$email = test_input($_POST["email"]);
$telephone = test_input($_POST["telephone"]);
$subject = test_input($_POST["subject"]);
$message = test_input($_POST["message"]);
$_SESSION['post-data'] = $_POST;
}

function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}

//test for user errors

if(empty($name)||!preg_match("/^\s*([A-Za-z]{1,}([\.,] |[-']| )?)+[A-Za-z]+\.?\s*$/", $name)){
    $session->getFlashBag()->add('error', 'Please enter a valid name');
    header($returnLocation);
    exit();
}
if(empty($email)||!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $session->getFlashBag()->add('error', 'Please enter a valid email address');
    header($returnLocation);
    exit();
}
if(empty($telephone)||!preg_match("/^(((\+44\s?\d{4}|\(?0\d{4}\)?)\s?\d{3}\s?\d{3})|((\+44\s?\d{3}|\(?0\d{3}\)?)\s?\d{3}\s?\d{4})|((\+44\s?\d{2}|\(?0\d{2}\)?)\s?\d{4}\s?\d{4}))(\s?\#(\d{4}|\d{3}))?$/", $telephone)){
    $session->getFlashBag()->add('error', 'Please enter a valid phone number');
    header($returnLocation);
    exit();
}

if(empty($subject)){
    $session->getFlashBag()->add('error', 'Please enter a message subject');
    header($returnLocation);
    exit();
}

if(empty($message)){
    $session->getFlashBag()->add('error', 'Please enter your message to us');
    header($returnLocation);
    exit();
}
// if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//     $session->getFlashBag()->add('error', 'Invalid email');
//     // $session += $_POST;
//     header($returnLocation);
//     exit();
// }
// if(!preg_match("/^(((\+44\s?\d{4}|\(?0\d{4}\)?)\s?\d{3}\s?\d{3})|((\+44\s?\d{3}|\(?0\d{3}\)?)\s?\d{3}\s?\d{4})|((\+44\s?\d{2}|\(?0\d{2}\)?)\s?\d{4}\s?\d{4}))(\s?\#(\d{4}|\d{3}))?$/", $telephone)){
//     $session->getFlashBag()->add('error', 'Invalid phone number');
//     // $session += $_POST;
//     header($returnLocation);
//     exit();
// }

//attempt insertion
try{
    // $query = $db->query("INSERT INTO remonjan_php_reflection.contactform_data ('name', 'email', 'telephone', 'subject', 'message', 'timestamp') VALUES ('$name', '$email', '$telephone', '$subject', '$message', '$timestamp')"); //Live Environment
    $query = $conn->query("INSERT INTO contactform_data (name, email, telephone, subject, message, timestamp) VALUES ('$name', '$email', '$telephone', '$subject', '$message', '$timestamp')"); //Local Environment
    if($query){
        $session->getFlashBag()->add("success", "Submission successful! We'll process your enquiry within 2 working days.");
        $_SESSION['post-data'] = "";
        header($returnLocation);
    }
}catch(Exception $e){
    throw $e;
}

?>
