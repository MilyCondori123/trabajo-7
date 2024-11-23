<?php   
include ('libreria.php');
//iniciar variable

$n1=0; $n2=0; $suma=0;

if (isset($_REQUEST['calcular'])){
    //entrada
    $n1=$_REQUEST['n1'];
    $n2=$_REQUEST['n2'];
    $suma = suma($n1, $n2);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <form action="ejemplo03.php" method="post" class="mt-4">
            <h2 class="text-center">Suma de dos números</h2>
            <div class="mb-3">
                <label for="n1" class="form-label">Número 1</label>
                <input type="number" id="n1" name="n1" class="form-control" value="<?php echo $n1; ?>" required>
            </div>
            <div class="mb-3">
                <label for="n2" class="form-label">Número 2</label>
                <input type="number" id="n2" name="n2" class="form-control" value="<?php echo $n2; ?>" required>
            </div>
            <div class="mb-3">
                <label for="suma" class="form-label">Suma</label>
                <!-- Mostrar el resultado de la suma -->
                <input type="number" id="suma" name="suma" class="form-control" value="<?php echo $suma; ?>" disabled>
            </div>
            
            <button type="submit" name="calcular" class="btn btn-primary">Enviar</button>
        </form>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
