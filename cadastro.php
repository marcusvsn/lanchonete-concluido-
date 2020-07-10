<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
$link = mysql_connect("127.0.0.1","root","")
or die("Não foi possível conectar");
mysql_select_db("projeto integrador")
or die ("Não foi possível selecionar o banco de dados");

$nome_cliente = $_POST["pnome"];
$senha_cliente = $_POST["psenha"];    
$endereco_cliente =$_POST["pendereco"];
$telefone_cliente =$_POST["ptelefone"];


$consulta = "INSERT INTO clientes (nome_cliente, senha_cliente, endereco_cliente, telefone_cliente) VALUES 
('$nome_cliente','$senha_cliente','$endereco_cliente',
'$telefone_cliente'  )";
$resultado = mysql_query($consulta)
or die("Falha na execução do Cadastro");
echo "Cadastro feito com sucesso";


echo '<br><a href="index.html"> Continuar para o login </a> <br/>';
?>
</body>
</html>
	
	