<?php


class Rating extends \DB\Cortex {
   
    protected 
        $fieldConf = [
            'user' => [
                'belongs-to-one' => '\User',   

            ],

            'movie' => [
                
                'type' => \DB\SQL\Schema::DT_INT,
                'nullable' => false,
            ],

            'user_rating' => [
                
                'type' => \DB\SQL\Schema::DT_DECIMAL,
                'nullable' => false,

            ],


        ];

protected 
    $db = 'DB';
protected 
    $table = 'ratings';
protected 
    $primary = 'id';    // name of the primary key (auto-created), default: id


}