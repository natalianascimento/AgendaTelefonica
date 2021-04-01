<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Consultar Contatos</title>
</head>
<body>

	<div align="center">
		<table border="1" cellpadding="0" cellspacing="0" width="80%"
			height="348">
			<tr>
				<td width="33%" bgcolor="#CCCCCC" height="19"><p align="center">
					<b><h2 align="center">Consultar Contatos</h2></b></td>
			</tr>
			<tr>
				<td width="33%" height="175"><p align="center">&nbsp;&nbsp;</p>
					<div class="cadastro" align="center">
						<table border="1" width="40%">
							<thead>
								<tr>
									<th>ID</th>
									<th>Nome</th>
									<th>Telefone</th>
								</tr>
							</thead>
							<tbody>
                                <?php
                                foreach ($consultarContato as $valor) {
                                    echo '<tr>';
                                    echo '<td><a href="editarTratativas.php?retorno=' . $valor->id_agenda . '">' . $valor->id_agenda . '</td>';
                                    echo '<td>' . $valor->nome . '</a></td>';
                                    echo '<td>' . $valor->telefone . '</td>';
                                    echo '</tr>';
                                }
                                ?>
                            </tbody>  
                         </table>
						<p align="center">
							<button onclick="window.location.href = 'index.html'">Voltar</button>
						</p>
					</div>				
				</td>
</body>
</html>