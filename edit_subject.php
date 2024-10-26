<?php
// Start session and include database
session_start();
include 'db.php';

// Check if a specific subject is selected for editing
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the subject details based on the selected record
    $sql = "SELECT * FROM subjects WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "<div class='alert alert-danger'>Subject not found.</div>";
        exit;
    }
}

// Update the subject record if the form is submitted
if (isset($_POST['update'])) {
    $subject_name = $_POST['subject_name'];

    // Update query to modify the subject in the database
    $update_sql = "UPDATE subjects SET subject_name = '$subject_name' WHERE id = $id";

    if ($conn->query($update_sql) === TRUE) {
        echo "<div class='alert alert-success'>Subject updated successfully.</div>";
        header('Location: view_subjects.php');
    } else {
        echo "<div class='alert alert-danger'>Error updating subject: " . $conn->error . "</div>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Subject</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center mb-4">Edit Subject</h2>
    
    <form method="POST" action="" class="card p-4">
        <div class="mb-3">
            <label for="subject_name" class="form-label">Subject Name</label>
            <input type="text" class="form-control" name="subject_name" id="subject_name" value="<?php echo $row['subject_name']; ?>" required>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary" name="update">Update Subject</button>
        </div>
    </form>
</div>

</body>
</html>
