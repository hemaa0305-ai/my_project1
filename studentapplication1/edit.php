<?php
include "db.php";

if(!isset($_GET['id'])){
    die("ID not received");
}

$id = $_GET['id'];

$sql = "SELECT * FROM student WHERE id='$id'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) == 0){
    die("No record found");
}

$row = mysqli_fetch_assoc($result);

$name = $row['name'];
$address = $row['address'];
$mobile = $row['mobile'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow">
                <div class="card-header bg-warning text-dark text-center">
                    <h4>Edit Student</h4>
                </div>
                <div class="card-body">

                    <form method="post" action="update.php?id=<?php echo $id; ?>">

                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control"
                                   value="<?php echo $name; ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Address</label>
                            <input type="text" name="address" class="form-control"
                                   value="<?php echo $address; ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Mobile</label>
                            <input type="text" name="mobile" class="form-control"
                                   value="<?php echo $mobile; ?>" required>
                        </div>

                        <div class="d-grid">
                            <button type="submit" name="update" class="btn btn-success">
                                Update
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
