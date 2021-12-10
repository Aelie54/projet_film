let Recherche;
let input ;
let text;

function getValue() {
    text= document.getElementById("in").value;
    fetchText(text); 
    fetchSearch(text); 
}


function fetchText(x){
    x;
    console.log(x);
}

function fetchSearch() {
      
      Recherche = $.ajax({
        method: "GET",
        url: "https://api.themoviedb.org/3/search/movie?api_key=c3955e87da0fbe19a52abc6012a4eb24&language=fr-FR&include_adult=false&query=${"+text+"}",
        data: { label: "toto" },
        dataType: "json",
      });
    
      Recherche.done((mon_parametre) => {
        rechercheList(mon_parametre);
      });
      
      Recherche.fail(function (jqXHR, textStatus) {
        showError(jqXHR, textStatus);
      });
    }

    function rechercheList(Films) {


        let Result = Films.results ;
        console.log(Result);
        $("#films_populaires").find("ul").html(" ");


    
      Result.forEach((objet) => {

        $("#films_populaires")
          .find("ul")
          .append(
            `<a href="http://localhost/projet_film/film.php?id=${objet.id}"><img src="http://image.tmdb.org/t/p/w300/${objet.poster_path}" alt="poster"><a>`
          );
    
      });
}
    
    

















