<?php 

namespace App\Vendas;

   class Usuario {
   	private $nome;

   	public function __construct($nome){
   	 	$this->nome = $nome;
   	 }

   	public function imprimir(){
   		echo $this->nome;
   	}
   }