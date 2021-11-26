
<?= $this->extend("base")?>

<?= $this->section("conent")?>
<h1>
</h1>


<?php foreach($numeros as $n):?>
    <p> <?= $n?>

<?php endforeach ?>



<a href= <?= route_to("contantacto_page")?>> ir</a>


<?= $this->include("mensaje_error.html")?>
<?= $this->endSection()?>
