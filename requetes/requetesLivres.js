function envoyerCategorie(){
	selectEcole = $("#ecole").val();
	selectDept = $("#departement").val();

	$('#loadingmessage').show();
	$('#result').slideUp();

	$.ajax({
		url:'serveur/controleurLivres.php',
		type:'POST',
		data:{"action":'categorie', "variableEcole":selectEcole, "variableDept":selectDept},
		dataType:'json',
		success: function(listeCategorie){
			vue('listerJSON',listeCategorie);
			$('#loadingmessage').hide();
			$('#result').slideDown();
		},
		fail:function(){
			alert("Probleme pour categorie");
		}
	});
}


function envoyerSearch(){
	selectTitre = $("#searchTitre").val();
	selectAuteur = $("#searchAuteur").val();
	selectLangue = $("#searchLangue").val();
	selectDepartement = $("#searchDepartement").val();

	$('#loadingmessage').show();
	$('#result').slideUp();

	$.ajax({
		url:'serveur/controleurLivres.php',
		type: 'POST',
		data:{"action":'avance', "variableTitre":selectTitre, "variableAuteur":selectAuteur, "variableLangue":selectLangue, "variableDepartement":selectDepartement},
		dataType:'json',
		success: function(listeAvance){
			vue('listerJSON',listeAvance);
			$('#loadingmessage').hide();
			$('#result').slideDown();
		},
		fail:function(){
			alert('Problème pour recherche avancé')
		}
	});
}


function ficheLivres(clicked_id){
	selectId = clicked_id;

	$('#loadingmessage').show();
	$('#result').slideUp();

	$.ajax({
		url:'serveur/controleurLivres.php',
		type: 'POST',
		data:{"action":'fiche', "variableId":selectId},
		dataType:'json',
		success: function (listeFiche){
			// vue('ficheJSON',listeFiche);
			ficheJSON(listeFiche);
			$('#loadingmessage').hide();
			$('#result').slideDown();
		},
		fail:function(){
			alert('Problème pour fiche')
		}
	});
}


//controleur des requetes
var requetes=function(action){
switch(action){
	case 'searchCategorie' :
		envoyerCategorie();
	break;
	case 'searchAvance' :
		envoyerSearch();
	break;
	}
}
