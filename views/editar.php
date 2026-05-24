<?php require_once "views/header.php"; ?>

<h2>Editar publicación</h2>

<form method="POST" action="?action=actualizar">

    <input type="hidden"
    name="id"
    value="<?= $publicacion['id'] ?>">

    <div class="mb-3">

        <label>Título</label>

        <input type="text"
        name="titulo"
        value="<?= $publicacion['titulo'] ?>"
        class="form-control">

    </div>

    <div class="mb-3">

        <label>Autor</label>

        <input type="text"
        name="autor"
        value="<?= $publicacion['autor'] ?>"
        class="form-control">

    </div>

    <div class="mb-3">

        <label>Contenido</label>

        <textarea
        name="contenido"
        rows="6"
        class="form-control"><?= $publicacion['contenido'] ?></textarea>

    </div>

    <button class="btn btn-primary">
        Actualizar
    </button>

</form>

<?php require_once "views/footer.php"; ?>