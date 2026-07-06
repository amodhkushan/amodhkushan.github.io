<?php
session_start();

// Security Guard: If not logged in, kick them out
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Nexus Central | Project Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="global.css">
    <!-- Use the Dashboard CSS I gave you earlier -->
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Project Details</h2>
            <a href="dashboard.php" class="btn btn-outline-secondary btn-sm">Back to Dashboard</a>
        </div>

        <!-- This is where your Project Details will go -->
        <div class="modal-dialog modal-xl">
            <h5>Project Title</h5>
            <hr>
            <p class="text-muted">Detailed information about the project will be displayed here.</p>
        </div>
    </div>
</body>

</html>