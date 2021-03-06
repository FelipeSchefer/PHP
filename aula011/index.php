<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pessoa</title>
</head>
<body>
    <pre>
        <?php
            require_once 'Visitante.php';
            require_once 'Aluno.php';
            require_once 'Bolsista.php';
            
            $hr = '<hr><br>';

            // VISITANTE
            $v = new Visitante();
            $v->setNome('Rodrigo');
            $v->setIdade(35);
            $v->setSexo("Masculíno");
            print_r($v);
            print_r($hr);
            /**************************/
            
            // ALUNO
            $a = new Aluno();
            $a->setNome('Ricardo');
            $a->setIdade(30);
            $a->setSexo("Masculíno");
            $a->setCurso('Informatica');
            $a->setMatricula(1111);
            print_r($a);
            $a->pagarMensalidade();
            print_r($hr);
            /**************************/

            // BOLSISTA
            $b = new Bolsista();
            $b->setNome('Angelini');
            $b->setIdade(18);
            $b->setSexo("Feminino");
            $b->setCurso("ADS");
            $b->setMatricula(2222);
            $b->setBolsa(15.0);
            print_r($b);
            $b->pagarMensalidade();
            $b->renovarBolsa();
            print_r($hr);
            /**************************/

        ?>
    </pre>
    
</body>
</html>