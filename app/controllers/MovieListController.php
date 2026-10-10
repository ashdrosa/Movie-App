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
    }

