<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<style>
        .alert-success{
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
    <h2 class="text-center mb-4">Register</h2>
    <p>If You Have Any Account Please Login</p>
    <?php
    // Include database connection
    include 'db.php';

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash the password

        // Insert new user into the database
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $username, $password);

        if ($stmt->execute()) {
            echo "<div class='alert alert-success'>Registration successful! You can now <a href='login.php'>login</a>.</div>";
        } else {
            echo "<div class='alert alert-danger'>Error: " . $conn->error . "</div>";
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
            <button type="submit" class="btn btn-primary">Register</button>
            <button type="button" class="btn btn-primary"><a href="login.php">Login</a></button>
        </div>
    </form>
</div>
</body>
</html>
