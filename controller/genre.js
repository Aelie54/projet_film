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

Number("CatId"); 
console.log(CatId); // return 36

function fetchFilms() {
  
  Datas = $.ajax({
    method: "GET",
    url: "https://api.themoviedb.org/3/movie/popular?api_key=b3c081bb9f680d406e0d3801eafdee85&language=fr-FR&page=1",
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
  //console.log(Result);

  Result.forEach((objet) => {

    objet.genre_ids.forEach((id)=>{

      
       //console.log("valeur id film :" + id); // j'entre ici c'est OK
       console.log("type de id API : " + typeof id) //NUMBER
       //console.log(CatId); // j'entre ici c'est OK
       console.log("type de Id de page : " + typeof CatId) //STRING
       //console.log("Suivant"); 
       

        if(id == CatId)
        {

          console.log("les deux ID sont égaux");

          $("#films_populaires")
          .append(
            `<a href="http://localhost/projet_film/film.php?id=${objet.id}"><img src="http://image.tmdb.org/t/p/w300/${objet.poster_path}" alt="poster"><a>`
          );
        }

        })

    })

  }

fetchFilms();