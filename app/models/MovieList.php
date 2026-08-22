<?php

namespace Model;

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

}