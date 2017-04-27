<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://manage.serverpilot.io/v1/account/session/start",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\"isLoggedIn\":null,\"secret\":null,\"email\":\"someone@gmail.com\",\"trialend\":null,\"paid\":null,\"billing_id\":null,\"cc_brand\":null,\"cc_last4\":null,\"cc_exp_month\":null,\"cc_exp_year\":null,\"plan\":null,\"mfa_enabled\":null,\"mfa_phone\":null,\"mfa_phone_last_four\":null,\"mfa_success\":null,\"prefs\":{},\"clientid\":null,\"apikey\":null,\"shirtoffer\":null,\"curmonthtotal\":null,\"password\":\"some_password\"}",
  CURLOPT_HTTPHEADER => array(
    "content-type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
