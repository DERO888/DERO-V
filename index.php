<?php

// Path to the front controller (this file)
define('FCPATH', __DIR__ . DIRECTORY_SEPARATOR);

/*
 *---------------------------------------------------------------
 * BOOTSTRAP THE APPLICATION
 *---------------------------------------------------------------
 * This process sets up the path constants, loads and registers
 * our autoloader, along with Composer's, loads our constants
 * and fires up an environment-specific bootstrapping.
 */

// Ensure the current directory is pointing to the front controller's directory
chdir(__DIR__);

// Load our paths config file
// This is the line that might need to be changed, depending on your folder structure.
$pathsConfig = FCPATH . 'app/Config/Paths.php';
// ^^^ Change this if you move your application folder
$pathsConfigPath = realpath($pathsConfig) ?: $pathsConfig;
if (!file_exists($pathsConfigPath)) {
    die('Paths configuration file is missing.');
}

require $pathsConfigPath;

$paths = new Config\Paths();

// Location of the framework bootstrap file.
$bootstrap = rtrim($paths->systemDirectory, '\\/ ') . DIRECTORY_SEPARATOR . 'bootstrap.php';
$bootstrapPath = realpath($bootstrap) ?: $bootstrap;
if (!file_exists($bootstrapPath)) {
    die('Bootstrap file is missing.');
}

$app = require $bootstrapPath;

/*
 *---------------------------------------------------------------
 * HANDLE REQUESTS AND IP BANNING
 *---------------------------------------------------------------
 * This code tracks the number of requests from each IP address
 * and bans the IP address if it exceeds a certain limit.
 */

$ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : null;
$log_file = __DIR__ . '/ip_log.txt';

// Check if the log file exists and is writable
if (!file_exists($log_file) || !is_writable($log_file)) {
    die('Unable to write to the IP log file.');
}

// Read the IP log file
$log_content = file_get_contents($log_file);
$log_entries = $log_content !== false ? explode("\n", $log_content) : [];

// Remove entries older than 3 seconds
$time_threshold = time() - 3;
$new_log_entries = [];
foreach ($log_entries as $entry) {
    $parts = explode('|', $entry);
    if (count($parts) === 2) {
        list($entry_ip, $entry_time) = $parts;
        if ($entry_time >= $time_threshold) {
            $new_log_entries[] = $entry_ip . '|' . $entry_time;
        }
    }
}

// Add the current IP to the log file
$new_log_entries[] = $ip . '|' . time();

// Write the updated log content back to the file
if (file_put_contents($log_file, implode("\n", $new_log_entries)) === false) {
    die('Failed to update the IP log file.');
}

// If the IP has made more than 3 requests in the last 3 seconds, redirect
if (count(array_filter($new_log_entries, function($entry) use ($ip) {
    return strpos($entry, $ip) === 0;
})) > 3) {
    header('Location: https://rtvonmod-79.000webhostapp.com');
    exit;
}

/*
 *---------------------------------------------------------------
 * LAUNCH THE APPLICATION
 *---------------------------------------------------------------
 * Now that everything is setup, it's time to actually fire
 * up the engines and make this app do its thang.
 */
$app->run();