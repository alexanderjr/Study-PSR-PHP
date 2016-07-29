<?php 
	
	require_once("vendor/autoload.php");

	use App\Vendas\Usuario as Usuario;
	use App\Estoque\Usuario as UsuarioEstoque;

	echo "Instâncias de Vendas/Usuário";
	echo "<br/>";

	$alex = new Usuario("Alexander");
	$alex->imprimir();

	echo "<br/>";

	$junior = new Usuario("Junior");
	$junior->imprimir();

	echo "<br/>";
	echo "<br/>";

	echo "Instâncias de Estoque/Usuário";
	echo "<br/>";

	$junior = new UsuarioEstoque("Alexander", "Junior");
	$junior->imprimir();