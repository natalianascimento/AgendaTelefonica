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
						<b>Editar Contato</b></td>
			</tr>
			<tr>
				<td width="33%" height="175"><p align="center">&nbsp;&nbsp;</p>
					<form method="POST" action="editarControl.php">
						<input type="hidden" name="operacao" value="editar"> 
						<input type="hidden" name="id" size="5" value="<?php echo $objetoContato != NULL ? $objetoContato[0]->id_agenda : '';?>">
							
						<p align="center">ID: <?php echo $objetoContato != NULL ? $objetoContato[0]->id_agenda : '';?> 
						<p align="center">
							Nome: <input type="text" name="nome" size="15"
								value="<?php echo $objetoContato != NULL ? $objetoContato[0]->nome : '';?>"
								required>
						</p>
						<p align="center">
							Telefone: <input type="text" name="telefone" size="15"
								value="<?php echo $objetoContato != NULL ? $objetoContato[0]->telefone : '';?>"
								required>
						</p>
						<p align="center">
							<input type="submit" value="Salvar Alterações" name="enviar">
							<!-- 							<a href="consultarControl.php">Voltar</a> -->
						</p>
					</form>
					<p align="center">
						<button onclick="window.location.href = 'index.html'">Cancelar</button>
						<button onclick="window.location.href = 'excluirInterface.php?identificador=<?php echo $objetoContato[0]->id_agenda;?>'">Excluir
							Contato</button>
					</p></td>
			</tr>
		</table>

</body>
</html>