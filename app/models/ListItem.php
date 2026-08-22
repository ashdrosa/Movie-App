<?php


    class ListItem extends \DB\Cortex {

            protected   
                $fieldConf = [

                    'movie' => [
                        'type' => \DB\SQL\Schema::DT_INT,
                        'nullable' => false

                    ],
                    
                    'movie_list' => [

                        'belongs-to-one' => '\MovieList'
                    ],

                 ];

protected 
$db = 'DB';
protected 
$table = 'list_items';
protected 
$primary = 'id';    // name of the primary key (auto-created), default: id

}