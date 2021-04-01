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
					<p align="center"><?php global $alteração; echo $alteração == 0 ? "Cadastro alterado com sucesso!" : "Erro detectado. Entre em contato com o Suporte.";?>
									<br><button onclick="window.location.href = 'index.html'">Voltar
							para Menu Inicial</button></td>
				</p>
			</tr>
		</table>

</body>
</html>