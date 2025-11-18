<?php
require_once 'models/Course.php';
require_once 'models/Lecturer.php';

class CourseController {
    private $model;
    private $lecturerModel;

    public function __construct($db) {
        $this->model = new Course($db);
        $this->lecturerModel = new Lecturer($db);
    }

    public function index() {
        $courses = $this->model->getAll();
        require 'views/course/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->model->create($_POST);
            header("Location: index.php?page=course");
            exit;
        }
        $lecturers = $this->lecturerModel->getAll();
        require 'views/course/create.php';
    }

    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->model->update($id, $_POST);
            header("Location: index.php?page=course");
            exit;
        }
        $row = $this->model->getById($id);
        $lecturers = $this->lecturerModel->getAll();
        require 'views/course/edit.php';
    }

    public function delete($id) {
        $this->model->delete($id);
        header("Location: index.php?page=course");
        exit;
    }
}
?>