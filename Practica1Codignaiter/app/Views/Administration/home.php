<?= $this->extend("Administration/base_layout")?> 
<?= $this->section("css") ?>
        <link rel="stylesheet" type="text/css" href="<?= base_url("assets/Administration/css/home.css"); ?>" >
<?= $this->endSection(); ?>

<?= $this->section("content") ?>

<?= $this->endSection()?>


<?= $this->section("javascript") ?>
        <script type="text/javascript" src="<?= base_url("assets/Administration/js/home.js"); ?>" >
<?= $this->endSection(); ?>