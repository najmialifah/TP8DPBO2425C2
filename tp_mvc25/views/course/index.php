<?php include 'views/layout/header.php'; ?>
<?php include 'views/layout/navbar.php'; ?>

<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 style="color: #ff9a9e; font-weight: bold;">Data Courses</h3>
        <a class="btn btn-primary shadow-sm" href="index.php?page=course&action=create">
            <i class="bi bi-plus-lg"></i> + Add New Course
        </a>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-striped table-hover mb-0">
                    <thead>
                        <tr>
                            <th class="text-center" width="5%">ID</th>
                            <th width="15%">Code</th>
                            <th width="30%">Course Name</th>
                            <th class="text-center" width="10%">SKS</th>
                            <th width="25%">Lecturer</th>
                            <th class="text-center" width="15%">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($courses->num_rows > 0): ?>
                            <?php while($row = $courses->fetch_assoc()): ?>
                            <tr>
                                <td class="text-center">
                                    <span class="id-badge"><?= $row['id'] ?></span>
                                </td>
                                
                                <td>
                                    <span class="badge" style="background-color: #ff9a9e;"><?= $row['course_code'] ?></span>
                                </td>

                                <td style="font-weight: 600; color: #e87c82;">
                                    <?= $row['course_name'] ?>
                                </td>

                                <td class="text-center text-pink">
                                    <?= $row['sks'] ?>
                                </td>

                                <td>
                                    <?php if($row['lecturer_name']): ?>
                                        <span style="color: #e87c82; font-weight: 500;">
                                            <img src="https://ui-avatars.com/api/?name=<?= urlencode($row['lecturer_name']) ?>&background=fdf2f4&color=e87c82&size=24" class="rounded-circle me-1" alt="">
                                            <?= $row['lecturer_name'] ?>
                                        </span>
                                    <?php else: ?>
                                        <span class="text-muted fst-italic small">No Lecturer Assigned</span>
                                    <?php endif; ?>
                                </td>

                                <td class="text-center">
                                    <a class="btn btn-sm btn-success text-white rounded-pill px-3" href="index.php?page=course&action=edit&id=<?= $row['id'] ?>">Edit</a>
                                    <a class="btn btn-sm btn-danger text-white rounded-pill px-3" href="index.php?page=course&action=delete&id=<?= $row['id'] ?>" onclick="return confirm('Are you sure you want to delete this course?')">Delete</a>
                                </td>
                            </tr>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="6" class="text-center py-4 text-muted">
                                    No course data available yet.
                                </td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include 'views/layout/footer.php'; ?>