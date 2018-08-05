<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<style type="text/css">

	#num1{

		float: left;
		width: 200px;
		height: 200px;
		border: 1px solid #000;
		line-height: 200px;
		text-align: center;
		margin: 10px;
		background-color: #ccc;
		font-size: 100px;
		font-family: arial;

	}

	#num2{

		float: left;
		width: 200px;
		height: 200px;
		border: 1px solid #000;
		line-height: 200px;
		text-align: center;
		margin: 10px;
		background-color: #ccc;
		font-size: 100px;
		font-family: arial;

	}

	#btn{

		width: 420px;
		height:40px;
		margin: 10px;

	}	




			/*---------------------------- JOGO MEMÓRIA ------------------------*/

	#n1, #n2, #n3, #n4, #n5, #n6, #n7, #n8, #n9, #n10 {

		width: 50px;
		height: 40px;
		line-height: 40px;
		text-align: center;
		border: 1px solid #000;
		background-color: #ccc;
		color: blue;
		font-size: 30px;
		margin-right: 10px;

	} 	

	#n11, #n12, #n13, #n14, #n15, #n16, #n17, #n18, #n18, #n19, #n20 {

		width: 50px;
		height: 40px;
		line-height: 40px;
		text-align: center;
		border: 1px solid #000;
		background-color: #ccc;
		color: blue;
		font-size: 30px;
		margin-right: 10px;

	}	

	/*------------------------- CALCULADORA ----------------------------------*/

	#c1, #c2, #c3, #c4, #c5, #c6, #c7, #c8, #c9, #c0, #somar, #dividir, #multiplicar, #diminuir {

		width: 52px;
		height: 52px;
		line-height: 52px;
		margin: 3px;
		font-size: 20px;
		font-family: arial;
		margin-top: 10px;
	}

	#igual{

		width: 114px;
		height: 52px;
		line-height: 52px;
		margin: 3px;
		font-size: 20px;
		font-family: arial;

	}

	

	.calculadora{

		margin:auto;
		background-color: #e4edf7;
		width: 250px;
		height: 300px;
		border: 5px solid #000;
	}

	#visor {

		width: 245px;
		height: 30px;
		font-size: 30px;

	}


	

	</style>
</head>
<body onload="iniciar()">

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

if (isset($_POST['nome']) /*&& ($_POST['senha'])*/ && empty($_POST['nome']) == false) {

	$nome = $_POST['nome'];
	//$senha = $_POST['senha'];

	echo "Meu Login é: ".$nome /*." Minha senha é: " .$senha*/;
}

	

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


<hr/>
<h3>LOOP PHP</h3>
<?php

$x=1;

	echo 'Mostrar na tela: <br/>';
	while ($x <= 10) {     // Enquanto variavel $x for menor ou igual a 10
		
		echo "Num: ".$x.';'.'<br/>';

		$x++;       //fazer isso: imprimir 1 até 10.  
		
			
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
<hr/>
<h3>LOOP em PHP</h3>
<?php

$mensagem = "Estou aprendendo loopings no Aprender PHP";

$i = 1;
while( $i <= 10 ){
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

<h3>Enviando um formulário com email e senha em PHP</h3>

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
	else
		echo "Email inválido";

?>

<form method="POST">
	<input type="text" name="email"/></br></br>
	<input type="password" name="senha"/></br></br>
	<input type="submit" value="Enviar">
</form>





</br>
</br>



<h3>Uma calculadora simples de soma em JS</h3>

<input type="text" name="campo1" id="campo1"/></br></br>
	<input type="text" name="campo2" id="campo2"/></br></br>

	<button onclick="somar()">Calcular</button>

	<script type="text/javascript">

		function somar () {
			
			var campo1 =  parseFloat(document.getElementById("campo1").value);
			var campo2 =  parseFloat(document.getElementById("campo2").value);
			// parseFloat = soma com casas decimais separadas por .(ponto)
			// parseInt = soma com numeros inteiros, se tiver decimal, ele arredonda.
			// Se não colocar esse comoando parseFloat ou parseInt, o JS vai entender como uma string.
			
			var soma = campo1 + campo2;
			alert("A soma é "+soma);

		}
	</script>




<hr/>
<h3>Modificando o HTML com JS.</h3>

	<div id="area">Alterar aqui</div></br></br>

	<button onclick="alterar()">Fazer a Ação</button>

	<script type="text/javascript">

		function alterar(){

			var area = document.getElementById("area");
			var texto = prompt ("qual seu nome?");

			area.innerHTML = texto;

		}

	</script>

</br></br>
<hr/>

	<h3>Modificando uma lista JS somente na tela, quando atualiza, volta ao html original.</h3></br>

	<h4>Ingredientes</h4>

	<input type="text" id="ingrediente" autofocus/>
	<button onclick="addIngrediente()">Adicionar</button>

	<ul id="lista">
		<li>Item 1</li>
		<li>Item 2</li>
		<li>Item 3</li>
	</ul>

	<script type="text/javascript">

		function addIngrediente() {

			var ing = document.getElementById('ingrediente').value;
			var lista = document.getElementById('lista').innerHTML;

			lista = lista + "<li>"+ing+"</li>";

			document.getElementById('lista').innerHTML = lista;

		}



	</script>

</br></br>
<hr/>

<h3> Manipulando ARRAYS pelo JS</h3>


<script type="text/javascript">

var array = ["arroz", "feijão", "macarrão", 20];

array.join(",");


</script>

<br/><br/>
<hr/>
<h3>LOOP JS</h3>
</br>

<script type="text/javascript">

	var x = 0;

	document.write("<h4>Iniciando o LOOP..</h4> <br/>");

	while(x < 10) {

		document.write("Numero: "+x+"<br/>");

		x++;
	}

</script>

<br/><br/>
<hr/>

	<div id="num1">0</div>
	<input type="text" id="num2" >
	<div style="clear:both"></div> 
	<button onclick="btn()" id="btn">Verficador</button>
	
<script type="text/javascript">

	function btn() {

		var num1 = document.getElementById("num1").innerHTML;
		var num2 = document.getElementById("num2").value;


		if(num1 == num2) {

			alert('O número é igual.');
		}

		else{

			alert('número diferente!');

			
		}

			reset ();
	}	

		function reset (){

			document.getElementById("num2").value="";

			var res = Math.floor(Math.random()*100);

			document.getElementById('num1').innerHTML = res;
		}

		
</script>


<br/><br/>
<hr/>
<h3>JOGO DE MEMÓRIA EM JS</h3>	
<br/><br/>
<input type="text" id="n1" maxlength="3">	
<input type="text" id="n2" maxlength="3">	
<input type="text" id="n3" maxlength="3">	
<input type="text" id="n4" maxlength="3">	
<input type="text" id="n5" maxlength="3">	
<input type="text" id="n6" maxlength="3">	
<input type="text" id="n7" maxlength="3">	
<input type="text" id="n8" maxlength="3">	
<input type="text" id="n9" maxlength="3">	
<input type="text" id="n10" maxlength="3">
<br/><br/>
<input type="text" id="n11" maxlength="3">	
<input type="text" id="n12" maxlength="3">	
<input type="text" id="n13" maxlength="3">	
<input type="text" id="n14" maxlength="3">	
<input type="text" id="n15" maxlength="3">	
<input type="text" id="n16" maxlength="3">	
<input type="text" id="n17" maxlength="3">	
<input type="text" id="n18" maxlength="3">	
<input type="text" id="n19" maxlength="3">	
<input type="text" id="n20" maxlength="3">

<br/><br/><br/>



<hr/>
<h3>CALCULADORA </h3>
<br/><br/><br/>
<div class="calculadora">
	<input type="text" name="visor" id="visor"/><br/>
	<input type="button" onclick="c7(7)" id="c7" value="7"></button>
	<input type="button" onclick="c8(8)" id="c8" value="8"></button>
	<input type="button" onclick="c9(9)" id="c9" value="9"></button>
	<input type="button" onclick="dividir(div)" id="dividir" value="/" ></button><br/>	
	<button onclick="c4()" id="c4"> 4 </button>	
	<button onclick="c5()" id="c5"> 5 </button>	
	<button onclick="c6()" id="c6"> 6 </button>
	<button onclick="multiplicar()" id="multiplicar" > * </button><br/>
	<button onclick="c1()" id="c1"> 1 </button>	
	<button onclick="c2()" id="c2"> 2 </button>	
	<button onclick="c3()" id="c3"> 3 </button>
	<button onclick="diminuir()" id="diminuir" > - </button><br/>
	<button onclick="c0()" id="c0">0 </button>
	<button onclick="igual()" id="igual" > = </button>
	<button onclick="somar()" id="somar" > + </button>
</div>

<script type="text/javascript">


	function c7(7) {

		var c1 = parseFloat(document.getElementById("c1").value);
		var c2 = parseFloat(document.getElementById("c2").value);
		var c3 = parseFloat(document.getElementById("c3").value);
		var c4 = parseFloat(document.getElementById("c4").value);
		var c5 = parseFloat(document.getElementById("c5").value);
		var c6 = parseFloat(document.getElementById("c6").value);
		var c7 = parseFloat(document.getElementById("c7").value);
		var c8 = parseFloat(document.getElementById("c8").value);
		var c9 = parseFloat(document.getElementById("c9").value);
		var c0 = parseFloat(document.getElementById("c0").value);

		var visor = parseFloat(document.getElementById("visor").value);

		c7=7 ;

			alert('A tecla 7 está correta!');
		

	}

	function diminuir() {

	}

	function multipliar() {

	}

	function dividir() {

		+
	}

</script>

</br></br>
<hr/>

<h3>EVENTO NO MOUSE JS</h3>
</br></br>

<button onMouseDown="ApertouMouse()" onMouseUp="SoltouMouse()" onMouseOver="PassarMouse()" onMouseOut="SaiuDeCima()">
	BOTÃO</button></br></br>

<button onClick="clicar()">BOTÃO 2</button>	
</br>
</br>
<button ondblClick="cliqueDuasVezes()">Botão 2 cliques</button>

<script type="text/javascript">

	function ApertouMouse(){

		console.log("APERTOU O BOTÃO!");
	}

	function SoltouMouse(){

		console.log("SOLTOU O MOUSE!");
	}

	function PassarMouse(){

		console.log("PASSOU O MOUSE!");
	}

	function SaiuDeCima(){

		console.log("SAIU DE CIMA!");
	}


	function clicar(){

		console.log("CLICOU!");
	}

	function cliqueDuasVezes(){

		console.log("CLIQUE DUAS VEZES!");
	}
		

</script>

<br/>
<br/>
<hr/>
<h3>EVENTOS DE TECLADO EM JS.</h3>

<input type="text" onkeydown="apertouTecla(event)"/><br/><br/>
<input type="text" onkeyup="solteTecla(event)"/><br/><br/>
<input type="text" onkeypress="solteTecla(event)"/><br/><br/>



<script type="text/javascript">

	function apertouTecla(evento){

		console.log("Apertou alguma tecla: "+evento.keyCode);

	}


	function solteTecla(evento){

		console.log("Soltou a tecla: "+evento.keyCode);
	}
	
</script>
<br/>
<br/>
<hr/>
<h3>EVENTOS DE PÁGINA</h3>	


<h5>O evento onload do JS dentro da tag body faz com a página seja atualizada.</h5>

<!-- ############################################################### -->

<hr/>
<br/>
<h3>JOGO ESTOURAR BALÕES NO JS</h3>
<br/>

<style type="text/css">

	.bola{

		width: 50px;
		height: 50px;
		background-color: #ff0000;
		border-radius: 1px;
		position: absolute;

	}

	.bola1{

		width: 50px;
		height: 50px;
		background-color: #ff0000;
		position: absolute;

	}

</style>
<script type="text/javascript">

	function addBola(){

		var bola = document.createElement("div"); // cria um elemento de nome DIV para o CSS criar uma bola vermelha
		                                          // na variável bola.
		bola.setAttribute("class", "bola"); // a variável bola é setada com atributo class e bola.

		var pos1 = Math.floor(Math.random()*800); // cria números inteiros aleatórios até 500 na variável pos1
		var pos2 = Math.floor(Math.random()* 500); // cria números inteiros aleatórios até 400 na variável pos2
		var color = Math.floor(Math.random() * 999999);
		


		bola.setAttribute("style", "left:"+pos1+"px; top:"+pos2+"px; background-color:#"+color+";"); // seta a variável bola atribuindo style
		                                                                // left concatenando com var pos1 e
		                                                                // top concatenando com a var pos2.
		                                                                
		bola.setAttribute("onClick", "estourar(this)"); // seta  a var bola atribuindo onclick e uma função 
		                                                // estourar(this) 

		document.body.appendChild(bola);
	
	}


	
	function estourar(objeto){

		document.body.removeChild(objeto);

	}

	function iniciar(){

		setInterval (addBola, 1000);
	}
//#######################################################################################


</script></br></br>
<hr/>
<h4>PAR OU ÍMPAR</h4>
</br>

<h4>Digite um número e saberá se é par ou impar.</h4>

<input type="text" id="num10" /><br/><br/>

<button onclick="res()">Enviar</button><br/><br/>

<p id="demo">Resultado</p>

<script>

	function res(){

		var x = document.getElementById("num10").value;
		var y = x % 2;


		if ( y == 0  ){
			document.getElementById("demo").innerHTML = "O número "+x+" é par.";
            document.getElementById("demo").style.color="#0000ff";
            document.getElementById("demo").style.fontSize="15px";

	} 	else {

		document.getElementById("demo").innerHTML = "O número "+x+" é impar.";
        document.getElementById("demo").style.color="#ff0000";
        document.getElementById("demo").style.fontSize="15px";

	}

}

</script>
<br/>
<br/>

<!--  --------------------------------------------------------------- -->
<hr/>

<style type="text/css">
	#resultado{

		width: 210px;
		text-align: center;
		margin: auto;
	}

	#parabens{

		display: none;
		margin: auto;
	}

</style>
<h3>MÉDIA DE NOTAS </h3>

<p>Primeira nota</p>
<input type="text" id="sem1"><br/>

<p>Segunda nota</p>
<input type="text" id="sem2"><br/><br/>

<button onclick="enviar2()">Enviar</button>

<p id="media">Média:</p>
<p id="resultado"></p>
<img src="img_parabens.gif" id="parabens" >

<script type="text/javascript">

	function enviar2(){

		var sem1 =  parseFloat(document.getElementById("sem1").value);
		var sem2 =  parseFloat(document.getElementById("sem2").value);

		var med = (sem1 + sem2) / 2 ;
		

		//document.getElementById("media").innerHTML = "Média: "+ med;

		if (med >= 60) {

			document.getElementById("media").innerHTML = "Média: "+ med;
			document.getElementById("resultado").innerHTML = "APROVADO";
			document.getElementById("resultado").style.color="blue";
			document.getElementById("resultado").style.fontSize="35px";
			document.getElementById("parabens").style.display="block";
			
		}

		else	{
			document.getElementById("media").innerHTML = "Média: "+ med;
			document.getElementById("resultado").innerHTML = "REPROVADO";
			document.getElementById("resultado").style.color="red";
			document.getElementById("resultado").style.fontSize="35px";
			document.getElementById("parabens").style.display="none";
			
		}


	}

</script>



<!-- -------------------------------------------------------------------------------------- -->

</br></br>
<hr/>

<h3>MÉDIA AQUI ESTÁ OK... FALTANDO BUSCAR DO ID DE UM INPUT.. ESTÁ COM NUM. FIXO.</h3>
</br>

<input type="text" id="sem1"></br></br>
<input type="text" id="sem2"></br></br>
<button onclick="enviar1()">Enviar</button></br></br>
<p id="media1">Média:</p>

<p id="res"></p>

<script>

function enviar1(){
var sem1 = 65;
var sem2 =	60;
var x = (sem1 + sem2) / 2;

document.getElementById("media1").innerHTML ="Média: "+ x;


if (x >= 60) {

		document.getElementById("res").innerHTML = "APROVADO";
    	document.getElementById("res").style.color="blue";
    	document.getElementById("res").style.fontSize="20px";
	}
		else {
    
    	document.getElementById("res").innerHTML = "REPROVADO";
     	document.getElementById("res").style.color="red";
     	document.getElementById("res").style.fontSize="20px";
    }
}    
</script>

<!-- ------------------------------------------------------------------------------------------- -->
<br/>
<br/>
<hr/>

<h2> PHP - comando FOREACH </h2>	
<br/>
 Este comando é um tipo de looping que auxilia no processo de listagem de arrays.<br/>
 exemplo de um array simples com apenas valores sem as chaves.<br/>
<br/>

<?php

 $nome = array('Robinson','Jéssica', 'Melina', 'Mennson');

 	foreach ($nome as $aluno) {
 		
 		echo "Aluno: ".$aluno.'<br/>';
 	}
?>
<br/><br/>
<hr/>
<h3>PHP - comando FOREACH </h3>
<br/>
Exemplo de várias arrays dentro de uma array onde cada array têm duas chaves com seus respectivos valores.
<br/><br/>

<?php

	$aluno = array(

				array('nome' => 'Robinson' , 'idade' => 51),
				array('nome' => 'Jéssica'  , 'idade' => 29),
				array('nome' => 'Melina'   , 'idade' => 04),
				array('nome' => 'Mennson'  , 'idade' => 30),
	);

		foreach ($aluno as  $nome ) {
			
				echo "Aluno: ".$nome['nome']." - idade: ".$nome['idade']." anos.<br/>";
				
		}

?>
<br/><br/>
<hr/>
<h3>PHP comando FOREACH</h3>

Esse exemplo com uma array com várias chaves e valores<br/>

<br/><br/>

<?php

	$aluno = array(

			'nome' => 'Robinson',
			'idade' => 51,
			'cidade' => 'Natal',
			'estado' => 'RN',

			 );

		foreach ($aluno as $chave => $nome) {
			
				echo $chave." = ".$nome."<br/>";
		}

?>
<!--   -------------------------------------------------------------------------------  -->
<br/><br/>
<hr/>

<h3>FOREACH de um aluno do </h3>

<form method="POST" action= "" id="formulario" >
 <h1>Ficha de Cadastro para emprego.</h1>
 	Nome:<input type="text" name="nome"><br><br>
 	Email:<input type="email" name="email"><br><br>
 	Data de Nasc.<input type="date" name="data"><br><br>
 	Cargo:<select name="cargo">
 			<option></option>
 			<option>Ajudante</option>
	    	<option>Conferente</option>  
	    	<option>Gerente</option>  
 	      </select><br><br>
 	<input type="submit" name="Enviar">
 </form>

<?php
extract($_POST);

 $nome = array("nome" =>$nome, "email" =>$email, "data" =>$data, "cargo" =>$cargo);

foreach($nome as $candidato) {
	echo $candidato. "<br>";
} 

?>
</br/><br/>
<!-- -------------------------------------------------------------------------- -->
<br/>
<hr/>
<h4>RAND - aleatório</h4><br/>

Duas arrays com quatro valores cada<br/>
usando o switch<br/><br/>

<?php


 $sorteado = array('Robinson', 'Jéssica', 'Melina', 'Mennson');
 $brinde = array('bicicleta', 'patins', 'video game', 'violão' );

 $sorteio = rand(0, 3);
 $itens   = rand(0, 3);


 	

	switch ($sorteio) {

	 	case 0:

	 		 echo "<strong>".$sorteado[$sorteio]."</strong> ganhou um(a) ".$brinde[$itens];
	 		break;

	 	case 1:
	 		 echo "<strong>".$sorteado[$sorteio]."</strong> ganhou um(a) ".$brinde[$itens];
	 		break;

	 	case 2:

	 		echo "<strong>".$sorteado[$sorteio]."</strong> ganhou um(a) ".$brinde[$itens];
	 		break;


	 	case 3:
	 		echo "<strong>".$sorteado[$sorteio]."</strong> ganhou um(a) ".$brinde[$itens];
	 		break;	
	 	
	 	default:
	 		# code...
	 		break;
	 } 

?>
<!-- -------------------------------------------------------------------------------- -->
<br/><br/>
<hr/>

<h4>Uma função para data e tempo</h4><p>
<h5>As principais funções de data e tempo: date, time, mktime, srttotime</h5>

<?php
	date_default_timezone_set('america/sao_paulo');

	$dataAtual = date("d, F, Y, \à\s H:i:s");

	echo "Data de hoje: ".$dataAtual."<br/><br/>";
	

	
?>
</br><br/>
<!-- ------------------------------------------------------------------- -->
<hr/>
<h4>Funções matemáticas</h4><p>

<?php

echo 'função ceil -> arredonda para cima números decimais</p>';

$ceil = 7.5738;

echo "7.5783 arredondado: ".ceil($ceil).'<br/><br/>';



echo "função floor --> arredonda  para baixo<br/> ";

$floor = 7.89887899;

echo "7.89887899 arredondado para baixo: ".floor($floor).'<br/><br/>';



$expoente = pow(2, 3);

echo "Expoente de 2³: ".$expoente.'<br/><br/>';

?>
<br/><br/>
<hr/>
<h4>MANIPULAÇÃO DE TEXTOS</h4>

<p>EXPLODE --> divide uma string em um array</p>

<?php

$explode = 'Robinson Jéssica Melina Mennson';

$exp = explode(' ', $explode); // usa dois parâmetros -- delimitador "espaço" faz  com que divida todos os nomes em arrays.
                               // se eu colocar entre aspas Robinson, vão ficar apenas tres strings, o Robinson corta. 
print_r($exp);

?>
<br/>
<p>IMPLODE --> junta um array em uma string</p>
<?php

	$imp = array('Robinson', 'Jéssica', 'Melina', 'Mennson');

	$implode = implode(" ", $imp);

	echo $implode;
?>
<br/>
<p>NUMBER_FORMAT --> formata números</p>
<?php

$number = '7898989.87998';

$numberFormat = number_format($number,"2", ",", "."); // aceita 1, 2 ou 4 parâmetros, não 3.
													  // o primeiro foi a variável, o segundo qtde de casas decimais, e ponta e vírgula 	

echo $numberFormat;

?>

echo $numberFormat;



</body>
</html>





