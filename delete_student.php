<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Student</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Optional JavaScript for Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Select2 CSS for searchable dropdown (optional) -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!-- Select2 JS (optional for searchable dropdown) -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</head>
<body>
<div class="container mt-5">

    <h2 class="text-center mb-4">Delete Student</h2>

    <?php
    // Enable error reporting
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    include 'db.php';

    // Step 1: Display the enrollment dropdown if no student is selected for deletion
    if (!isset($_POST['select_enrollment']) && !isset($_POST['delete'])) {
        // Query to get all students' enrollment numbers
        $sql = "SELECT id, enrollment_no, student_name FROM students";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "
            <form method='POST' action='' class='card p-4'>
                <div class='mb-3'>
                    <label for='enrollment_id' class='form-label'><b>Select Enrollment ID to Delete:</b></label>
                    <select class='form-select' name='enrollment_id' id='enrollment_id'>
            ";
            // Loop through and create an option for each student
            while ($row = $result->fetch_assoc()) {
                echo "<option value='" . $row['id'] . "'>" . $row['enrollment_no'] . " - " . $row['student_name'] . "</option>";
            }
            echo "
                    </select>
                </div>
                <div class='text-center'>
                    <input type='submit' class='btn btn-danger' name='select_enrollment' value='Select'>
                </div>
            </form>";
        } else {
            echo "<div class='alert alert-warning'>No students found.</div>";
        }

        $conn->close();
        exit; // Stop script execution after showing the dropdown
    }

    // Step 2: Show a confirmation modal after selecting a student
    if (isset($_POST['select_enrollment'])) {
        $id = $_POST['enrollment_id'];

        // Query to get student details based on the selected enrollment
        $sql = "SELECT * FROM students WHERE id = $id";
        $result = $conn->query($sql);

        if (!$result) {
            die('Error retrieving student: ' . $conn->error);
        }

        if ($result->num_rows == 0) {
            die('No student found with that enrollment ID.');
        } else {
            $row = $result->fetch_assoc();
        }

        // Use a modal to confirm deletion
        echo "
        <div class='modal fade show' id='deleteModal' tabindex='-1' role='dialog' aria-labelledby='deleteModalLabel' aria-hidden='true'>
            <div class='modal-dialog' role='document'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='deleteModalLabel'>Confirm Deletion</h5>
                    </div>
                    <div class='modal-body'>
                        <p>Are you sure you want to delete the following student?</p>
                        <p><strong>Name: </strong>" . $row['student_name'] . "</p>
                        <p><strong>Enrollment No: </strong>" . $row['enrollment_no'] . "</p>
                    </div>
                    <div class='modal-footer'>
                        <form method='POST' action=''>
                            <input type='hidden' name='enrollment_id' value='$id'>
                            <button type='submit' name='delete' class='btn btn-danger'>Yes, Delete</button>
                            <a href='delete_student.php' class='btn btn-secondary'>Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script>
            var deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'), {});
            deleteModal.show();
        </script>";
        $conn->close();
        exit; // Stop script execution after showing the confirmation modal
    }

    // Step 3: Delete the student from the database if confirmed
    if (isset($_POST['delete'])) {
        $id = $_POST['enrollment_id'];

        // Delete query
        $delete_sql = "DELETE FROM students WHERE id = $id";

        if ($conn->query($delete_sql) === TRUE) {
            echo "<div class='alert alert-success'>Student deleted successfully.</div>";
            header('Location: view_students.php');
        } else {
            echo "<div class='alert alert-danger'>Error deleting record: " . $conn->error . "</div>";
        }

        $conn->close();
    }
    ?>

</div>

<!-- Optional: Initialize Select2 for searchable dropdown -->
<script>
    $(document).ready(function() {
        $('#enrollment_id').select2();
    });
</script>

</body>
</html>
