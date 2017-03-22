<?php 
	$array = array("nom" => "", "prenom" => "", "email" => "", "telephone" => "", "message" => "", "nomError" => "", "prenomError" => "", "emailError" => "", "telephoneError" => "", "messageError" => "", "isSuccess" => false);
	$mailTo = "christo.daum68@gmail.com";

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$array["nom"] = verifyInput($_POST["nom"]);
		$array["prenom"] = verifyInput($_POST["prenom"]);
		$array["email"] = verifyInput($_POST["email"]);
		$array["telephone"] = verifyInput($_POST["telephone"]);
		$array["message"] = verifyInput($_POST["message"]);
		$array["isSuccess"] = true;
		$mailContent = "";
		
		if(empty($array["nom"])) {	//Messages d'erreur sur les champs vides
			$array["nomError"] = "Je voudrais connaître votre nom !";
			$array["isSuccess"] = false;
		}
		else 
			$mailContent .= "Nom : {$array["nom"]}\n";

		if(empty($array["prenom"])) {
			$array["prenomError"] = "Je voudrais connaître votre prénom aussi !";
			$array["isSuccess"] = false;
		}
		else 
			$mailContent .= "Prénom : {$array["prenom"]}\n";

		if(!isEmail($array["email"])) {
			$array["emailError"] = "Désolé mais ce n'est pas une adresse email !";
			$array["isSuccess"] = false;
		}
		else 
			$mailContent .= "Adresse mail : {$array["email"]}\n";

		if(!isPhone($array["telephone"])){
			$array["telephoneError"] = "Il n'est pas très correct ce numéro là, il ne peut comporter que des chiffres et des espaces";
			$array["isSuccess"] = false;
		}
		else
			$mailContent .= "Numéro de téléphone : {$array["telephone"]}\n";

		if(empty($array["message"])) {
			$array["messageError"] = "Je ne pourrai rien faire d'un message vide...";
			$array["isSuccess"] = false;
		}
		else 
			$mailContent .= "\nMessage :\n\n {$array["message"]}";

		if($array["isSuccess"]) {
			$headers = "From: {$array["nom"]} {$array["prenom"]} <{$array["email"]}>\r\nReply-To: {$array["email"]}";
			mail($mailTo, "{$array["nom"]} {$array["prenom"]} depuis akaiha.ddns.net", $mailContent, $headers);
		}

		echo json_encode($array); //Renvoie l'array au script js
	}

	function isEmail($var){
		return filter_var($var, FILTER_VALIDATE_EMAIL);
	}

	function isPhone($var) {
		return preg_match("/^[0-9 ]*$/", $var);
	}

	function verifyInput($var) {
		$var = trim($var);	//Supprime les caractères non voulus
		$var = stripslashes($var); //Supprime les \
		$var = htmlspecialchars($var);	//Converti en entité HTML
		return $var;
	}

?>