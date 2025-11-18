<?php include 'views/layout/header.php'; ?>
<?php include 'views/layout/navbar.php'; ?>

<div class="container">
    <div class="col-lg-6 m-auto">
        <div class="card">
            <div class="card-header text-center">
                Add New Lecturer
            </div>
            <div class="card-body p-4"> <form method="post" action="index.php?page=lecturer&action=create">
                    <div class="mb-3">
                        <label class="form-label text-muted">Full Name</label>
                        <input type="text" name="name" class="form-control" placeholder="e.g. Siti Aminah" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-muted">NIDN</label>
                        <input type="text" name="nidn" class="form-control" placeholder="e.g. 12345678" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-muted">Phone Number</label>
                        <input type="text" name="phone" class="form-control" placeholder="081..." required>
                    </div>
                    <div class="mb-4">
                        <label class="form-label text-muted">Join Date</label>
                        <input type="date" name="join_date" class="form-control" required>
                    </div>
                    
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" type="submit">Save Data</button>
                        <a class="btn btn-outline-secondary" style="border-radius: 50px;" href="index.php?page=lecturer">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'views/layout/footer.php'; ?>