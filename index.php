<?php
include("config_connection.php");
if (!isUserConnected()){
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styling.css">
    <style>
        

/* Style for the navigation bar */
body{
    margin: 0;
    font-family: 'Arial', sans-serif;
    display: flex;
}
.header {
    position: absolute;
    top: 0;left: 0;
    background-color: #333;
    color: #fff;
    height: 10%;width: 100%;
}
.nav {
    position: absolute;
    right: 0px;top: 0;
    background-color: #333;
    padding: 5px;
    height: 10%;
}



.posts-section {
    position: absolute;
    background-color: #F1F1F1;
    top: 10%;left: 0;width: 100%;
    min-height: 90%;
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    padding: 20px;
}

.post-container {
    width: 50%;
    min-height: 50%;
    max-height: 50%;
    border: 1px solid #ccc;
    margin: 10px;
    padding: 10px;
    display: flex;
    align-self: center;
  }
  
  .user-avatar {
    margin-right: 10px;
  }
  
  .user-avatar img {
    width: 50px;
    height: 50px;
    border-radius: 50%;
  }
  
  .user-info {
    margin-bottom: 5px;
  }
  
  .post-text {
    font-weight: bold;
    margin-bottom: 10px;
  }
  
  .post-image {
      min-height: 40%;
      max-height: 40%;
      width: 60%;
  }
  
  .post-actions button {
    margin-right: 10px;
    padding: 5px 10px;
    cursor: pointer;
  }
  .post-content{
    width: 100%;
    height: 100%;
    align-items: center;
  }
/* Basic styling for the suggestion div */
.suggestion-container {
    position: absolute;
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
    background-color: #f0f0f0;
    padding: 10px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

/* Styling for the list of suggested people */
.suggested-people {
    list-style: none;
    padding: 0;
}

.suggested-people-item {
    margin-bottom: 16px;
    display: flex;
    align-items: center;
}

.profile-picture {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    margin-right: 10px;
}

/* Basic styling for the left-side menu */
.left-menu {
    position: fixed;
    left: 0;
    top: 0%;
    height: 40%;
    width: 150px;
    background-color: #2c3e50;
    color: #ecf0f1;
    padding: 20px;
    box-sizing: border-box;
    display: flex;
    flex-direction: column;
    transition: width 0.3s ease;
}

.left-menu:hover {
    width: 250px;
}

.menu-item {
    margin-bottom: 10px;
    transition: background-color 0.3s ease;
}

.menu-item a {
    color: #ecf0f1;
    text-decoration: none;
    display: block;
    padding: 10px;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.menu-item a:hover {
    background-color: #34495e;
}

/* Add more styles as needed */

/* Style for the main content */
.main-content {
    flex: 1;
    padding: 20px;
    box-sizing: border-box;
}
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>
<body>
    <div class="header">
    <h1 style="background-color:#333;position: relative;left:0;top:0;vertical-align: middle;margin-left:2%;">MClub</h1>
        

        <ul class="nav nav-tabs" style="position: absolute;right:20%;vertical-align: middle;">
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Clubs</a>
      <a class="dropdown-item" href="#">Events</a>
      <a class="dropdown-item" href="#">Students</a>
    </div>
  </li>
</ul>
<input style="position: absolute;right:2%;position:absolute;top:6%;" type="button" class="btn btn-outline-warning" value="Log out"/>
    
</div>

    <!-- Left-side menu div -->
    <div class="left-menu">
        <div class="menu-item">
            <a href="#">Home</a>
        </div>
        <div class="menu-item">
            <a href="#">About</a>
        </div>
        <div class="menu-item">
            <a href="#">Services</a>
        </div>
        <div class="menu-item">
            <a href="#">Contact</a>
        </div>
        <!-- Add more menu items as needed -->
    </div>

    <!-- Content div (adjust margin to accommodate the fixed menu) -->
    <div style="margin-left: 220px;">
        <!-- Your page content goes here -->
        <h1>Main Content</h1>
        <p>This is the main content of your page.</p>
    </div>
    
    <section class="posts-section">
        <div class="post-container">
            <div class="user-avatar">
                <!-- You can use an image tag or an icon for the user's avatar -->
                <img src="pic/pdp.png" alt="User Avatar">
            </div>
            <div class="post-content">
                <div class="user-info">
                <h5>User Name</h5>
                <p>Posted on January 1, 2023</p>
                </div>
                <p class="post-text">This is the post content. It can be a long text or a short message.</p>
                <img class="post-image" src="pic/pic.jpg" alt="Post Image">
                <div class="post-actions">
                <!-- Add like, comment, and other action buttons here -->
                <button class="like-btn">Like</button>
                <button class="comment-btn">Comment</button>
                </div>
            </div>
        </div>
        <div class="post-container">
            <div class="user-avatar">
                <!-- You can use an image tag or an icon for the user's avatar -->
                <img src="pic/pdp.png" alt="User Avatar">
            </div>
            <div class="post-content">
                <div class="user-info">
                    <h5>User Name</h5>
                    <p>Posted on January 1, 2023</p>
                </div>
                <p class="post-text">This is the post content. It can be a long text or a short message.</p>
                <img class="post-image" src="pic/bigpic.jpg" alt="Post Image">
                <div class="post-actions">
                    <!-- Add like, comment, and other action buttons here -->
                    <button class="like-btn">Like</button>
                    <button class="comment-btn" src>Comment</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Suggestion div with profile pictures and bios -->

    <div class="suggestion-container">
        <p>Suggested students:</p>
        <ul class="suggested-people">
            <li class="suggested-people-item">
                <img src="pic/p1.jpg" alt="John Doe" class="profile-picture">
                <div>
                    <strong>John Doe</strong>
                    <p>Designer. Creative. Adventurous.</p>
                </div>
            </li>
            <li class="suggested-people-item">
                <img src="pic/p2.jpg" alt="Jane Smith" class="profile-picture">
                <div>
                    <strong>Jane Smith</strong>
                    <p>Developer. Tech Enthusiast. Foodie.</p>
                </div>
            </li>
            <li class="suggested-people-item">
                <img src="pic/p1.jpg" alt="Bob Johnson" class="profile-picture">
                <div>
                    <strong>Bob Johnson</strong>
                    <p>Writer. Nature Lover. Gamer.</p>
                </div>
            </li>
            <!-- Add more people as needed -->
        </ul>
    </div>

</body>
</html>