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
    <title>Nexus Central | Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="global.css">
    <!-- Use the Dashboard CSS I gave you earlier -->
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Welcome, <?php echo htmlspecialchars($_SESSION['admin_user']); ?></h2>
            <a href="logout.php" class="btn btn-outline-danger btn-sm">Secure Sign Out</a>
        </div>

        <!-- This is where your Project Management Table will go -->
        <div class="card shadow-sm p-4">
            <div class="row">
                <div class="col-lg-10">
                    <h5>Active Portfolio Projects</h5>
                </div>
                <div class="col-lg-2 justify-content-end d-flex">
                    <a href="addprojects.php" class="btn btn-outline-primary">Add new Projects</a>
                </div>
            </div>
            <hr>
            <p class="text-muted">You are now authorized to update company nodes.</p>


            <div class="row g-4 mt-5">

                <?php
                require_once '../src/Models/projectsmodel.php';
                $projectsModel = new projectsModel();
                $projects = $projectsModel->getProjects(12);

                if ($projects && $projects->num_rows > 0): ?>
                    <?php while ($project = $projects->fetch_assoc()): ?>
                        <div class="col-md-4">
                            <div class="card h-100 shadow-sm">
                                <img src="../<?php echo htmlspecialchars($project['project_image']); ?>" class="card-img-top rounded-4 align-self-center mt-4" style="width: 350px; height: 200px; object-fit: cover;" alt="<?php echo htmlspecialchars($project['project_title']); ?>">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo htmlspecialchars($project['project_title']); ?></h5>
                                    <p class="card-text text-muted small">
                                        <?php echo htmlspecialchars($project['project_description']); ?>
                                    </p>
                                </div>
                                <form action="../src/Controllers/projectsController.php" method="POST" class="d-inline">
                                    <div class="card-footer bg-transparent border-0">
                                        <a href="project-details.php?id=<?php echo $project['id']; ?>"
                                            class="btn btn-dark w-25">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <button type="submit" name="btnDelete" class="btn btn-dark w-25" value="<?php echo $project['id']; ?>"><i class="bi bi-trash3-fill"></i></button>
                                        <button type="submit" name="btnUpdate" class="btn btn-dark w-25"><i class="bi bi-pencil-square"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php else: ?>
                    <div class="col-12">
                        <div class="alert alert-info text-center" role="alert">
                            No projects found. Please check back later.
                        </div>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
</body>

</html>