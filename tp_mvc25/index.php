<?php
// Load konfigurasi & controllers
require_once 'config/Database.php';
require_once 'controllers/LecturerController.php';
require_once 'controllers/CourseController.php';

// Inisiasi Koneksi
$db = (new Database())->conn;

// Routing
$page   = isset($_GET['page']) ? $_GET['page'] : 'lecturer';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$id     = isset($_GET['id']) ? $_GET['id'] : null;

// Switch Controller
switch ($page) {
    case 'lecturer':
        $controller = new LecturerController($db);
        if ($action == 'index') $controller->index();
        elseif ($action == 'create') $controller->create();
        elseif ($action == 'edit') $controller->edit($id);
        elseif ($action == 'delete') $controller->delete($id);
        break;

    case 'course':
        $controller = new CourseController($db);
        if ($action == 'index') $controller->index();
        elseif ($action == 'create') $controller->create();
        elseif ($action == 'edit') $controller->edit($id);
        elseif ($action == 'delete') $controller->delete($id);
        break;
        
    default:
        echo "<h3>404 - Page Not Found</h3>";
        break;
}
?>