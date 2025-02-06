<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Combinação de array</title>
</head>
<h2> Combinação de array</h2>
<body>
    <?php 

    $numeros1 = [1,2,3,4,5];
    $numeros2 = [6,7,8,9,10];

    echo "Lista dos números separadas : ";
    print_r($numeros1);
    print_r($numeros2);

    echo "<br><br>";

    $juntas = array_merge($numeros1, $numeros2);
    echo "Todas as listas juntas : ";
    print_r($juntas);
    

    ?>
</body>
</html>