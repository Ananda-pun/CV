<?php
    include ('include/dbconnect.php');
    $select = "SELECT * FROM user ";

    $result = $con->query($select);

    $row = $result->fetch_assoc();

   
    $dob = new DateTime($row['DOB']);
    $today = new Datetime(date('y.m.d.'));
    $age = $today->diff($dob)->y;
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- box icons css -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header class="header">
        <a href="#" class="logo">Portfolio</a>
        
        <i class='bx bx-menu' id = "menu-icon"></i>

        <nav class="navbar">
            <a href="#home" class="active">Home</a>
            <a href="#about">About</a>
            <a href="#services">Services</a>
            <a href="#portfolio">Portfolio</a>
            <a href="#contact">Contact</a>
        </nav>

    </header>

    <!-- Home section design -->
    <section class="home" id = "home">
        <div class="home-content">
            <h3>Hello, It's Me</h3>
            <h1>Ananda Pun</h1>
            <h3>And I'm a <span class="multiple-text"></span></h3>
            <p>As a passionate and dedicated programmer I love tackling complex challenges and creating innovative solutions. I stay updated with the latest technologies to deliver top-notch applications. My focus on high-quality code and user-friendly experiences sets me apart. I am a lifelong learner, always exploring new ways to improve and contribute to the world of software development.</p>
            <p><span>I belief in : 'two heads are better than one'.</span></p>
            <div class="social-media">
                <?php 
                    if($row['facebook']){
                        echo "<a href='" . $row['facebook'] . "' target = 'blank'><i class='bx bxl-facebook'></i></a>";
                    }
                    if($row['instagram']){
                        echo "<a href='".$row['instagram']."' target = 'blank'><i class='bx bxl-instagram-alt' ></i></a>";
                    }
                ?>
                <a href="" target = 'blank'><i class='bx bxl-twitter'></i></a>
                <a href="" target = 'blank'><i class='bx bxl-linkedin' ></i></a>
            </div>
            <a href="" class="btn">Download CV</a>
        </div>
        <div class="home-img">
            <img src="images/profile.png"  alt="">
        </div>
    </section>

    <!-- about myself section design -->
    <section class="about" id="about">
        <div class="about-img">
            <img src="images/about.png" alt="">
        </div>
        <div class="about-content">
            <h2 class="heading">About <span>Me</span></h2>
            <h3>Full Stack Developer</h3>
            
            <div class="details">
                <p>Name: <?=$row['name'] ?> <br>
                    Age: <?php echo $age." years"; ?> <br>
                    Location: <?=$row['address'] ?>
                </p>
            </div>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam minus maxime dolorem nam.</p>
            <a href="#" class="btn">Read More</a>
        </div>
    </section>

    <!-- services section design -->
    <section class="services" id="services">
        <h2 class="heading">My <span>Services</span></h2>
        <div class="services-container">
            <div class="services-box">
                <i class='bx bx-code-alt'></i>
                <h3>Web Developement</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores, odio ipsam! Cumque doloribus nisi asperiores error explicabo distinctio, quis sed?
                </p>
                <a href="#" class="btn">Read More</a>   
            </div>

            <div class="services-box">
                <i class='bx bxs-paint' ></i>
                <h3>Graphic design</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores, odio ipsam! Cumque doloribus nisi asperiores error explicabo distinctio, quis sed?
                </p>
                <a href="#" class="btn">Read More</a>
            </div>

            <div class="services-box">
                <i class='bx bx-bar-chart' ></i>
                <h3>Digital Marketing</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores, odio ipsam! Cumque doloribus nisi asperiores error explicabo distinctio, quis sed?
                </p>
                <a href="#" class="btn">Read More</a>
            </div>
        </div>
    </section>

    <!-- portfolio section design -->
    <section class="portfolio" id="portfolio">
        <h2 class="heading">Latest <span>Project</span></h2>

        <div class="portfolio-container">
            <div class="portfolio-box">
                <img src="images/portfolio1.jpg" alt="">
                <div class="portfolio-layer">
                    <h4>Question HUB</h4>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat, eveniet?</p>
                    <a href=""> <i class='bx bx-link-external' ></i></a>
                </div>
            </div>

            <div class="portfolio-box">
                <img src="images/portfolio2.jpg" alt="">
                <div class="portfolio-layer">
                    <h4>Graphic Design</h4>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat, eveniet?</p>
                    <a href=""> <i class='bx bx-link-external' ></i></a>
                </div>
            </div>

            <div class="portfolio-box">
                <img src="images/portfolio3.jpg" alt="">
                <div class="portfolio-layer">
                    <h4>Graphic Design</h4>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat, eveniet?</p>
                    <a href=""> <i class='bx bx-link-external' ></i></a>
                </div>
            </div>

            <div class="portfolio-box">
                <img src="images/portfolio4.jpg" alt="">
                <div class="portfolio-layer">
                    <h4>Graphic Design</h4>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat, eveniet?</p>
                    <a href=""> <i class='bx bx-link-external' ></i></a>
                </div>
            </div>

            <div class="portfolio-box">
                <img src="images/portfolio5.jpg" alt="">
                <div class="portfolio-layer">
                    <h4>Graphic Design</h4>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat, eveniet?</p>
                    <a href=""> <i class='bx bx-link-external' ></i></a>
                </div>
            </div>

            <div class="portfolio-box">
                <img src="images/portfolio6.jpg" alt="">
                <div class="portfolio-layer">
                    <h4>Graphic Design</h4>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat, eveniet?</p>
                    <a href=""> <i class='bx bx-link-external' ></i></a>
                </div>
            </div>

        </div>
    </section>

    <!-- contact section design -->
    <section class="contact" id="contact">
        <h2 class="heading">Contact <span>Me!</span></h2>

        <form action="">
            <div class="input-box">
                <input type="text" name = "name" placeholder="Full Name">
                <input type="text" name ="email" placeholder="Email Address">
            </div>
            <div class="input-box">
                <input type="number" name = "number" placeholder="Mobile Number">
                <input type="text" name = "subject" placeholder="Email Subject">
            </div>

            <textarea name="" id="" cols="30" rows="10" name = "message" placeholder="Your Message"></textarea>
            <input type="submit"  value="Send Message " class = "btn" name = "submit">

        </form>
    </section>

    <!-- footer section design -->
    <footer class="footer">
        <div class="footer-text">
            <p>Copyright &copy; <span id="year"> </span>
                <script>
                    var currnetYear= (new Date()).getFullYear();
                    document.getElementById('year').innerHTML = currnetYear;
                </script>
                by Ananda Pun | All rights reserved.
            </p>
        </div>
        <div class="footer-iconTop">
            <a href="#home"> <i class='bx bx-up-arrow-alt'></i></a>
        </div>
    </footer>

    <!-- scroll reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!--typed js  -->
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>


    <!-- Custom js -->
    <script type="text/javascript" src="js/script.js"> </script>
</body>
</html>