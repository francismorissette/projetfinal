function listerJSON(listeLivres){
	contenu = 0;
	$('#result').html("");
	var taille=listeLivres.length;
	for(i=0;i<taille;i++){
		$('#result').append($('<div/>', { id: 'contenu' + i, 'class' : 'col-sm-4 mb-5'})) //Créé des divs avec des id different pour chaque
		ligne=listeLivres[i];
		rep="<br><div class='card h-100'>";
		rep+="<a href='#'><img class='card-img-top imageFicheSmall' src='./pochettes/"+(ligne.pochette)+"'></a>";
		rep+="<div class='card-body'>";
		rep+="<h4 class='card-title'>";
		rep+="<p id="+(ligne.idlivre)+" class='titreListe' onclick='ficheLivres(this.id)'>"+(ligne.titre)+"</p>"; //prend le id de la div cliquer
		rep+="</h4>";
		rep+="<h5>"+(ligne.prix)+"$</h5>";
		rep+="<p class='card-text'>Département : "+(ligne.nomdepartement)+"<br />";
		rep+="Auteur : "+(ligne.auteur)+"<br />";
		rep+="Langue : "+(ligne.langue)+ "</p>";
		rep+="</div>";
		rep+="</div>";
		contenu++;
		rep+=$('#contenu'+i).html(rep);
	}
}


function ficheJSON(listeLivres){
	contenu = 0;
	$('#result').html("");
	var taille=listeLivres.length;
	for(i=0;i<taille;i++){
		$('#result').append($('<div/>', { id: 'contenu' + i, 'class' : 'col-sm-6 mb-8'}));
		ligne=listeLivres[i];

		rep="<br><div class=''>";
		rep+="<img class='card-img-top imgFiche' src='./pochettes/"+(ligne.pochette)+"'>";
		rep+="</div>";

		$('#result').append($('<div/>', { id: 'contenuInfo' + i, 'class' : 'col-sm-6 mb-8'}));
		rep2="<div class='divFiche'>"
		rep2+="<p class='ficheInfo'>";
		rep2+="<span class='ficheTitle'>"+(ligne.titre)+"</span><br>";
		rep2+="<span class='ficheSubtitle'>Par : </span><span class='ficheSubtitleResult'>"+(ligne.auteur)+"</span><br><br>";
		rep2+="<span class='ficheDesc'>"+(ligne.description)+"</span><br><br>";
		rep2+="<span class='ficheSubtitle'>Département : </span><span class='ficheSubtitleResult'>"+(ligne.nomdepartement)+"</span><br>";
		rep2+="<span class='ficheSubtitle'>Édition : </span><span class='ficheSubtitleResult'>"+(ligne.edition)+"</span><br>";
		rep2+="<span class='ficheSubtitle'>Année : </span><span class='ficheSubtitleResult'>"+(ligne.anne)+ "</span><br>";
		rep2+="<span class='ficheSubtitle'>Langue : </span><span class='ficheSubtitleResult'>"+(ligne.langue)+ "</span><br>";
		rep2+="<span class='ficheSubtitle'>Prix : </span><span class='ficheSubtitleResult'>"+(ligne.prix)+ "$</span><br>";
		rep2+="<span class='ficheSubtitle'>État : </span><span class='ficheSubtitleResult'>"+(ligne.etat)+ "</span><br><br>";
		rep2+="<span class='ficheSubtitle'>Mis en vente par : </span><span class='ficheSubtitleResult'>"+(ligne.prenom)+" "+(ligne.nom)+ "</span></p><br>";
		rep2+="<p class='retourFiche' onclick='envoyerCategorie();'>&laquo Retour</p>";
		rep2+="</div>"

		contenu++;
		rep+=$('#contenu'+i).html(rep);
		rep2+=$('#contenuInfo'+i).html(rep2);
	}
}


var vue=function(action,donnees){
	switch(action){
		case 'listerJSON':
			listerJSON(donnees);
		break;
		case 'ficheJSON':
			ficheJSON(donnes);
		break;
	}
}
