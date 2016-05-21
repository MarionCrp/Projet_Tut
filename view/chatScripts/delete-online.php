<?php

require '../../class/user.php';
require '../../controller/db_connexion.php';

session_start();
include('functions.php');


$query = $db->prepare("
	DELETE
	FROM chat_online
	WHERE online_user = :user 
");
$query->execute(array(//on supprimes l'utilisateur de la bdd qd il quitte le chat
	'user' => $_SESSION['user']->id()
));


$query->closeCursor();
?>