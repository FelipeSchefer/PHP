<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança</title>
</head>
<body>
    <pre>
        <?php
            require_once 'Mamifero.php';
            require_once 'Reptil.php';
            require_once 'Peixe.php';
            require_once 'Ave.php';
            require_once 'Cachorro.php';
            require_once 'Kanguru.php';
            require_once 'Cobra.php';
            require_once 'Tartaruga.php';
            require_once 'Goldfish.php';
            require_once 'Arara.php';
            $hr = '<hr><br>';

            // MAMMIFEROS
            $m = new Mamifero();
            // $m->setPeso(33.5);
            // $m->locomover();

            $ca = new Cachorro();
            $ca->locomover();
            $ca->alimentar();
            $ca->emitirSom();

            $kan = new Kanguru();
            $kan->locomover();
            $kan->alimentar();
            $kan->emitirSom();
            print_r($hr);

            // REPTIS 
            $r = new Reptil();
            // $r->setPeso(25.9);
            // $r->locomover();
            
            $tar = new Tartaruga();
            $tar->locomover();
            $tar->alimentar();
            $tar->emitirSom();
            
            $co = new Cobra();
            $co->locomover();
            $co->alimentar();
            $co->emitirSom();
            print_r($hr);

            // PEIXES
            $p = new Peixe();
            // $p->setPeso(5.3);
            // $p->locomover();
            
            $gold = new Goldfish();
            $gold->locomover();
            $gold->alimentar();
            $gold->emitirSom();
            $gold->soltarBolha();
            print_r($hr);

            //AVES
            $a = new Ave();
            // $a->setPeso(6.2);
            // $a->locomover();
            
            $ara = new Arara();
            $ara->locomover();
            $ara->alimentar();
            $ara->emitirSom();
            print_r($hr);


        ?>
    </pre>    
</body>
</html>