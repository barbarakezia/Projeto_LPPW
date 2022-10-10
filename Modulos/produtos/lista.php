<html>

<head>


</head>
<body>
<h1 align = "center"> TABELA PRODUTOS </h1>
<?php 
cuidado pessoal
$produtos = array (
array ("Nome" => "Pomada Black", "Quantidade" => 10 , "Categoria" => "cuidado pessoal", "Preço" => 25.00 , "id_produto" => 415645 ),
array ("Nome" => "Perfume Malbeck", "Quantidade" => 50 , "Categoria" => "cuidado pessoal", "Preço" => 180.00 , "id_produto" => 418565 ),
array ("Nome" => "Oléo para barba", "Quantidade" => 40 , "Categoria" => "cuidado pessoal", "Preço" => 50 , "id_produto" => 456461 ),
array ("Nome" => "Minoxidil", "Quantidade" => 40 , "Categoria" => "cuidado pessoal", "Preço" => 250.00 , "id_produto" => 987456 ),
array ("Nome" => "Espuuma de Barbarba", "Quantidade" => 20 , "Categoria" => "cuidado pessoal", "Preço" => 20.00 , "id_produto" => 517489 )
);
?>

<table align = "center" border>
<tr> 
<th align = "center">Nome</th>
<th align = "center">Quantidade</th>
<th align = "center">Categoria</th>
<th align = "center">Preço</th>
<th align = "center">ID</th>
</tr>

<?php
foreach($produtos as $produtos){

?>

<tr> 
<td align = "center"><?php echo $produtos['Nome']; ?></th>
<td align = "center"><?php echo $produtos['Quantidade']; ?></th>
<td align = "center"><?php echo $produtos['Categoria']; ?></th>
<td align = "center"><?php echo $produtos['Preço']; ?></th>
<td align = "center"><?php echo $produtos['id_produto']; ?></th>
</tr>


<?php } ?>
</table>

<br/><a href  = "../../index.php"> Pagina Principal  </a>


</body>
</html>