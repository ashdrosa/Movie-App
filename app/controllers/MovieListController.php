<?php

class MovieListController {

    //Create
        function create_movie_list(){
             $f3= \Base::instance();
         

            
            $movie_list= new MovieList;
            $movie_list->list_name=$f3->get('POST.list_name');
            $movie_list->list_owner=$f3->get('SESSION.user_id');           

         if($movie_list->save()) {
                http_response_code(200);
                echo json_encode([
                'success'=> true,
                'message' => 'MOVIE LIST CREATED SUCCESSFULLY'
            ]); 
        } else {
            http_response_code(500);
            echo json_encode([
                'success'=> false,
                'message' => 'FAILED TO CREATE MOVIE LIST'
            ]);
        }

        }




        function add_movie_to_movie_list () {
             $f3= \Base::instance();
             
             $movie_list = new MovieList;
             $movie_list_item = new MovieListItem;
             $movie_list_id = $f3->get('PARAMS.movieListId');

            $movie_list->load(["id=?" , $movie_list_id ]);

             if($movie_list->valid()) {
                $movie_list_item->movie_list = $f3->get('POST.movie_list');
                $movie_list_item->movie = $f3->get('POST.movie_id');

                if($movie_list_item -> save()) {
                    
                 http_response_code(200);
                echo json_encode([
                'success'=> true,
                'message' => 'ADDED TO MOVIE LIST'
               ]);

                } else {
                    http_response_code(500);
                    echo json_encode([
                        'success' => false,
                        'message' => 'Unable to save Movie List Item'

                    ]);
                }
                } else {
                http_response_code(404);
                echo json_encode([
                    'success'=> false,
                    'message' => 'Non-existent movie list'
                ]);}
             

        }
    }

