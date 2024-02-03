<?php
session_start();

if (isset($_SESSION['full_name'])) {

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="shortcut icon" type="image/x-icon" href=".././assets/img/logo/logo.png"/>
    <link rel="stylesheet" href=".././node_modules/bootstrap/dist/css/bootstrap.css"/>
    <link rel="stylesheet" href="../assets/css/home.css"/>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top border-bottom shadow">
    <a
            class="navbar-brand ms-5" href="#home">
        <h5>Research<span class="text-primary">Hub</span></h5>
    </a>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item mx-2">
                <a class="nav-link" href="#home">Home</a>
            </li>
            <li class="nav-item mx-2">
                <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item mx-2">
                <a class="nav-link" href="#contacts">Contact</a>
            </li>
            <li class="nav-item mx-2">
                <a class="nav-link" href="./search_repository.php">Repository</a>
            </li>
        </ul>

        <ul class="navbar-nav me-5">
            <li class="nav-item">
                <a class="nav-link" href="../scripts/authentication/logout.php">
                    <img src="../assets/img/icons/logout.svg" alt="logout button" height="25"/>
                </a>
            </li>
        </ul>
    </div>
</nav>
<main>
    <section id="home">
        <div class="px-4 py-5 my-5 text-center">
            <img class="d-block mx-auto mb-4" src="../assets/img/logo/logo.png" alt="" width="120" height="90">
            <h1 class="display-5 fw-bold">Welcome! <?php echo $_SESSION['full_name'] ?></h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">Explore cutting-edge research at ACLC Research Repository – a hub of innovative
                    studies and scholarly work in various disciplines</p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <button type="button" class="btn btn-primary btn-lg px-4 gap-3" id="repository">Repository</button>
                </div>
            </div>
        </div>
    </section>
    <section id="about">

        <div class="container col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="../assets/img/pictures/library.jpg" class="d-block mx-lg-auto img-fluid"
                         alt="Bootstrap Themes"
                         width="700" height="500" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold lh-1 mb-3">Responsive left-aligned hero with image</h1>
                    <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the
                        world’s most
                        popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid
                        system,
                        extensive prebuilt components, and powerful JavaScript plugins.</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
                        <button type="button" class="btn btn-outline-secondary btn-lg px-4" id="">Default</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container px-4 py-5" id="featured-3">
            <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                <div class="feature col">
                    <div class="feature-icon bg-primary bg-gradient">
                        <svg class="bi" width="1em" height="1em">
                            <use xlink:href="#collection"/>
                        </svg>
                    </div>
                    <h2>Featured title</h2>
                    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another
                        sentence and
                        probably just keep going until we run out of words.</p>
                    <a href="#" class="icon-link">
                        Call to action
                        <svg class="bi" width="1em" height="1em">
                            <use xlink:href="#chevron-right"/>
                        </svg>
                    </a>
                </div>
                <div class="feature col">
                    <div class="feature-icon bg-primary bg-gradient">
                        <svg class="bi" width="1em" height="1em">
                            <use xlink:href="#people-circle"/>
                        </svg>
                    </div>
                    <h2>Featured title</h2>
                    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another
                        sentence and
                        probably just keep going until we run out of words.</p>
                    <a href="#" class="icon-link">
                        Call to action
                        <svg class="bi" width="1em" height="1em">
                            <use xlink:href="#chevron-right"/>
                        </svg>
                    </a>
                </div>
                <div class="feature col">
                    <div class="feature-icon bg-primary bg-gradient">
                        <svg class="bi" width="1em" height="1em">
                            <use xlink:href="#toggles2"/>
                        </svg>
                    </div>
                    <h2>Featured title</h2>
                    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another
                        sentence and
                        probably just keep going until we run out of words.</p>
                    <a href="#" class="icon-link">
                        Call to action
                        <svg class="bi" width="1em" height="1em">
                            <use xlink:href="#chevron-right"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="contacts">
        <div class="wrapper shadow">
            <header>Send us a Message</header>
            <form action="#">
                <div class="dbl-field">
                    <div class="field">
                        <input type="text" name="name" placeholder="Enter your name">
                    </div>
                    <div class="field">
                        <input type="text" name="email" placeholder="Enter your email">
                    </div>
                </div>
                <div class="dbl-field">
                </div>
                <div class="message">
                    <textarea placeholder="Write your message" name="message"></textarea>

                </div>
                <div class="button-area">
                    <button type="submit">Send</button>
                    <span></span>
                </div>
            </form>
        </div>

    </section>


</main>
<script src=".././node_modules/bootstrap/dist/js/bootstrap.js"></script>
<script>
    let button = document.getElementById('repository');
    button.addEventListener('click',  () =>{
        window.location.href = './search_repository.php'
    });
</script>

</body>

    </html>

<?php
} else {
    header("Location: ../index.php");
    exit();
}
?>