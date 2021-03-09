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
            require_once 'Pessoas.php';
            require_once 'Livros.php';

            $p[0] = new Pessoas("Pedro", 22, "M");
            $p[1] = new Pessoas("Marta", 31, "F");

            $l[0] = new Livros("PHP Básico", "Felipe Schefer", 300, $p[1]);
            $l[1] = new Livros("Java Avançado", "Felipe Schefer", 500, $p[1]);
            $l[2] = new Livros("Naruto", "Kishimoto", 1000, $p[0]);

            $l[0]->abrir();
            $l[0]->folhear(20);
            $l[0]->avancarPag();

            $l[0]->detalhes();
            $l[1]->detalhes();
            $l[2]->detalhes();
        
        ?>
    </pre>
</body>
</html>