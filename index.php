<?php

require_once ("config.php");

// -> Carrega um usuário

//$root = new Usuario();
//$root->loadById(4);
//echo $root;


// -> Carrega uma lista de usuários

//$lista = Usuario::getList();
//echo json_encode($lista);


// -> Carrega uma lista de usuários buscando pelo login. Neste caso, logins que contenham "ta" no nome.

//$search = Usuario::search("al");
//echo json_encode($search);


// -> Carrega um usuário usando login e senha

//$usuario = new Usuario();
//$usuario->login("eliete", "12345");
//echo $usuario;


// -> Adicionando um novo usuário usando função insert

//$aluno = new Usuario("aluno", "54321");
//$aluno->insert();

//echo $aluno;


// -> Fazendo um Update do usuário

$usuario = new Usuario();
$usuario->loadById(9);
$usuario->update("professor", "123456");
echo $usuario;

