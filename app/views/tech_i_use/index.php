<section class="categories bg-dark pt-3">
    <h2 class="text-center text-uppercase mb-5">Tech I Use</h2>
    <div class="container pb-5">

        <div class="row">
            <div class="col-lg-6">
                <?php Flasher::flash(); ?>
            </div>
        </div>

        <div class="row">
            <?php foreach ($data['tech'] as $tech) : ?>
                <div class="col-lg-3 col-md-12 col-sm-12 mt-3 d-flex justify-content-center">
                    <a class="hover" href="<?= BASEURL; ?>category-foods.php?category_id=<?= $id; ?>">
                        <div class="tech-card card bg-secondary shadow">
                            <div class="card-body border border-info">
                                <h4 class="title text-light text-center text-uppercase mt-2 mb-2"><?= $tech['title']; ?></h4>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>