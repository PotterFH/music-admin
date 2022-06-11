<?= $header ?>
<br>
<br>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

<a class="btn btn-primary btn-lg btn-block text-uppercase" href="<?= base_url('listag') ?>">Ver generos</a>

<br>
<br>
<h2 class="text-center text-capitalize">Albums</h2>
<div class="text-center">
    <a class="btn btn-success btn-lg text-uppercase" href="<?= base_url('crear') ?>"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plus" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <line x1="12" y1="5" x2="12" y2="19" />
            <line x1="5" y1="12" x2="19" y2="12" />
        </svg></a>
</div>
<br />
<table class="table table-dark table-striped  table-bordered">
    <thead class="thead-dark">
        <tr>
            <th class="text-center">Orden</th>
            <th class="text-center">Album</th>
            <th class="text-center">Autor</th>
            <th class="text-center">ID Genero</th>
            <th class="text-center">Opciones</th>
        </tr>
    </thead>
    <tbody>

        <?php foreach ($albums as $album) : ?>
            <tr>
                <td class="text-center"> <?= $album['id']; ?> </td>
                <td class="text-center"> <?= $album['name']; ?> </td>
                <td class="text-center"> <?= $album['author']; ?> </td>
                <td class="text-center"> <?= $album['genre_id']; ?> </td>
                <td class="text-center">
                    <a href="<?= base_url('editar/' . $album['id']); ?>" class="btn btn-success text-uppercase" type="button"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="20" height="20" viewBox="0 0 24 24" stroke-width="1" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M9 7h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />
                            <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />
                            <line x1="16" y1="5" x2="19" y2="8" />
                        </svg></a>
                    <a href="<?= base_url('borrar/' . $album['id']); ?>" class="btn btn-danger text-uppercase" type="button"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="20" height="20" viewBox="0 0 24 24" stroke-width="1" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <line x1="4" y1="7" x2="20" y2="7" />
                            <line x1="10" y1="11" x2="10" y2="17" />
                            <line x1="14" y1="11" x2="14" y2="17" />
                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                        </svg></a>
                </td>
            </tr>

        <?php endforeach; ?>

    </tbody>
</table>

<?= $footer ?>