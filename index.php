<?php include "includes/header.php"; ?>
<?php include 'includes/db.php'; ?>

<body>

    <header>
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">PHP CRUD</a>
            </div>
        </nav>
    </header>

    <main class="container d-flex  flex-column">



        <section class="m-5">
            <div class="row">
                <div class="col-md-4">

                    <div class="card card-body">
                        <form action="includes/tasks_actions.php" method="POST">
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Titulo</label>
                                <input type="text" class="form-control" name="title" id="formGroupExampleInput" placeholder="Ingresar titulo" autofocus>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Descripcion</label>
                                <textarea type="text" class="form-control" id="formGroupExampleInput2" name="description" placeholder="Describir tarea"></textarea>
                            </div>
                            <input type="submit" class="btn btn-primary btn-block" name="save_task" value="Agregar tarea">
                        </form>
                    </div>
                </div>

                <div class="col-md-8">

                </div>
            </div>
        </section>







    </main>



    <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>