<?php include '../../conf.php'; ?>
<?php include '../../layouts/header.php'; ?>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <?php include '../../layouts/nav.php'; ?>
            <!-- Page Content-->
            <div class="container px-5 my-5">
                <div class="text-center mb-5">
                    <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Resume</span></h1>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-11 col-xl-9 col-xxl-8">
                        <!-- Experience Section-->
                        <section class="mb-5">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h2 class="text-primary fw-bolder mb-0">Experience</h2>
                                <!-- Download resume button-->
                                <!-- Note: Set the link href target to a PDF file within your project-->
                                <!-- <a class="btn btn-primary px-4 py-3" href="#!">
                                    <div class="d-inline-block bi bi-download me-2"></div>
                                    Download Resume
                                </a> -->
                            </div>
                            <!-- Experience Card 1-->
                            <?php
                            foreach($experience_data as $exp):
                            ?>
                            <div class="card shadow border-0 rounded-4 mb-2">
                                <div class="card-body" style="padding:1.4rem !important;border:1px solid;border-radius:15px;">
                                    <div class="row align-items-start gx-5">
                                        <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                            <div class="rounded-4">
                                                <div class="text-primary fw-bolder mb-2"><?= $exp['time'] ?></div>
                                                <div class="small text-muted"><?= $exp['label'] ?></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8" style="color:#00ebf0;"><div><?= $exp['text'] ?></div></div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach ?>
                        </section>
                        <!-- Education Section-->
                        <section>
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h2 class="text-primary fw-bolder mb-0">Education</h2>
                                <!-- Download resume button-->
                                <!-- Note: Set the link href target to a PDF file within your project-->
                                <!-- <a class="btn btn-primary px-4 py-3" href="#!">
                                    <div class="d-inline-block bi bi-download me-2"></div>
                                    Download Resume
                                </a> -->
                            </div>
                            <!-- Experience Card 1-->
                            <?php
                            foreach($education_data as $exp):
                            ?>
                            <div class="card shadow border-0 rounded-4 mb-2">
                                <div class="card-body" style="padding:1.4rem !important;border:1px solid;border-radius:15px;">
                                    <div class="row align-items-start gx-5">
                                        <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                            <div class="rounded-4">
                                                <div class="text-primary fw-bolder mb-2"><?= $exp['time'] ?></div>
                                                <div class="small text-muted"><?= $exp['label'] ?></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8" style="color:#00ebf0;"><div><?= $exp['text'] ?></div></div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach ?>
                        </section>
                        <!-- Divider-->
                        <div class="pb-5"></div>
                        <!-- Skills Section-->
                        <section>
                            <!-- Skillset Card-->
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body" style="padding:0;">
                                    <!-- Professional skills list-->
                                    <div class="mb-5">
                                        <div class="d-flex align-items-center mb-4">
                                            <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-tools"></i></div>
                                            <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Professional Skills</span></h3>
                                        </div>
                                        <?php foreach($skills as $s): ?>
                                        <div class="row row-cols-1 row-cols-md-3 mb-4">
                                            <?php foreach($s as $skill): ?>
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100"><?= $skill ?></div></div>
                                            <?php endforeach ?>
                                        </div>
                                        <?php endforeach ?>
                                    </div>
                                    <!-- Languages list-->
                                    <div class="mb-0">
                                        <div class="d-flex align-items-center mb-4">
                                            <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-code-slash"></i></div>
                                            <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Languages</span></h3>
                                        </div>
                                        <?php foreach($language as $s): ?>
                                        <div class="row row-cols-1 row-cols-md-3 mb-4">
                                            <?php foreach($s as $skill): ?>
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100"><?= $skill ?></div></div>
                                            <?php endforeach ?>
                                        </div>
                                        <?php endforeach ?>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </main>
        <?php include '../../layouts/footer.php'; ?>