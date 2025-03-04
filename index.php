

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración - Supermercado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index.php">Supermercado</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="views/empleados/index.php">Empleados</a></li>
                <li class="nav-item"><a class="nav-link" href="views/productos/index.php">Productos</a></li>
                <li class="nav-item"><a class="nav-link" href="views/proveedores/index.php">Proveedores</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Contenido principal -->
<div class="container mt-5">
    <h2 class="text-center mb-4">Panel de Administración</h2>
    
    <div class="row">
       
        <div class="col-md-4 mb-3">
            <div class="card text-center">
                <div class="card-header bg-primary text-white">Empleados</div>
                <div class="card-body">
                    <p>Gestiona los empleados registrados en el sistema.</p>
                    <a href="views/empleados/index.php" class="btn btn-primary">Ir a Empleados</a>
                </div>
            </div>
        </div>

       
        <div class="col-md-4 mb-3">
            <div class="card text-center">
                <div class="card-header bg-success text-white">Productos</div>
                <div class="card-body">
                    <p>Administra los productos del supermercado.</p>
                    <a href="views/productos/index.php" class="btn btn-success">Ir a Productos</a>
                </div>
            </div>
        </div>

       
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-header bg-warning text-white">Proveedores</div>
                <div class="card-body">
                    <p>Consulta y gestiona los proveedores.</p>
                    <a href="views/proveedores/index.php" class="btn btn-warning">Ir a Proveedores</a>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
