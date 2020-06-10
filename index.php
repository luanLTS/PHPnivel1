<?php

    // ---------------------------------------------------------------------------------------------------------------------------------------------------
    // Variaveis e concatenação

    // $nome = "Luan ";
    // $sobrenome = "Teixeira";

    // $nomeCompleto = $nome;
    // $nomeCompleto .= $sobrenome;

    // echo $nomeCompleto;

// ---------------------------------------------------------------------------------------------------------------------------------------------------
    // Arrays

    // $ingredientes = [
    //     'açucar',
    //     'leite',
    //     'manteiga',
    //     'farrinha de trigo',
    //     'baunilha'
    // ];
    // echo $ingredientes[0]. "<br />";
    // echo $ingredientes[3]. "<br />";
    // echo $ingredientes[4]. "<br />";

    
    // ---------------------------------------------------------------------------------------------------------------------------------------------------
    // Array spread

    // $ingredientesPo = [
    //     'farinha de trigo',
    //     'açucar',
    //     'achocolatado'
    // ];
    // $ingredientesLiquidos = [
    //     'leite',
    //     'oleo',
    //     'margarina'
    // ];
    // $ingredientesTodos = [
    //     ...$ingredientesPo,
    //     ...$ingredientesLiquidos
    // ];
    // echo "Ingredientes em pó:<br /> $ingredientesTodos[0] <br />$ingredientesTodos[1]<br />$ingredientesTodos[2]<br />";
    // echo "<br />Ingredientes líquidos:<br /> $ingredientesTodos[3] <br />$ingredientesTodos[4]<br />$ingredientesTodos[5]<br />";


    // ---------------------------------------------------------------------------------------------------------------------------------------------------
    // operador ternario

    // $senha = "0109010";
    // $tamanhoSenha = strlen($senha);
    // echo ($tamanhoSenha < 6) ? 'O tamanho da senha tem que ser maior que 6' : "Sua senha é: $senha";
    

    // ---------------------------------------------------------------------------------------------------------------------------------------------------
    // Null CAO
    //     //jeito com operador ternario
    // $nome = "Luan";
    // $nomeCompleto = $nome?? 'Visitante';
    // $nomeCompleto .= isset($sobrenome)? $sobrenome : ''; // ISSET verifica se esta setado a variavel
    // $nomeCompleto .= $sobrenome?? ''; // null CAO, se a variavel existir ela pega ela mesmo, caso contrario ele coloca uma string vazia.

    // echo $nomeCompleto;


    // ---------------------------------------------------------------------------------------------------------------------------------------------------
    // Exercício Prático (Variáveis)
    // ex 1
    // $lista = [
    //     $nome = "Bonieky",
    //     $idade = 90,
    //     $atributos = [
    //         $forca = 60,
    //         $agilidade = 80,
    //         $destreza = 50
    //     ],
    //     $vida = 1000,
    //     $mana = 928
    // ];

    // echo "NOME : $lista[0] <br />";  
    // echo "FORÇA :". $lista[2][0] ."<br />";
    // echo "VIDA : $lista[3] <br />";

    // ex 2
    // $lista = [
    //     'nome' => 'bonieky',
    //     'idade' => 90,
    //     'atributos' =>[
    //         'forca' => 60,
    //         'agilidade' => 80,
    //         'destreza' => 50
    //          ],
    //     'vida' => 1000,
    //     'mana' => 928
    // ];
    // echo "NOME: ".$lista['nome']."<br/>";
    // echo "FORÇA: " .$lista['atributos']['forca']."<br/>";
    // echo "VIDA:" .$lista['vida'];
        

    // ---------------------------------------------------------------------------------------------------------------------------------------------------
    // loop for

    // for ($i = 0; $i <= 10; $i++) {
    //     echo $i . "<br />";
    // }


    // ---------------------------------------------------------------------------------------------------------------------------------------------------
    // loop while
    
    // $i = 0;
    // while ($i <= 10 ) {
    //     echo $i . "<br />";
    //     $i++;
    // }


    // ---------------------------------------------------------------------------------------------------------------------------------------------------
    // loop do while
    
    // $i = 11;
    // do {
    //     echo "$i <br />";
    //     $i--;
    // } while ($i <= 10 && $i >= 0);

    // loop foreach signfica PARA CADA

    // $lista = [
    //     'maçã',
    //     'banana',
    //     'malão',
    //     'melancia',
    //     'mamão'
    // ];
    // foreach (<array> as <variavel que vai assumir cada valor por passada>){}
    // foreach ($lista as $index => $fruta) {
    //     echo "Fruta $index :" . $fruta . "<br />";
    // }


    // ---------------------------------------------------------------------------------------------------------------------------------------------------
    
    // Exercicio pratico 1
    
    // for ($i = 0; $i <= 10; $i++) {
    //     for ($j = 0; $j <=10; $j++) {
    //         echo "-";
    //     }
    //     echo "<br />";
    // }


    // ---------------------------------------------------------------------------------------------------------------------------------------------------
    // Exercicio pratico 2 

    // $qtd = 0;
    // for ($i = 0; $i <= 19; $i++) {
    //         for ($j=0; $j <= $qtd ; $j++) { 
    //             echo "-";
    //         }
    //         $qtd++;    
    //     echo "<br />";
    // }
   // ---------------------------------------------------------------------------------------------------------------------------------------------------
    // Funções

    // function subsequente() {
    //     for ($q = 0; $q < 10; $q++) {
    //         echo "$q <br />";
    //     }
    //     echo "<hr />";
    // }

    // subsequente();
    // subsequente();
    // subsequente();


    // ---------------------------------------------------------------------------------------------------------------------------------------------------
    // Parametros de funções - tudo que acontece na função fica na função;

    // function somar($n1, $n2) {
    //     return $soma = $n1 + $n2;
    // }

    // echo "TOTAL: ".somar(1, 3);

    // function somarValoresPadroes(int $num1 = 0, int $num2 = 0, int $num3 = 0) {

    // }

    //sort(); // ordena o array do menor para o maior

    // function subtrair(int $n1, int $n2, &$resultado) { // & faz com que seja passado a variavel ao inves do valor dentro dela, entao com isso o que acontece na função não fica mais na função.
    //     $resultado = $n1 + $n2;
    // }

    // $resultado = 0;

    // subtrair(10, 40, $resultado);

    // echo $resultado;
    
    // ---------------------------------------------------------------------------------------------------------------------------------------------------
    //funções anonimas
    
    // $dizimo = function ($valor) {
    //     return $valor * 0.1;
    // };
    
    // echo $dizimo(10);

    // $somar = function ($n1, $n2) {
    // return $n1 + $n2;
    // };
    // echo $somar(10, 20);

    // funções flecha (arrow)

    // $dizimo = function($valor) {
    //     return $valor * 10;
    // };

    //$dizimo = fn($valor) => $valor * 10; // a flecha (=>) serve como o resturn de uma funcão normai
    // echo $dizimo(10);

    // ---------------------------------------------------------------------------------------------------------------------------------------------------
    // funcoes recursivas

    // function dividir ($num) {
    //     $metade = $num / 2;
    //     echo $metade."<br />";

    //     if (round($metade) > 0) { // round() aredonda o numero, se >= 5 pra cima e <= 4 para baixo;
    //         dividir($metade);
    //     }
    // }

    // dividir(100);

    // function somar($valor) {
        //         $result = $valor + 1;
        //         echo $result. "<br />";
        //         if ($result < 100) {
        //              somar($result);
        //         }
        //    }
        
        //    somar(0);
    
    // ---------------------------------------------------------------------------------------------------------------------------------------------------
    //Fatorial
    // function fatorial($num, $fator=1){  
    //     $fator = $fator * $num;
    //     if ($num > 2){    
    //     return fatorial(--$num, $fator); 
    //     }
    //     return $fator;  
    // }
    // echo "<br/> 1!  = ".fatorial(1);
    // echo "<br/> 2!  = ".fatorial(2);
    // echo "<br/> 3!  = ".fatorial(3);
    // echo "<br/> 4!  = ".fatorial(4);
    // echo "<br/> 5!  = ".fatorial(5);
    // echo "<br/> 6!  = ".fatorial(6);
    // echo "<br/> 7!  = ".fatorial(7);
    // echo "<br/> 8!  = ".fatorial(8);
    // echo "<br/> 9!  = ".fatorial(9);
    // echo "<br/> 10  = ".fatorial(10) 

    // ---------------------------------------------------------------------------------------------------------------------------------------------------
    // funcoes nativas de matematica (1)
    
    // echo abs(-11)."<br />"; // retorna o numero absoluto;
    // echo pi()."<br />"; // pega o numero Pi
    // echo floor(2.9)."<br />"; // arredonda sempre pra cima.
    // echo ceil(2.1)."<br />"; // arredonda sempra para cima
    // echo round(2.41990, 2)."<br />"; // arredonda o numero, e o segundo parametro fala a tolerancia das casas decimais
    // echo rand(1, 10)."<br />"; // gera um numero aleatorio entre os que parametros que voce passar.
    // echo max(1, 3, 6, 6, 7)."<br />"; // retorna o maior numero do array
    // echo min(1, -2, 10)."<br />"; // retorna o menor valor do array

    // ---------------------------------------------------------------------------------------------------------------------------------------------------
    // funcoes nativas de String

    // $nome = "                Luan   ";
    // $nomeLimpo = trim($nome); // remove todos os espacos da String.
    
    // echo $nome."<br />";
    // echo $nomeLimpo."<br />";

    // echo "tamanho nome: ".strlen($nome)."<br />";
    // echo "tamanho nome limpo: ".strlen($nomeLimpo)."<br />";

    // echo strtolower($nomeLimpo)."<br />"; // deixa tudo em caixa baixa
    // echo strtoupper($nomeLimpo)."<br />"; // deixa tudo em caixa alta
    
    // $nomeCompleto = "Luan Teixeira da Silva";

    // $nomeTrocado = str_replace("Luan", "Mito", $nomeCompleto); // troca uma string por outra.
    // echo $nomeTrocado."<br />";

    // $nome = substr($nomeCompleto, -3, 3);// ele pega so um pedaco da string, 2º parametro onde vai comecar(negotivo ele pega ao contrario). e o 3º parametro onde ele vai parar.

    // echo $nome."<br />";

    // ---------------------------------------------------------------------------------------------------------------------------------------------------
    // funcoes nativas de String (2)

    


    ?>