<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Formulaire CV</title>
	<link rel="stylesheet" href="assets/foundation/css/foundation.min.css">
	<link rel="stylesheet" href="assets/style.css">
	<script src="assets/js/jquery-2.1.3.min.js" type="text/javascript"></script>
	<script src="assets/foundation/js/foundation.min.js" type="text/javascript"></script>
	<script src="assets/script.js" type="text/javascript"></script>
</head>
<body>

<div id="container">
<form action="" method="post">
	<div class="templates">
		Quel template souhaitez vous utiliser? 
		<input type="radio" name="template" value="base" id="base" <?php if (isset($_POST["template"])) { if ($_POST["template"] == "base") { echo "checked"; }}?> /> <label for="base">Base</label>
		<input type="radio" name="template" value="simple" id="simple" <?php if (isset($_POST["template"])) { if ($_POST["template"] == "simple") { echo "checked"; }}?>/> <label for="simple">Simple</label>
		<input type="submit" name="submit-temp" value="OK" />
	</div>
</form>

	<?php if (isset($_POST['submit-temp'])) {
		if(isset($_POST['template'])){
			//echo "You have selected :".$_POST['template'];
		}
	}
	?>

<form id="form" action="templates/<?php echo($_POST['template'])?>/cv.php" method="POST">

<div class="infos">
  <h2>Informations</h2>
  <div class="intern-ec">        
        Nom<input type="text" name="name">
        Prénom<input type="text" name="prenom">
        Date de naissance<input type="text" name="naissance">
   </div>
        <p>Téléphone
        <input type="text" name="telephone"></p>

        <p>Adresse email
        <input type="text" name="email"></p>

        <div class="sites-web">
            <ul></ul>
            <p class="add-site">+ Ajouter un site web</p>        
        </div>

</div>

    <div class="formations">
        <h2>Formations</h2>
    </div>
    <div class="formations-ec3">
        <ul>
            <li>
                <label>Année
                    <input type="text" name="annee-formation[]">
                    Formation <textarea name="formation[]"></textarea>
                </label>
            </li>
            <p class="add-formation">+ Ajouter une formation</p>  
        </ul>

    </div>

    <div class="experience">
        <h2>Expériences professionnelles</h2>
    </div>
    <div class="experience-ec4">
        <ul>
            <li>
                <label>Année
                    <input type="text" name="annee-exp[]">
                    Expérience<textarea name='experience[]'></textarea>
                </label>
            </li>
            <p class='add-experience'>+ Ajouter une expérience</p>  
        </ul>
    </div>

    <div class="competences">
    <h2>Compétences</h2>
    	<p>Logiciels<input type="text" name="logiciels"></p>
    	<p>Langues<input type="text" name="langues"></p>
	    <div class="divers">
	      <h3>Divers</h3>
	        <input type="checkbox" name="permis" id="permis"/>
	        	<label for="permis">Permis B</label>
	        <input type="checkbox" name="permisc" id="permisc"/>
	        	<label for="permisc">Permis C</label>
	        <p>Autres<input type="text" name="autres"></p>
	    </div>
	  </div>

        <p>
	        <input type="submit" value="Soumettre">
	        <input type="reset" value="Remettre à zéro">
        </p>
    </form>
	
</div>
</body>
</html>