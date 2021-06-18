<?php
  session_start();
  if(empty($_SESSION['logged_in'])){
    $_SESSION['logged_in'] = false;
  }
?>
<style>
a {
  text-decoration: none;
  color: inherit;
}

li {
  list-style: none;
}

h1, h2, h3, h4, h5, h6 {
  margin: 0px;
  padding: 0px;
}

header {
  background-color: #2c77e9;
  min-height: 60px;
  max-height: 80px;
}

header .containerone {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  margin-left: 5%;
  margin-right: 5%;
  padding-top: 17px;
}

header .containerone .logo h2 {
  color: #fff;
}

header .containerone .hsearch form {
  margin-top: -3px;
}

header .containerone .hsearch form .isearch {
  border: none;
  border-radius: 10px;
  outline: none;
  padding: 7px;
  padding-left: 10px;
  width: 350px;
}

header .containerone .hsearch form .bsearch {
  padding: 5px;
  border: none;
  border-radius: 10px;
  outline: none;
  margin-left: -56px;
  background-color: #fc992f;
}

header .containerone .hnav nav {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}

header .containerone .hnav nav ul {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  margin: 0px;
  padding: 0px;
  padding-right: 15px;
}

header .containerone .hnav nav ul li a {
  padding: 10px;
  padding-top: 13px;
  text-transform: uppercase;
  color: #fff;
  cursor: pointer;
}

header .containerone .hnav nav .member {
  margin-top: -5px;
}

header .containerone .hnav nav .member .join {
  background-color: transparent !important;
  color: #fff;
  outline: none;
  border: 1px solid blueviolet;
  width: 100%;
  border-radius: 5px;
  padding: 3px;
  margin: 5px 0px;
  cursor: pointer;
  width: 80px;
}

header .containerone .hnav nav .member .enter {
  width: 100px;
  padding: 7px;
  outline: none;
  border: none;
  border-radius: 5px;
  background-color: blueviolet;
  color: #fff;
  cursor: pointer;
}
/* .content{
  padding-top: 60px;
} */

.sticky {
  width: 100% !important;
  position: fixed;
  top: 0px;
  z-index: 600;
}
.content{
  padding-top: 60px;
}
.sticky + .content {
  padding-top: 60px;
}
/*# sourceMappingURL=header.css.map */
</style>
    <header class="header">
        <div class="containerone">
            <div class="logo">
                <h2>nullexpo</h2>
            </div>
            <div class="hsearch">
                <form action="search.php" method="post">
                    <input type="text" placeholder="Search" class="isearch">
                    <input type="submit" value="Search" class="bsearch">
                </form>
            </div>
            <div class="hnav">
                <nav>
                    <ul>
                    <li><a href="./index.php">Home</a></li>
                  <li><a href="./about.php">About</a></li>
                  <li><a href="./services.php">Services</a></li>
                  <li><a href="./streams.php">Streams</a></li>
                  <li><a href="./write.php">Write</a></li>
                  <li><a href="./contact.php">Contact us</a></li>
                        <!-- <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="stream.php">Stream</a></li>
                        <li><a href="write.php">Write</a></li>
                        <li><a href="contact.php">Contact Us</a></li> -->
                    </ul>
                    <div class="member">
                      <?php if($_SESSION['logged_in'] == false || empty($_SESSION)){?>
                        <a href="./member/register.php"><button class="join">Sign up</button></a>
                        <a href="./member/login.php"><button class="enter">Sign in</button></a>
                      <?php } ?>
                    </div>
                </nav>
            </div>
        </div>       
    </header>
    <script>
        // When the user scrolls the page, execute myFunction
        window.onscroll = function() {myFunction()};

        // Get the navbar
        var navbar = document.querySelector('.header');

        // Get the offset position of the navbar
        var sticky = navbar.offsetTop;

        // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
        function myFunction() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky");
        } else {
            navbar.classList.remove("sticky");
        }
        }
    </script>