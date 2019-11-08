<div class="col-md-12">
    <h1>Cadastrar novo album</h1>
</div>

<div class="col-md-12">
    <a href="?page=albums">Voltar para os <i class="fas fa-heartbeat"></i>Albums</a>
</div>



<form action="#" method="POST" enctype="multipart/form-data"> 

        <div class="form-group col-md-12">
            <input type="text" name="name" placeholder="Nome: " class="form-control">
        </div>

        <div class="form-group col-md-12">
            <input type="file" name="image"  class="form-control">
        </div>
 
        <div class="form-group col-md-12">
            <button class="btn btn-success form-control" type="submit">Cadastrar</button>
        </div>
</form>


<?php

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
   $request = $_POST;
   $image = $_FILES['image'];
  

   $path = "albums/".$request['name'];

   if(!is_dir($path))
   {
        mkdir($path);
   }

  
   $extension = explode('.',$image['name']);
   $extension = $extension[1];
    
   $nameImage = strtoupper($request['name']).".{$extension}";

   if (move_uploaded_file($image['tmp_name'],$path."/".$nameImage)) {
        header("Location: ?page=albums");
   }else{
       echo "Falha no upload";
   }
}

?>