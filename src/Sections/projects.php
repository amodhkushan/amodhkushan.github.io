<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/portfolio_web/public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="bg-light">

    <div class="container">

        <div class="container py-5">
            <h2 class="display-4 fw-bold mb-5 text-center">My Projects</h2>

            <div class="row g-4">
                
            <?php
                require_once 'src/Models/projectsmodel.php';
                $projectsModel = new projectsModel();
                $projects = $projectsModel->getProjects(12);

                if ($projects && $projects->num_rows > 0): ?>
                    <?php while ($project = $projects->fetch_assoc()): ?>
                        <div class="col-md-4">
                            <div class="card h-100 rounded-4 shadow-sm">
                                <img src="<?php echo htmlspecialchars($project['project_image']); ?>" class="card-img-top rounded-4 align-self-center mt-4" style="width: 350px; height: 200px; object-fit: cover;" alt="<?php echo htmlspecialchars($project['project_title']); ?>">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo htmlspecialchars($project['project_title']); ?></h5>
                                    <h6 class="card-subtitle mb-2 text-muted fw-bold"><?php echo htmlspecialchars($project['project_category']); ?></h6>
                                     <p class="card-text">
                                        <?php echo htmlspecialchars($project['project_url']); ?>
                                    </p>
                                    <p class="card-text text-muted small">
                                        <?php echo htmlspecialchars($project['project_description']); ?>
                                    </p>
                                </div>
                                <div class="card-footer bg-transparent border-0 pb-3">
                                    <a href="project-details.php?id=<?php echo $project['id']; ?>" 
                                       class="btn btn-outline-dark rounded-4 py-2 btn-sm w-100">
                                        View Project Details
                                    </a>
                                </div>
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

    <script src="/portfolio_web/public/assets/js/bootstrap.bundle.min.js"></script>

</body>

</html>