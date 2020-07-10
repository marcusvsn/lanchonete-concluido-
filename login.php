<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php 
session_start();
$login = $_POST['pnome'];
$senha = $_POST['psenha'];
$con = mysql_connect("127.0.0.1", "root", "") or die
 ("Sem conexão com o servidor");
$select = mysql_select_db("projeto integrador") or die("Sem acesso ao banco de dados");
 
    
$result = mysql_query("SELECT * FROM `clientes` 
WHERE `nome_cliente` = '$login' AND `senha_cliente`= '$senha'");

if(mysql_num_rows ($result) > 0 )
{
$_SESSION['pnome'] = $login;
$_SESSION['psenha'] = $senha;
header('location:produtos.html');
}
else{
  unset ($_SESSION['login']);
  unset ($_SESSION['senha']);
  header('location:index.html');
   
  }
?>
    </body>
</html>