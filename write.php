<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="this is a wonderful site for nullexpo">
    <meta name="author" content="Dennis Kibet">
    <meta name="email" content="nullexpo@gmail.com">
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="feed" />
    <meta property="og:title" content="nullexpo the site where technology grows" />
    <meta property="og:description" content="Everything concerning technology, computer science, networking, programming and football." />
    <meta property="og:url" content="https://nullexpo.com" />
    <meta property="og:site_name" content="nullexpo" />
    <meta property="og:image" content="./assets/images/arsenal.jpg" />   
    <meta property="og:image:width" content="1600" />
    <meta property="og:image:height" content="840" />
    <title>nullexpo</title>
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/images/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="./assets/images/favicon_io/site.webmanifest">
    <link rel="stylesheet" href="./assets/css/global.css">
    <!-- <link rel="stylesheet" href="./assets/css/header.css"> -->
    <link rel="stylesheet" href="./assets/css/write.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-5.0.8/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-5.0.8/css/fontawesome.min.css">
</head>
<body>
<?php include "./inc/header.php"; ?>
    <!-- <header class="header">
        <div class="logo">
            <a href="./index.html"><h2>nullexpo</h2></a>
        </div>
        <form action="" class="searchform">
            <input type="text" placeholder="Search..">
        </form>
        <nav class="nav">
            
            <ul id="nav">
                <li><a href="./index.html">Home</a></li>
                <li><a href="./about.html">About</a></li>
                <li><a href="./services.html">Services</a></li>
                <li><a href="./design.html">Design</a></li>
                <li><a href="./streams.html">Streams</a></li>
                <li><a href="./write.html">Write</a></li>
                <li><a href="./contact.html">Contact us</a></li>
            </ul>
            <i class="mobileres fas fa-bars" id="bars" onclick="mobile()"></i>
            <i class="fas fa-times" id="times" onclick="closenav()"></i>
        </nav>
    </header> -->
    <div class="content">
        <form class="writeform" action="write.php" method="POST" enctype="multipart/form-data">
            <h2>Write something inspiring.</h2>
            <div class="writetools">
                <div class="helpers">
                    <!-- <i class="fas fa-file-image"></i> -->
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <i class="fas fa-file-audio"></i>
                    <i class="fas fa-file-video"></i>
                    <i class="fas fa-file-pdf"></i>
                    <i class="fas fa-file-excel"></i>
                    <i class="fas fa-file-powerpoint"></i>
                    <i class="fas fa-file-word"></i>
                    <i class="fas fa-file-archive"></i>
                </div>
                <div id="onit" style="width: 100%;">
                <style>
                    .titlewrite{
                        width: 100%;
                        outline: none;
                        border: none;
                        border-radius: 5px;
                        padding: 10px;
                        background-color: rgb(232, 232, 232);
                        margin-bottom: 10px;
                    }
                </style>
                <input type="text" placeholder="Title" class="titlewrite" name="title">               
                <textarea name="article" id="article" placeholder="Type your Article here.."></textarea>
                </div>
                
            </div>
            <button type="submit" name="submit">post</button>
        </form>
        <div class="writeaccount">
            <button class="writeregister">Sign up</button>
            <button class="writelogin">Sign in</button>
        </div>
    </div>
    <footer class="footer">
        <div class="footertop">
            <div class="topleft">
                <h3>nullexpo the best place where standards are kept</h3>
            </div>
            <div class="topright">
                <div class="subscribe">
                    <form action="">
                        <h4>keep upto date on nullexpo</h4>
                        <p>with our hand-crafted weekly newsletter</p>
                        <input type="email" placeholder="nullexpo@gmail.com">
                        <button>subscribe</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="footerbottom">
            <div class="flinkone">
                <h3>SUPPORT</h3>
                <ul>
                    <li><a href="">FAQs <span>(Help)</span></a></li>
                    <li><a href="">Docs <span>(Documentation)</span></a></li>
                    <li><a href="">T & Cs <span>(Our terms)</span></a></li>
                </ul>
            </div>
            <div class="flinkone">
                <h3>COMPANY</h3>
                <ul>
                    <li><a href="">About</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </div>
            <div class="flinkone">
                <h3>JOIN</h3>
                <ul>
                    <li><a href="">Sign in</a></li>
                    <li><a href="">Sign up</a></li>
                </ul>
            </div>
            <div class="flinkone">
                <h3>MORE</h3>
                <ul>
                    <li><a href="">Design</a></li>
                    <li><a href="">Photography</a></li>
                    <li><a href="">Football <span>(Streams)</span></a></li>
                    <li><a href="">Movies <span>(Downloads, Latests)</span></a></li>
                </ul>
            </div>
        </div>
        <div class="copyright">
            <p>copyright &copy; 2021 | <a href="./index.html">nullExpo</a></p>
        </div>
    </footer>
    <div class="back-to-top">
        <a href="#content">
            <svg width="36" height="36" viewBox="0 0 100 100">
                <path fill="rgb(255, 89, 0)" d="m50 0c-13.262 0-25.98 5.2695-35.355 14.645s-14.645 22.094-14.645 35.355 5.2695 25.98 14.645 35.355 22.094 14.645 35.355 14.645 25.98-5.2695 35.355-14.645 14.645-22.094 14.645-35.355-5.2695-25.98-14.645-35.355-22.094-14.645-35.355-14.645zm20.832 62.5-20.832-22.457-20.625 22.457c-1.207 0.74219-2.7656 0.57812-3.7891-0.39844-1.0273-0.98047-1.2695-2.5273-0.58594-3.7695l22.918-25c0.60156-0.61328 1.4297-0.96094 2.2891-0.96094 0.86328 0 1.6914 0.34766 2.293 0.96094l22.918 25c0.88672 1.2891 0.6875 3.0352-0.47266 4.0898-1.1562 1.0508-2.9141 1.0859-4.1133 0.078125z"></path>
            </svg>
        </a>        
    </div>
    <script src="./assets/js/main.js"></script>
</body>
</html>
<?php
 //&& !empty($_SESSION['email'])
 if(!isset($_SESSION)) 
 { 
     session_start(); 
 }
include "./member/db/config.php";
if(isset($_POST['submit'])){
    if($_SESSION['logged_in'] == true && !empty($_SESSION['email'])){
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $article = mysqli_real_escape_string($conn, $_POST['article']);
        $email = $_SESSION['email'];
        $result = mysqli_query($conn, "SELECT Username FROM users WHERE Email = '$email'");
        $row = mysqli_fetch_array($result);
        $username = $row['Username'];
        //form picture upload
        $target_dir = "./inc/uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
        }

        // Check if file already exists
        if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
        }

        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
        }
        $sql = "INSERT INTO articles(Username,Email,Title,Content)VALUES('$username','$email','$title','$article')";
        if($conn->query($sql)){
            $msg = "Your article have been successfully posted";
        }
    } else {
        $msg = "Please Login to POST your article";
    }
    
}
?>