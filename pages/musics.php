<h1 class="text-center text-warning "><b> Músicas do <i class="fas fa-heartbeat"></i>Album: <?=$_GET['album']?></b></h1>
<div class="col-md-12">
    <a href="?page=albums">Voltar para os <i class="fas fa-heartbeat"></i>Albums</a>
</div>
<hr>

<?php
$musics = getMusics($_GET['album']);


foreach ($musics as $key => $value) {
    ?>
    <div class="col-md-12">
         <audio src="<?= $value ?>" controls ></audio>
    </div>   
<?php
}
?>