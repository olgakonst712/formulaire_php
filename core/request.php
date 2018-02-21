
<?php 



if (!empty($_POST)&&isset($_POST['submit'])) {
	submit();
}




function submit(){
	global $bdd;

	$phrase_sql = "INSERT INTO contact (sexe, id_nom, id_prenom, id_email, id_sujet, id_message)
    VALUES (:sexe, :)";
	$preparation = $bdd->prepare($phrase_sql);

	$preparation->bindParam(':title',$_POST['title'],PDO::PARAM_STR);
	$preparation->bindParam(':details',$_POST['description'],PDO::PARAM_STR);

	if ($preparation->execute()) {
		header('Location: index.php');
	} else {
		echo "OOOPS!";
	}



}
 ?>