<?php

class SetupController {

    function setupDB (){

        User::setup();
        Review::setup();
        Rating::setup();
        MovieList::setup();
        ListItem::setup();



        echo 'SETUP THESE BIG DBs';

    }


}






