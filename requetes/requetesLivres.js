function envoyerCategorie(){
	selectEcole = $("#ecole").val();
	selectDept = $("#departement").val();

	$.ajax({
		url:'serveur/controleurLivres.php',
		type:'POST',
		data:{"action":'categorie', "variableEcole":selectEcole, "variableDept":selectDept},
		dataType:'json',
		success: function(listeCategorie){
			vue('listerJSON',listeCategorie);
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

	$.ajax({
		url:'serveur/controleurLivres.php',
		type: 'POST',
		data:{"action":'avance', "variableTitre":selectTitre, "variableAuteur":selectAuteur, "variableLangue":selectLangue, "variableDepartement":selectDepartement},
		dataType:'json',
		success: function(listeAvance){
			vue('listerJSON',listeAvance);
		},
		fail:function(){
			alert('Problème pour recherche avancé')
		}
	});
}


function ficheLivres(clicked_id){
	selectId = clicked_id;
	alert(selectId);
	$.ajax({
		url:'serveur/controleurLivres.php',
		type: 'POST',
		data:{"action":'fiche', "variableId":selectId},
		dataType:'json',
		success: function (listeFiche){
			// vue('ficheJSON',listeFiche);
			ficheJSON(listeFiche);
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
