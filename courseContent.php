<?php
  // Connect to the database
  require_once('connection.php');

  // Get the postTitle from the URL query string
  $postTitle = $_GET['postTitle'];

  // Escape the postTitle to prevent SQL injection attacks
  $postTitle = mysqli_real_escape_string($conn, $postTitle);

  // Query the database for the postContent based on the postTitle
  $sql = "SELECT postContent FROM message WHERE postTitle = '$postTitle'";
  $result = mysqli_query($conn, $sql);

  // Check if the query returned any results
  if ($result !== false && mysqli_num_rows($result) > 0) {
    // Fetch the postContent from the query result
    $row = mysqli_fetch_assoc($result);
    $postContent = $row['postContent'];
  } else {
    // If no results were found, set the postContent to a default value
    $postContent = 'No content found.';
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Course Content</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }
    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }
    h1 {
      font-size: 36px;
      color: #333;
      margin-bottom: 20px;
    }
    p {
      font-size: 18px;
      color: #666;
      line-height: 1.5;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1><?php echo $postTitle; ?></h1>
    <p><?php echo $postContent; ?></p>
  </div>
</body>
</html>