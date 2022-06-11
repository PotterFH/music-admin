<?=$header?>
<br>
<br>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

<a class="btn btn-primary btn-lg btn-block" href="<?=base_url('crear')?>">Crear un album</a>
<br/>
<br/>
<br/>

        <table class="table table-dark table-striped  table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Cancion</th>
                    <th>Autor</th>
                    <th>ID Genero</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>

            <?php foreach($albums as $album): ?>
                <tr>
                    <td> <?=$album['id'];?> </td>
                    <td> <?=$album['name'];?> </td>
                    <td> <?=$album['author'];?> </td>
                    <td> <?=$album['genre_id'];?> </td>
                    <td>
                    <a href="<?=base_url('editar/'.$album['id']);?>" class="btn btn-success" type="button">Editar</a>
                    <a href="<?=base_url('borrar/'.$album['id']);?>" class="btn btn-danger" type="button">Borrar</a>
                    </td>
                </tr>

            <?php endforeach; ?>

            </tbody>
        </table>

        <?=$footer?>