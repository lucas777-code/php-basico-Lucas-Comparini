<!-- USANDO A FUNÇÃO GET -->
 <!-- GET: metodo HTML padrão, a requisição é enviada como uma string anexada a URL -->

 <!-- Esse programa recebe dois valores pela URL usando o metodo GET-->

 <?php
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];


    // Verifica se os valores foram passados corretamente
    if(isset ($numero1) $$ isset ($numero2)){

        //Converter para inteiros
        $numero1 = (int)$numero1;
        $numero2 = (int)$numero2;

    // Realiza as operações aritmeticas basicas
    $soma = $numero1 + $numero2;
    $subtracao = $numero1 - $numero2;
    $muitiplicacao = $numero1 * $numero2;
    $divisao = $numero1 / $numero2

    // Exibe os resultados
    echo "Soma : $soma <br>";
    echo "Subtração : $subtracao <br>";
    echo "Multiplicação : $multiplicacao <br>";
    echo "Divisão : $divisao <br>;"

    } else{
        echo "ATENÇÃO! Por favor, forneça os valores de numero1 e numero2 pela URL.";
    }

 ?>
