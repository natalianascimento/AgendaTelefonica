<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Editar Contato</title>
</head>
<body>
	<div align="center">
		<table border="1" cellpadding="0" cellspacing="0" width="80%"
			height="348">
			<tr>
				<td width="33%" bgcolor="#CCCCCC" height="19"><p align="center">
						<b>Excluir Contato</b></td>
			</tr>
			<tr>
				<td width="33%" height="175"><p align="center">&nbsp;&nbsp;</p>
					<p align="center">
						Tem certeza que deseja excluir o contato especificado abaixo? <br>
						<br>
					
					<?php
                        $retorno = ! empty($_GET['retorno']) ? $_GET['retorno'] : NULL;
                        
                        require_once 'pdo.php';
                        $conexaoBanco = new Conexao();
                        $sql = "SELECT * FROM agenda WHERE id_agenda = '".$retorno."'";
                        $objeto = $conexaoBanco->consultar($sql);
                        
                        echo "<b>ID: </b>" . $objeto[0]->id_agenda . "<br>";
                        echo "<b>Nome: </b>" . $objeto[0]->nome . "<br>";
                        echo "<b>Telefone: </b>" . $objeto[0]->telefone . "<br><br>";
                    ?>
					
						<button onclick="window.location.href = 'excluirControl.php?identificador=<?php echo $retorno;?>'">Excluir Contato</button>
						<button onclick="window.location.href = 'consultarControl.php'">Cancelar</button>
					</p>
					
					
					</form></td>
			</tr>
		</table>



</body>
</html>