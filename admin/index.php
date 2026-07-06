<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nexus Central | Secure Login</title>
    <!-- Bootstrap & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/adminlogin.css">
</head>
<body class="bg-light">

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="login-wrapper shadow-sm bg-white p-5 rounded-4 border border-secondary-subtle">
        <div class="text-center mb-4">
            <div class="security-shield-icon text-primary mb-3">
                <i class="bi bi-shield-lock-fill"></i>
            </div>
            <h4 class="fw-bold text-dark">Developer Portal</h4>
            <p class="text-muted small">Administrator authentication for Control Panel</p>
        </div>

        <form action="auth.php" method="POST">
            <div class="mb-3">
                <label class="form-label small fw-bold">Admin Identifier</label>
                <div class="input-group">
                    <span class="input-group-text bg-light border-end-0"><i class="bi bi-person"></i></span>
                    <input type="text" name="username" class="form-control bg-light border-start-0" placeholder="Username" required>
                </div>
            </div>

            <div class="mb-4">
                <label class="form-label small fw-bold">Secret Key</label>
                <div class="input-group">
                    <span class="input-group-text bg-light border-end-0"><i class="bi bi-key"></i></span>
                    <input type="password" name="password" class="form-control bg-light border-start-0" placeholder="••••••••" required>
                </div>
            </div>

            <div class="security-status mb-4 p-2 bg-light rounded text-center">
                <small class="text-secondary"><i class="bi bi-cpu me-1"></i> AES-256 Session Encryption Active</small>
            </div>

            <button type="submit" class="btn btn-primary w-100 py-2 fw-bold rounded-3">
                <i class="bi bi-unlock-fill me-2"></i>Authenticate
            </button>
        </form>

        <div class="mt-4 text-center">
            <small class="text-muted">&copy; 2026 Gaze Axiom Systems</small>
        </div>
    </div>
</div>

</body>
</html>