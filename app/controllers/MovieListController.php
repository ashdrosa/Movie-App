<?php

class MovieListController {

    //Create
        function createMovieList(){
             $f3= \Base::instance();

             $movie_list= new MovieList;
            $movie_list->list_name=$f3->get('POST.list_name');
            $movie_list->list_name=$f3->get('SESSION.user_id');
    
        }





}






