<div class="col-md-12 my-4 mb-0">
    <h2 class="text-center text-warning "><i class="fas fa-heartbeat"></i><b>Álbuns</b></h2><br/>
</div>

<div class="col-md-3 my-0 ml-0 mb-2">
<a href="?page=new-album" class="btn btn-success"><b>New <i class="fas fa-heartbeat"></i>Album</b></a>
</div>



<div class="row">
    <?php
    for ($i=0; $i <10 ; $i++){  
 
    ?>
    <div class="col-md-3">

        <a href="">
        <img class="card-img-top"  src="albums/74237740_2418421971527940_2729624893984342016_o.jpg" alt="">
        <h3 class="text-primary">Album <?=$i+1?></h3>
        </a>
    </div>
    <?php
        }
    ?>
</div>