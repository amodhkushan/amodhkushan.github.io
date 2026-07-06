<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Project | Nexus Central</title>
    <!-- Use the Inter font we just set up -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm border-0 rounded-4">
                    <div class="card-header rounded-4 bg-white py-3 d-flex justify-content-center align-items-center">
                        <h5 class="mb-0 fw-bold">Add New Project</h5>
                    </div>
                    <div class="card-body p-4">
                        <form action="../src/Controllers/projectsController.php" method="POST" enctype="multipart/form-data">

                            <div class="mb-3">
                                <label class="form-label small fw-bold">Project Title</label>
                                <input type="text" name="title" class="form-control" placeholder="e.g. Project name" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label small fw-bold">Project Category</label>
                                <input type="text" name="category" class="form-control" placeholder="e.g. E-Commerce Platform" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label small fw-bold">Project URL</label>
                                <input type="text" name="url" class="form-control" placeholder="e.g. https://example.com" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label small fw-bold">Description</label>
                                <textarea name="description" class="form-control" rows="4" placeholder="Briefly describe the software solutions..." required></textarea>
                            </div>

                            <div class="mb-4">
                                <label class="form-label small fw-bold">Project Thumbnail</label>
                                <input type="file" name="image" class="form-control" accept="image/*" required>
                                <div class="form-text">Recommended size: 800x600px (JPG/PNG)</div>
                            </div>

                            <div class="d-grid">
                                <button type="submit" name="btnSubmit" class="btn btn-primary shadow-sm">Save Project</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>