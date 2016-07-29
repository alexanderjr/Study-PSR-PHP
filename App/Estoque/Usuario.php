<?php 

namespace App\Estoque;

   class Usuario {
   	private $nome;
   	private $sobrenome;

   	public function __construct($nome, $sobrenome){
   	 	$this->nome = $nome;
   	 	$this->sobrenome = $sobrenome;
   	 }

   	public function imprimir(){
   		echo $this->nome." ".$this->sobrenome;
   	}
   }