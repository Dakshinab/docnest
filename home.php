<?php
// Show success message if form was submitted
$success = false;
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $conn = new mysqli("localhost", "root", "", "docnest");
    if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

    $name = $_POST["name"];
    $email = $_POST["email"];
    $contact_no = $_POST["contact_no"];

    $stmt = $conn->prepare("INSERT INTO `touch with us` (name, email, contact_no) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $contact_no);
    if ($stmt->execute()) $success = true;

    $stmt->close();
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

    <!--dont link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!--Custom css link-->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php if ($success): ?>
    <div id="notification">Submitted successfully!</div>
<?php endif; ?>

     
<!-- Header section starts-->

<section class="header">

   <a href="home.php" class="logo">
    <img src="images/docnest.png" alt="Docnest Logo">
    <span>docnest</span>
</a>


    <nav class="navbar">
        <a href="home.php">Home</a>
        <a href="about.php">About</a>
        <div class="dropdown">
    <a href="services.php">Services <i class="fas fa-caret-down"></i></a>
    <div class="dropdown-content">
        <a href="services/payroll.php">Smart Payroll Management</a>
        <a href="services/recruitment.php">Recruitment & Onboarding</a>
        <a href="services/cida.php">CIDA Fast Track</a>
        <a href="services/building.php">Building Projects</a>
        <a href="services/hr.php">HR Management</a>
        <a href="services/it.php">Information Technology</a>
        <a href="services/tourism.php">Tourism Consulting</a>
        <a href="services/legal.php">Legal Advisory</a>
        <a href="services/marketing.php">Marketing Strategy</a>
        <a href="services/finance.php">Financial Planning</a>
        <a href="services/training.php">Employee Training</a>
        <a href="services/audit.php">Compliance & Audit</a>
    </div>
</div>
        <a href="project.php">Project</a>
        <a href="blogs.php">Blogs</a>
        <a href="contact.php">Contact</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- Header section ends-->

<!-- Home section starts-->

<section class="home">

    <div class="swiper home-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide" style="background:url(images/onenest.JPG) no-repeat">
                <div class="content">
                    <span>Join us & Success Together </span>
                    <h3>one nest & Endless expertise</h3>
                    <a href="about.php" class="btn">discover more</a>  
                </div>
            </div>

            <div class="swiper-slide slide" style="background:url(images/job.JPG) no-repeat">
                <div class="content">
                    <span>Join us & Success Together </span>
                    <h3>it's our job to help you</h3>
                    <a href="services.php" class="btn">discover more</a>  
                </div>
            </div>

            <div class="swiper-slide slide" style="background:url(images/unlimited.JPG) no-repeat">
                <div class="content">
                    <span>Join us & Success Together </span>
                    <h3>Your vision. our mission. unlimited support</h3>
                    <a href="project.php" class="btn">discover more</a>  
                </div>
            </div>
        </div>

    </div>

    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>

</section>

<!-- Home section ends-->
















<!-- services section starts-->

<section class="services">

    <h1 class="heading-title"> our services </h1>

    <div class="box-container">

        <a href="services/payroll.php" class="box">
            <img src="images/money.PNG" alt="">
            <h3>smart payroll management</h3>
        </a>

        <a href="services/recruitment.php" class="box">
            <img src="images/work.PNG" alt="">
            <h3>recruitment & onboard solutions</h3>
        </a>

        <a href="services/cida.php" class="box">
            <img src="images/blocks.PNG" alt="">
            <h3>CIDA fast track</h3>
        </a>

        <a href="services/building.php" class="box">
            <img src="images/build.PNG" alt="">
            <h3>Building Projects</h3>
        </a>

        <a href="services/hr.php" class="box">
            <img src="images/user.PNG" alt="">
            <h3>Human Resource management</h3>
        </a>

        <a href="services/it.php" class="box">
            <img src="images/computer.PNG" alt="">
            <h3>Information Technology</h3>
        </a>
    </div>
    <div class="services-more-btn">
        <a href="services.php" class="btn">more details</a>
    </div>


</section>

<!-- services section ends-->


<!-- Home about section starts-->

<section class="home-about">

    <div class="image">
        <img src="images/about.JPEG" alt="">
    </div>

    <div class="content">
        <h3>about us</h3>
        <p>At Docnest we are a multidisciplinary consultancy firm committed to delivering smart, strategic, and sustainable solutions across key industries — Human Resources, Information Technology, Construction, and Tourism.</p>
        <a href="about.php" class="btn">read more</a>
    </div>

</section>

<!-- Home about section ends-->

<!-- Home teams section starts-->

<section class="home-teams">

    <h1 class="heading-title"> Our Team </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="images/ceo.JPG" alt="">
            </div>
            <div class="content">
                <h3>CEO</h3>
                <p>Our CEO drives the company's vision, ensuring innovation and growth. With strong leadership, they guide strategic decisions and inspire the entire team toward long-term success.</p>
                <a href="about.php#our-team" class="btn"> More</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/project.JPG" alt="">
            </div>
            <div class="content">
                <h3>Project manager</h3>
                <p>The Project Manager oversees planning, execution, and delivery of key projects. They coordinate teams, manage timelines, and ensure every task meets quality standards and client expectations.</p>
                <a href="about.php#our-team" class="btn"> More</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/executive.JPG" alt="">
            </div>
            <div class="content">
                <h3>Executive</h3>
                <p>An Executive supports core operations and decision-making. They handle key communications, assist leadership, and ensure smooth execution of day-to-day business functions across departments.</p>
                <a href="about.php#our-team" class="btn"> More</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/hr.JPEG" alt="">
            </div>
            <div class="content">
                <h3>HR consultant</h3>
                <p>Expert in organizational development, workforce strategy, and compliance advisory services.</p>
                <a href="about.php#our-team" class="btn"> More</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/software.JPEG" alt="">
            </div>
            <div class="content">
                <h3>Software architect</h3>
                <p>Designs scalable systems and leads full-stack development for enterprise solutions.</p>
                <a href="about.php#our-team" class="btn"> More</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/site.JPEG" alt="">
            </div>
            <div class="content">
                <h3>Site engineer</h3>
                <p>Oversees on-site construction, quality control, and safety compliance on building projects.</p>
                <a href="about.php#our-team" class="btn"> More</a>
            </div>
        </div>

    </div>

</section>
<!-- Home teams section ends-->


<!-- Home offer section starts-->
<section class="home-touch">
    <div class="content">
        <h3>Touch With us</h3>
        <p>If you are interested in working with us, please fill out the form below and provide your details with us. We will contact you soon. Thank you!</p>

        <form method="post" action="">
            <input type="text" name="name" placeholder="Your name" class="input-box" required>
            <input type="email" name="email" placeholder="Your email" class="input-box" required>
            <input type="text" name="contact_no" placeholder="Your contact number" class="input-box" required>
            <input type="submit" name="submit" value="Submit" class="btn">
        </form>
    </div>
</section>


<!-- Home offer section ends-->







<!--footer section start-->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="home.php"><i class="fas fa-angle-right"></i> Home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i> About</a>
            <a href="services.php"><i class="fas fa-angle-right"></i> Services</a>
            <a href="project.php"><i class="fas fa-angle-right"></i> Project</a>
            <a href="blogs.php"><i class="fas fa-angle-right"></i> Blogs</a>
            <a href="contact.php"><i class="fas fa-angle-right"></i> Contact</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#"><i class="fas fa-angle-right"></i> Ask Questions</a>
            <a href="#"><i class="fas fa-angle-right"></i> About us</a>
            <a href="#"><i class="fas fa-angle-right"></i> Privacy policy</a>
            <a href="#"><i class="fas fa-angle-right"></i> Terms of use</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#"><i class="fas fa-phone"></i> +123-456-7890</a>
            <a href="#"><i class="fas fa-phone"></i> +111-222-7777</a>
            <a href="#"><i class="fas fa-envelope"></i> xxxxxxxx@gmail.com</a>
            <a href="#"><i class="fas fa-map"></i>Colombo, Sri Lanka</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#"><i class="fas fa-facebook"></i> facebook</a>
            <a href="#"><i class="fas fa-twitter"></i> twitter</a>
            <a href="#"><i class="fas fa-instagram"></i> instagram</a>
            <a href="#"><i class="fas fa-linkedin"></i> linkedin</a>
        </div>

    </div>

    <div class="credit"> Created by <span> docnest team</span> | All rights reserved! </div>


</section>


<!-- swiper js link-->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!--Js link-->
<script src="script.js"></script>
    
</body>
</html>
