<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOVIE SITE</title>
</head>
<body>
<div> 
    <h1>WELCOME GANG</h1>

</div>
<div id="input name">
    <input type="text" id="movie-search-txt"/> 
    <button type="click" id="btn-submit-search"> SUBMIT </button>

</div>




    
</body>
<script>
    var submitBtn = document.getElementById("btn-submit-search");
    var srchBox = document.getElementById("movie-search-txt");

    submitBtn.addEventListener('click', () => {
        console.log('You CLicked the Butt');

        var srchWord = srchBox.value;

        console.log(srchWord);

                const options = {
        method: 'GET',
        headers: {
            accept: 'application/json',
            Authorization: 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiIxOWI2MGQ4ZmMyYzQ0NTlkOTVkZGNmN2QyNzViNGExOSIsIm5iZiI6MTc4ODcxNTM0NS4wNDQ5OTk4LCJzdWIiOiI2YTlkYTE1MTRlMDM3NWQwZTMxNDNiYzUiLCJzY29wZXMiOlsiYXBpX3JlYWQiXSwidmVyc2lvbiI6MX0.kQBWipobj_odwvqnx8CIVpQqgqp3XclxBmiFvdgvRSI'
        }
        };

        // console.log('https://api.themoviedb.org/3/search/movie?query='+srchWord+'&include_adult=false&language=en-US&page=1');


        fetch ('https://api.themoviedb.org/3/search/movie?query=' + srchWord + '&include_adult=false&language=en-US&page=1', options)
        .then(res => res.json())
        .then(res => console.log(res))
        .catch(err => console.error(err));

            });
</script>
</html>