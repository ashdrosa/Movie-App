<?php

namespace Model;

class Review extends \DB\Cortex {
   
    protected 
        $fieldConf = [
            'user' => [
                'belongs-to-one' => '\User',   

            ],

            'movie' => [
                
                'type' => \DB\SQL\Schema::DT_INT,
                'nullable' => false,
            ],

            'user_review' => [
                
                'type' => \DB\SQL\Schema::DT_TEXT,
                'nullable' => false,

            ],

             'review_date' => [
                
                'type' => \DB\SQL\Schema::DT_DATETIME,
                'nullable' => false,

            ],

        ],


    $db = 'DB',
    $table = 'reviews',
    $primary = 'id';    // name of the primary key (auto-created), default: id


}