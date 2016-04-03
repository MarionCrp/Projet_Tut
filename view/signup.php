
<!-- Inclusion du controleur relatif à l'inscription' -->
<?php include('controller/signup_controller.php') ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Meet an Alien - <?php echo _('Sign Up'); ?> </title>
</head>

<body>	

	<!-- FORMULAIRE D'INSCRIPTION -->

	<div class="row">
	  <div class="col-md-3"></div>
	  <div class="col-md-6">

	  	<div class="panel panel-default">
		 	<div class="panel-heading">
		   		 <h3 class="panel-title"><?php echo _('Sign up'); ?> </h3>
		  	</div>
		  
		 	<div class="panel-body">
		 		<p style="color:red;"> * <?php echo _('Required fields'); ?> </p>

			 	<form  action="" method="post" class="form-horizontal" role="form">
					  <div class="form-group">
						<label for="name" class="col-sm-2 control-label"><?php echo _('Name'); ?> *</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" name="name" placeholder="Pseudo">
						    </div>
					  </div>

					  <div class="form-group">
						<label for="email" class="col-sm-2 control-label"><?php echo _('Email'); ?> *</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" name="email" placeholder="Email">
						    </div>
					  </div>

					  <div class="form-group">
					    <label for="password" class="col-sm-2 control-label"><?php echo _('Password'); ?> *</label>
						    <div class="col-sm-10">
						      <input type="password" class="form-control" name="password" placeholder="Password">
						    </div>
					  </div>

					  <div class="form-group">
					    <label for="confirmed_pw" class="col-sm-2 control-label"> * </label>
						    <div class="col-sm-10">
						      <input type="password" class="form-control" name="confirmed_pw" placeholder= "<?php echo _('Password Confirmation'); ?>" >
						    </div>
					  </div>

					  <div class="form-group">
					  	<label for="gender" class="col-sm-2 control-label"> <?php echo _('Gender'); ?> *</label>
					  		<div class="col-sm-10">
							  <select class="form-control" name="gender" id="gender">
								  <option value="male"><?php echo _('Male'); ?></option>
								  <option value="female"><?php echo _('Female'); ?></option>
							  </select>
							</div>
					</div>

					 <div class="form-group">
					 	   <label for="description" class="col-sm-2 control-label"><?php echo _('Description'); ?></label>
						    <div class="col-sm-10">
						      <textarea class="form-control" rows="3" placeholder="<?php echo _('Talk about yourself'); ?>" name="description"></textarea>
						    </div>
					  </div>

					  

					   <div class="form-group">
						    <div class="col-sm-offset-2 col-sm-10">
						      <input class="btn btn-default" type="submit" value="<?php echo _('Sign Up'); ?>" name="create_account"/>
						     	<!-- <button class="btn btn-default" name="create_account">S'inscrire</button> -->
						     </div>
		 			   </div>
				</form>

					<hr/>

					<form action="index.php" method="post">
					<button type="submit" class="btn btn-default"><?php echo _('Go back to the Main page '); ?></button>
					</form>
		 	</div><!-- Form-Panel-Body -->
		</div><!-- panel panel-default -->
	  </div> <!-- col-md-6 -->
	  <div class="col-md-3"></div>
	</div> <!-- row -->




			<!-- Date de Naissance :   A FAIRE !
				<select name="day" id="day">
				<?php $form->day() ?>
				</select>

				<select name="month" id="month">
					<option value="january"> Janvier </option>
					<option value="february"> Février </option>
					<option value="march"> Mars </option>
					<option value="april"> Avril </option>
					<option value="may"> Mai </option>
					<option value="june"> Juin </option>
					<option value="july"> Juillet </option>
					<option value="august"> Août </option>
					<option value="september"> Septembre </option>
					<option value="october"> Octobre </option>
					<option value="november"> Novembre </option>
					<option value="december"> Décembre </option>
				</select>

				<select name="year" id="year">
				<?php $form->year() ?>
				</select><br/> -->



<!-- FIN formulaire d'inscription -->