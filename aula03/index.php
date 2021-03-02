<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php
        require_once 'Caneta.php';

        $c1 = new Caneta();
        $c1->modelo = "bic";
        $c1->cor = 'Azul';

        $c1->rabiscar();
        $c1->destampar();
        print_r($c1);

        ?>
    </pre>
</body>
</html>