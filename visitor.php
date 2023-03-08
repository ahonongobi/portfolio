

<?php
// Get the user's IP address
$ip_address = $_SERVER['REMOTE_ADDR'];

// Use an API to get the user's country based on their IP address
$country_api_url = 'https://api.ipgeolocation.io/ipgeo?apiKey=6c73195cfa794293afa977af0b904877&ip=' . $ip_address;
$country_json = file_get_contents($country_api_url) ?? '';
$country_data = json_decode($country_json, true) ?? [];
$country = $country_data['country_name'] ?? 'Unknown';

// Create a JSON object with the user's IP address and country
$user_info = array(
    'ip_address' => $ip_address,
    'country' => $country
);
$user_info_json = json_encode($user_info);

// Save the JSON object to a file
$file_name = 'user_info.json';
$file_handle = fopen($file_name, 'w');
fwrite($file_handle, $user_info_json);
fclose($file_handle);
?>


