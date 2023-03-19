

<?php
/** 
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

// Save the JSON object to a file and maintain the file's contents
$file_name = 'user_info.json';
$file_handle = fopen($file_name, 'w');
fwrite($file_handle, $user_info_json);
fclose($file_handle);

**/



// Function to get the user's IP address
function getUserIP()
{
    $ip_address = '';
    if (isset($_SERVER['HTTP_CLIENT_IP'])) {
        $ip_address = $_SERVER['HTTP_CLIENT_IP'];
    } else if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else if (isset($_SERVER['HTTP_X_FORWARDED'])) {
        $ip_address = $_SERVER['HTTP_X_FORWARDED'];
    } else if (isset($_SERVER['HTTP_FORWARDED_FOR'])) {
        $ip_address = $_SERVER['HTTP_FORWARDED_FOR'];
    } else if (isset($_SERVER['HTTP_FORWARDED'])) {
        $ip_address = $_SERVER['HTTP_FORWARDED'];
    } else if (isset($_SERVER['REMOTE_ADDR'])) {
        $ip_address = $_SERVER['REMOTE_ADDR'];
    } else {
        $ip_address = 'UNKNOWN';
    }
    return $ip_address;
}

// Function to get the user's country based on their IP address
function getUserCountry($ip_address)
{
    $api_key = '6c73195cfa794293afa977af0b904877'; // Replace with your actual API key
    $url = "https://api.ipgeolocation.io/ipgeo?apiKey={$api_key}&ip={$ip_address}&fields=country_name";
    $json_data = file_get_contents($url);
    $data = json_decode($json_data, true);
    $country = $data['country_name'];
    return $country;
}

// Get the user's IP address and country
$user_ip = getUserIP();
$user_country = getUserCountry($user_ip);

// Create an array to hold the user's IP address and country
$user_info = array(
    'ip_address' => $user_ip,
    'country' => $user_country
);

// Convert the array to JSON format
$json_data = json_encode($user_info);

// Save the JSON data to a file
$file_name = date('Y-m-d-H-i-s') .$user_country. '.json'; // Use the current date/time as the file name
//$file_path = '/path/to/json/files/' . $file_name; // Change this to the path where you want to save the JSON files
$file_path = 'users/' . $file_name;
file_put_contents($file_path, $json_data);
?>




