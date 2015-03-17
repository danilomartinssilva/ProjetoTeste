<?php
require_once 'Usuario.php';

class Aluno implements Usuario {
	
	public function ListarUsuario(){
		return "Danilo Martins da Silva";
		
	}
	public function CadastrarUsuario(){
		return "Cadastro - Danilo Martins da Silva";
		
	}
	public function deletarUsuario(){
		return "Deletar - Danilo Martins da Silva";
	}

}




?>