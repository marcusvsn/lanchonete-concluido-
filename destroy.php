<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php 
session_start();

session_destroy();
echo 'Sessao finalizada <br>';
header ("location:index.html");
?>
    </body>
</html>