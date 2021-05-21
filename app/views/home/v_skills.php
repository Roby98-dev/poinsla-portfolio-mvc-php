<!-- Skills section start -->
<section id="skills" class="pt-5 pb-5 bg-dark">
    <h2 class="text-uppercase text-center mb-0">My Skills</h2>
    <div class="container">
        <div class="row mt-5">
            <?php foreach ($data['skills'] as $skl) : ?>
                <div class="col-lg-6 col-md-12 col-sm-12 text-light">
                    <div class="card shadow card-skills mb-2">
                        <div class="card-body text-uppercase">
                            <h5 class="mt-3 mb-2"><?= $skl['title']; ?></h5>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="<?= $skl['percent']; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $skl['percent']; ?>%;"><?= $skl['percent']; ?>%</div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>