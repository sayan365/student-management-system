<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Attendance</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2>Edit Attendance</h2>

        <?php
        // Check if 'id' exists in the URL
        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            // Fetch the existing attendance data based on the 'id'
            $sql = "SELECT * FROM attendance WHERE id = '$id'";
            $result = $conn->query($sql);

            // Check if the record exists
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
        ?>

        <form action="edit_attendance.php?id=<?php echo $id; ?>" method="POST">
            <div class="mb-3">
                <label for="student_id" class="form-label">Student ID</label>
                <input type="number" class="form-control" id="student_id" name="student_id" value="<?php echo $row['student_id']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="attendance_date" class="form-label">Attendance Date</label>
                <input type="date" class="form-control" id="attendance_date" name="attendance_date" value="<?php echo $row['attendance_date']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="attendance" class="form-label">Attendance (0 for Absent, 1 for Present)</label>
                <input type="number" class="form-control" id="attendance" name="attendance" value="<?php echo $row['attendance']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Attendance</button>
        </form>

        <?php
            } else {
                echo "<div class='alert alert-danger'>Attendance record not found.</div>";
            }
        } else {
            echo "<div class='alert alert-danger'>No attendance ID specified.</div>";
        }
        ?>

        <?php
        // Handle form submission to update the attendance
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['id'])) {
            $student_id = $_POST['student_id'];
            $attendance_date = $_POST['attendance_date'];
            $attendance = $_POST['attendance'];

            // Update the attendance record
            $sql = "UPDATE attendance SET student_id = '$student_id', attendance_date = '$attendance_date', attendance = '$attendance' WHERE id = '$id'";
            if ($conn->query($sql) === TRUE) {
                echo "<div class='alert alert-success'>Attendance updated successfully.</div>";
                header('Location: view_attendance.php');
            } else {
                echo "<div class='alert alert-danger'>Error updating record: " . $conn->error . "</div>";
            }
        }
        ?>

    </div>
</body>
</html>
