<?php
require_once("db_connection.php");
date_default_timezone_set("Africa/Lagos");
if ((isset($_POST['fullname']) && $_POST['fullname'] != '')) {

    // $i = implode(" ", $_POST['bundle_jamb']);
    $user_name = $conn->real_escape_string($_POST['fullname']);
    $user_school = $conn->real_escape_string($_POST['school']);
    $user_phone = $conn->real_escape_string($_POST['phone']);
    $user_address = $conn->real_escape_string($_POST['address']);
    $user_state = $conn->real_escape_string($_POST['state']);
    $user_jamb_sci = $conn->real_escape_string($_POST['jambBooklist_sci']);
    $user_jamb_art = $conn->real_escape_string($_POST['jambBooklist_art']);
    $user_waec_sci = $conn->real_escape_string($_POST['waecBooklist_sci']);
    $user_waec_art = $conn->real_escape_string($_POST['waecBooklist_art']);
    $user_waec_com = $conn->real_escape_string($_POST['waecBooklist_com']);
    $user_date = date("M d, Y h:i a");
    // $user_bundle_jamb_sci = implode(', ',$_POST['bundle_jambSci']);
    // $user_bundle_jamb_art = implode(', ',$_POST['bundle_jambArt']);
    // $user_bundle_waec_sci = implode(', ',$_POST['bundle_waecSci']);
    // $user_bundle_waec_art = implode(', ',$_POST['bundle_waecArt']);
    // echo $user_bundle_sci;
    // echo $user_bundle_art;
    // $user_bundle_j = $fids;
    // require_once("constant.php");
    $sql = "INSERT INTO users (fullname, school, phone, address, state, jambBooklistSci, jambBooklistArt, waecBooklistSci, waecBooklistArt, waecBooklistCom, created_at) 
VALUES('" . $user_name . "', '" . $user_school . "', '" . $user_phone . "', '" . $user_address . "', '" . $user_state . "','" . $user_jamb_sci. "','" . $user_jamb_art. "', '" . $user_waec_sci. "','".$user_waec_art. "','" . $user_waec_com. "','" . $user_date . "')";
    // echo $sql;
    if (!$result = $conn->query($sql)) {
        $output = json_encode(array('type' => 'error', 'text' => 'There was an error running the query [' . $conn->error . ']'));
        die($output);
        // die('There was an error running the query [' . $conn->error . ']');
    } else {
        require_once("contact_mail.php");
        // require_once("./Emailing.php");
        $output = json_encode(array('type' => 'message', 'text' => 'Hi ' . $user_name . ', thank you for the message. We will get back to you shortly.'));
        die($output);
    }
    return !$result;
}
 else {
    $output = json_encode(array('type'=>'error', 'text' => 'There was an error running the query [' . $conn->error . ']'));
    die($output);
}
