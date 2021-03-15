<form action="form.php" method="POST">
							<h2>supprimer</h2>
						<label for="nomdel"> nom actuel </label> </br>
						<input type="text" name="nomdel"/> </br>
						
						<label for="conf"> comfirmer le nom</label> </br>
						<input type="text" name="conf"/> </br>
						
			
						<input type="submit" name="Valider" />
					</form>
					
					<?php
					
					echo "<a href=page.php><button>entrer une nouvelle ligne </button></a>";
					

					?>