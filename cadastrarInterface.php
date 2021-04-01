<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Cadastrar Contato</title>
</head>
<body>
	<div align="center">
		<table border="1" cellpadding="0" cellspacing="0" width="80%"
			height="348">
			
			<tr><td width="33%" bgcolor="#CCCCCC" height="19"><p align="center">
						<b><?php $retorno = ! empty($_GET['retorno']) ? $_GET['retorno'] : NULL;
                                 echo ! empty($retorno) ? "Editar Contato" : "Cadastrar Novo Contato";
                           ?></b></td></tr>
                           
			<tr><td width="33%" height="175"><p align="center">&nbsp;&nbsp;</p>
					<form method="POST"
						action="<?php echo !empty($retorno) ? 'editarControl.php' : 'cadastrarControl.php';?>">
						<!-- DEPOIS VER SE DEU CERTO A LINHA DE CIMA -->

						<input type="hidden" name="operacao" value="cadastrar"> <input
							type="hidden" name="id" size="5"
							value="<?php echo !empty($retorno) ? $objetoContato[0]->id_agenda : '';?>">

						<p align="center">
							&nbsp;&nbsp;<br>Nome: <input type="text" name="nome" size="15"
								value="<?php echo !empty($retorno) ? $objetoContato[0]->nome : '';?>"
								required>
						</p>
						<p align="center">
							Telefone: <input type="text" name="telefone" size="15"
								value="<?php echo !empty($retorno) ? $objetoContato[0]->telefone : ''; ?>"
								required>
						</p>
						<p align="center">
							<input type="submit"
								value="<?php echo ! empty($retorno) ? "Salvar Alterações" : "Cadastrar Contato"; ?>"
								name="enviar">
						</p>
					</form>
					<p align="center">
						<button
							onclick="window.location.href = '<?php echo !empty($retorno) ? 'consultarControl.php' : 'index.html';?>'">Cancelar</button>
								
						<?php IF (! empty($retorno)) {
                              $link = "excluirInterface.php?retorno=" . $objetoContato[0]->id_agenda;
                              echo " <button onclick=\"window.location.href = '" . $link . "'\">Excluir Contato</button> ";
                              } else {
                              echo " ";
                              }
                        ?></p></td></tr>
                        
		</table>
</body>
</html>