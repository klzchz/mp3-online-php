<div class="col-md-12">
<h1>Cadastrar nova Musica para o Album <?= $_GET['album'] ?></h1>
</div>

<div class="col-md-12">
<a href="?page=musics&album=<?= $_GET['album']?>">Voltar para o <i class="fas fa-heartbeat"></i>Album</a>
</div>



<form action="#" method="POST" enctype="multipart/form-data"> 


    <div class="form-group col-md-12">
        <input type="file" name="audio"  class="form-control">
    </div>

    <div class="form-group col-md-12">
        <button class="btn btn-success form-control" type="submit">Cadastrar</button>
    </div>
</form>
<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $file = $_FILES['audio'];

        $album = $_GET['album'];

        $path ="albums/{$album}/musics";

        if(!is_dir($path))
        {
            mkdir($path);
        }

        if(move_uploaded_file($file['tmp_name'],$path."/".$file['name']))
        {
            header("Location: ?page=musics&album={$_GET['album']}");
        }else {
            echo "Falha ao fazer upload";
        }

    }
?>