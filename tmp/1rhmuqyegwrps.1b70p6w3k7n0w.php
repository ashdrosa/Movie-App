<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MOVIE SITE</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Libre+Franklin:ital,wght@0,100..900;1,100..900&family=Mulish:ital,wght@0,200..1000;1,200..1000&family=Special+Gothic+Expanded+One&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="includes/css/style.css" />
  </head>
  <body>
    <div class="nav-bar">
      <div class="Logo">Movie Locker</div>
      <div class="user-info">
        <?php if (isset($SESSION['user_id'] )): ?>
          Hi, <?= ($SESSION['user_name']) ?>
          <?php else: ?>
            <a href="/login"> Login </a>
            or
            <a href="/register"> Sign Up </a>
          
        <?php endif; ?>
      </div>
    </div>
    <div class="title-header">
      <h1>SEARCH FOR A MOVIE OR SHOW</h1>
    </div>
    <div id="input name">
      <input type="text" id="movie-search-txt" />
      <button type="click" id="btn-submit-search">SUBMIT</button>
    </div>

    <div id="srch-results"></div>
  </body>

  <style>
    h6 {
      color: red;
    }
  </style>

  <script>
    var submitBtn = document.getElementById("btn-submit-search");
    var srchBox = document.getElementById("movie-search-txt");

    submitBtn.addEventListener("click", async () => {
      console.log("You CLicked the Butt");

      var srchWord = srchBox.value;

      console.log(srchWord);

      const options = {
        method: "GET",
        headers: {
          accept: "application/json",
          Authorization:
            "Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiIxOWI2MGQ4ZmMyYzQ0NTlkOTVkZGNmN2QyNzViNGExOSIsIm5iZiI6MTc4ODcxNTM0NS4wNDQ5OTk4LCJzdWIiOiI2YTlkYTE1MTRlMDM3NWQwZTMxNDNiYzUiLCJzY29wZXMiOlsiYXBpX3JlYWQiXSwidmVyc2lvbiI6MX0.kQBWipobj_odwvqnx8CIVpQqgqp3XclxBmiFvdgvRSI",
        },
      };

      await fetch(
        "https://api.themoviedb.org/3/search/movie?query=" +
          srchWord +
          "&include_adult=false&language=en-US&page=1",
        options,
      )
        .then((res) => res.json())
        .then((res) => {
          console.log(res);

          const searchResults = document.getElementById("srch-results");

          searchResults.innerHTML = "";

          var movieResults = res.results;
          movieResults.forEach((movie) => {
            console.log(movie.title);

            var newHeads = document.createElement("h6");
            newHeads.textContent = movie.title;
            var movieImg = document.createElement("img");
            movieImg.src =
              "https://image.tmdb.org/t/p/w200" + movie.poster_path;

            searchResults.appendChild(newHeads);
            searchResults.appendChild(movieImg);
          });
        })
        .catch((err) => console.error(err));
    });
  </script>
</html>
