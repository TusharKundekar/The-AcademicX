<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Our Creative Info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
        }

        .navbar-brand img {
            height: 40px;
        }

        .hero-section {
            padding: 80px 0;
            background-color: #f3feff;
        }

        .hero-image {
            max-width: 100%;
            height: auto;
        }

        .search-box {
            max-width: 500px;
            margin: 2rem auto;
        }

        .custom-navbar {
            background: linear-gradient(to bottom, #ffffff, #f3f3f3);
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.1);
            border-radius: 0 0 175px 175px;
            /* Lower corners rounded */
            padding: 10px 20px;
        }

        .card-custom {
            border-radius: 15px;
            padding: 2rem;
            text-align: center;
            transition: transform 0.3s;
            height: 100%;
        }

        .card-custom:hover {
            transform: translateY(-5px);
        }

        .card-degree {
            background-color: var(--card-degree);
        }

        .card-competitions {
            background-color: var(--card-competitions);
        }

        .card-resume {
            background-color: var(--card-resume);
        }

        .navbar-nav .nav-link {
            color: black;
            font-weight: 600;
        }

        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link.active {
            color: #e67e22;
        }

        .page-title {
            text-align: center;
            padding: 40px 0;
            font-size: 2.5rem;
            font-weight: bold;
            color: #333;
        }

        .logo-section {
            text-align: center;
            margin-bottom: 50px;
        }

        .logo-section img {
            width: 200px;
            height: 200px;
            margin-bottom: 30px;
        }

        .mission-vision-container {
            display: flex;
            justify-content: center;
            gap: 100px;
            margin: 50px 0;
        }

        .mission-vision-box {
            text-align: center;
            max-width: 400px;
        }

        .mission-vision-box img {
            width: 100px;
            height: 100px;
            margin-bottom: 20px;
        }

        .stats-container {
            background: #f8f9fa;
            border-radius: 50px;
            padding: 20px;
            margin: 40px auto;
            max-width: 800px;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        .stat-item {
            text-align: center;
        }

        .stat-number {
            font-size: 2rem;
            font-weight: bold;
            color: #ff4d4d;
        }

        .services-section {
            padding: 50px 0;
        }

        .services-title {
            text-align: center;
            margin-bottom: 40px;
        }

        .service-card {
            text-align: center;
            padding: 20px;
            margin-bottom: 30px;
            transition: transform 0.3s;
        }

        .service-card:hover {
            transform: translateY(-5px);
        }

        .service-icon {
            font-size: 2.5rem;
            color: #ff4d4d;
            margin-bottom: 15px;
        }

        .since-text {
            text-align: center;
            color: #666;
            margin: 30px 0;
        }
        .footer {
            background-color: #000;
            color: #fff;
            padding: 40px 0 0 0;
        }
        
        .footer h3 {
            color: #fff;
            margin-bottom: 20px;
            font-size: 1.2rem;
            font-weight: bold;
        }
        
        .footer ul {
            list-style: none;
            padding: 0;
        }
        
        .footer ul li {
            margin-bottom: 10px;
        }
        
        .footer ul li a {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .footer ul li a:hover {
            color: #ff6b4a;
        }
        
        .click-more {
            color: #ff6b4a;
            text-decoration: none;
        }
        
        .shd{
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3);
        }

        .copyright {
            background-color: #000;
            padding: 20px 0;
            margin-top: 30px;
            border-top: 1px solid #333;
        }
        
        .social-icons a {
            color: #fff;
            margin-left: 15px;
            font-size: 18px;
            transition: color 0.3s;
        }
        
        .social-icons a:hover {
            color: #ff6b4a;
        }

    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg custom-navbar">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.html"><img class="logo" src="logo.png" height="120px" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php" role="button" aria-expanded="false">
                            HOME
                        </a>
                    </li>
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="pucDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            PUC
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="pucDropdown">
                            <li><a class="dropdown-item" href="#">Option 1</a></li>
                            <li><a class="dropdown-item" href="#">Option 2</a></li>
                        </ul>
                    </li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="degree.php" id="degreeDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            DEGREE
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="degreeDropdown">
                            <li><a class="dropdown-item" href="bca.php">BCA</a></li>
                            <li><a class="dropdown-item" href="bsc.php">BSC</a></li>
                        </ul>
                    </li>

                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#" id="libraryDropdown" role="button"
                        aria-expanded="false">
                            LIBRARY
                        </a>
                    </li> -->

                    <li class="nav-item">
                        <a class="nav-link" href="aboutus.php" role="button" aria-expanded="false">
                            ABOUT US
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactus.php" role="button" aria-expanded="false">
                        CONTACT US
                        </a>
                    </li>

                    <?php if (isset($_SESSION['user_id'])): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">LOGOUT</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="signup.php">REGISTER</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="login.php">LOGIN</a>
                        </li>
                    <?php endif; ?>


                </ul>
            </div>
        </div>
    </nav>

<div class="container">
    <h1 class="page-title">About us</h1>

    <div class="logo-section">
        <img src="about.png" alt="Company Logo" class="rounded-circle">
        <h2>OUR SHAPING FUTURES</h2>
        <p class="mt-3">
            Welcome to our comprehensive educational resource center, dedicated to fostering a culture of learning, exploration, and growth. Our platform is designed to empower students, educators, and lifelong learners by providing a wealth of resources to support academic excellence and personal development.
        </p>
        <p>
            We are happy to share that with a creative fling, devise a wide range of study aids, educational resources, and mock tests. Through our innovative approach, we are committed to key concepts, thus we are conducting competitions & Mock Tests.
        </p>
    </div>

    <!-- <p class="since-text">(SINCE 2022 TO 2025 CONTINUE)</p> -->

    <div class="mission-vision-container shd">
        <div class="mission-vision-box">
            <img src="mission.png" alt="Mission">
            <h3>OUR MISSION</h3>
            <p>At Our Creative Info, our mission is to cultivate a dynamic learning environment that inspires curiosity, fosters critical thinking, and provides academic excellence.</p>
        </div>
        <div class="mission-vision-box">
            <img src="goal1.png" width="200px" alt="Vision">
            <h3>OUR VISION</h3>
            <p>To be recognized as a pioneering force in transforming the landscape of education, serving as a catalyst for transformative change in individuals, communities, and societies.</p>
        </div>
    </div>

   

    <div class="services-section shd">
        <h2 class="services-title">Our Services</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="service-card">
                    <i class="fas fa-paint-brush service-icon"></i>
                    <h4>Great Design</h4>
                    <p>Clear design to keep that is both functional and aesthetically pleasing</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-card">
                    <i class="fas fa-bolt service-icon"></i>
                    <h4>Quick Response</h4>
                    <p>Quickly act becoming increasingly popular because they are easy to use</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-card">
                    <i class="fas fa-clock service-icon"></i>
                    <h4>Time Saving</h4>
                    <p>The time spent will vary depending on the specific support and so</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-card">
                    <i class="fas fa-headset service-icon"></i>
                    <h4>Best Support</h4>
                    <p>The best support that is empowering and helps people to achieve their goals</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-card">
                    <i class="fas fa-gem service-icon"></i>
                    <h4>Finest Quality</h4>
                    <p>Finest quality makes us the highest possible quality</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-card">
                    <i class="fas fa-lightbulb service-icon"></i>
                    <h4>Real Solutions</h4>
                    <p>Real solutions focused problems are solutions that are effective</p>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer">
    <div class="container">
        <div class="row">
            <!-- Pages Section -->
            <div class="col-md-4">
                <h3>PAGES</h3>
                <ul>
                    <li><a href="#"><i class="fas fa-chevron-right me-2"></i>PUC</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right me-2"></i>Degree</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right me-2"></i>Mock Tests</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right me-2"></i>Competitions</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right me-2"></i>Books & PDFs</a></li>
                </ul>
            </div>

            <!-- Help Section -->
            <div class="col-md-4">
                <h3>HELP</h3>
                <ul>
                    <li><a href="#"><i class="fas fa-chevron-right me-2"></i>FAQ</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right me-2"></i>About Us</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right me-2"></i>Contact Us</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right me-2"></i>Privacy Policy</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right me-2"></i>Terms & Condition</a></li>
                </ul>
            </div>

            <!-- About Us Section -->
            <div class="col-md-4">
                <h3>ABOUT US</h3>
                <p>Whether you're a student preparing for exams, an educator seeking teaching aids, or simply someone passionate about learning, Our Creative Info is here to support you. Explore our resources today and embark on a path to success! <a href="#" class="click-more">Click More.</a></p>
            </div>

            <!-- Subscribe Section -->
            
        </div>
    </div>

    <!-- Copyright Section -->
    <div class="copyright">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                </div>
                <div class="col-md-6 text-end social-icons">
                    <a href="#"><i class="fab fa-telegram"></i></a>
                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Add animation to numbers
    function animateValue(obj, start, end, duration) {
        let startTimestamp = null;
        const step = (timestamp) => {
            if (!startTimestamp) startTimestamp = timestamp;
            const progress = Math.min((timestamp - startTimestamp) / duration, 1);
            obj.innerHTML = Math.floor(progress * (end - start) + start);
            if (progress < 1) {
                window.requestAnimationFrame(step);
            }
        };
        window.requestAnimationFrame(step);
    }

    // Animate stats when they come into view
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const stats = entry.target.querySelectorAll('.stat-number');
                stats.forEach(stat => {
                    const finalValue = parseInt(stat.innerHTML);
                    animateValue(stat, 0, finalValue, 2000);
                });
                observer.unobserve(entry.target);
            }
        });
    });

    observer.observe(document.querySelector('.stats-container'));
</script>
</body>
</html>