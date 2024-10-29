<?php include '../../conf.php'; ?>
<?php include '../../layouts/header.php'; ?>
<body class="d-flex flex-column h-100">
	<main class="flex-shrink-0">
            <!-- Navigation-->
            <?php include '../../layouts/nav.php'; ?>
            <!-- Projects Section-->
            <section class="py-5">
                <div class="container px-5 mb-5">
                    <div class="text-center mb-5">
                        <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Certificates</span></h1>
                    </div>
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-11 col-xl-9 col-xxl-8">
                            <!-- Project Card 1-->
                            <?php foreach($certificate_data as $item): ?>
	                        <div class="card-body mt-3 p-0" style="border:1px solid;border-radius:20px;">
	                            <div class="d-flex align-items-start justify-content-between">
	                                <div class="p-4">
	                                    <h2 class="fw-bolder"><?= $item['name'] ?></h2>
	                                    <p style=""><?= $item['text'] ?></p>
	                                </div>
	                                <img class="img-fluid m-4 rounded-4" src="<?= $url ?>/assets/upload/<?= $item['banner'] ?>" alt="..." style="width: 128px;height: 128px;object-fit: cover;border-radius:20px;" />
	                            </div>
	                        </div>
	                      	<?php endforeach ?>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?php include '../../layouts/footer.php' ?>