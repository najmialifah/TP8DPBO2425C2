<?php include 'views/layout/header.php'; ?>
<?php include 'views/layout/navbar.php'; ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card border-0 shadow-sm" style="border-radius: 20px;">
                
                <div class="card-header bg-transparent border-0 text-center pt-4 pb-0">
                    <h4 style="color: #ffffffff; font-weight: 700; letter-spacing: 1px;">Edit Lecturer</h4>
                    <p class="text-white small; ">Update lecturer information</p>
                </div>

                <div class="card-body p-4">
                    <form method="post" action="index.php?page=lecturer&action=edit&id=<?= $row['id'] ?>">
                        
                        <div class="mb-3">
                            <label class="form-label text-muted small fw-bold">FULL NAME</label>
                            <input type="text" name="name" value="<?= $row['name'] ?>" class="form-control" required>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label text-muted small fw-bold">NIDN</label>
                                <input type="text" name="nidn" value="<?= $row['nidn'] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label text-muted small fw-bold">PHONE NUMBER</label>
                                <input type="text" name="phone" value="<?= $row['phone'] ?>" class="form-control" required>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="form-label text-muted small fw-bold">JOIN DATE</label>
                            <input type="date" name="join_date" value="<?= $row['join_date'] ?>" class="form-control" required>
                        </div>

                        <div class="d-grid gap-2 mt-4">
                            <button class="btn btn-success text-white fw-bold py-2" type="submit">
                                Update Changes
                            </button>
                            <a class="btn btn-light text-muted fw-bold py-2" href="index.php?page=lecturer" style="border-radius: 50px;">
                                Cancel
                            </a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'views/layout/footer.php'; ?>