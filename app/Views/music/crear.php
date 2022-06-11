<?=$header?>

    <h1>Crear album</h1>

    <div class="card">
        <div class="card-body bg-dark text-white">
            <h5 class="card-title">Ingresa datos del album</h5>
            <p class="card-text">
            <form method="post" action="<?=site_url('/guardar')?>" enctype="multipart/form-data">
                
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input id="name" class="form-control" type="text" name="name">
                    </div>

                    <div class="form-group">
                        <label for="author">Autor</label>
                        <input id="author" class="form-control form-outline" type="text" name="author">
                    </div>
                    
                    <div class="form group">
                        <label for="genre_id">ID Genero</label>
                        <input id="genre_id" class="form-control" type="text" name="genre_id">
                    </div>
                    <br>
                    <button class="btn btn-success" type="submit">Guardar</button>
                    <button class="btn btn-danger href="<?=base_url('list')?>" type="submit">Cancelar</button>
            </form>
            </p>
        </div>
    </div>


<?=$footer?>