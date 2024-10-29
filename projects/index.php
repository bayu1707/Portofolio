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
	                <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Projects</span></h1>
	            </div>
	            <div class="row gx-5 justify-content-center">
	                <div class="col-lg-11 col-xl-9 col-xxl-8">
	                    <!-- Project Card 1-->
	                    <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
	                    		<?php foreach($projects_data as $item): ?>
	                        <div class="card-body mt-3" style="border:1px solid;border-radius:20px;">
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
	        </div>
	    </section>
	    <!-- Call to action section-->
	    <section class="py-5 bg-gradient-primary-to-secondary text-white">
	        <div class="container px-5 my-5">
	            <div class="text-center">
	                <h2 class="display-4 fw-bolder mb-4">Let's build something together</h2>
	                <a class="btn btn-outline-light btn-lg px-5 py-3 fs-6 fw-bolder" href="../contact">Contact me</a>
	            </div>
	        </div>
	    </section>
	</main>
<?php include '../../layouts/footer.php'; ?>