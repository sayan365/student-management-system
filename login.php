<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <style>
        .alert-danger{
            width: 500px;
            margin-left: 300px;
        }
        form {
            width: 500px;
            margin-left: 300px;
        }
        button a{
            color: #fff;
            text-decoration: none;
        }
        p {
            text-align: center;
            font-size: 18px;
            color: red;
            font-family: Arial, sans-serif;
        }
    </style>
<div class="container mt-5">
    <h2 class="text-center mb-4">Login</h2>
        <p>If You Don't Have Any Account Please Register</p>
    <?php
    // Start the session
    session_start();

    // Include database connection
    include 'db.php';

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Query to get user data based on the username
        $sql = "SELECT * FROM users WHERE username = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            // Verify the password
            if (password_verify($password, $row['password'])) {
                // Store user data in session
                $_SESSION['username'] = $username;
                header("Location: index.php"); // Redirect to student view page
                exit();
            } else {
                echo "<div class='alert alert-danger'><b>Invalid username or password.</b> <br> if you don't have any account you can register now.</div>";
            }
        } else {
            echo "<div class='alert alert-danger'>Invalid username or password.</div>";
        }
    }
    ?>

    <form method="POST" action="" class="card p-4">
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" name="username" id="username" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password" required>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Login</button>
            <button type="button" class="btn btn-primary"><a href="register.php">Register</a></button>
        </div>
    </form>
</div>
</body>
</html>
