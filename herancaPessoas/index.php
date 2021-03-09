<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança de pessoa</title>
</head>
<body>
    <!-- PROGRAMA PRINCIPAL -->
    <pre>
        <?php
            require_once 'Pessoa.php';
            require_once 'Aluno.php';
            require_once 'Professor.php';
            require_once 'Funcionario.php';
            
            $br = "<br><hr>"; // "print_r($br);" DIVISOR DE LINHA

            // PESSOA
            $p1 = new Pessoa();
            $p1->setNome('Pedro');
            $p1->setSexo('M');
            $p1->setIdade(45);
            print_r($p1);
            print_r($br);
            /*-------------------------*/

            // PROFESSOR
            $p3 = new Professor();
            $p3->setNome('Cláudio');
            $p3->setSexo('F');
            $p3->setIdade(18);
            $p3->setEspecialidade("Professora de inglês");
            $p3->setSalario(2500.75);
            print_r($p3);
            print_r($br);
            /*--------------------------*/

            // FUNCIONARIO
            $p4 = new Funcionario();
            $p4->setNome('Fabiana');
            $p4->setSexo('F');
            $p4->setIdade(20);
            $p4->setTrabalhando(true);
            $p4->setSetor('Zeladora');            
            $p4->mudarTrabalho("Gerente");
            print_r($p4);
            print_r($br);
            /*--------------------------*/

            // ALUNO
            $p2 = new Aluno();
            $p2->setNome('Maria');
            $p2->setSexo('F');
            $p2->setIdade(17);
            $p2->cancelarMatricula(true);
            $p2->setCurso("Informática");
            print_r($p2);
            print_r($br);
            /*--------------------------*/
            
            

            
           
            
          

            
            
            
            
           
          

          
        ?>
    </pre>
    
</body>
</html>