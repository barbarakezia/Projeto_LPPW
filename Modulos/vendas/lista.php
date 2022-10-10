<html>

<head>


</head>
<body>
<h1 align = "center"> TABELA VENDAS </h1>
<?php 
$vendas = array (
array ("Nome produto" => "Pomada Black", "vendedor" => "Arnold", "cliente" => "Paulo", "preço" => 25,"id_produto" => 415645),
array ("Nome produto" => "Perfume Malbeck", "vendedor" => "Miguiel", "cliente" => "Lucas", "preço" => 180 ,"id_produto" => 418565),
array ("Nome produto" => "Oléo para barbara", "vendedor" => "Bianca", "cliente" => "Wallison", "preço" => 50 ,"id_produto" =>456461),
array ("Nome produto" => "Minoxidil spray", "vendedor" => "Beatriz", "cliente" => "Vitor", "preço" => 250 ,"id_produto" => 987456),
array ("Nome produto" => "Espuma de barba", "vendedor" => "Barbara", "cliente" => "Jediael", "preço" => 20 ,"id_produto" => 517489)
);
?>

<table align = "center" border>
<tr>
<th align = "center">Nome produto </th>
<th align = "center">Vendedor</th>
<th align = "center">Cliente </th>
<th align = "center">Preço</th>
<th align = "center">ID</th>
</tr>

<?php
foreach($vendas as $vendas){

?>

<tr> 
<td align = "center"><?php echo $vendas['Nome produto']; ?> </td>
<td align = "center"><?php echo $vendas['vendedor']; ?> </td>
<td align = "center"><?php echo $vendas['cliente']; ?> </td>
<td align = "center"><?php echo $vendas['preço']; ?> </td>
<td align = "center"><?php echo $vendas['id_produto']; ?> </td>
</tr>

<?php }?>
</table>



<a href  = "../../index.php"> Pagina Principal  </a>


</body>
</html>