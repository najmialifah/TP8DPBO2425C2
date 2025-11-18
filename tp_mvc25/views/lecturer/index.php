<?php include 'views/layout/header.php'; ?>
<?php include 'views/layout/navbar.php'; ?>

<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 style="color: #ff9a9e; font-weight: bold;">Data Lecturers</h3>
        <a class="btn btn-primary shadow-sm" href="index.php?page=lecturer&action=create">
            <i class="bi bi-plus-lg"></i> + Add New Lecturer
        </a>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-striped table-hover mb-0">
                    <thead>
                        <tr>
                            <th class="text-center" width="5%">ID</th>
                            <th width="25%">Name</th>
                            <th width="20%">NIDN</th>
                            <th width="20%">Phone</th>
                            <th width="15%">Join Date</th>
                            <th class="text-center" width="15%">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($lecturers->num_rows > 0): ?>
                            <?php while($row = $lecturers->fetch_assoc()): ?>
                            <tr>
                                <td class="text-center">
                                    <span class="id-badge"><?= $row['id'] ?></span>
                                </td>

                                <td style="font-weight: 600; color: #e87c82;">
                                    <?= $row['name'] ?>
                                </td>

                                <td class="text-pink">
                                    <?= $row['nidn'] ?>
                                </td>

                                <td class="text-pink">
                                    <?= $row['phone'] ?>
                                </td>

                                <td class="text-pink">
                                    <?= date('d M Y', strtotime($row['join_date'])) ?>
                                </td>

                                <td class="text-center">
                                    <a class="btn btn-sm btn-success text-white rounded-pill px-3" href="index.php?page=lecturer&action=edit&id=<?= $row['id'] ?>">Edit</a>
                                    <a class="btn btn-sm btn-danger text-white rounded-pill px-3" href="index.php?page=lecturer&action=delete&id=<?= $row['id'] ?>" onclick="return confirm('Yakin hapus?')">Delete</a>
                                </td>
                            </tr>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="6" class="text-center py-4 text-muted">
                                    No lecturer data available. ✨
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