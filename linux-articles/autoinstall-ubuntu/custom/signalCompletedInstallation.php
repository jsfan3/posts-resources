<?php
// signalCompletedInstallation.php

// Retrieve the IP address from the GET parameter
$ip = isset($_GET['IP']) ? $_GET['IP'] : 'Unknown IP';

// Email configuration
$to = 'your-email@domain.com'; // Replace with your email address
$subject = 'Installation Completed';
$message = "The installation has been completed. The machine is accessible at IP address: $ip.";
$headers = 'From: no-reply@yourdomain.com' . "\r\n" .
           'Reply-To: no-reply@yourdomain.com' . "\r\n" .
           'X-Mailer: PHP/' . phpversion();

// Send the email
mail($to, $subject, $message, $headers);

// Optional: Log the IP address for records
error_log("Installation completed for IP: $ip");
?>

