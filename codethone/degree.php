<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PUC Notes & Solved Question Papers</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

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

<div class="container py-5">
    <h1 class="text-center mb-4">BCA & BSC Previous Year & Current Notes</h1>
    
    <h2 class="text-center mb-5" style="color: #f4694c;">NEP & CBCS</h2>
    
    <div class="row g-4">
        <div class="col-md-6">
            <div class="puc-card first-puc">
                <h2 class="mb-3">BCA</h2>
                <p class="text-muted mb-4">(Previous Year & Current Notes)</p>
                <button class="click-btn btn btn-custom"><a class="nav-link" href="bca.html" role="button" aria-expanded="false">
                    Click here
                </a></button>
            </div>
        </div>
        <div class="col-md-6">
            <div class="puc-card second-puc">
                <h2 class="mb-3">B.Sc</h2>
                <p class="text-muted mb-4">(Previous Year & Current Notes)</p>
                <button class="click-btn btn btn-custom"><a class="nav-link" href="bsc.html" role="button" aria-expanded="false">
                    Click here
                </a></button>
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
<script src="https://kit.fontawesome.com/your-kit-code.js" crossorigin="anonymous"></script>
</body>
</html>