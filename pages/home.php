<?php
session_start();

if (isset($_SESSION['username'])) {

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Research Repository</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="../assets/img/logo1.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://fontawesome.com/icons/user?f=classic&s=solid&pc=%23ffffff"></script>
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../assets/css/styles.css?v=<?php echo time(); ?>" rel="stylesheet" />
    </head>

    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="../assets/img/aclc.png" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#services">Features</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="../scripts/authentication/logout.php"><img src="../assets/img/icons/right-from-bracket-solid.svg" alt=""></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Welcome To Our Studio, <?php echo $_SESSION['username'] ?>!</div>
                <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="repository.php">Repository <img src="../assets/img/icons/arrow-right-solid.svg" alt=""></a>
            </div>
        </header>
        <!-- Features-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Features</h2>

                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <img src="../assets/img/icons/download-solid.svg" alt="" class="fa-stack-1x fa-2xl">

                        </span>
                        <h4 class="my-3">Download</h4>
                        <p class="text-muted">Give users the ease of one-click downloads to guarantee a flawless download experience. Get research articles fast and take pleasure in reading them offline.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <img src="../assets/img/icons/upload-solid.svg" alt="" class="fa-stack-1x fa-2xl">
                        </span>
                        <h4 class="my-3">Upload</h4>
                        <p class="text-muted">Our user-friendly upload feature simplifies research contributions by allowing researchers to submit papers in PDF format or via Google Drive links, ensuring efficient sharing within the ACLC Naga academic community..</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <img src="../assets/img/icons/magnifying-glass-solid.svg" alt="" class="fa-stack-1x fa-2xl">
                        </span>
                        <h4 class="my-3">Search</h4>
                        <p class="text-muted">The website features a search feature that allows users to easily navigate through its extensive research repository, allowing them to find information by entering keywords</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About</h2>

                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image">

                            <img src="../assets/img/icons/square-github.svg" alt="" class="fa-stack-1x fa-2xl ">

                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>ACLC Research Repository</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Welcome to Website, where innovation meets academia. We are dedicated to revolutionizing the way research is archived and shared within the ACLC Naga academic community.</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"> <img src="../assets/img/icons/flag-solid.svg" alt="" class="fa-stack-1x fa-2xl "></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Our Mission</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Our mission is to establish a dynamic research ecosystem that fosters accessibility and knowledge-sharing. We strive to empower students, faculty, and researchers by providing a user-friendly platform for seamless research submission, retrieval, and engagement</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img src="../assets/img/icons/user.svg" alt="" class="fa-stack-1x fa-2xl "></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>User Friendly</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted"> A user-friendly online platform for secure uploading and downloading research papers to enhanced accessibility
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img src="../assets/img/icons/shield-solid.svg" alt="" class="fa-stack-1x fa-2xl "></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Security</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Every interaction with our platform, from uploading research papers to downloading them, is secured through encrypted connections. This ensures that your data remains confidential and protected against unauthorized access.</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Be Part
                                <br />
                                Of Our
                                <br />
                                Website!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>


        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Feel free to message us!</h3>
                </div>
                <form id="contactForm" method="post" action=".././scripts/contact/contact.php">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" id="name" type="text" placeholder="Your Name *" data-sb-validations="required" required name="NAME"/>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" type="email" placeholder="Your Gmail *" data-sb-validations="required,email" required name="GMAIL"/>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An Gmail is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Gmail is not valid.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" required name="PHONE_NUMBER" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="message" placeholder="Your Message *" data-sb-validations="required" required name="MESSAGE"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase " id="submitButton" type="submit">Send Message</button></div>
                </form>
            </div>
        </section>

        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; AclcResearchRepository</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="https://github.com/sphyxi4" aria-label="Twitter"><img src="../assets/img/icons/github.svg" alt=""></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/asphyxia64xbit" aria-label="Facebook"><img src="../assets/img/icons/facebook.svg" alt=""></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/in/jerome-infante-b51027284/" aria-label="LinkedIn"><img src="../assets/img/icons/linkedin.svg" alt=""></a>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Bootstrap core JS-->
        <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js?v=<?php echo time(); ?>"></script>
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js?v=<?php echo time(); ?>"></script> -->
        <!-- Core theme JS-->
        <script src="../assets/js/scripts.js?v=<?php echo time(); ?>"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js?v=<?php echo time(); ?>"></script>
    </body>

    </html>

<?php
} else {
    header("Location: ../index.php");
    exit();
}
?>