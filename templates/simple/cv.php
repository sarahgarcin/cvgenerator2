<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Formulaire CV</title>
	<link rel="stylesheet" href="../../assets/foundation/css/foundation.min.css">
	<link rel="stylesheet" href="style.css">
	<script src="../../assets/js/jquery-2.1.3.min.js" type="text/javascript"></script>
	<script src="../../assets/foundation/js/foundation.min.js" type="text/javascript"></script>
	<script src="../../assets/script.js" type="text/javascript"></script>
</head>
<body>
	<div id="container">
		<div class="infos">
			<h3><?php echo $_POST['name']; ?><br><?php echo $_POST['prenom']; ?></h3>
			<p><?php echo $_POST['naissance']; ?></p>
			<p>
				<?php echo $_POST['telephone']; ?></br>
				<?php echo $_POST['email']; ?></br>
				<?php if(isset($_POST['site'])){
					foreach($_POST['site'] as $cnt => $site) {?>
					 <a href="<?php echo $_POST['site'][$cnt];?>">
					 	<?php echo $_POST['site'][$cnt];?>
					 </a></br>
					<?php }
				}?>
			</p>
			
		</div>

		<div class="formations">
			<h1>Formations</h1>
			<?php if(isset($_POST['formation'])){
					foreach($_POST['annee-formation'] as $cnt => $annee) {?>
							<p>
								<strong><?php echo $_POST['annee-formation'][$cnt];?></strong>
								<span><?php echo $_POST['formation'][$cnt];?></span>
							</p>
					
					<?php }
				}?>
		</div>

		<div class="formations">
			<h1>Expériences</h1>
			<?php if(isset($_POST['experience'])){
					foreach($_POST['annee-exp'] as $cnt => $anneeExp) {?>
							<p>
								<strong><?php echo $_POST['annee-exp'][$cnt];?></strong><br>
								<span><?php echo $_POST['experience'][$cnt];?></span>
							</p>
					
					<?php }
				}?>
		</div>

		<div class="competences">
			<h1>Compétences</h1>
			<?php if(!empty($_POST['logiciels'])){?>
				<p><strong>Logiciels: </strong><?php echo $_POST['logiciels']; ?></p>
			<?php } ?>
			<?php if(!empty($_POST['langues'])){?>
				<p><strong>Langues: </strong><?php echo $_POST['langues']; ?></p>
			<?php } ?>
			
			<?php if(!empty($_POST['permis']) || !empty($_POST['permisc']) || !empty($_POST['autres'])){?>
			<p>
				<strong>Divers:</strong>
				<?php if($_POST['permis'] == "on"){?>
					Permis B
				<?php }?>
				<?php if($_POST['permisc'] == "on"){?>
					, Permis C
				<?php }?>
				<?php if(!empty($_POST['autres'])){?>
					,<?php echo $_POST['autres']; ?>,
				<?php } ?>
			</p>
			<?php } ?>

		</div>
		
	</div>
</body>
</html>





