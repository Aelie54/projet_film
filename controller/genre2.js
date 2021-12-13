let Datas;
let CatId;

var $_GET = new Array();

function GET() {
	var url = location.search.replace("?", " ").split("&");
	for (var index = 0; index < url.length; index++) {
		var value = url[index].split("=");
		$_GET[value[0]] = value[1];
    CatId = value [1]; 
	}
  //console.log($_GET);// return [" id": '36']
}

GET();

let CATID= Number(CatId); 
console.log(typeof CATID); // return 36

function fetchFilms() {
  
  Datas = $.ajax({
    method: "GET",
    url: `https://api.themoviedb.org/3/discover/movie?api_key=b3c081bb9f680d406e0d3801eafdee85&with_genres= ${CATID}`,
    data: { label: "toto" },
    dataType: "json",
  });

  Datas.done((mon_parametre) => {
    createList(mon_parametre);
  });
  
  Datas.fail(function (jqXHR, textStatus) {
    showError(jqXHR, textStatus);
  });
}

function createList(Films) {

  let Result = Films.results ;

Result.forEach((objet) => {

  $("#films_populaires")
    .find("ul")
    .append(
      `<a href="http://localhost/projet_film/film.php?id=${objet.id}"><img src="http://image.tmdb.org/t/p/w300/${objet.poster_path}" alt="poster"><a>`
    );

});}

fetchFilms();