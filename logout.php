<?php
session_start();

// Unset all of the session variables
$_SESSION = array();

// Destroy the session.
session_destroy();

// Return a JSON response
header('Content-Type: application/json');
echo json_encode(['success' => true, 'message' => 'You have been successfully logged out.']);