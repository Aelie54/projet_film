let Datas;

function fetchFilms() {
  
  Datas = $.ajax({
    method: "GET",
    url: "https://api.themoviedb.org/3/movie/popular?api_key=b3c081bb9f680d406e0d3801eafdee85&language=fr-FR&page=1",
    data: { label: "toto" },
    dataType: "json",
  });

  Datas.done((mon_parametre) => {
    ShowFilm(mon_parametre);
  });
  
  Datas.fail(function (jqXHR, textStatus) {
    showError(jqXHR, textStatus);
  });
}



function ShowFilm(Films) {

    let Result = Films.results ;
    console.log(FilmId);
        
    $("#films_populaires").append("<ul></ul>");
        
        Result.forEach((objet) => {

                if (FilmId === objet.id) {

                    $("#films_populaires").find("h1").append(
                        `${objet.original_title}<br>`
                    );
                    
                    $("#films_populaires").find("ul").append(
                        `<li class="article-title">${objet.original_language}</li><br>`
                    );
                    
                    $("#films_populaires").find("ul").append(
                        `<li class="article-title">${objet.popularity}</li><br>`
                    );

                    $("#films_populaires").find("ul").append(
                        `<li class="article-title">${objet.genre_ids}</li><br>`
                    );
                    
                    $("#films_populaires").append(
                        `<img src="http://image.tmdb.org/t/p/w300/${film.poster_path}" alt="poster">`
                    );
                }
            
        })

;}
    
    fetchFilms();