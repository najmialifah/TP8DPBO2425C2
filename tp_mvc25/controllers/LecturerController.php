<?php
require_once 'models/Lecturer.php';

class LecturerController {
    private $model;

    public function __construct($db) {
        $this->model = new Lecturer($db);
    }

    public function index() {
        $lecturers = $this->model->getAll();
        require 'views/lecturer/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->model->create($_POST);
            header("Location: index.php?page=lecturer");
            exit;
        }
        require 'views/lecturer/create.php';
    }

    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->model->update($id, $_POST);
            header("Location: index.php?page=lecturer");
            exit;
        }
        $row = $this->model->getById($id);
        require 'views/lecturer/edit.php';
    }

    public function delete($id) {
        $this->model->delete($id);
        header("Location: index.php?page=lecturer");
        exit;
    }
}
?>