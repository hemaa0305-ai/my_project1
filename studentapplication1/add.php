<?php include "db.php"; ?>

<?php
if(isset($_POST['save'])){
    $name = $_POST['name'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];

    mysqli_query($conn,"INSERT INTO student(name,address,mobile)
    VALUES('$name','$address','$mobile')");

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow">
                <div class="card-header bg-primary text-white text-center">
                    <h4>Add Student</h4>
                </div>

                <div class="card-body">
                    <form method="post">

                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Address</label>
                            <input type="text" name="address" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Mobile</label>
                            <input type="number" name="mobile" class="form-control" required>
                        </div>

                        <div class="d-grid">
                            <button type="submit" name="save" class="btn btn-success">
                                Save
                            </button>
                        </div>

                    </form>
                </div>

                <div class="card-footer text-center">
                    <a href="index.php" class="btn btn-secondary btn-sm">⬅ Back</a>
                </div>

            </div>

        </div>
    </div>
</div>

</body>
</html>
