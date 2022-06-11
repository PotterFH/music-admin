<?= $header ?>

<br>
<br>
<h1 class="text-center text-capitalize">Editar genero </h1>


<div class="card">
    <div class="card-body bg-dark text-white">
        <h5 class="card-title">Ingresa datos del album</h5>
        <p class="card-text">
        <form method="post" action="<?= site_url('/actualizarg') ?>" enctype="multipart/form-data">

            <input type="hidden" name="id" value="<?= $genero['id'] ?>">

            <div class="form-group">
                <label for="name">Name</label>
                <input id="name" value="<?= $genero['name'] ?>" class="form-control bg-dark border-secondary text-white" type="text" name="name">
            </div>

            <div class="text-right">
                <button class="btn btn-success text-uppercase" type="submit"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="32" height="32" viewBox="0 0 24 24" stroke-width="1" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M5 12l5 5l10 -10" />
                    </svg></button>
                <button class="btn btn-danger text-uppercase" href="<?= base_url('listag') ?>" type="submit"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
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