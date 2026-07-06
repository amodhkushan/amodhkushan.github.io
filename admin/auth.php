<?php

// 1. Start the session to track the user
session_start();

// 2. Include your database connection
// Use __DIR__ to build the path reliably from the current file location
require_once __DIR__ . '/../Config/DBConnection.php';

// 2. Create an instance of the class to trigger the connection
$dbInstance = new DBConnection();

// 3. Get the mysqli object from the class property
$conn = $dbInstance->conn;

// Final check: Is $conn an object?
if (!($conn instanceof mysqli)) {
    die("Error: Database connection object not found. Check DBConnection.php variable names.");
}

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    // You can uncomment the line below to confirm it works, 
    // but remove it before going live!
    // echo "Connected successfully to node."; 
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // 3. Get data from the login form
    $user = trim($_POST['username']);
    $pass = trim($_POST['password']);

    // 4. Prepared Statement to prevent SQL Injection[cite: 3]
    // We only fetch the password hash based on the unique username[cite: 3]
    $stmt = $conn->prepare("SELECT id, username, password FROM adminlogin WHERE username = ? LIMIT 1");
    $stmt->bind_param("s", $user);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();

        // 5. Verify the password against the secure hash[cite: 3]
        if (password_verify($pass, $row['password'])) {

            // 6. Regenerate session ID to prevent Session Fixation[cite: 3]
            session_regenerate_id(true);

            // 7. Store user info in the session[cite: 3]
            $_SESSION['logged_in'] = true;
            $_SESSION['admin_id'] = $row['id'];
            $_SESSION['admin_user'] = $row['username'];

            // 8. Redirect to the High-Security Dashboard[cite: 2, 3]
            header("Location: dashboard.php");
            exit();
        }
    }

    // 9. If anything fails, send back to login with an error message[cite: 3]
    header("Location: index.php?error=1");
    exit();
} else {
    // Redirect if someone tries to access this file directly[cite: 3]
    header("Location: index.php");
    exit();
}
