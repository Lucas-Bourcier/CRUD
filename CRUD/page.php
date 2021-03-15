<html>
	<head>
		<title>Questionnaire</title>
		<meta charset='UTF-8'>
	</head>




	<body>
		<div class='form'>
				<h1><Questionnaire</h1>
				
					<form action="form.php" method="POST">
							
						<label for="nom"> Nom de l'organisation </label> </br>
						<input type="text" name="nom"/> </br>
							
						<label for="date"> Date de création </label> </br>
						<input type="date" name="date"/> <br/>
							
						<label for="ad"> Adresse </label> </br>
						<input type="text" name="ad"/> </br>
							
						<label for="domaine"> Domaine </label> </br>
						<input type="text" name="domaine"/> </br>
			
						<input type="submit" name="Valider" />
					</form>
					
				
		
		</div>
	<?php
	function connect(string $dbname='orga') {
    $dbo=null;
    try {
        $dbo = new PDO("mysql:host=localhost;dbname=$dbname;charset=UTF8", 'root', '');
        $dbo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        return $dbo;
    } catch (\PDOException $e) {
        return false;
    }
}

//selection
    $statement=connect()->query("SELECT * FROM form");
	
	?>
	
	

	</body>
	
</html>