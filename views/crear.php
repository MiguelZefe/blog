<?php require_once "views/header.php"; ?>

<h2>Nueva publicación</h2>

<form method="POST" action="?action=guardar">

    <div class="mb-3">

        <label>Título</label>

        <input type="text"
        name="titulo"
        class="form-control"
        required>

    </div>

    <div class="mb-3">

        <label>Autor</label>

        <input type="text"
        name="autor"
        class="form-control"
        required>

    </div>

    <div class="mb-3">

        <label>Contenido</label>

        <textarea
        name="contenido"
        class="form-control"
        rows="6"
        required></textarea>

    </div>

    <button class="btn btn-success">
        Guardar
    </button>

</form>

<?php require_once "views/footer.php"; ?>