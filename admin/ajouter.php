
		<p>								
			<h3 class="exe">Formulaire d'Ajout d'un Membre</h3>
				<div class="erreur">
	
				</div>
			<form action=""  method="POST">
				<table>
					<tr>
						<td>Login:</td>
						<td><input type="text" name="login" class="textform" <?php if(isset($_POST['login'])) echo 'value="'. $_POST['login'] .'" ';?> placeholder="Ex: Login"/></td>
					</tr>
					
					<tr>
						<td>Nom:</td>
						<td><input type="text" name="nom" class="textform" <?php if(isset($_POST['login'])) echo 'value="'. $_POST['nom'] .'" ';?> placeholder="Ex: Nom"/></td>
					</tr>
								
					<tr>
						<td>Mot De Passe:</td>
						<td><input type="password" name="mdp" class="textform" placeholder="Ex: Password" /></td>
					</tr>
								
					<tr>
						<td colspan="2"><input type="submit" name="boutonenvoyer"  value="Ajouter" class="boutonenvoyer" /></td>
					</tr>
				</table>
			</form>		
		</p>
	