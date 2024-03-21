<?php
include_once("submit_post.php"); // Include the script that handles post submission

// Connect to the database
$host = "localhost";
$dbname = "message_db";
$username = "root";
$password = "";

$connection = mysqli_connect($host, $username, $password, $dbname);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch data from the "message" table
$sql = "SELECT * FROM message";
$result = mysqli_query($connection, $sql);

if ($result) {
    $message = mysqli_fetch_all($result, MYSQLI_ASSOC);
}

mysqli_close($connection);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Posts</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
 
    <div id="post-container">
        
    
    </div>

    <div
            class="u-align-left u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-white u-list-item-1"
            data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
            <div class="u-container-layout u-similar-container u-container-layout-1">
              <div alt="" class="u-image u-image-circle u-image-1" data-image-width="598" data-image-height="598"></div>
              <div
                class="u-container-style u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-group-1">
                <div class="u-container-layout">
                  <p class="u-align-left u-text u-text-grey-30 u-text-2"></p>
                  <h3 class="u-align-left u-custom-font u-font-raleway u-text u-text-palette-1-base u-text-3">Python
                  </h3>
                  <p class="u-align-left u-text u-text-body-color u-text-4">This comprehensive Python programming course
                    is designed to take you from a complete beginner to a proficient Python developer.</p>
                  <div class="u-social-icons u-spacing-30 u-social-icons-1">
                    <a href="blog/blog.html"
                      class="u-border-2 u-border-grey-75 u-btn u-btn-round u-button-style u-hover-palette-4-dark-1 u-palette-1-base u-radius-34 u-btn-4">Start
                      course</a>

                  </div>
                </div>
              </div>
            </div>
          </div>










































































    <script>
        // Assuming that you have the $message array from PHP
        var message = <?php echo json_encode($message); ?>;
        
        var postContainer = document.getElementById("post-container");

        // Loop through the message array and create HTML elements for each post
        message.forEach(function(post) {
            var postElement = document.createElement("div");
            var titleElement = document.createElement("h2");
            var contentElement = document.createElement("p");
            
            titleElement.innerText = post.postTitle;
            contentElement.innerText = post.postContent;
            
            postElement.appendChild(titleElement);
            postElement.appendChild(contentElement);
            
            postContainer.appendChild(postElement);
        });
    </script>
</body>
</html>
