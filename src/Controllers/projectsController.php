<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../Models/ProjectsModel.php';

class ProjectsController
{
    private ProjectsModel $projectsModel;

    public function __construct()
    {
        $this->projectsModel = new ProjectsModel();
    }

    public function getProjects($limit = 12)
    {
        return $this->projectsModel->getProjects($limit);
    }

    public function createProject()
    {
        echo "Project Added!";

        if (isset($_POST['title'], $_POST['category'], $_POST['url'], $_POST['description'], $_FILES['image'])) {
            $title = $_POST['title'];
            $category = $_POST['category'];
            $url = $_POST['url'];
            $description = $_POST['description'];

            // Handle file upload
            $imagePath = null;
            if ($_FILES['image']['error'] === UPLOAD_ERR_OK) {
                $uploadDir = __DIR__ . '/../../public/uploads/';
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }
                $imagePath = $uploadDir . basename($_FILES['image']['name']);
                move_uploaded_file($_FILES['image']['tmp_name'], $imagePath);
                // Store relative path for database
                $imagePath = 'public/uploads/' . basename($_FILES['image']['name']);
            }

            $result = $this->projectsModel->createProject(0, $title, $category, $url, $description, $imagePath);
            echo "<script>alert('Project Added Successfully');</script>";
            echo "<script>window.location.href='../../admin/dashboard.php';</script>";
            return $result;
        } else {
            echo "<script>alert('Please fill in all fields and upload an image.');</script>";
            echo "<script>window.location.href='addprojects.php';</script>";
        }
    }

    public function deleteProject()
    {
        if (isset($_POST['btnDelete'])) {
            $id = $_POST['btnDelete'];
            if (!is_numeric($id) || (int)$id <= 0) {
                echo "<script>alert('Invalid Project ID.');</script>";
                echo "<script>window.location.href='../../admin/dashboard.php';</script>";
                exit;
            }
            $id = (int)$id;

            $this->projectsModel->deleteProject($id);

            // $result = $this->projectsModel->deleteProject($id);
            echo "<script>alert('Project Deleted Successfully');</script>";
            echo "<script>window.location.href='../../admin/dashboard.php';</script>";
            exit;
        } else {
            echo "<script>alert('This Project is Missing Some Required Informations that need to Delete this Project. Contact Developers to fix this.');</script>";
            echo "<script>window.location.href='../../admin/dashboard.php';</script>";
        }
    }
}

if (isset($_POST['btnSubmit'])) {
    $projectsController = new ProjectsController();
    $projectsController->createProject();
}

if (isset($_POST['btnDelete'])) {
    $projectsController = new ProjectsController();
    $projectsController->deleteProject();
}
