<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'peso_job_application');

$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if ($conn->connect_error) {
  $response = array(
    'success' => false,
    'message' => 'Database connection failed: ' . $conn->connect_error
  );
  echo json_encode($response);
  exit();
}
?>
