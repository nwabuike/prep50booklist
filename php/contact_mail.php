<?php
$toEmail = "deaconscbt@gmail.com";
$mailHeaders = "From: " . $user_name . "<" . $user_school . ">\r\n";
$mailBody = "Fullname: " . $user_name . "\n";
$mailBody .= "School Name: " . $user_school . "\n";
$mailBody .= "Phone: " . $user_phone . "\n";
$mailBody .= "Address: " . $user_address . "\n";
$mailBody .= "State: " . $user_state . "\n";
$mailBody .= "JAMB Booklist Science: " . $user_jamb_sci ."\n";
$mailBody .= "JAMB Booklist Art: " . $user_jamb_art . "\n";
$mailBody .= "WAEC BookList Science: " . $user_waec_sci. "\n";
$mailBody .= "WAEC BookList Art: " . $user_waec_art ."\n";
$mailBody .= "WAEC BookList Commerical: " . $user_waec_com ."\n";
// $mailBody .= "WAEC & JAMB BUNDLE: " . $user_bundle_w_j . "\n";
// $file = "files/codexworld.pdf";

if (mail($toEmail, "Thule Booklist form $user_name ", $mailBody, $mailHeaders)) {
    // $output = json_encode(array('type'=>'message', 'text' => 'Hi '.$user_name .', thank you for the message. We will get back to you shortly.'));
    // die($output);
    echo "Thank you";
} else {
    // $output = json_encode(array('type'=>'error', 'text' => 'Unable to send email, please contact '.$toEmail .', Or call 09038356928'));
    // die($output);
    echo "Error: occured";
}
?>