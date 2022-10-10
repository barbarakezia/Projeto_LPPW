<html>

<head>


</head>
<body>
<h1 align = "center"> TABELA CLIENTES </h1>
<?php
$clientes = array (
array ("Nome" => "Paulo", "CPF" => 54021054213 , "Contato" => 96999999999, "Cidade" => "Macapa" ,"Bairro" => "Buritizal" ),
array ("Nome" => "Lucas", "CPF" => 58536574194 , "Contato" => 96999999999, "Cidade" => "Santana" ,"Bairro" => "Paraiso" ),
array ("Nome" => "Wallison", "CPF" => 78520416958 , "Contato" => 96999999999, "Cidade" => "Santana" ,"Bairro" => "Nova Uniao" ),
array ("Nome" => "Vitor", "CPF" => 64165826145 , "Contato" => 96999999999, "Cidade" => "Macapa" ,"Bairro" => "Centro" ),
array ("Nome" => "Jediael", "CPF" => 88524416957 , "Contato" => 96999999999, "Cidade" => "Macapa" ,"Bairro" => "Zona Norte" )
);
?>
<table align = "center" border>
<tr>
<th align = "center">Nome </th>
<th align = "center">CPF </th>
<th align = "center">Contato </th>
<th align = "center">Cidade </th>
<th align = "center">Bairro </th>
</tr>

<?php 
foreach($clientes as $clientes){
?>

<tr> 
<td align = "center"><?php echo $clientes['Nome']; ?> </td>
<td align = "center"><?php echo $clientes['CPF']; ?> </td>
<td align = "center"><?php echo $clientes['Contato']; ?> </td>
<td align = "center"><?php echo $clientes['Cidade']; ?> </td>
<td align = "center"><?php echo $clientes['Bairro']; ?> </td>
</tr>

<?php }?>

</table>



<br/><a href  = "../../index.php"> Pagina Principal  </a>


</body>
</html>