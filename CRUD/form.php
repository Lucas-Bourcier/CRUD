<?php 
// connexion
$link = mysqli_connect("localhost", "root","", "orga");

if (!$link) 
{
    echo "<br/>Erreur: Impossible de se connecter à MySQL : ". mysqli_connect_error();
    exit;
}

echo "<br/>La connexion a bien réussie<br/>";

$nom			=	$_POST['nom']??0;
$adresse		=	$_POST['ad']??0;
$Date			=	$_POST['date']??0;
$domaine		=	$_POST['domaine']??0;


echo "<a href=page.php><button>entrer une nouvelle ligne </button></a>";

// insertion


	
	
$requete = "INSERT INTO form
		VALUES(NULL,'$nom','$Date','$adresse','$domaine')";

if ($result = mysqli_query($link,$requete)) 
{
    echo "<a href=page.php><button>entrer une nouvelle ligne </button></a>";
	
}
else
{
	echo("");
}
		




// autre connexion
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
<h1>Liste des organisations</h1>

<table id="organizationlist">
<tr id="first-line">
    <td>num</td>
	<td>nom</td>
	<td>Date</td>
	<td>adresse</td>
    <td>domaine</td>
   
</tr>

<?php
foreach ($statement as $row) {
    
    echo "<tr><td>" . /*"<input type=checkbox name='num'>" .*/ $row['num']??0 . "<br/></td></tr>";
    echo "<td>" . $row['nom']??0 . "<br/></td>";
	echo "<td>" . $row['Date']??0 . "<br></td>";
	echo "<td>" . $row['adresse']??0 . "<br></td>";
    echo "<td>" . $row['domaine']??0 . "<br></td>";
	echo "<td>" . "<a href=sup.php><button>supprimer  </button></a>" . "<br></td>";
   echo  "<td>" . "<a href=modif.php><button>modifier  </button></a>" . "<br></td>";
}


// modification
$actnom = $_POST['actnom']??0;
$nouvnom = $_POST['nouvnom']??0;



	
if($nouvnom=//help please?)
{
	$stat=connect()->exec("UPDATE form
							SET nom = '$nouvnom'
							WHERE nom = '$actnom'");
	
	  header("Location:page.php");
}

  
	

	
	

// supprimer


$nomdel = $_POST['nomdel']??0;
$conf = $_POST['conf']??0;

if ($nomdel = $conf)
{
$state=connect()->exec("DELETE FROM form
							
							WHERE nom = '$conf'");
header("Location:form.php"); 							
}




?>