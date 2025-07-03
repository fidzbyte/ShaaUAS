<?php
$config_path = 'application/config/config.php';
echo file_exists($config_path) ? "✅ File config ada" : "❌ File config tidak ada";
echo "<br>Path: " . realpath($config_path);
?>