<?php

// header("Access-Control-Allow-Origin: *");
// header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

    $email_id = $_POST['email'];
    $data = array('email_id' => $email_id);
    $url = "http://api.dishq.tech/v1/demo/adduser/";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Authorization: Token bcc55eb53b1fb196ab98e1701f911b0a5e9266a0',
        ));
    $result = curl_exec($ch);

    print_r($result);
    curl_close($ch);

?>
