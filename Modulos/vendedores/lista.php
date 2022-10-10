<html>

<head>


</head>
<body>
<h1 align = "center"> TABELA VENDEDORES </h1>
<?php
$vendedores = array (
array ("Nome" => "Arnold", "CPF" => 49042026006, "Contato" => 96999999999, "Email" => "exemplo@gmail.com" ,"Ativo" => "SIM" ),
array ("Nome" => "Beatriz", "CPF" => 17803495052, "Contato" => 96999999999, "Email" => "exemplo@gmail.com" ,"Ativo" => "SIM" ),
array ("Nome" => "Barbara", "CPF" => 40742034054, "Contato" => 96999999999, "Email" => "exemplo@gmail.com" ,"Ativo" => "SIM" ),
array ("Nome" => "Bianca", "CPF" => 32623498016, "Contato" => 96999999999, "Email" => "exemplo@gmail.com" ,"Ativo" => "NÃO" ),
array ("Nome" => "Miguel", "CPF" => 78257929042, "Contato" => 96999999999, "Email" => "exemplo@gmail.com" ,"Ativo" => "NÃO" )

);
?>

<table align = "center" border>
<tr>
<th align = "center">Nome </th>
<th align = "center">CPF </th>
<th align = "center">Contato </th>
<th align = "center">Email </th>
<th align = "center">Ativo </th>
</tr>

<?php
foreach($vendedores as $vendedores){
?>

<tr> 
<td align = "center"><?php echo $vendedores['Nome']; ?> </td>
<td align = "center"><?php echo $vendedores['CPF']; ?> </td>
<td align = "center"><?php echo $vendedores['Contato']; ?> </td>
<td align = "center"><?php echo $vendedores['Email']; ?> </td>
<td align = "center"><?php echo $vendedores['Ativo']; ?> </td>
</tr>

<?php }?>
</table>

<br/><a href  = "../../index.php"> Pagina Principal  </a>


</body>
</html>