let Datas;


let liste_Genres = [
  { "id": 28,
    "name": "Action"  },

  { "id": 12,
    "name": "Aventure" },

  { "id": 16,
    "name": "Animation" },

  { "id": 35,
    "name": "Comedie"  },

  { "id": 80,
    "name": "Crime" },

  { "id": 99,
    "name": "Documentaire" },

  { "id": 18,
    "name": "Drame" },

  { "id": 10751,
    "name": "Famille"  },

  { "id": 14,
    "name": "Fantastique" },

  { "id": 36,
    "name": "Historique" },

  { "id": 27,
    "name": "Horreur"  },

  { "id": 10402,
    "name": "Musique" },

  { "id": 9648,
    "name": "Mystère" },

  { "id": 10749,
    "name": "Romance" },

  { "id": 878,
    "name": "Science Fiction" },

  { "id": 10770,
    "name": "Téléfilm"  },

  { "id": 53,
    "name": "Thriller"  },

  { "id": 10752,
    "name": "FIlm de guerre" },

  { "id": 37,
    "name": "Western" }
];

/*console.log(liste_Genres[0].name);  //affiche "Action"
console.log(liste_Genres[0].id);  //affiche "28" */

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
  // console.log(FilmId);
        
  $("#films_populaires").append("<ul></ul>");
        
  Result.forEach((objet) => {

    if (FilmId === objet.id) {

      $("#films_populaires").find("h1").append(
        `${objet.title}<br>`
      );
      
      $("#films_populaires").find("h1").append(
          `titre original : ${objet.original_title}<br>`
      );
      
      $("#films_populaires").find("ul").append(
          `<li class="article-title">Langue en VO : ${objet.original_language}</li>`
      );
      
      $("#films_populaires").find("ul").append(
          `<li class="article-title">Note : ${objet.popularity}</li>`
      );

      $("#films_populaires").find("p").append(
        `${objet.overview}`
    );
      
      $("#films_categories").append(
          `<img src="http://image.tmdb.org/t/p/w300/${objet.poster_path}" alt="poster">`
      );

      // console.log(liste_Genres);
      // console.log(objet.genre_ids);
      
      objet.genre_ids.forEach((id)=>{
        // console.log("valeur id film :" + id);

        liste_Genres.forEach((ID)=>{
          // console.log("valeur id de liste des genres : " + ID.id);

          if(id === ID.id)
          {
            //console.log(ID.name);
            $("#cat").find("p").append(`   ${ID.name}   `);
          }

          })

      })

  }
  }
  )}




fetchFilms();
