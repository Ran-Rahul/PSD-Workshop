<?php
        require_once('connection.php');
        $sql = "SELECT * FROM message";
        $all_message = $conn->query($sql);
 ?>


 <!DOCTYPE html>
 <html lang="en">
 <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    

  <meta name="theme-color" content="#25797c">
  <meta property="og:title" content="Home">
  <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/">
    <title>display_posts</title>


   
    
    <style>
      .header {
            
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }
        .header h1 {
            font-size: 24px;
            margin: 0;
        }
        .course-card {
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            width: 300px;
            margin: 10px;
            display: inline-block;
        }
        .course-image {
            border: 2px solid #333;
            border-radius: 50%;
            width: 150px;
            height: 150px;
            margin: 0 auto 10px;
            overflow: hidden;
        }
        .course-card {
            padding: 20px;
        }
        .course-card {
  padding: 20px;
  border: 1px solid #ccc;
}
.course-image {
    margin-bottom: 10px;
}
.course-card h2 {
    font-size: 24px;
    color: #333;
}
.course-card {
    padding: 20px;
    border: 1px solid #ccc;
    background-color: #fff;
}

        
    </style>


</head>
<body>
<div class="header">
    <button class="header-button">Home</button>
    <h1>Here the user added courses</h1>
    <main> 
        <?php 
            while($row = mysqli_fetch_assoc($all_message)){
                ?>
  
    <div class="course-card">
        <div class="course-image">
            <img src="course_image.jpg" alt="Course Image">
        </div>
        <h2> <?php echo $row["postTitle"]; ?> </h2>
        <a href="courseContent.php?postTitle=<?php echo $row["postTitle"]; ?>">
  <button class="start-button">Start Course</button>
</a>
    </div>














            <?php
            } ?>
            </main>

</body>
</html>

  