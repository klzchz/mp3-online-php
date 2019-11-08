<div class="col-md-12 my-4 mb-0">
    <h2 class="text-center text-warning "><i class="fas fa-heartbeat"></i><b>Álbuns</b></h2><br/>
</div>

<div class="col-md-3 my-0 ml-0 mb-2">
<a href="?page=new-album" class="btn btn-success"><b>New <i class="fas fa-heartbeat"></i>Album</b></a>
</div>



<div class="row">
    <?php

    $albums = getAlbums();


    foreach ($albums as $key => $value) {

       $arrays = explode('/',$value);
       $name = $arrays[1];
       $image = strtoupper($name).".".'jpg';

    ?>
    <div class="col-md-3">

        <a href="?page=musics&album=<?=$name?>">
       
        <img class="card-img-top img-album"   src="albums/<?=$name?>/<?=$image?>" alt="<?=$name?>">
       
        <h3 class="text-primary"><?=$name?></h3>
        </a>
    </div>
    <?php
        }
    ?>
</div>