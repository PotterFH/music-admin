<?=$header?>

    <h1>Editar album</h1>

    
    <div class="card">
        <div class="card-body bg-dark text-white">
            <h5 class="card-title">Ingresa datos del album</h5>
            <p class="card-text">
            <form method="post" action="<?=site_url('/actualizar')?>" enctype="multipart/form-data">

            <input type="hidden" name="id" value="<?=$album['id']?>" >
                
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input id="name" value="<?=$album['name']?>"class="form-control" type="text" name="name">
                    </div>

                    <div class="form-group">
                        <label for="author">author</label>
                        <input id="author" value="<?=$album['author']?>"class="form-control" type="text" name="author">
                    </div>
                    
                    <div class="form group">
                        <label for="genre_id">ID genre_id</label>
                        <input id="genre_id" value="<?=$album['genre_id']?>" class="form-control" type="text" name="genre_id">
                    </div>
                    <br>
                    <button class="btn btn-success" type="submit">Guardar</button>
                    <a class="btn btn-danger" href="<?=base_url('list')?>">Cancelar</a>
            </form>
            </p>
        </div>
    </div>

<?=$footer?>
