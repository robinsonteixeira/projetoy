<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>

<h1 style="background-color:red">aqui</h1>

<?php
/*comentário com mais de uma linha
*/
//comentário em uma lina
$nome = "Robinson";
$sobrenome = "Teixeira";
$idade = "51";

// as duas aspas espaçadas entre o nome e sobrenome referem-se ao espaço.
// entre aspas são os textos, e um espaço depois da primeira aspas e antes da última, separa os textos da concatenação
// a concatenação é representada pelo ponto (.) em vermelho.
echo "Meu nome é: ".$nome." ".$sobrenome." e eu tenho ".$idade." anos "; 

// tipos de variáveis

$nome = "Robinson";  // string = textos e tudo dentro das aspas.
$idade = 90;  // inteiro, int, integer
$nota = 7.5 ; //float 
$ligado = true;  // boolean. TRUE / FALSE
$GRUPOS = array(1,2,3,4,5);  // tipo de variável que armazena várias variáveis dentre dele (array)


?>

<?php

$variavel = array(

	 "Robinson",
	"sobrenome" => "Teixeira",
	"idade" => 51,
	"sexo" => "masculino",
	"vendedor",
	"veiculos"

	);
	
	echo $variavel["sobrenome"];

?>



</br></br></br>
$nome = "Robinson";</br>
$sobrenome = "Teixeira";</br>
$idade = "51";</br></br>

 as duas aspas espaçadas entre o nome e sobrenome referem-se ao espaço.</br>
 entre aspas são os textos, e um espaço depois da primeira aspas e antes da última, separa os textos da concatenação</br>
 a concatenação é representada pelo ponto (.) em vermelho.</br>
echo "Meu nome e: ".$nome." ".$sobrenome." e eu tenho ".$idade." anos "; </br></br>

tipos de variáveis</br></br>

$nome = "Robinson";  // string = textos e tudo que estiver dentro das aspas</br>
$idade = 90;  // inteiro, int, integer</br>
$nota = 7.5 ; //float </br>
$ligado = true;  // boolean. TRUE / FALSE </br>
$GRUPOS = array(1,2,3,4,5);  // tipo de variável que armazena várias variáveis dentre dele (array)</br>
</br>
</br>

<?php

if (isset($_POST['nome']) /*&& ($_POST['senha'])*/ && empty($_POST['nome']) == false){

	$nome = $_POST['nome'];
	//$senha = $_POST['senha'];
}
	echo "Meu Login é: ".$nome /*." Minha senha é: " .$senha*/;

?>

</br></br>
<form method="POST">
	Login:</br>
	<input type="text" name="nome"/></br></br>
	<!-- Senha:</br> -->
	<!-- <input type="password" name="senha"/></br></br> -->
	<input type="submit" name="Enviar"/>
</form>
</br></br>

<?php


$x=1;

	echo 'Mostrar na tela: <br/>';
	while ($x <= 10) {     // Enquanto variavel $x for menor ou igual a 10
		
		print($x++);       //fazer isso: imprimir 1 até 10.  
		
			
		}
		
	
	


?>

<?php

for( $i = 1; $i <= 100; $i++ ){

  echo '<br />' . $i . '<br />' /*. PHP_EOL*/;
  echo 'Contando...';

  for( $j = $i + 1; $j <= $i + 5; $j++ ){

    if( $j != $i + 5 ){
      echo $j . ', ';
    } else {
      echo $j;
    }

    if($j == 7){
      break ;
    }

  }

}


?>

<br/>
<?php

$mensagem = "Estou aprendendo loopings no Aprender PHP";

$i = 1;
while( $i <= 100 ){
  echo $i . ' - ' .$mensagem . '<br />' . PHP_EOL ;
  $i++;
}

?>
<br/>
<?php

$i = 1;
$mensagem = "Estou aprendendo loop no PHP";

while ( $i <= 15) {
	echo  $i ." - " . $mensagem ."<br/>";
	$i++; 
}

?>

<br/>

<?php

	$a = 10;
	$b = $a++;	
	$a++;

	echo '$a = '.$a . ' - $b = '.$b;

		  // $i++ incremento depois da variável, é pós incremento
		  // primeiro retorno o valor da variável, para depois incrementar.
		  // ++$i pré incremento antes da variável, é pré incremento
		  // primeiro incrementa, e depois retorna o valor da variável.

?>

<br/>
<?php

	$a = 10;
	$b = ++$a;
	++$a;

	echo '$a = '.$a .' - $b = '.$b;


?>
<br/>

<br/>

<?php

if (isset($_POST['email']) && !empty($_POST['email'])) 

{
	if(isset($_POST['senha']) && !empty($_POST['senha']))

	{
		
		$email = $_POST['email'];
		$senha =$_POST['senha'];

		echo "Email enviado com sucesso: ".$email ." e minha senha é ".$senha;
		
	}
}	

?>

<form method="POST">

	E-mail:<br/>
	<input type="text" name="email"/><br/><br/>
	Senha:<br/>
	<input type="password" name="senha"/><br/><br/>

	<input type="submit" value="Enviar dados"/>

</form>


</body>
</html>



