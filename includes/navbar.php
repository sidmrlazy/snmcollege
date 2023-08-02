<nav class="navbar navbar-custom navbar-expand-lg bg-body-tertiary navbar-dark"
    style="background-color: #070e5c !important;">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <img src="assets/logo/nav-logo.png" alt="Shambhu Nath Memorial Nursing College Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto me-auto mb-2 mb-lg-0">

                <?php if ($title == "Home | Shambhunath Memorial Nursing College") { ?>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <?php } else { ?>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php">Home</a>
                </li>
                <?php } ?>

                <?php if ($title == "About us | Shambhunath Memorial Nursing College") { ?>
                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Who we are
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="about-us.php">About us</a></li>
                        <li><a class="dropdown-item" href="about-us.php#directors">Directors</a></li>
                    </ul>
                </li>
                <?php } else { ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Who we are
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="about-us.php">About us</a></li>
                        <li><a class="dropdown-item" href="about-us.php#directors">Directors</a></li>
                    </ul>
                </li>
                <?php } ?>

                <?php if ($title == "Admissions | Shambhunath Memorial Nursing College") { ?>
                <li class="nav-item">
                    <a class="nav-link active" href="admissions.php">Admissions</a>
                </li>
                <?php } else { ?>
                <li class="nav-item">
                    <a class="nav-link" href="admissions.php">Admissions</a>
                </li>
                <?php } ?>

                <?php if ($title == "Courses | Shambhunath Memorial Nursing College") { ?>
                <li class="nav-item">
                    <a class="nav-link active" href="courses.php">Courses</a>
                </li>
                <?php } else { ?>
                <li class="nav-item">
                    <a class="nav-link" href="courses.php">Courses</a>
                </li>
                <?php } ?>

                <?php if ($title == "Contact | Shambhunath Memorial Nursing College") { ?>
                <li class="nav-item">
                    <a class="nav-link active" href="contact.php">Contact</a>
                </li>
                <?php } else { ?>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <?php } ?>
            </ul>
            <form class="d-flex" role="search">
                <a class="navbar-social-media" href="https://www.facebook.com/Shambhunathparamedicalcollege/"
                    target="_blank">
                    <ion-icon name="logo-facebook"></ion-icon>
                </a>
                <!-- <a class="navbar-social-media" href="#">
                    <ion-icon name="logo-instagram"></ion-icon>
                </a>
                <a class="navbar-social-media" href="#">
                    <ion-icon name="logo-youtube"></ion-icon>
                </a> -->
                <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button> -->
            </form>
        </div>
    </div>
</nav>