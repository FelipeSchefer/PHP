<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobrecarga</title>
</head>
<body>
    <pre>
        <?php
            require_once 'Mamifero.php';
            require_once 'Lobo.php';
            require_once 'Cachorro.php';

            $ma = new Mamifero();
            $ma->emitirSom();

            $lo = new Lobo();
            $lo->emitirSom();

            $ca = new Cachorro();
            $ca->emitirSom();
            
            $ca->reagirFrase("Olá");
            $ca->reagirFrase("Vai apanhar");

            $ca->reagirHora(11,45);
            $ca->reagirHora(21,00);

            $ca->reagirDono(true);
            $ca->reagirDono(false);

            $ca->reagirIdadePeso(2,12.5);
            $ca->reagirIdadePeso(17,4.5);

        ?>
    </pre>
</body>
</html>