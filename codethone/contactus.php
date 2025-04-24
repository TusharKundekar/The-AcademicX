<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Creative Info - Educational Platform</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #FF6B6B;
        }
        
        .contact-header {
            text-align: center;
            padding: 3rem 0;
            background-color: #ffffff;
        }

        .info-card {
            text-align: center;
            padding: 2rem;
            margin: 1rem 0;
            border-radius: 10px;
            transition: transform 0.3s ease;
        }

        .info-card:hover {
            transform: translateY(-5px);
        }

        .info-title {
            color: var(--primary-color);
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .info-text {
            color: #6c757d;
        }

        .contact-form-section {
            background-color: #fff;
        }

        .form-title {
            text-align: center;
            margin-bottom: 2rem;
        }

        .contact-description {
            text-align: center;
            color: #6c757d;
            margin-bottom: 3rem;
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(255, 107, 107, 0.25);
        }

        .btn-submit {
            background-color: #000;
            color: #fff;
            padding: 0.8rem 2rem;
            width: 100%;
            border: none;
            transition: background-color 0.3s ease;
        }

        .btn-submit:hover {
            background-color: #333;
        }

        .contact-image {
            max-width: 100%;
            height: auto;
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
    <!-- Contact Header -->
    <header class="contact-header">
        <h1>Contact Us</h1>
    </header>

    <!-- Contact Form Section -->
    <section class="contact-form-section">
        <div class="container">
            <h2 class="form-title">Get in Touch with Us!</h2>
            <p class="contact-description">
                We're here to help! If you have any questions, comments, or feedback, please don't hesitate to contact us. We'll do our best to respond to your inquiry within 24 hours.
            </p>
            
            <!-- <div class="row align-items-center">
                <div class="col-lg-6">
                    <form id="contactForm">
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Name" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-submit">Send</button>
                    </form>
                </div>
                <div class="col-lg-6 text-center mt-4 mt-lg-0">
                    <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-Q8EHoyFTSm5JHKQ3qdR6yoeAP3ZSFK.png" alt="Contact Support" class="contact-image">
                </div>
            </div> -->
        </div>
    </section>

    <!-- Info Cards -->
    <div class="container my-5">
        <div class="row">
            <div class="col-md-4">
                <div class="info-card shadow-sm">
                    <h3 class="info-title">Phone Number</h3>
                    <p class="info-text">+91 87XXXXXXX</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-card shadow-sm">
                    <h3 class="info-title">Office Email</h3>
                    <p class="info-text">ourcreativeinfo@gmail.com</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-card shadow-sm">
                    <h3 class="info-title">Working Hour</h3>
                    <p class="info-text">24/7 (Any Time)</p>
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

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            // Add your form submission logic here
            alert('Form submitted successfully!');
            this.reset();
        });
    </script>
</body>
</html>