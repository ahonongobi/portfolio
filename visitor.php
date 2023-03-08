<?php
// Get the user's IP address
$ip_address = $_SERVER['REMOTE_ADDR'];

// Use an API to get the user's country based on their IP address
$country_api_url = 'https://api.ipgeolocation.io/ipgeo?apiKey=6c73195cfa794293afa977af0b904877&ip=' . $ip_address;
$country_json = file_get_contents($country_api_url);
$country_data = json_decode($country_json, true);
$country = $country_data['country_name'];

// Send an email with the user's IP address and country
$to = 'abyssiniea@gmail.com';
$subject = 'User IP and country';
$message = "User IP address: $ip_address\nUser country: $country";
$headers = 'From: abyssiniea@gmail.com' . "\r\n" .
           'Reply-To: abyssiniea@gmail.com' . "\r\n" .
           'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>
