<?php
require 'config.php';  // Ensure config.php connects to the 'ezradb' database

// Get POST data and sanitize
$username_or_email = mysqli_real_escape_string($conn, $_POST["username"]);
$password = $_POST["password"];  // Direct password comparison

// Prepare the SQL query to check for username or email
$query_sql = "SELECT * FROM ezradb WHERE (username = ? OR email = ?)";

// Use prepared statements to prevent SQL injection
if ($stmt = mysqli_prepare($conn, $query_sql)) {
    mysqli_stmt_bind_param($stmt, "ss", $username_or_email, $username_or_email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    // Check if user exists
    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        // Directly compare the passwords (remove password hashing)
        if ($password === $user['password']) {
            // Successful login
            header("Location: page1.html");
            exit();
        } else {
            // Incorrect password
            echo "<center><h1>Username or Password is incorrect. Please try again.</h1>
            <button><strong><a href='index.html'>Login</a></strong></button></center>";
        }
    } else {
        // No user found
        echo "<center><h1>Username or Email not found. Please try again.</h1>
        <button><strong><a href='index.html'>Login</a></strong></button></center>";
    }

    // Close statement
    mysqli_stmt_close($stmt);
}

// Close the connection
mysqli_close($conn);
?>
