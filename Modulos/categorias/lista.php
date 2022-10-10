<html>

<head>


</head>
<body>
<h1 align = "center"> TABELA CATEGORIAS </h2>






<?php 

$Categorias = array(
array("Categoria" => "Cuidado Pessoal", "Produto" => "Pomada Black", "id_produto" => 415645, "Preço" => 25, "Quantidade" => 10   ),
array("Categoria" => "Cuidado Pessoal", "Produto" => "Perfume Malbeck", "id_produto" => 418565, "Preço" => 180, "Quantidade" => 50   ),
array("Categoria" => "Cuidado Pessoal", "Produto" => "Oleo para barbara", "id_produto" => 456461, "Preço" => 50, "Quantidade" => 40   ),
array("Categoria" => "Cuidado Pessoal", "Produto" => "Minoxidil spray", "id_produto" => 987456, "Preço" => 250, "Quantidade" => 40  ),
array("Categoria" => "Cuidado Pessoal", "Produto" => "Espuma de barba", "id_produto" => 517489, "Preço" => 20, "Quantidade" => 20   )
);
?>
<table border align = "center">
<tr>
<th> Categoria </th>
<th> Produto </th>
<th> ID</th>
<th> Preço </th>
<th> Quantidade </th>
</tr>


<?php
foreach ($Categorias as $Categorias){
	
?>


<tr> 
<td ALIGN = "center"> <?php echo $Categorias['Categoria']; ?>  </td>
<td ALIGN = "center"> <?php echo $Categorias['Produto']; ?> </td>
<td ALIGN = "center"> <?php echo $Categorias['id_produto'];?></td>
<td ALIGN = "center"> <?php echo $Categorias['Preço'];?></td>
<td ALIGN = "center"> <?php echo $Categorias['Quantidade'];?></td>

</tr>







<?php } ?>
</table>


<br/> <a href  = "../../index.php"> Pagina Principal  </a>


</body>
</html>