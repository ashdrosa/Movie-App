<?php

namespace Model;

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
    }