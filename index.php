<?php 

require_once("config.php");
/*
$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);
*/


/*Carrega um usuário 
$root = new Usuario();
$root->loadbYId(3);
echo $root;
*/ 

/* Carrega uma lista de ususários
$lista = Usuario::getList();
echo json_encode($lista);
*/

/*Carrega uma lista de usuários buscando pelo login
$search = Usuario::search("jo");
echo json_encode($search);
*/

/*Carrega um usuário usando o login e senha 
$usuario = new Usuario();
$usuario->login("joao", "123654");
echo $usuario;
*/ 

/*Criando um usuário
$aluno = new Usuario("aluno", "@luno"); 
$aluno->insert();
echo $aluno;
*/ 

$usuario = new Usuario();

$usuario->loadbYId(7);

$usuario->update("professor", "!@$%¨&*");

echo $usuario;
?>