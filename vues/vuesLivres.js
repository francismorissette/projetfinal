// function listerJSON(listeLivres){
// 	contenu = 0;
// 	$('#contenu1').html("");
// 	$('#contenu2').html("");
// 	$('#contenu3').html("");
// 	$('#contenu4').html("");
// 	$('#contenu5').html("");
// 	$('#contenu6').html("");
// 	var taille=listeLivres.length;
// 	for(i=0;i<taille;i++){
// 		ligne=listeLivres[i];
// 		rep="<br><div class='card h-100'>";
// 		rep+="<a href='#'><img class='card-img-top' src='./pochettes/"+(ligne.pochette)+"'></a>";
// 		rep+="<div class='card-body'>";
// 		rep+="<h4 class='card-title'>";
// 		rep+="<a href='#'>"+(ligne.titre)+"</a>";
// 		rep+="</h4>";
// 		rep+="<h5>"+(ligne.prix)+"$</h5>";
// 		rep+="<p class='card-text'>Département : "+(ligne.dept)+"<br />";
// 		rep+="Auteur : "+(ligne.auteur)+"<br />";
// 		rep+="Langue : "+(ligne.langue)+ "</p>";
// 		rep+="</div>";
// 		rep+="</div>";
// 		contenu++;
// 		rep+=$('#contenu'+contenu).html(rep);
// 	}
// }

function listerJSON(listeLivres){
	contenu = 0;
	$('#result').html("");
	var taille=listeLivres.length;
	for(i=0;i<taille;i++){
		$('#result').append($('<div/>', { id: 'contenu' + i, 'class' : 'col-sm-4 mb-5'}))
		ligne=listeLivres[i];
		rep="<br><div class='card h-100'>";
		rep+="<a href='#'><img style='width: 100%; height: 300px;' class='card-img-top' src='./pochettes/"+(ligne.pochette)+"'></a>";
		rep+="<div class='card-body'>";
		rep+="<h4 class='card-title'>";
		rep+="<a href='#'>"+(ligne.titre)+"</a>";
		rep+="</h4>";
		rep+="<h5>"+(ligne.prix)+"$</h5>";
		rep+="<p class='card-text'>Département : "+(ligne.dept)+"<br />";
		rep+="Auteur : "+(ligne.auteur)+"<br />";
		rep+="Langue : "+(ligne.langue)+ "</p>";
		rep+="</div>";
		rep+="</div>";
		contenu++;
		rep+=$('#contenu'+i).html(rep);
	}
}


var vue=function(action,donnees){
	switch(action){
		case 'listerJSON':
			listerJSON(donnees);
		break;
		case 'avanceJSON':
			avanceJSON(donnes);
		break;
	}
}
