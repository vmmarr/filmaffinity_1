<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <?php
        require '../comunes/auxiliar.php';
        cabecera('Peliculas');
        ?>
    </head>
    <body>
        <?php
        menu();
        $pdo = conectar();
        $buscarTitulo = isset($_GET['buscarTitulo'])
                ? trim($_GET['buscarTitulo'])
                : '';
        $st = $pdo->prepare('SELECT p.*, genero
                                      FROM peliculas p
                                      JOIN generos g
                                        ON genero_id = g.id
                                     WHERE position(lower(:titulo) in lower(titulo)) != 0
                                  ORDER BY id');
        $st->execute([':titulo' => $buscarTitulo]);
        ?>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <th>Título</th>
                        <th>Año</th>
                        <th>Sinopsis</th>
                        <th>Duración</th>
                        <th>Género</th>
                        <th>Acciones</th>
                    </thead>
                    <tbody>
                        <?php foreach ($st as $fila): ?>
                            <tr>
                                <td><?= $fila['titulo'] ?></td>
                                <td><?= $fila['anyo'] ?></td>
                                <td><?= $fila['sinopsis'] ?></td>
                                <td><?= $fila['duracion'] ?></td>
                                <td><?= $fila['genero'] ?></td>
                                <td>
                                    <a href="confirm_borrado.php?id=<?= $fila['id'] ?>"
                                       class="btn btn-xs btn-danger">
                                        Borrar
                                    </a>
                                    <a href="modificar.php?id=<?= $fila['id'] ?>"
                                       class="btn btn-xs btn-info">
                                        Modificar
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
        <a class="btn btn-info" href="insertar.php">Insertar</a>
    </body>
</html>
