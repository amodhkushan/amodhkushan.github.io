<?php

require_once __DIR__ . '/../../Config/DBConnection.php';

class ProjectsModel extends DBConnection
{

    public function __construct()
    {
        // First, let the parent establish the connection
        parent::__construct();
        // Now $this->conn is already populated by the parent class
    }

    public function getProjects($limit = 12)
    {
        // Added FROM table_name and LIMIT placeholder
        $query = "SELECT id, project_title, project_category, project_url, project_description, project_image FROM projects LIMIT ?";

        if ($stmt = $this->conn->prepare($query)) {
            $stmt->bind_param("i", $limit);
            $stmt->execute();
            return $stmt->get_result();
        }
        return false;
    }

    public function createProject(int $project_id, string $project_title, string $project_category, string $project_url, string $project_description, string $project_image)
    {
        $query = "INSERT INTO projects (id, project_title, project_category, project_url, project_description, project_image) VALUES (?, ?, ?, ?, ?, ?)";

        if ($stmt = $this->conn->prepare($query)) {
            $stmt->bind_param("isssss", $project_id, $project_title, $project_category, $project_url, $project_description, $project_image);
            return $stmt->execute();
        }
        return false;
    }

    public function deleteProject(int $project_id)
    {
        $query = "DELETE FROM projects WHERE id = ?";

        if ($stmt = $this->conn->prepare($query)) {
            $stmt->bind_param("i", $project_id);
            return $stmt->execute();
        }
        return false;
    }
}
