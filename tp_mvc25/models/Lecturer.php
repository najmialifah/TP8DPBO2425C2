<?php
class Lecturer {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAll() {
        return $this->conn->query("SELECT * FROM lecturers ORDER BY id ASC");
    }

    public function getById($id) {
        $result = $this->conn->query("SELECT * FROM lecturers WHERE id = $id");
        return $result->fetch_assoc();
    }

    public function create($data) {
        $name = $data['name'];
        $nidn = $data['nidn'];
        $phone = $data['phone'];
        $join_date = $data['join_date'];
        
        $sql = "INSERT INTO lecturers (name, nidn, phone, join_date) VALUES ('$name', '$nidn', '$phone', '$join_date')";
        return $this->conn->query($sql);
    }

    public function update($id, $data) {
        $name = $data['name'];
        $nidn = $data['nidn'];
        $phone = $data['phone'];
        $join_date = $data['join_date'];

        $sql = "UPDATE lecturers SET name='$name', nidn='$nidn', phone='$phone', join_date='$join_date' WHERE id=$id";
        return $this->conn->query($sql);
    }

    public function delete($id) {
        return $this->conn->query("DELETE FROM lecturers WHERE id=$id");
    }
}
?>