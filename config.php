<?php
$host = "sql12.freesqldatabase.com";
$user = "sql12776018";
$password = "BBVZweFA6r"; // Replace with your actual password
$db = "sql12776018";

$conn = new mysqli($host, $user, $password, $db);
if ($conn->connect_error) {
    // For production, you might want to log this error and show a generic message
    // error_log("Database Connection Failed: " . $conn->connect_error);
    die("Sorry, we're having some technical difficulties. Please try again later.");
}

// Define Base URL for easier asset linking and redirects
if (!defined('BASE_URL')) {
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $host_name = $_SERVER['HTTP_HOST'];
    $script_dir = dirname($_SERVER['SCRIPT_NAME']);
    // Ensure the base URL ends with a slash
    define('BASE_URL', rtrim($protocol . $host_name . $script_dir, '/') . '/');
}

// Start session if not already started (good place for global session start)
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>