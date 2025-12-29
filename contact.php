<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact | Docnest</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

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
        <a href="contact.php" class="active">Contact</a>
    </nav>
    <div id="menu-btn" class="fas fa-bars"></div>
</section>

<section class="heading" style="background:url(images/contact.jpg) no-repeat">
    <h1>contact us</h1>
</section>

<section class="contact-section">
    <div class="contact-container">
        <!-- Contact Info -->
        <div class="contact-info">
            <h3>Get in Touch</h3>
            <p>Have a question or ready to start your next project? Reach out to us and our team will respond within 24 hours.</p>
            
            <div class="info-box">
                <i class="fas fa-map-marker-alt"></i>
                <div>
                    <h4>Address</h4>
                    <p>123 Business Park, Colombo 04, Sri Lanka</p>
                </div>
            </div>
            
            <div class="info-box">
                <i class="fas fa-phone"></i>
                <div>
                    <h4>Phone</h4>
                    <p>+94 (0) 11 223 4567</p>
                    <p>+94 (0) 76 123 4567</p>
                </div>
            </div>
            
            <div class="info-box">
                <i class="fas fa-envelope"></i>
                <div>
                    <h4>Email</h4>
                    <p>info@docnest.lk</p>
                    <p>support@docnest.lk</p>
                </div>
            </div>
        </div>
        
        <!-- Contact Form -->
        <div class="contact-form">
            <h3>Send us a Message</h3>
            <form>
                <div class="form-group">
                    <input type="text" placeholder="Your Name" class="input-box" required>
                </div>
                
                <div class="form-group">
                    <input type="email" placeholder="Your Email" class="input-box" required>
                </div>
                
                <div class="form-group">
                    <input type="text" placeholder="Subject" class="input-box" required>
                </div>
                
                <div class="form-group">
                    <textarea placeholder="Your Message" class="input-box" rows="5" required></textarea>
                </div>
                
                <button type="submit" class="btn">Send Message</button>
            </form>
        </div>
    </div>
</section>

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