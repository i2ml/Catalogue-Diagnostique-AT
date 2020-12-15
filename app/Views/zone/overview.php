<div class="row justify-content-center m-5">
    <h2><?= esc($title); ?></h2>
</div>
<div class="row justify-content-md-center">

    <?php if (!empty($zone) && is_array($zone)) :
        foreach ($zone as $zone_item) : ?>
            <div class="card shadow mb-4 m-3">
                <a href="aideTechniques/zone/<?= esc($zone_item['id']); ?>" class="stretched-link">
                </a>
                <div class="card-body">
                    <div class="text-center">
                        <h6 class="m-0 font-weight-bold"><?= esc($zone_item['nom']); ?></h6>
                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4 img-verysmall" src="<?php echo base_url('assets/img/zones/' . $zone_item['id'] . '.jpg'); ?>" alt="img zone">
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
</div>
<?php else :
?>
    <div class="container px-5">
        <div class="row d-flex justify-content-center">
            <h3>Nous n'avons pas trouvé de résultat :/</h3>
        </div>
        <div class="row d-flex justify-content-center">
            <p>Aucune catégorie n'a été trouvée. Contactez les administrateurs du site !</p>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-10 col-sm-8 col-lg-6 col-xl-4 align-self-center">
                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" src="<?php echo base_url('assets/img/Character.jpg'); ?>" alt="No result illustration">
            </div>
        </div>
    </div>

<?php endif ?>