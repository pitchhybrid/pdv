<?php
include_once('handler.php');
$loginMock ="admin";
$passMock = "admin";

$alunos = array (
	// Id, Nome, Matricula, E-mail, Curso, Turno, Telefone
	array("1","Alan Jeison Vieira Vilar","201808322355","jeisonvilar@gmail.com","85985031509"),
	array("2","ALBERTO AMORIM BRAGA","201808252942","albertoamorim@hotmail.com","85987145655"),
	array("3","Alysson Vieira Bezerra","201602413746","alysonvra@gmail.com","88991660672"),
	array("4","ANTÔNIO EMÍLIO PAIVA VASCONCELOS","201808333667","antonioerniliopv@gmail.com","35399308507"),
	array("5","Arievlis Pessoa Da Silveira Junior","201808362624","arievlisjunior@gmail.com","85997818900"),
	array("6","Arturo Gonzalo Aguilar Villalobos","201808322061","gonzaloaguilarv@gmail.com","85986822857"),
	array("7","Bruno Ribeiro Rocha","201809052475","brunoadm89@gmail.com","85998356779"),
	array("8","Diego Freitas de Araújo","201808377583","personaldiego.f@gmail.com","85997667264"),
	array("9","Felipe Fritz Pessoa","201802047042","fritzlumen@gmail.com","85997495870"),
	array("10","Francisco Rafael de Melo Lima","201808377419","rafael.frml@gmail.com","85986657061"),
	array("11","FRANCISCO RANIEL FERREIRA AMORIM","201808072715","ranielamorim@gmail.com","85985984460"),
	array("12","Frederico allysson pires correia","201808238427","fredyallysson_007@yahoo.com.br","85998240625"),
	array("13","Gabriel Oliveira","201808101952","gasalomaoo@icloud.com","85996732808"),
	array("14","Helio Matheus Gonçalves Figueira David","201803183977","heliomatheus.david@gmail.com","85987496967"),
	array("15","JESSE SAMPAIO DE OLIVEIRA RODRIGUES","201202104631","jessesampaio.ti@gmail.com","85999055097"),
	array("16","Joao Paulo Faustino dos Santos","201808322291","mastegames25@gmail.com","85991838416"),
	array("17","JOSE WLADIMIR PESSOA NOBRE","201603185721","josewladimir@gmail.com","85997851240"),
	array("18","Leonardo da Silva Mota Silveira","200307131515","Ieonardomota14@hotmail.corn","85999610835"),
	array("19","Lucas Saraiva de Aguiar","201701161958","dellucarti@gmail.com","85996218375"),
	array("20","Manoel messias de assis junior","201703123387","messiasJunior@outlook.com","85985142809"),
	array("21","Mariana Coimbra","201309112702","marianacoimbrah@gmail.com","85997700779"),
	array("22","Mateus da Silva Oliveira","201808101979","mateusoliveiran@gmail.com","85986609651"),
	array("23","Mateus Neves","201809096375","mateus153lol@gmail.com","85998248960"),
	array("24","Mikael de Menezes Ferreira","201808253541","mikael.ferreirafor@gmail.com","85991075360"),
	array("25","Rodrigo do Nascimento Machado","201808012194","rodrigo.machado182@icloud.com","85996395560"),
	array("26","Thiago Moura Varela","200901032983","thiagovarela.ti@gmail.com","85997665238"),
	array("27","ANA LUISA R. RODRIGUES","200801520137","lu_rrolim@hotmail.com","88996631450"),
	array("28","Tiago Ferreira Alves","201403132804","tiagoferreira159@gmail.com","85986926416"),
	array("29","Bruno L. R. De Carvalho","200601373350","brunnocarvalho1983@gmail.com","85991395783")
);
function tabela(){

	echo "<div class= \"container carrinho-tabela w-75 my-5\">";
	echo "<table class=\"table table-striped\">";
	global $alunos;
	for ($i=0 ; $i < count($alunos) ; $i++ ) {
		echo "<tr>";
		for ($j=0; $j < count($alunos[$i]) ; $j++) { 
			echo "<td>".$alunos[$i][$j]."</td>";
		} 
		echo "</tr>";
	}
	echo"</table>";
	echo "</div>";
}

/*$stmt = $dbh->prepare("INSERT INTO clientes (id, nome,matricula,email,telefone) VALUES (:nome, :matricula, :email, :telefone)");
$stmt->bindParam(':name', $name);
$stmt->bindParam(':matricula', $matricula);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':telefone', $telefone);
$exec = $stmt ->execute();

for ($i=0 ; $i < count($alunos) ; $i++ ) {

    for ($j=0; $j < count($alunos[$i]) ; $j++) {
        $name = $alunos[$i][$j];
        $matricula = $alunos[$i][$j];
        $email = $alunos[$i][$j];
        $telefone = $alunos[$i][$j];
    }
$exec;

}*/

