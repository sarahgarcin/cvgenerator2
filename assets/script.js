$(document).ready(function(){

	//Variables
	var $this = $(this);
	var $addSite = $(".add-site");
	var $addFormation = $(".add-formation");
	var $addExperience = $(".add-experience");
	var i = 0;

	listenEvents();

	function listenEvents() {
		$addSite.on('click', addSite);
		$addFormation.on('click', addFormation);
		$addExperience.on('click', addExperience);
	}

	function addSite(){
		i ++;
		$(this)
			.parent().append("<li id='field" + i + "'><input type='text' name='site[]'></input><span class='close'>X</span></li>")
		removeField(i);
	}

	function addFormation(){
		$(this)
			.parent()
			.prepend("<li id='field" + i + "'><label>Année<input type='text' name='annee-formation[]'>Formation<textarea name='formation[]'></textarea></label><span class='close'>X</span></li>");
		removeField(i);
	}

	function addExperience(){
		$(this)
			.parent()
			.prepend("<li id='field" + i + "'><label>Année<input type='text' name='annee-exp[]'>Expérience<textarea name='experience[]'></textarea></label><span class='close'>X</span></li>");
		removeField(i);
	}

	function removeField(count){
		var $close = $(".close")
		$close.click(function(){
			$("#field" + count).remove();
		});;
	}

});