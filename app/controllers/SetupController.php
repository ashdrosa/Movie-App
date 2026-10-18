<?php

class SetupController {

    function setupDB (){

        User::setup();
        Review::setup();
        Rating::setup();
        MovieList::setup();
        MovieListItem::setup();



        echo 'SETUP THESE BIG DBs';

    }


}






