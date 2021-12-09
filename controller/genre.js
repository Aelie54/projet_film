let Datas;

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
  // console.log(results);
    console.log(Result);

  // $("#films_populaires").append("<ul></ul>");

  Result.forEach((objet) => {

    $("#films_populaires")
      .find("ul")
      .append(
        `<a href="http://localhost/projet_film/film.php?id=${objet.id}"><img src="http://image.tmdb.org/t/p/w300/${objet.poster_path}" alt="poster"><a>`
      );

  });}

fetchFilms();