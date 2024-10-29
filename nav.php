<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light py-3" style="border-bottom:1px solid;">
    <div class="container px-5">
        <a class="navbar-brand" href="<?= $url ?>"><span class="fw-bolder text-primary"><?= $web_data['title'] ?></span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon" style="color:white;"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                <li class="nav-item"><a class="nav-link" href="<?= $url ?>">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= $url ?>/pages/resume">Resume</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= $url ?>/pages/projects">Projects</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= $url ?>/pages/certificate">Certificate</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= $url ?>/pages/contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>