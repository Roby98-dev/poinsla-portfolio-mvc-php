<section class="project bg-dark pt-4 pb-4">
    <h2 class="text-center text-uppercase">Portfolio</h2>
    <div class="container">

        <div class="row">
            <div class="col-lg-6">
                <?php Flasher::flash(); ?>
            </div>
        </div>

        <div class="row mt-5">
            <?php foreach ($data['projects'] as $project) : ?>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3 d-flex justify-content-center">
                    <div class="card project-items shadow text-center">
                        <?php
                        if ($project['image_name'] == "") {
                        ?>
                            <img class="card-img-top px-3 py-3 img-fluid rounded" src="<?= BASEURL; ?>/assets/images/dafault/dafault.jpeg">
                        <?php
                        } else {
                        ?>
                            <img src="<?= BASEURL; ?>/images/projects/<?= $project['image_name']; ?>" alt="Chicke Hawain Pizza" class="card-img-top px-3 py-3 rounded">
                        <?php
                        }
                        ?>
                        <div class="card-body">
                            <h5 class="card-title text-light"><?= $project['title']; ?></h5>
                            <p class="card-text text-secondary">
                                <?= $project['description']; ?>
                            </p>
                            <a href="<?= $project['price']; ?>" class="btn btn-primary mt-3">Visit now!</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>