<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the post data
    $postTitle = $_POST["postTitle"];
    $postContent = $_POST["postContent"];

    // Initialize a connection to the database (you missed the connection creation)
    $host = "localhost";
    $dbname = "message_db"; // Enclose the database name in quotes
    $username = "root";
    $password = "";

    $conn = mysqli_connect($host, $username, $password, $dbname);

    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    } else {
        // Use prepared statements to prevent SQL injection
        $sql = "INSERT INTO message (postTitle, postContent) VALUES (?, ?)";
        $stmt = mysqli_prepare($conn, $sql);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "ss", $postTitle, $postContent);

            if (mysqli_stmt_execute($stmt)) {
                echo "Post submitted. You will be redirected to the display posts page in 2 seconds.";
                // Redirect to the display posts page after a delay of 2 seconds
                header("refresh:2;url=display_posts.php");
            } else {
                echo "Error: " . mysqli_error($conn);
            }

            mysqli_stmt_close($stmt);
        } else {
            echo "Error: " . mysqli_error($conn);
        }

        mysqli_close($conn);
    }
}
?>
