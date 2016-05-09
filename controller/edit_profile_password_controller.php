<?php

/**
* Gestion de l'édition de mot de passe
**/
if (isset($_POST['edit_password']))
{
	// On vérifie que les trois champs relatifs au mot de passe ont bien été saisi
	if(empty($_POST['current_password'])
	OR empty($_POST['new_password'])
	OR empty($_POST['confirmed_pw']))
	{
		echo ('<p style="color:red;">' ._('Please fill out the 3 fields to modify your password'). '<p><br/>');
	}
	else
	{

		$datas = array (
			$_POST['current_password'],
			$_POST['new_password'],
			$_POST['confirmed_pw']
			);

		// On sécurise les données mdp entrée par l'utilisateur, et on les hache. 
		foreach ($datas as $data)
		{
			$data = htmlspecialchars($data);
		}

		$_POST['current_password'] = sha1($_POST['current_password']);
		$_POST['new_password'] = sha1($_POST['new_password']);
		$_POST['confirmed_pw'] = sha1($_POST['confirmed_pw']);

		//Gestion des différentes erreurs
		if ($_POST['current_password'] != $current_user->password())
		{
			echo '<p style="color:red;">' ._('The current password is wrong'). '</p>';
			$_POST['current_password'];
			$current_user->password();
		}
		elseif ($_POST['new_password'] != $_POST['confirmed_pw']) 
		{
			echo  '<p style="color:red;">' ._('The two new passwords are different'). '</p>';
		}
		
		// Mise à jour du mot de passe si aucune erreur n'est relevées.
		else
		{
			$user_id = $current_user->id();
			$user_manager->edit($user_id, "password", $_POST['new_password']);
			$current_user = $user_manager->getDatas($user_id);
			$_SESSION['user'] = $current_user;
			echo ('<p style="color:green;">' ._('The password has been modified'). '</p>');
		}
	}
}