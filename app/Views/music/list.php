<?=$header?>
<a href="<?=base_url('crear')?>">Crear un album</a>
    
        <table class="table table-light">
            <thead class="thead-light">
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
                    <td>Editar/Borrar</td>
                </tr>

            <?php endforeach; ?>

            </tbody>
        </table>

        <?=$footer?>