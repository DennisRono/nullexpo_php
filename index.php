<?php
// session_start();
// if (empty($_SESSION['logged_in']) || $_SESSION['logged_in'] != true) {
// 	header('Location: member/login.php');
// }


?>

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
    <link rel="stylesheet" href="./assets/css/content.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <link rel="stylesheet" href="./assets/css/feed.css">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-5.0.8/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-5.0.8/css/fontawesome.min.css">
</head>
<body>
<?php include "./inc/header.php"; ?>
    <!-- <header class="header" id="navbar">
        <div class="logo">
            <a href="./index.html"><h2>nullExpo</h2></a>
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
            <i class="mobileres fas fa-bars" id="bars" onclick="mobile()"><a href="#content"></a></i>
            <i class="fas fa-times" id="times" onclick="closenav()"><a href="#content"></a></i>
        </nav>
    </header> -->
    <div id="content" class="content" style="overflow: visible;">
        <div class="jumbotron">
            <div class="jumbimage">
                <img src="./assets/images/jumbo.jpg" alt="Image">
            </div>
            <div class="jumbtext">
                <?php
                 $con=mysqli_connect("localhost","root","","nullexpo");
                 $result = mysqli_query($con,"SELECT Username,Email,Title,Content FROM articles");
                 $row = mysqli_fetch_array($result)?>
                <span><a href="">GAP</a></span>
                <h2><a href=""><?php echo $row['Title'] ?></a></h2>
                <div class="snippet">
                    <p><?php $cont = $row['Content']; $len = 210; $append = '...'; (strlen($cont)>$len)?$yoh = substr($cont, 0, $len-strlen($append)).$append: $yoh = $cont; echo $yoh; ?></p>
                </div>
                <div class="jumbauthor">
                    <a href=""><img src="./assets/images/author.jpg" alt="Avatar"></a>
                    <a href=""><p class="authorname">Benn Kaiser</p></a>
                    <p style="margin-right: 10px;">on</p>
                    <p datetime="">May 5th 2021</p>
                </div>
            </div>
        </div>     
    </div>
    <div class="feed">
        <div class="feedmain">
            <?php
             $con=mysqli_connect("localhost","root","","nullexpo");
             $result = mysqli_query($con,"SELECT Username,Email,Title,Content FROM articles");
             if($row = mysqli_fetch_array($result)){
             //while ( $row = mysqli_fetch_array($result) ) :
             for ($i=0; $i < 10; $i++) { ?>
            <div class="feedone" style="margin-bottom: 20px;">
                <img src="./assets/images/arsenal.jpg" alt="Image">
                <div class="feedtexts">
                    <span class="feedtags"><?php echo $row['Email']?></span>
                    <h2 class="feedtitle"><?php echo $row['Title']?></h2>
                    <p><?php $cont = $row['Content']; $len = 210; $append = '...'; (strlen($cont)>$len)?$yoh = substr($cont, 0, $len-strlen($append)).$append: $yoh = $cont; echo $yoh; ?></p>
                    <img src="./assets/images/woman.jpg" alt="Avatar">
                    <!-- //$cont = (strlen($cont) > 2) ? substr($cont,0,10).'...': $cont; echo $cont; -->
                    <span><a href=""><?php echo $row['Username']?></a></span>
                    <span>on</span>
                    <span>May 2nd 2021</span>
                </div>
            </div>
            <?php }}  ?>
            <!-- <div class="feedone">
                <img src="./assets/images/programming.jpg" alt="Image">
                <div class="feedtexts">
                    <span class="feedtags">programming</span>
                    <h2 class="feedtitle">Lorem ipsum dolor sit amet.</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi voluptatibus rem libero sequi repellat, iusto hic, placeat quos cum id laboriosam culpa, illum explicabo quisquam eligendi? In quae porro vel facere. Iste natus ducimus modi.</p>
                    <img src="./assets/images/author.jpg" alt="Avatar">
                    <span><a href="">Anreas Pirlo</a></span>
                    <span>on</span>
                    <span>May 2nd 2021</span>
                </div>
            </div> -->
        </div>
        <div class="feedsidebar">
            <div class="sidebarone">
                <h2 class="sidebarheader">Popular</h2>
                <ul>
                    <li><a href="">Technology</a></li>
                    <li><a href="">Agriculture</a></li>
                    <li><a href="">Networking</a></li>
                    <li><a href="">Health</a></li>
                </ul>
            </div>
            <div class="sidebartwo">
                <h2 class="sidebarheader">Tags</h2>
                <ul>
                    <li><a href="">Technology</a></li>
                    <li><a href="">Agriculture</a></li>
                    <li><a href="">Networking</a></li>
                    <li><a href="">Health</a></li>
                </ul>
            </div>
            <div class="ad">
                <img src="./assets/images/yellow.jpg" alt="ad">
                <h4>Lorem ipsum dolor sit amet.</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, natus!</p>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="footertop">
            <div class="topleft">
                <h3>nullexpo the best place where standards are kept</h3>
            </div>
            <div class="topright">
                <div class="subscribe">
                    <form action="./inc/subscribe.php" method="POST">
                        <h4>keep upto date on nullexpo</h4>
                        <p>with our hand-crafted weekly newsletter</p>
                        <input type="email" placeholder="nullexpo@gmail.com" name="email" required>
                        <button type="submit" name="submit">subscribe</button>
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