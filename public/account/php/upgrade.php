<?php
ob_start();
require("db.php");
require("../../mail.php");
session_start();

$date = date("F j, Y, g:i a");

$uid = $_SESSION['uid'];
$name = $_SESSION['name'];
$email = $_SESSION['email'] ?? '';
$id = uniqid();
$sql = "INSERT INTO upgrade(uid, name, date) VALUES('$uid','$name', '$date')";
 
if (mysqli_query($conn, $sql)) {
    $admmail = "$name has requested an account upgrade";
    
    # send Mail to admin
    echo json_encode([
        "status"=>"success",
        
      ]);
      sendmail($admmail, apex_mail_admin_address(), $name, "Upgrade Request");
      if ($email !== '') {
        sendmail(
          apex_mail_message('Upgrade Request Received', 'Hi '.$name.",\n\nYour account upgrade request has been received and is awaiting confirmation."),
          $email,
          $name,
          'Upgrade Request Received'
        );
      }
}
