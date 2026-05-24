<?php require_once "views/header.php"; ?>

<h1 class="mb-4">
    Blog de Aprendizajes
</h1>

<a href="?action=crear"
class="btn btn-primary mb-3">
Nueva publicación
</a>

<table class="table table-bordered">

    <thead>

        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Autor</th>
            <th>Fecha</th>
            <th>Acciones</th>
        </tr>

    </thead>

    <tbody>

        <?php foreach($publicaciones as $p): ?>

        <tr>

            <td><?= $p['id'] ?></td>

            <td><?= $p['titulo'] ?></td>

            <td><?= $p['autor'] ?></td>

            <td><?= $p['fecha'] ?></td>

            <td>

                <a href="?action=editar&id=<?= $p['id'] ?>"
                class="btn btn-warning btn-sm">
                Editar
                </a>

                <a href="?action=eliminar&id=<?= $p['id'] ?>"
                class="btn btn-danger btn-sm">
                Eliminar
                </a>

            </td>

        </tr>

        <?php endforeach; ?>

    </tbody>

</table>

<?php require_once "views/footer.php"; ?>