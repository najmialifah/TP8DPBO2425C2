<?php
class Course {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAll() {
        // JOIN untuk mengambil nama dosen
        $sql = "SELECT courses.*, lecturers.name as lecturer_name 
                FROM courses 
                LEFT JOIN lecturers ON courses.lecturer_id = lecturers.id 
                ORDER BY courses.id ASC";
        return $this->conn->query($sql);
    }

    public function getById($id) {
        $result = $this->conn->query("SELECT * FROM courses WHERE id = $id");
        return $result->fetch_assoc();
    }

    public function create($data) {
        $code = $data['course_code'];
        $name = $data['course_name'];
        $sks  = $data['sks'];
        $lec_id = $data['lecturer_id'];

        $sql = "INSERT INTO courses (course_code, course_name, sks, lecturer_id) VALUES ('$code', '$name', '$sks', '$lec_id')";
        return $this->conn->query($sql);
    }

    public function update($id, $data) {
        $code = $data['course_code'];
        $name = $data['course_name'];
        $sks  = $data['sks'];
        $lec_id = $data['lecturer_id'];

        $sql = "UPDATE courses SET course_code='$code', course_name='$name', sks='$sks', lecturer_id='$lec_id' WHERE id=$id";
        return $this->conn->query($sql);
    }

    public function delete($id) {
        return $this->conn->query("DELETE FROM courses WHERE id=$id");
    }
}
?>