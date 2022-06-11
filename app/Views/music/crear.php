<?= $header ?>

<h1 class="text-capitalize">Crear album</h1>

<div class="card border border-ligth border-bottom rounded">
    <div class="card-body bg-dark text-white">
        <h5 class="card-title text-capitalize">Ingresa datos del album</h5>
        <p class="card-text">
        <form method="post" action="<?= site_url('/guardar') ?>" enctype="multipart/form-data">

            <div class="form-group">
                <label for="name">Nombre</label>
                <input placeholder="Ingresa el nombre del album" id="name" class="form-control laceholder col-12 bg-dark border-secondary text-white" type="text" name="name">
            </div>

            <div class="form-group">
                <label for="author">Autor</label>
                <input placeholder="Ingresa el nombre del autor" id="author" class="form-control form-outline bg-dark border-secondary text-white" type="text" name="author">
            </div>

            <div class="form group">
                <label for="genre_id">ID Genero</label>
                <input placeholder="Ingresa el ID del genero" id="genre_id" class="form-control bg-dark border-secondary text-white " type="text" name="genre_id">
            </div>
            <br>
            <br>
            <div class="text-right">
                <button class="btn btn-success text-uppercase" type="submit"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="32" height="32" viewBox="0 0 24 24" stroke-width="1" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M5 12l5 5l10 -10" />
                    </svg></button>
                <button class="btn btn-danger text-uppercase" href="<?= base_url('list') ?>" type="submit"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <line x1="18" y1="6" x2="6" y2="18" />
                        <line x1="6" y1="6" x2="18" y2="18" />
                    </svg></button>
            </div>

        </form>
        </p>
    </div>
</div>


<?= $footer ?>