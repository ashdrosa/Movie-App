<?php



class MovieList extends \DB\Cortex {

    protected 
        $fieldConf = [

            'list_name' => [
                    'type' => \DB\SQL\Schema::DT_VARCHAR256,
                    'nullable' => false
            ],

            'list_owner' => [

                'belongs-to-one' => '\User'

            ]



     ];
protected 
$db = 'DB';
protected 
$table = 'movie_lists';
protected 
$primary = 'id';    // name of the primary key (auto-created), default: id

}