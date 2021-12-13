
let Datas;

let Idfilm;

var $_GET = new Array();

function GET() {
	var url = location.search.replace("?", " ").split("&");
	for (var index = 0; index < url.length; index++) {
		var value = url[index].split("=");
		$_GET[value[0]] = value[1];
    Idfilm = value [1]; 
	}
}

GET();

console.log($_GET);// return [" id": '36']
console.log(Idfilm);

/*console.log(liste_Genres[0].name);  //affiche "Action"
console.log(liste_Genres[0].id);  //affiche "28" */

function fetchFilms() {
  
  Datas = $.ajax({
    method: "GET",
    url: `https://api.themoviedb.org/3/movie/${Idfilm}?api_key=b3c081bb9f680d406e0d3801eafdee85&language=fr-FR`,
    // data: { label: "toto" },
    dataType: "json",
  });

  Datas.done((mon_parametre) => {
    ShowFilm(mon_parametre);
  });
  

}



function ShowFilm(film) {

  console.log(film.title);
  console.log(film.original_title);
  console.log(film.original_language);
  console.log(film.vote_average);
  console.log(film.overview);

        
  $("#films_populaires").append("<ul></ul>");

      $("#films_populaires").find("h1").append(
        `${film.title}<br>`
      );
      
      $("#films_populaires").find("h1").append(
          `titre original : ${film.original_title}<br>`
      );
      
      $("#films_populaires").find("ul").append(
          `<li class="article-title">Langue en VO : ${film.original_language}</li>`
      );
      
      $("#films_populaires").find("ul").append(
          `<li class="article-title">Note : ${film.vote_average} / 10 </li>`
      );

      $("#films_populaires").find("p").append(
        `${film.overview}`
    );
      
      $("#films_categories").append(
          `<img src="http://image.tmdb.org/t/p/w300/${film.poster_path}" alt="poster">`
      );


       film.genres.forEach((categorie) => {
        console.log(categorie.name);
         $("#cat").find("ul").append(`<li>${categorie.name}</li>`)})

    }





fetchFilms();