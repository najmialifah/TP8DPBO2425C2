<?php include 'views/layout/header.php'; ?>
<?php include 'views/layout/navbar.php'; ?>

<div class="col-lg-6 m-auto">
    <div class="card">
        <div class="card-header bg-info text-white">Add Course</div>
        <div class="card-body">
            <form method="post" action="index.php?page=course&action=create">
                <div class="mb-3">
                    <label>Course Code</label>
                    <input type="text" name="course_code" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Course Name</label>
                    <input type="text" name="course_name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>SKS</label>
                    <input type="number" name="sks" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Lecturer</label>
                    <select name="lecturer_id" class="form-select">
                        <option value="">-- Select Lecturer --</option>
                        <?php while($lec = $lecturers->fetch_assoc()): ?>
                            <option value="<?= $lec['id'] ?>"><?= $lec['name'] ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>
                <button class="btn btn-success" type="submit">Submit</button>
                <a class="btn btn-secondary" href="index.php?page=course">Cancel</a>
            </form>
        </div>
    </div>
</div>

<?php include 'views/layout/footer.php'; ?>