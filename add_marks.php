<?php include 'db.php'; 

session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.php"); // Redirect to login page if not logged in
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Marks</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
        }
        .sidebar {
            min-width: 250px;
            background-color: #f8f9fa;
            height: 100vh;
            padding: 15px;
        }
        .sidebar a {
            display: block;
            padding: 10px;
            text-decoration: none;
            color: #000;
        }
        .sidebar a:hover {
            background-color: #ddd;
        }
        .content {
            flex-grow: 1;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h4><b>Navigation</b></h4>
        <a href="index.php">Home</a>
        <a href="add_attendance.php">Add Attendance</a>
        <a href="view_attendance.php">View Attendance</a>
        <a href="add_marks.php">Add Marks</a>
        <a href="view_marks.php">View Marks</a>
        <a href="add_student.php">Add Student</a>
        <a href="view_students.php">View Students</a>
        <a href="add_subject.php">Add Subject</a>
        <a href="view_subjects.php">View Subjects</a>
        <a href="logout.php" class="nav-link" style="color: black;"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>

    <div class="content">
        <h2>Add Marks</h2>
        <form action="add_marks.php" method="POST">
            <div class="mb-3">
                <label for="student_id" class="form-label">Student ID</label>
                <input type="number" class="form-control" id="student_id" name="student_id" required>
            </div>
            <div class="mb-3">
                <label for="subject_id" class="form-label">Subject ID</label>
                <input type="number" class="form-control" id="subject_id" name="subject_id" required>
            </div>
            <div class="mb-3">
                <label for="marks" class="form-label">Marks</label>
                <input type="number" class="form-control" id="marks" name="marks" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Marks</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $student_id = $_POST['student_id'];
            $subject_id = $_POST['subject_id'];
            $marks = $_POST['marks'];

            $sql = "INSERT INTO marks (student_id, subject_id, marks) VALUES ('$student_id', '$subject_id', '$marks')";
            if ($conn->query($sql) === TRUE) {
                echo "<div class='alert alert-success'>Marks added successfully.</div>";
            } else {
                echo "<div class='alert alert-danger'>Error: " . $sql . "<br>" . $conn->error . "</div>";
            }
        }
        ?>
    </div>
</body>
</html>
